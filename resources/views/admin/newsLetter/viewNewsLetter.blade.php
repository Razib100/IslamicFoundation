@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <tr>
            <th>NewsLetter Id:</th>
            <th>{{$viewSubscribeById->id}}</th>
        </tr>
        <tr>
            <th>Name:</th>
            <th>{{$viewSubscribeById->name}}</th>
        </tr>
        <tr>
            <th>Email:</th>
            <th>{{$viewSubscribeById->email}}</th>
        </tr>
    </table>
<br>
<a href="{{url('/newsLetter/manage')}}"><button class="btn btn-danger">Back</button></a>   
@endsection