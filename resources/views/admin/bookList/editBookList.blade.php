@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <form action="{{url('/bookList/update',$bookListById->id)}}" method="post" name="editBookListForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <!--            {!! Form::open( ['url'=>'category/update/.$category->id' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editCategoryForm'] )!!}-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Entry Type</label>
                    <input type="text" value="{{$bookListById->entryType}}" class="form-control" name="entryType">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('entryType')? $errors->first('entryType') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
                    <input type="text" value="{{$bookListById->bookName}}" class="form-control" name="bookName">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('bookName')? $errors->first('bookName') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Author Name</label>
                    <input type="text" value="{{$bookListById->authorName}}" class="form-control" name="authorName">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('authorName')? $errors->first('authorName') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Category Name</label>
                    <input type="text" value="{{$bookListById->categoryName}}" class="form-control" style="color: red" name="categoryName" readonly>
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName') :'' }}</span>
                    <select class="form-control" style="margin-top: 3px" name="categoryId">
                        <option>------Select Book Category------</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">ISBN Name</label>
                    <input type="text" value="{{$bookListById->isbnNumber}}" class="form-control" name="isbnNumber">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('isbnNumber')? $errors->first('isbnNumber') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Edition</label>
                    <input type="text" value="{{$bookListById->edition}}" class="form-control" name="edition">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('edition')? $errors->first('edition') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Volume Name</label>
                    <input type="text" value="{{$bookListById->volume}}" class="form-control" name="volume">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('volume')? $errors->first('volume') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Publisher Name</label>
                    <input type="text" value="{{$bookListById->publisherName}}" class="form-control" name="publisherName">
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('publisherName')? $errors->first('publisherName') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Short Description</label>
                    <textarea class="form-control" name="bookShortDescription" rows="10">{{strip_tags($bookListById->bookShortDescription)}}</textarea>
                    <input type="hidden" value="{{$bookListById->id}}" class="form-control" name="bookListId">
                    <span class="text-danger">{{$errors->has('bookShortDescription')? $errors->first('bookShortDescription') :'' }}</span>
                </div>
                <div class="form-group">
                    <label for="upload_file">Upload File (Pdf)</label>
                    <input class="form-control" type="file" name="uploadFile" id="uploadFile">
                    <input type="text" value="{{$bookListById->uploadFile}}" class="form-control" name="uploadFile">
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
                    <button type="submit" name="btn" class="btn btn-primary btn-block">Update Book List</button>
                </div>
            </form>
            <!--            {!! Form::close()!!}-->
        </div>
    </div>
</div>
<script>
    document.forms['editBookListForm'].elements['publicationStatus'].value = {{$bookListById -> publicationStatus}}
</script>
@endsection