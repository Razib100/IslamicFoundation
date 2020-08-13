@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allMessages as $allMessage)
            <tr>
                <th scope="row">{{$allMessage->id}}</th>
                <td>{{$allMessage->firstName}}</td>
                <td>{{$allMessage->lastName}}</td>
                <td>{{$allMessage->email}}</td>
                <td>{{$allMessage->phoneNumber}}</td>
                <td>{{$allMessage->message}}</td>
                <td>
                    <a href="{{ URL('/feedBack/view/'.$allMessage->id)}}" class="btn btn-info" title="About View">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$allMessages->links()}}
@endsection