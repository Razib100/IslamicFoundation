@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( ['url'=>'category/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!}
            <div class="form-group">
                <label for="exampleInputEmail1">Entry Type</label>
                <input type="text" class="form-control" name="entryType">
                <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" name="categoryName">
                <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Short Description</label>
                    <textarea class="form-control" name="shortDescription" rows="10"></textarea>
                <span class="text-danger">{{$errors->has('shortDescription')? $errors->first('shortDescription') :'' }}</span>
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