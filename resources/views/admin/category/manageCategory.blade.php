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
                <th>Category Name</th>
                <th>Category Short Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->entryType}}</td>
                <td>{{$category->categoryName}}</td>
                <td>{{strip_tags($category->shortDescription)}}</td>
                <td>{{$category->publicationStatus ==1 ? 'Published': 'Unpublished'}}</td>
                <td>
                    <a href="{{ URL('/category/edit/'.$category->id)}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a> 
                    <a href="{{ URL('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are you sur to delete this');">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
@endsection