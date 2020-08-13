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
                <th>Author Name</th>
                <th>Category Name</th>
                <th>ISBN Number</th>
                <th>Edition</th>
                <th>Volume</th>
                <th>publisher Name</th>
                <th>Book Short Description</th>
                <th>Upload File</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookLists as $bookList)
            <tr>
                <th scope="row">{{$bookList->id}}</th>
                <td>{{$bookList->entryType}}</td>
                <td>{{$bookList->bookName}}</td>
                <td>{{$bookList->authorName}}</td>
                <td>{{$bookList->categoryName}}</td>
                <td>{{$bookList->isbnNumber}}</td>
                <td>{{$bookList->edition}}</td>
                <td>{{$bookList->volume}}</td>
                <td>{{$bookList->publisherName}}</td>
                <td>{{strip_tags($bookList->bookShortDescription)}}</td>
                <td>{{strip_tags($bookList->uploadFile)}}</td>
                <td>{{$bookList->publicationStatus ==1 ? 'Published': 'Unpublished'}}</td>
                <td>
                    <a href="{{ URL('/bookList/view/'.$bookList->id)}}" class="btn btn-info" title="Book List View">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                    <a href="{{ URL('/bookList/edit/'.$bookList->id)}}" class="btn btn-success" title="Book List Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a> 
                    <a href="{{ URL('/bookList/delete/'.$bookList->id)}}" class="btn btn-danger" title="Book List Delete" onclick="return confirm('Are you sur to delete this');">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection