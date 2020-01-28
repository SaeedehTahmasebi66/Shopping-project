@extends('admin.adminLayout.adminMaster')
@section('content')

    <table border="1" style="border-collapse:collapse; text-align:center;width:880px; height:400px;margin-right:350px">
        <thead>
            <th>ID</th>
            <th>Full Name</th>
            <th>User Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Register Date</th>
            <th>Login date</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($all as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->phonenumber}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->registerdate}}</td>
                <td>{{$user->logdate}}</td>
                {{-- <td><a href={{URL("/edit/$user->id")}}>Edit</a></td> --}}
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                        <a href="/edit/{{$user["id"]}}" class="btn btn-primary btn-xs" >
                        <span class="glyphicon glyphicon-pencil"></span>Edit
                        </a>
                    </p>
                </td>
                {{-- <td><a href={{URL("/delete/$user->id")}}>Delete</a></td> --}}
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                    <a href="/delete/{{$user["id"]}}" class="btn btn-danger btn-xs" >
                        <span class="glyphicon glyphicon-trash"></span>Delete</a>
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection

