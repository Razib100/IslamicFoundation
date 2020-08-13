@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <form action="{{url('/category/update',$categoryById->id)}}" method="post" name="editCategoryForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
<!--            {!! Form::open( ['url'=>'category/update/.$category->id' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editCategoryForm'] )!!}-->
            <div class="form-group">
                <label for="exampleInputEmail1">Entry Type</label>
                <input type="text" value="{{$categoryById->entryType}}" class="form-control" name="entryType">
                <input type="hidden" value="{{$categoryById->id}}" class="form-control" name="categoryId">
                <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" value="{{$categoryById->categoryName}}" class="form-control" name="categoryName">
                <input type="hidden" value="{{$categoryById->id}}" class="form-control" name="categoryId">
                <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName') :'' }}</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Short Description</label>
                <textarea class="form-control" name="shortDescription" rows="10">{{strip_tags($categoryById->shortDescription)}}</textarea>
                <input type="hidden" value="{{$categoryById->id}}" class="form-control" name="categoryId">
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
                <button type="submit" name="btn" class="btn btn-primary btn-block">Update Category</button>
            </div>
            </form>
<!--            {!! Form::close()!!}-->
        </div>
    </div>
</div>
<script>
    document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}}
</script>
@endsection