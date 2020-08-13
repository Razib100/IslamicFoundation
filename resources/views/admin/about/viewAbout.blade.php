@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <tr>
            <th>About Id:</th>
            <th>{{$viewAboutById->id}}</th>
        </tr>
        <tr>
            <th>Entry Type:</th>
            <th>{{$viewAboutById->entryType}}</th>
        </tr>
        <tr>
            <th>About Description:</th>
            <th>{{strip_tags($viewAboutById->aboutDescription)}}</th>
        </tr>
        <tr>
            <th>Publication Status:</th>
            <th>{{$viewAboutById->publicationStatus}}</th>
        </tr>
    </table>
<br>
<a href="{{url('/about/manage')}}"><button class="btn btn-danger">Back</button></a>   
@endsection