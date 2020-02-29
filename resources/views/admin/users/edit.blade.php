@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-4">ویرایش کاربر</h3>
    <form action="{{ route('users.update', $selectedUser->id) }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="form-group">
            <label for="fullname">نام کامل</label>
            <input type="text" id="fullname" name="fullname" class="form-control"
              maxlength="50" value="{{$selectedUser->fullname}}" />
              @if ($errors->has('fullname'))
              <div class="text-danger">
                  {{$errors->first('fullname') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" id="username" name="username" class="form-control"
              maxlength="50" value="{{$selectedUser->username}}" />
              @if ($errors->has('username'))
              <div class="text-danger">
                  {{$errors->first('username') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="phonenumber">شماره تلفن</label>
            <input type="text" id="phonenumber" name="phonenumber" class="form-control"
              maxlength="50" value="{{$selectedUser->phonenumber}}" />
              @if ($errors->has('phonenumber'))
              <div class="text-danger">
                  {{$errors->first('phonenumber') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" class="form-control"
              maxlength="50" value="{{$selectedUser->email}}" />
              @if ($errors->has('email'))
              <div class="text-danger">
                  {{$errors->first('email') }}
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
        <input type="submit" value="به روز رسانی" class="btn btn-success">
    </form>
</div>
@endsection



        {{-- <input type="submit" value="به روز رسانی" class="btn btn-success"> --}}


                        {{-- <form action={{URL("checkUpdateInputs")}} method="POST">
                            {{ csrf_field() }}

                            <br><br>
                            <input type="hidden" name="id" value="{{ $selectedUser->id}}"> --}}

                            {{-- <label for="fullname">نام کامل</label><br>
                            <input type="text" value="{{$selectedUser->fullname}}" name="fullname"/>
                            @if ($errors->has('fullname'))
                            <div class="text-danger">
                                {{$errors->first('fullname') }}
                            </div> --}}
                            {{-- @endif
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
                            <br><br> --}}
                            {{-- <label for="email">ایمیل</label><br>
                            <input type="email" value="{{$selectedUser->email}}" name="email"/>
                            @if ($errors->has('email'))
                            <div class="text-danger">
                                {{$errors->first('email') }}
                            </div>
                            @endif --}}

                            {{-- <input type="checkbox" name="gender" value="1" style="height:15px;width:15px;display:inline"> مرد
                            <input type="checkbox" name="gender" value="2"style="height:15px;width:15px;display:inline; margin-right:25px"> زن
                            @if ($errors->has('gender'))
                            <div class="text-danger">
                                {{$errors->first('gender') }}
                            </div>
                            @endif --}}

                            {{-- <br><br>
                            <input type="submit" class="btn btn-default" value="به روز زسانی" style="background-color: yellowgreen">

                        </form>
					</div>
				</div>
			</div>
		</div>
	</section> --}}



