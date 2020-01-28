@extends('admin.adminLayout.adminMaster')
@section('content')

	<section id="form" style="margin-right:350px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">

					<div class="signup-form"><!--sign up form-->
						<h2>ویرایش کالا</h2>
                        <form action={{URL("product/checkUpdatedProduct")}} method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{ $selectedProduct->id}}">
                            <br>
                            <label for="name">نام محصول</label><br>
                            <input type="text" value="{{$selectedProduct->name}}" name="name"/>
                            @if ($errors->has('name'))
                            <div class="text-danger">
                                {{$errors->first('name') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="description">توضیحات</label><br>
                            <input type="text" value="{{$selectedProduct->description}}" name="description"/>
                            @if ($errors->has('description'))
                            <div class="text-danger">
                                {{$errors->first('description') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="categoryid">شناسه گروه</label><br>
                            <input type="number" value="{{$selectedProduct->categoryid}}" name="categoryid"/>
                            @if ($errors->has('categoryid'))
                            <div class="text-danger">
                                {{$errors->first('categoryid') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="price">قیمت</label><br>
                            <input type="text" value="{{$selectedProduct->price}}" name="price"/>
                            @if ($errors->has('price'))
                            <div class="text-danger">
                                {{$errors->first('price') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="number">تعداد</label><br>
                            <input type="number" value="{{$selectedProduct->number}}" name="number"/>
                            @if ($errors->has('number'))
                            <div class="text-danger">
                                {{$errors->first('number') }}
                            </div>
                            @endif

                            {{-- <input type="number" value="{{$selectedProduct->discountid}}" name="discountid"/>
                            @if ($errors->has('discountid'))
                            <div class="text-danger">
                                {{$errors->first('discountid') }}
                            </div>
                            @endif --}}


                            <br><br>
                            <input type="submit" class="btn btn-default" value="به روز زسانی" style="background-color: green">

                        </form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->

    @endsection

