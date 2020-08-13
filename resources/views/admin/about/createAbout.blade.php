@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( ['url'=>'about/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!}
            <div class="form-group">
                <label for="exampleInputEmail1">Entry Type</label>
                <input type="text" class="form-control" name="entryType">
                <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">About Short Description</label>
                    <textarea class="form-control" name="aboutDescription" rows="10"></textarea>
                <span class="text-danger">{{$errors->has('aboutDescription')? $errors->first('aboutDescription') :'' }}</span>
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
                <button type="submit" name="btn" class="btn btn-primary btn-block">Save About</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>
@endsection