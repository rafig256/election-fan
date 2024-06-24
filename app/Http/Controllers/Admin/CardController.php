<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\saveCardRequest;
use App\Models\Card;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class CardController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return view('admin.pages.card.index' ,compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(saveCardRequest $request)
    {
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
            'status' => true,
        ]);
        if ($card){
            if ($request->has('save')){
                toastr()->success('با موفقیت ذخیره شد');
                return to_route('card.index');
            }elseif ($request->has('save_new')){
                toastr()->success('با موفقیت ذخیره شد');
                return to_route('card.create');
            }
        }else{
            toastr()->error('خطا در ذخیره اطلاعات');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
    }
}
