@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( ['url'=>'bookList/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!}
            <div class="form-group">
                <label for="exampleInputEmail1">Entry Type</label>
                <input type="text" class="form-control" name="entryType">
                <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Book Name</label>
                <input type="text" class="form-control" name="bookName">
                <span class="text-danger">{{$errors->has('bookName')? $errors->first('bookName') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author Name</label>
                <input type="text" class="form-control" name="authorName">
                <span class="text-danger">{{$errors->has('authorName')? $errors->first('authorName') :'' }}</span>
            </div>
            <div class="form-group">
                <label class="control-label">Book Category Name </label>
                <select class="form-control" name="categoryId">
                    <option>------Select Book Category------</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ISBN Number</label>
                <input type="text" class="form-control" name="isbnNumber">
                <span class="text-danger">{{$errors->has('isbnNumber')? $errors->first('isbnNumber') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Edition</label>
                <input type="text" class="form-control" name="edition">
                <span class="text-danger">{{$errors->has('edition')? $errors->first('edition') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Volume</label>
                <input type="text" class="form-control" name="volume">
                <span class="text-danger">{{$errors->has('volume')? $errors->first('volume') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Publisher Name</label>
                <input type="text" class="form-control" name="publisherName">
                <span class="text-danger">{{$errors->has('publisherName')? $errors->first('publisherName') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Books Short Description (Max-length:)</label>
                    <textarea class="form-control" name="bookShortDescription" rows="10"></textarea>
                <span class="text-danger">{{$errors->has('bookShortDescription')? $errors->first('bookShortDescription') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="upload_file">Upload File (Pdf)</label>
                <input class="form-control" type="file" name="uploadFile" id="uploadFile">
                <span class="text-danger">{{$errors->has('uploadFile')? $errors->first('uploadFile') :'' }}</span>
            </div>
            <div class="form-group">
                <label class="control-label">Publication Status</label>
                <select class="form-control" name="publicationStatus">
                    <option>---Select publication status---</option>
                    <option value="1">Published</option>
                    <option value="0">unpublished</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Book List</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>
@endsection