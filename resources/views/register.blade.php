@extends('layouts.master')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
                    {{-- @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div><br>
                    @endif --}}

                    @if (\Session::has('success'))
                    <div>
                        <p>{{ \Session::get('success')}}</p>
                    </div>
                    @endif
					<div class="signup-form"><!--sign up form-->
						<h2>ثبت نام در ای شاپر</h2>
                        <form action={{'checkRegisterInputs'}} method="post">
                            {{ csrf_field() }}

                            <input type="text" placeholder="نام کامل" name="fullname"/>
                            @if ($errors->has('fullname'))
                            <div class="text-danger">
                                {{$errors->first('fullname') }}
                            </div>
                            @endif

                            <input type="text" placeholder="نام کاربری" name="username"/>
                            @if ($errors->has('username'))
                            <div class="text-danger">
                                {{$errors->first('username') }}
                            </div>
                            @endif

                            <input type="number" placeholder="شماره تلفن" name="phonenumber"/>
                            @if ($errors->has('phonenumber'))
                            <div class="text-danger">
                                {{$errors->first('phonenumber') }}
                            </div>
                            @endif

                            <input type="email" placeholder="آدرس ایمیل" name="email"/>
                            @if ($errors->has('email'))
                            <div class="text-danger">
                                {{$errors->first('email') }}
                            </div>
                            @endif

                            <input type="password" placeholder="کلمه عبور" name="password"/>
                            @if ($errors->has('password'))
                            <div class="text-danger">
                                {{$errors->first('password') }}
                            </div>
                            @endif

                            <input type="checkbox" name="gender" value="2" style="height:15px;width:15px;display:inline"> مرد
                            <input type="checkbox" name="gender" value="1"style="height:15px;width:15px;display:inline; margin-right:25px"> زن
                            @if ($errors->has('gender'))
                            <div class="text-danger">
                                {{$errors->first('gender') }}
                            </div>
                            @endif

                            <input type="submit" class="btn btn-default" value="ثبت نام" style="background-color: orange">

                        </form>
                        <br><br>
                        <p>عضو ای شاپر هستید؟
                            <a href="{{'login'}}"> وارد شوید</a>
                        </p>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    @endsection
</body>
</html>
