
{{-- foreach($all as $users){
    echo $users->fullname ."<br>";
} --}}

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registeration</title>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br>
        @endif

        @if (\Session::has('success'))
        <div>
            <p>{{ \Session::get('success')}}</p>
        </div>
        @endif

	<form action={{'validateForm'}} method="post" enctype="multipart/form-data" id="registerForm">
        {{ csrf_field() }}

        <h3>Registeration Form</h3>

		<div id="first">
			<input type="text" name="fullname" placeholder="fullname" id="firstName">
		</div>

		<div id="second">
			<input type="text" name="username" placeholder="username" id="lastName">
        </div>

        <div >
			<input type="text" name="phonenumber" placeholder="Phone number" id="phone">

		</div>

		<div id="third">
			<input type="text" name="email" placeholder="Email address" id="email">

		</div>

		<div id="forth">
			<input type="text" name="password" placeholder="Password" id="passWord">

		</div>
		<div id="fifth">
			<input type="text" name="Confirm" placeholder="Confirm" id="confirm">

		</div>

		<div id="seventh">
			<input type="submit" value="Sign Up" id="signUp">
		</div>

	</form>
	<form action="login.php">
		<div>
			<p>Already have an account?
				<input type="submit" name="SignIn" value="Sign in" id="signIn">
			</p>
		</div>
	</form>
</body>

</html>
