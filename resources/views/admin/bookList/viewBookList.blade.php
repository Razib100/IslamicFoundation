@extends('admin.master')

@section('content')
<hr/>
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Book List Id:</th>
            <th>{{$viewBookListById->id}}</th>
        </tr>
        <tr>
            <th>Book Name:</th>
            <th>{{$viewBookListById->bookName}}</th>
        </tr>
        <tr>
            <th>Author Name:</th>
            <th>{{$viewBookListById->authorName}}</th>
        </tr>
        <tr>
            <th>Book Category Name:</th>
            <th>{{$viewBookListById->categoryName}}</th>
        </tr>
        <tr>
            <th>ISBN Number:</th>
            <th>{{$viewBookListById->isbnNumber}}</th>
        </tr>
        <tr>
            <th>Edition:</th>
            <th>{{$viewBookListById->edition}}</th>
        </tr>
        <tr>
            <th>Volume:</th>
            <th>{{$viewBookListById->volume}}</th>
        </tr>
        <tr>
            <th>Publisher Name:</th>
            <th>{{$viewBookListById->publisherName}}</th>
        </tr>
        <tr>
            <th>Book Short Description:</th>
            <th>{{strip_tags($viewBookListById->bookShortDescription)}}</th>
        </tr>
        <tr>
            <th>Upload File:</th>
            <th>{{$viewBookListById->uploadFile}}</th>
        </tr>
        <tr>
            <th>Publication Status:</th>
            <th>{{$viewBookListById->publicationStatus}}</th>
        </tr>
    </table>
<br>
<a href="{{url('/bookList/manage')}}"><button class="btn btn-danger">Back</button></a>   
@endsection