@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <form action="{{url('/importantBooks/update',$importantBookById->id)}}" method="post" name="editImportantBookForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <!--            {!! Form::open( ['url'=>'category/update/.$category->id' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editCategoryForm'] )!!}-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Entry Type</label>
                    <input type="text" value="{{$importantBookById->entryType}}" class="form-control" name="entryType">
                    <input type="hidden" value="{{$importantBookById->id}}" class="form-control" name="importantBookId">
                    <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
                    <input type="text" value="{{$importantBookById->bookName}}" class="form-control" name="bookName">
                    <input type="hidden" value="{{$importantBookById->id}}" class="form-control" name="importantBookId">
                    <span class="text-danger">{{$errors->has('bookName')? $errors->first('bookName') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Writer Name</label>
                    <input type="text" value="{{$importantBookById->writerName}}" class="form-control" name="writerName">
                    <input type="hidden" value="{{$importantBookById->id}}" class="form-control" name="importantBookId">
                    <span class="text-danger">{{$errors->has('writerName')? $errors->first('writerName') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Short Description</label>
                    <textarea class="form-control" name="bookShortDescription" rows="10">{{strip_tags($importantBookById->bookShortDescription)}}</textarea>
                    <input type="hidden" value="{{$importantBookById->id}}" class="form-control" name="importantBookId">
                    <span class="text-danger">{{$errors->has('bookShortDescription')? $errors->first('bookShortDescription') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Image</label>
                    <input type="file" accept="image/*" name="bookImage">
                    <img src="{{asset($importantBookById->bookImage)}}" alt="" height="100" width="100" class="mt-3">
                    <span class="text-danger">{{$errors->has('bookImage')? $errors->first('bookImage') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="upload_file">Upload File (Pdf)</label>
                    <input class="form-control" type="file" name="uploadFile" id="uploadFile">
                    <input type="text" value="{{$importantBookById->uploadFile}}" class="form-control" name="uploadFile">
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
                    <button type="submit" name="btn" class="btn btn-primary btn-block">Update Important Books</button>
                </div>
            </form>
            <!--            {!! Form::close()!!}-->
        </div>
    </div>
</div>
<script>
    document.forms['editImportantBookForm'].elements['publicationStatus'].value = {{$importantBookById -> publicationStatus}}
</script>
@endsection