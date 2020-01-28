@extends('layouts.master')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
                        <h2>ورود به ای-شاپر</h2>
                        @if (\Session::has('success'))
                            <div>
                                <p>{{ \Session::get('success')}}</p>
                            </div>
                        @endif
                        <form action="{{'checkLoginInputs'}}" method="post">
                            {{ csrf_field() }}
							<input type="text" name="username" placeholder="نام کاربری " />
							<input type="password" name="password" placeholder=" کلمه عبور " />
							<span>
								<input type="checkbox" class="checkbox">
								مرا به خاطر نگه دار.
							</span>
							<button type="submit" class="btn btn-default">ورود</button>
                        </form>
                        <br><br>
                        <p>کابر جدید هستید؟
                            <a href="{{'/register'}}"> ثبت نام </a>
                        </p>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    @endsection
</body>
</html>
