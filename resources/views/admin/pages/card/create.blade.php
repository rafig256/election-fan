@extends('admin.layout.master')
@section('title','ایجاد کارت جدید')
@section('content')
    <div class="raf-main-box">
        <form name="add_card" action="{{route('card.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label class="mb-1" for="name">نام <span class="text-danger">*</span> </label>
                    <input name="name" id="name" type="text" class="form-control" value="{{old('name')}}" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="mb-1" for="last_name">فامیل <span class="text-danger">*</span></label>
                    <input name="last_name" id="last_name" type="text" class="form-control" value="{{old('last_name')}}" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="mb-1" for="national_code">کد ملی <span class="text-danger">*</span></label>
                    <input name="national_code" id="national_code" type="text" class="form-control"value="{{old('national_code')}}" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="mb-1" for="phone">موبایل <span class="text-danger">*</span></label>
                    <input name="phone" id="phone" type="text" class="form-control"value="{{old('phone')}}" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="mb-1" for="location">موقعیت</label>
                    <input name="location" id="location" type="text" class="form-control">
                </div>

                <div class="col-6 mb-3">
                    <label class="mb-1" for="sex">جنسیت</label>
                    <div>
                        <input name="sex" id="male" type="radio" class="" value="male" aria-label="male" checked> مرد
                        <input name="sex" id="female" type="radio" class="" value="female" aria-label="female"> زن
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <label class="mb-1" for="committee">کمیته</label>
                    <input name="committee" id="committee" type="text" class="form-control" value="{{old('committee')}}">
                </div>

                <div class="col-6 mb-3">
                    <label class="mb-1" for="image">تصویر</label>
                    <input name="image" id="image" type="file" class="form-control">
                </div>

                <div class="col-6">
                    <button class="btn btn-sm btn-success" type="submit" name="save">ذخیره</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-sm btn-warning" type="submit" name="save_new">ذخیره و جدید</button>
                </div>
            </div>
        </form>
    </div>
@endsection
