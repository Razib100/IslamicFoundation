@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( ['url'=>'importantBooks/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!}
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
                <label for="exampleInputEmail1">Writer Name</label>
                <input type="text" class="form-control" name="writerName">
                <span class="text-danger">{{$errors->has('writerName')? $errors->first('writerName') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Books Short Description (Max-length:)</label>
                    <textarea class="form-control" name="bookShortDescription" rows="10"></textarea>
                <span class="text-danger">{{$errors->has('bookShortDescription')? $errors->first('bookShortDescription') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Book Image (500*480)</label>
                <input type="file" accept="image/*" name="bookImage" id="sliderImage">
                <span class="text-danger">{{$errors->has('bookImage')? $errors->first('bookImage') :'' }}</span>
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
                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Category</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>
@endsection