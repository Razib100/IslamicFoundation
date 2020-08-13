<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/book')}}">Book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/feedBack')}}">Feedback</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">contact</a>
        </li>
            
        <!-- <li class="nav-item dropdown">
            <button class="btn btn-success btn-lg" href="#signup" data-toggle="modal" data-target=".log-sign"><i class="fa fa-user"></i></button>
        </li> -->

        <li class="nav-item dropdown">
            <button class="btn btn-success btn-lg nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <i class="fa fa-user"></i>
              {{Session::get('firstName')}}</button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php $reader_id=Session::get('id'); ?>

                <?php if($reader_id !=NULL){?>

                   <a class="dropdown-item" href="{{url('/logout')}}"><i class="fa fa-sign-in" style="font-size:20px;color:red"></i> Logout</a>

                <?php }else{?>
                   <a class="dropdown-item" href="{{url('/user-login')}}"><i class="fa fa-sign-out" style="font-size:20px;color:blue"></i>Login</a>
            
                <?php } ?>
            </div>
        </li>
    </ul>
</div>