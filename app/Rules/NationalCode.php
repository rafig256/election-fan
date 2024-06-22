<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use phpDocumentor\Reflection\Types\False_;

class NationalCode implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!preg_match('/^[0-9]{10}$/',$value))
            //تعداد ارقام صحیح نیست
            $fail(trans('تعداد ارقام صحیح نیست'));
        for($i=0;$i<10;$i++)
            if(preg_match('/^'.$i.'{10}$/',$value))
                //ارقام یکسان استفاده شده است
                $fail(trans('کد ملی با ارقام یکسان استفاده شده است'));
        for($i=0,$sum=0;$i<9;$i++)
            $sum+=((10-$i)*intval(substr($value, $i,1)));
        $ret=$sum%11;
        $parity=intval(substr($value, 9,1));
        if(!($ret<2 && $ret==$parity) && !($ret>=2 && $ret==11-$parity))
            //طبق الگوی کد ملی نیست
            $fail('کد ملی صحیح نیست');
    }
}
