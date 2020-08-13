@extends('frontEnd.master')

@section('mainContent')
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Please fill out this form to contact us</h4>
                        <!-- {!! Form::open( ['url'=>'/feedBack/save' , 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'] )!!} -->
                        <form action="{{url('/feedBack/save')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return myFun()">
                             @csrf
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="First Name" class="form-control" name='firstName'>
                                            <span class="text-danger">{{$errors->has('firstName')? $errors->first('firstName') :'' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Last-Name" class="form-control" name='lastName'>
                                            <span class="text-danger">{{$errors->has('lastName')? $errors->first('lastName') :'' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control" name='email'>
                                            <span class="text-danger">{{$errors->has('email')? $errors->first('email') :'' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <input type="text" placeholder="Phone Number" id="mobileNumber" class="form-control" name='phoneNumber'>
                                            <span id="message" style="color:red"> </span><br><br>
                                        </div> -->
                                        <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">+88</div>
                                        </div>
                                        <input type="text" placeholder="Phone Number" id="mobileNumber" class="form-control" name='phoneNumber'>
                                        <span id="message" style="color:red"> </span><br><br>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message" rows="5" class="form-control" name='message'></textarea>
                                            <span class="text-danger">{{$errors->has('message')? $errors->first('message') :'' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" name="btn" class="btn btn-dark btn-block">Send</button>
                                    </div>
                                </div>
                       <!--  {!! Form::close()!!} -->
                   </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Get In Touch</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fugiat?</p>
                        <h4>Address</h4>
                        <p class="text-muted">House #100, Uttara, Dhaka</p>
                        <h4>Email</h4>
                        <p class="text-muted">test@gmail.com</p>
                        <h4>Phone</h4>
                        <p class="text-muted mb-2">+434 3434 3433</p>
                        <p class="text-muted">+434 3434 3433</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


