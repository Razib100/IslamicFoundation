@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <form action="{{url('/about/update',$aboutById->id)}}" method="post" name="editAboutForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
<!--            {!! Form::open( ['url'=>'category/update/.$category->id' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editCategoryForm'] )!!}-->
            <div class="form-group">
                <label for="exampleInputEmail1">Entry Type</label>
                <input type="text" value="{{$aboutById->entryType}}" class="form-control" name="entryType">
                <input type="hidden" value="{{$aboutById->id}}" class="form-control" name="aboutById">
                <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">About Description</label>
                <textarea class="form-control" name="aboutDescription" rows="10">{{strip_tags($aboutById->aboutDescription)}}</textarea>
                <input type="hidden" value="{{$aboutById->id}}" class="form-control" name="aboutById">
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
                <button type="submit" name="btn" class="btn btn-primary btn-block">Update About</button>
            </div>
            </form>
<!--            {!! Form::close()!!}-->
        </div>
    </div>
</div>
<script>
    document.forms['editAboutForm'].elements['publicationStatus'].value={{$aboutById->publicationStatus}}
</script>
@endsection