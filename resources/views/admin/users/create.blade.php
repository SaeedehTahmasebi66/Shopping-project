@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-4">ثبت عضو جدید</h3>
    <form action="{{route('users.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="fullname">نام کامل</label>
            <input type="text" id="fullname" name="fullname" class="form-control" maxlength="50" />
              @if ($errors->has('fullname'))
              <div class="text-danger">
                  {{$errors->first('fullname') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" id="username" name="username" class="form-control" maxlength="50" />
              @if ($errors->has('username'))
              <div class="text-danger">
                  {{$errors->first('username') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="phonenumber">شماره تلفن</label>
            <input type="text" id="phonenumber" name="phonenumber" class="form-control" maxlength="50"/>
              @if ($errors->has('phonenumber'))
              <div class="text-danger">
                  {{$errors->first('phonenumber') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" class="form-control" maxlength="50" />
              @if ($errors->has('email'))
              <div class="text-danger">
                  {{$errors->first('email') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="password">پسورد</label>
            <input type="password" id="password" name="password" class="form-control" maxlength="50" />
              @if ($errors->has('password'))
              <div class="text-danger">
                  {{$errors->first('password') }}
              </div>
              @endif
        </div>
        <div class="form-group">
             {{-- <input type="checkbox" name="gender" value="1" style="height:15px;width:15px;display:inline"> مرد
                <input type="checkbox" name="gender" value="2"style="height:15px;width:15px;display:inline; margin-right:25px"> زن
                @if ($errors->has('gender'))
                <div class="text-danger">
                    {{$errors->first('gender') }}
                </div>
                @endif --}}
        </div>
        <input type="submit" value="ثبت شود" class="btn btn-success">
    </form>
</div>
@endsection
