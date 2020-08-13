<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/uikit.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/navbar-fixed.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/login.css">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontEnd')}}/img/if/logo.png">
        <title>Islamic Foundation</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <!--NAIGATION-SECTION-->
        <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <div class="container">
                <a href="index.html" class="navbar-brand"><img src="{{asset('public/frontEnd')}}/img/if/logo.png" alt="Logo" class="logo rounded-circle"></a>
                <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
            </div>
        </nav>
        <!--Login-SECTION-->
        
        <!----------------table---------------->
<!--        <div class="container">-->
            <div class="row header" style="text-align:center;color:green;margin-left: 10px">
                <a class="nav-link" href="{{url('/book')}}"><h2 class="text-center my-4">Book List: </h2></a>
            </div>

            <!-- <div class="scroll">
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">Text</marquee>
            </div> -->

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>ISBN Number</th>
                        <th>Edition</th>
                        <th>Volume</th>
                        <th>Publisher Name</th>
                        <th>Description</th>
                        <th>File Formate</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publishedBookListWithCategories as $publishedBookListWithCategory)
                        <tr>
                            <td>{{($publishedBookListWithCategory->bookName)}}</td>
                            <td>{{($publishedBookListWithCategory->authorName)}}</td>
                            <td>{{($publishedBookListWithCategory->isbnNumber)}}</td>
                            <td>{{($publishedBookListWithCategory->edition)}}</td>
                            <td>{{($publishedBookListWithCategory->volume)}}</td>
                            <td>{{($publishedBookListWithCategory->publisherName)}}</td>
                            <td>{{strip_tags($publishedBookListWithCategory->bookShortDescription)}}</td>
                            <td><a href="{{url('/readPdf/'.$publishedBookListWithCategory->id)}}" style="text-decoration: none;">Go Pdf</a></td>
                            <td><a href="{{url('/download/'.$publishedBookListWithCategory->id)}}"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            
                            <!-- <?php $reader_id=Session::get('id'); ?>
                                    

                                <?php if($reader_id !=NULL){?>

                                   <td><a href="{{url('/readPdf/'.$publishedBookListWithCategory->id)}}" style="text-decoration: none;">Go Pdf</a></td>
                                   <td><a href="{{url('/download/'.$publishedBookListWithCategory->id)}}"><i class="fa fa-download" aria-hidden="true"></i></a></td>

                                <?php }else{?>


                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                                   <a class="dropdown-item" href="{{url('/user-login')}}"><i class="fa fa-sign-out" style="font-size:20px;color:blue"></i>Login</a>
                                </marquee>


                            <?php } ?> -->

                        </tr>
                    @endforeach
                </tfoot>
            </table>
<!--        </div>-->
        <!--SIGN-UP-SECTION-->
        <!-- Footer -->
        <footer class="page-footer font-small teal pt-4"  style="background-color: #34495E  ">

            <!-- Footer Text -->
            <div class="container text-center text-md-left">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                  <!-- Content -->
                  <h5 class="text-uppercase font-weight-bold text-light">Footer text 1</h5>
                  <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                  <!-- Content -->
                  <h5 class="text-uppercase font-weight-bold text-light">Footer text 2</h5>
                  <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id excepturi hic.</p>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Text -->

        </footer>
  <!-- Footer -->
        <!--COPYRIGHT-SECTION-->
        <section id="copyright" class="py-3 text-center text-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead mb-0">© Copyright 2019 | All Right Reserved IslamicFoundation. | Developed by: <a href="http://www.whitepaper.tech/"> White Paper</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!--js-->
        
        <script src="{{asset('public/frontEnd')}}/js/popper.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/js/navbar-fixed.js"></script>
        <script src="{{asset('public/frontEnd')}}/js/uikit.min.js"></script>
        <script src="{{asset('public/frontEnd')}}/js/uikit-icons.min.js"></script>
        <!--login-SECTION-->
        <script>
            $(window, document, undefined).ready(function () {

                $('.input').blur(function () {
                    var $this = $(this);
                    if ($this.val())
                        $this.addClass('used');
                    else
                        $this.removeClass('used');
                });

            });


            $('#tab1').on('click', function () {
                $('#tab1').addClass('login-shadow');
                $('#tab2').removeClass('signup-shadow');
            });

            $('#tab2').on('click', function () {
                $('#tab2').addClass('signup-shadow');
                $('#tab1').removeClass('login-shadow');


            });
        </script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    "pagingType": "full_numbers"
                });
            })
        </script>
    </body>
</html>
