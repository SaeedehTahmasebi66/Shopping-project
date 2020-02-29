@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-4"> ویرایش محصول</h3>
    <form action="{{ route('products.update', $selectedProduct->id) }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">نام محصول</label><br>
            <input type="text" value="{{$selectedProduct->name}}" class="form-control"
            maxlength="20" id="name" name="name"/>
            @if ($errors->has('name'))
            <div class="text-danger">
                {{$errors->first('name') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="description">توضیحات</label><br>
            <input type="text" value="{{$selectedProduct->description}}" class="form-control"
            maxlength="100" id="description" name="description"/>
            @if ($errors->has('description'))
            <div class="text-danger">
                {{$errors->first('description') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="price">قیمت</label><br>
            <input type="text" value="{{$selectedProduct->price}}" class="form-control"
            id="price" name="price"/>
            @if ($errors->has('price'))
            <div class="text-danger">
                {{$errors->first('price') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="number">تعداد</label><br>
            <input type="number" value="{{$selectedProduct->number}}" class="form-control"
            id="number" name="number"/>
            @if ($errors->has('number'))
            <div class="text-danger">
                {{$errors->first('number') }}
            </div>
            @endif
        </div>
        <input type="submit" value="به روز رسانی" class="btn btn-success">
    </form>
</div>
@endsection


