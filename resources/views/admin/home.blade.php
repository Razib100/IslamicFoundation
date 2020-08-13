<div class="row">
    <div class="col-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( ['url'=>'demo/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!}
            <div class="form-group">
                <label for="upload_file">Upload File (Pdf)</label>
                <input class="form-control" type="file" name="uploadFile" id="uploadFile">
                <span class="text-danger">{{$errors->has('uploadFile')? $errors->first('uploadFile') :'' }}</span>
            </div>
            <div class="form-group mt-5">
                <button type="submit" name="btn" class="btn btn-primary btn-block mx-5">Save demo List</button>
            </div>
             {!! Form::close()!!}
        </div>
    </div>
</div>