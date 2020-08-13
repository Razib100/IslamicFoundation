@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Entry Type</th>
                <th>About Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <th scope="row">{{$about->id}}</th>
                <td>{{$about->entryType}}</td>
                <td>{{strip_tags($about->aboutDescription)}}</td>
                <td>{{$about->publicationStatus ==1 ? 'Published': 'Unpublished'}}</td>
                <td>
                    <a href="{{ URL('/about/view/'.$about->id)}}" class="btn btn-info" title="About View">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                    <a href="{{ URL('/about/edit/'.$about->id)}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a> 
                    <a href="{{ URL('/about/delete/'.$about->id)}}" class="btn btn-danger" onclick="return confirm('Are you sur to delete this');">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$abouts->links()}}
@endsection