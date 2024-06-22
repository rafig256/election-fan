<?php

namespace App\Http\Requests;

use App\Rules\NationalCode;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class saveCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'national_code' => ['required','unique:cards',new NationalCode()],
            'phone'=>['nullable' , 'regex:^(9|09)\d{9}$^','unique:cards,phone'],
            'location' => 'nullable|string',
            'sex' => "in:male,female",
            'committee' => 'nullable|string',
            'image' => 'file|max:1024|mimes:jpeg,png,jpg,bmp',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'درج نام الزایمی است',
            'name.string' => 'نام باید به صورت کاراکتر های حروفی باشد',
            'last_name.required' => 'درج نام خانوادگی الزامی است',
            'phone.regex' => 'لطفا یک شماره موبایل صحیح وارد کنید',
            'phone.unique' => 'این شماره موبایل قبلا در پایگاه داده ثبت شده است',
            'national_code.required' => 'کد ملی الزامی است',
            'national_code.unique' => 'این کد ملی قبلا ثبت نام شده است',
            'national_code.NationalCode' => 'کد ملی صحیح نیست',
        ];
    }
}
