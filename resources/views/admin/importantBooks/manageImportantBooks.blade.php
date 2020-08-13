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
                <th>Book Name</th>
                <th>Writer Name</th>
                <th>Book Short Description</th>
                <th>Book Image</th>
                <th>Upload File</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($importantBooks as $importantBook)
            <tr>
                <th scope="row">{{$importantBook->id}}</th>
                <td>{{$importantBook->entryType}}</td>
                <td>{{$importantBook->bookName}}</td>
                <td>{{$importantBook->writerName}}</td>
                <td>{{strip_tags($importantBook->bookShortDescription)}}</td>
                <td><img src="{{asset($importantBook->bookImage)}}" width="100px" height="100px"></td>
                <td>{{strip_tags($importantBook->uploadFile)}}</td>
                <td>{{$importantBook->publicationStatus ==1 ? 'Published': 'Unpublished'}}</td>
                <td>
                    <a href="{{ URL('/importantBooks/edit/'.$importantBook->id)}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a> 
                    <a href="{{ URL('/importantBooks/delete/'.$importantBook->id)}}" class="btn btn-danger" onclick="return confirm('Are you sur to delete this');">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$importantBooks->links()}}
@endsection