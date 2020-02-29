@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-5">افزودن محصول جدید</h3>

    <form action="{{route('products.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="product_name">نام محصول</label>
            <input type="text" id="product_name" name="name" class="form-control" maxlength="20">
            @if ($errors->has('name'))
              <div class="text-danger">
                  {{$errors->first('name') }}
              </div>
            @endif
        </div>
        {{-- <div class="form-group">
            <label for="img">تصویر محصول</label>
            <input type="text" id="img" name="img" class="form-control">
        </div> --}}
        <div class="form-group">
            <label for="description">توضیحات</label>
            <input type="text" id="description" name="description" class="form-control" maxlength="60">
            @if ($errors->has('description'))
              <div class="text-danger">
                  {{$errors->first('description') }}
              </div>
            @endif
        </div>
        {{-- <div class="form-group">
            <label for="category_id">شناسه دسته بندی محصول</label>
            <input type="number" id="category_id" name="category_id" class="form-control">
        </div> --}}
        <div class="form-group">
            <label for="price">قیمت</label>
            <input type="number" id="price" name="price" class="form-control">
            @if ($errors->has('price'))
              <div class="text-danger">
                  {{$errors->first('price') }}
              </div>
            @endif
        </div>
        <div class="form-group">
            <label for="number">تعداد</label>
            <input type="number" id="number" name="number" class="form-control">
            @if ($errors->has('number'))
              <div class="text-danger">
                  {{$errors->first('number') }}
              </div>
            @endif
        </div>
        {{-- <div class="form-group">
            <label for="discount_id">تخفیف</label>
            <input type="number" id="discount_id" name="discount_id" class="form-control">
        </div> --}}
        <input type="submit" value="اضافه شود" class="btn btn-success">
    </form>
</div>
@endsection
