<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show($id)
    {
        $card = Card::find($id);
        $card->national_code = $this->maskNationalCode($card->national_code);
        return view('front.pages.card.show', compact('card'));
    }

    function maskNationalCode($nationalCode)
    {
        // اطمینان از اینکه national_code ده رقمی است
        if (strlen($nationalCode) == 10) {
            // جایگزینی چهار رقم وسط با ستاره
            return substr($nationalCode, 0, 3) . '****' . substr($nationalCode, 7);
        }
        return $nationalCode; // در صورتی که national_code ده رقمی نباشد، بدون تغییر برگردانده می‌شود
    }
}
