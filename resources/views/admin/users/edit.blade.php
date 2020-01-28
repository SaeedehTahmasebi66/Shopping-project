@extends('admin.adminLayout.adminMaster')
@section('content')

	<section id="form" style="margin-right:350px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">

                    {{-- @if (\Session::has('success'))
                    <div>
                        <p>{{ \Session::get('success')}}</p>
                    </div>
                    @endif --}}

					<div class="signup-form"><!--sign up form-->
						<h2>ویرایش کاربر</h2>
                        <form action={{URL("checkUpdateInputs")}} method="POST">
                            {{ csrf_field() }}

                            <br><br>
                            <input type="hidden" name="id" value="{{ $selectedUser->id}}">

                            <label for="fullname">نام کامل</label><br>
                            <input type="text" value="{{$selectedUser->fullname}}" name="fullname"/>
                            @if ($errors->has('fullname'))
                            <div class="text-danger">
                                {{$errors->first('fullname') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="username">نام کاربری</label><br>
                            <input type="text" value="{{$selectedUser->username}}" name="username"/>
                            @if ($errors->has('username'))
                            <div class="text-danger">
                                {{$errors->first('username') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="phonenumber">شماره تلفن</label><br>
                            <input type="number" value="{{$selectedUser->phonenumber}}" name="phonenumber"/>
                            @if ($errors->has('phonenumber'))
                            <div class="text-danger">
                                {{$errors->first('phonenumber') }}
                            </div>
                            @endif
                            <br><br>
                            <label for="email">ایمیل</label><br>
                            <input type="email" value="{{$selectedUser->email}}" name="email"/>
                            @if ($errors->has('email'))
                            <div class="text-danger">
                                {{$errors->first('email') }}
                            </div>
                            @endif

                            {{-- <input type="checkbox" name="gender" value="1" style="height:15px;width:15px;display:inline"> مرد
                            <input type="checkbox" name="gender" value="2"style="height:15px;width:15px;display:inline; margin-right:25px"> زن
                            @if ($errors->has('gender'))
                            <div class="text-danger">
                                {{$errors->first('gender') }}
                            </div>
                            @endif --}}

                            <br><br>
                            <input type="submit" class="btn btn-default" value="به روز زسانی" style="background-color: yellowgreen">

                        </form>
                        {{-- <br><br>
                        <p>عضو ای شاپر هستید؟
                            <a href="{{'login'}}"> وارد شوید</a>
                        </p> --}}
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    @endsection

