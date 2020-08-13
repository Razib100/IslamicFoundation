<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>

                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" method="POST" action="{{ url('/reader-login') }}">
                            @csrf
                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->

                                <div class="group">
                                    <input required="" name="email" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email address</label>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                    

                                <!-- Password input-->
                                <div class="group">
                                    <input required="" name="password" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <em>minimum 6 characters</em>

                                <div class="forgot-link">
                                    <!-- <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a> -->
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" data-toggle="modal" data-target="#forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>


                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <button id="signin" type="submit" name="signin" class="btn btn-primary btn-block">Log In</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal" method="POST" action="{{ url('/reader-register') }}">
                        @csrf
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="group">
                                    <input required="" name="firstName" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">First Name</label>
                                    @if ($errors->has('firstName'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstName') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Text input-->
                                <div class="group">
                                    <input required="" name="lastName" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Last Name</label>
                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Password input-->
                                <div class="group">
                                    <input required="" name="email" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email</label>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <!-- Text input-->
                                <div class="group">
                                    <input required="" name="password" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <em>1-8 Characters</em>

                                <div class="group2">
                                    <input required="" name="phoneNumber" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Phone Number</label>
                                    @if ($errors->has('phoneNumber'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phoneNumber') }}</strong>
                                        </span>
                                    @endif
                                </div>



                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <button id="confirmsignup" type="submit" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!--<div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </center>
            </div>-->
        </div>
    </div>
</div>



<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="group">
                            <input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                            <label class="label" for="date">Email address</label></div>


                        <div class="control-group">
                            <label class="control-label" for="forpassword"></label>
                            <div class="controls">
                                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>

    </div>
</div>