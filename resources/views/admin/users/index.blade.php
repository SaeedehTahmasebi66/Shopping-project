@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="row my-4" style="margin-right:270px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h3>اعضا</h3>
        </div>
        <div class="pull-left pl-5" style="text-align: left;">
            <a class="btn btn-success px-4" href="{{ route('users.create') }}">ثبت عضو جدید</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert text-success" style="margin-right:230px;">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover text-center table-responsive small" style="margin-right:270px;">
        <thead>
            <tr>
                <th class="px-1">شناسه شخص</th>
                <th class="px-1">نام کامل</th>
                <th class="px-1">نام کاربری</th>
                <th class="px-1">شماره تلفن</th>
                <th class="px-1">ایمیل</th>
                <th class="px-1">جنسیت</th>
                <th class="px-1">تاریخ ثبت نام</th>
                <th class="px-1">تاریخ اخرین لاگین</th>
                <th class="px-1">ویرایش</th>
                <th class="px-1">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allUsers as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->phonenumber}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->registerdate}}</td>
                <td>{{$user->logdate}}</td>
                <td>
                    <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-primary btn-sm">ویرایش</a>
                </td>
                <td>
                    <form action="{{ route('users.destroy', $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

