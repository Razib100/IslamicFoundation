@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allSubscribes as $allSubscribe)
            <tr>
                <th scope="row">{{$allSubscribe->id}}</th>
                <td>{{$allSubscribe->name}}</td>
                <td>{{$allSubscribe->email}}</td>
                <td>
                    <a href="{{ URL('/newsLetter/view/'.$allSubscribe->id)}}" class="btn btn-info" title="About View">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$allSubscribes->links()}}
@endsection