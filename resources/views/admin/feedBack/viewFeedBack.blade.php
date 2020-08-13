@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <tr>
            <th>FeedBack Id:</th>
            <th>{{$viewMessageById->id}}</th>
        </tr>
        <tr>
            <th>First Name:</th>
            <th>{{$viewMessageById->firstName}}</th>
        </tr>
        <tr>
            <th>Last Name:</th>
            <th>{{$viewMessageById->lastName}}</th>
        </tr>
        <tr>
            <th>Email:</th>
            <th>{{$viewMessageById->email}}</th>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <th>{{$viewMessageById->phoneNumber}}</th>
        </tr>
        <tr>
            <th>Message:</th>
            <th>{{$viewMessageById->message}}</th>
        </tr>
    </table>
<br>
<a href="{{url('/feedBack/manage')}}"><button class="btn btn-danger">Back</button></a>   
@endsection