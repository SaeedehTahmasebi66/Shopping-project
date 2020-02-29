@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="row my-4" style="margin-right:270px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h3>پیام ها</h3>
        </div>
        <div class="pull-left pl-5" style="text-align: left;">
            <a class="btn btn-success px-4" href="{{ route('comment.create') }}">افزودن پیام</a>
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
                <th class="px-1">شناسه پیام</th>
                <th class="px-1">متن پیام</th>
                <th class="px-1">شناسه فرد ایجاد کننده</th>
                <th class="px-1">تاریخ ایجاد پیام</th>
                <th class="px-1">تایخ بروزرسانی پیام</th>
                <th class="px-1">تاریخ پاک شدن پیام</th>
                <th class="px-1">ویرایش</th>
                <th class="px-1">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allComments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->comment_text}}</td>
                <td>{{$comment->users_id}}</td>
                <td>{{$comment->created_at}}</td>
                <td>{{$comment->updated_at}}</td>
                <td>{{$comment->deleted_at}}</td>
                <td>
                    <a href="{{ route('comment.edit', [$comment->id]) }}" class="btn btn-primary btn-sm">ویرایش</a>
                </td>
                <td>
                    <form action="{{ route('comment.destroy', $comment->id)}}" method="post">
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
