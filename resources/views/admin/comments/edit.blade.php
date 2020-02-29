@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-5"> ویرایش پیام</h3>
    @if ($errors->any())
      <div class="alert text-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('comment.update', $selectedComment->id) }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="comment_text">متن پیام</label>
            <input type="text" id="comment_text" name="comment_text" class="form-control"
              maxlength="60" value="{{$selectedComment->comment_text}}">
        </div>
        <input type="submit" value="به روز رسانی" class="btn btn-success">
    </form>
</div>
@endsection




