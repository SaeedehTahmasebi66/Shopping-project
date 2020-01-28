@extends('admin.adminLayout.adminMaster')
@section('content')
    <table border="1" style="border-collapse:collapse; text-align:center;width:880px; height:400px;margin-right:350px">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>categoryid</th>
            <th>price</th>
            <th>number</th>
            {{-- <th>discountid</th> --}}
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($products as $k=>$v)
            <tr>
            <td>{{$v['id']}}</td>
            <td>{{$v['name']}}</td>
            <td>{{$v['description']}}</td>
            <td>{{$v['categoryid']}}</td>
            <td>{{$v['price']}}</td>
            <td>{{$v['number']}}</td>
            {{-- <td>{{$v['discountid']}}</td> --}}
            <td>
                <p data-placement="top" data-toggle="tooltip" title="Edit">
                    <a href="/product/edit/{{$v["id"]}}" class="btn btn-primary btn-xs" >
                    <span class="glyphicon glyphicon-pencil"></span>Edit
                    </a>
                </p>
            </td>
            <td>
                <p data-placement="top" data-toggle="tooltip" title="Delete">
                <a href="/product/delete/{{$v["id"]}}" class="btn btn-danger btn-xs" >
                    <span class="glyphicon glyphicon-trash"></span>Delete</a>
                </p>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection


