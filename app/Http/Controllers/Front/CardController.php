<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\saveCardRequest;
use App\Models\Card;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class CardController extends Controller
{
    use FileUploadTrait;
    public function show($id)
    {
        list($cardId, $hash) = explode("_", $id);
        $card = Card::query()->where('id', $cardId)->where('hash', $hash)->firstOrFail();
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

    public function create(){
        return view('front.pages.card.create');
    }

    public function store(saveCardRequest $request){
        if ($request->hasFile('image')){
            $imagePath = $this->uploadImage($request , 'image' );
        }
        else{
            $imagePath = NULL;
        }
        $card = Card::query()->create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'national_code' => $request->national_code,
            'phone' => $request->phone,
            'hash' => \Str::random(4),
            'location' => $request->location,
            'sex' => $request->sex,
            'committee' => $request->committee,
            'image' => $imagePath,
            'status' => false,
        ]);
        if ($card){
            $id = $card->id . '_' . $card->hash;
                toastr()->success('با موفقیت ذخیره شد');
                return to_route('client.info', $id);
        }else{
            toastr()->error('خطا در ذخیره اطلاعات');
            return redirect()->back();
        }

    }

    public function info($id){
        $link = url('/')."/card/".$id;
        return view('front.pages.info', compact('link'));
    }
}
