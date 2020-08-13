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
    </head>
    <body>
        <!--NAIGATION-SECTION-->
        <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <div class="container">
                <a href="index.html" class="navbar-brand"><img src="{{asset('public/frontEnd')}}/img/if/logo.png" alt="Logo" class="logo rounded-circle"></a>
                <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @include('frontEnd.include.header')
            </div>
        </nav>
        <!-- <p class="alert-danger text-center">
            <?php
                $message=Session::get('message');
                    if($message){
                    echo $message;
                    Session::put('message',null);
                }
            ?>        
        </p> -->
        <!--Login-SECTION-->
        <!-- Modal -->
        @include('frontEnd.include.loginModal')
        <!--CAROUSEL-SECTION-->

        <!--book category-SECTION-->
        
        @yield('mainContent')
        
        
        <!--SIGN-UP-SECTION-->
        <section id="signup" class="py-5 text-center text-light bg-dark">
            <div class="container">
                <div class="row">
                   @include('frontEnd.include.newsLetter') 
                </div>
            </div>
        </section>
        <!--COPYRIGHT-SECTION-->
        <section id="copyright" class="py-3 text-center text-light">
            @include('frontEnd.include.footer')
        </section>

        <script src="{{asset('public/frontEnd')}}/js/jquery.min.js"></script>
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
          function myFun(){
            var a =document.getElementById("mobileNumber").value;

            if(a !=""){
              if((a.charAt(0) ==0)){
                if ((a.charAt(1) ==1)) {
                  if ((a.charAt(2) ==7) || (a.charAt(2) ==9) || (a.charAt(2) ==6) || (a.charAt(2) ==3) || (a.charAt(2) ==4) || (a.charAt(2) ==5) || (a.charAt(2) ==8)) {
                    if(a.length ==11){
                      document.submit();
                      return false;
                    }
                    else{
                      document.getElementById("message").innerHTML="**Please enter valid phone number";
                      return false;
                    }
                  }

                  else{
                    document.getElementById("message").innerHTML="**Please enter valid phone number";
                    return false;
                  }

                }
                else{
                  document.getElementById("message").innerHTML="**Please enter valid phone number";
                  return false;
                }

              }
              else{
                document.getElementById("message").innerHTML="**Please enter valid phone number";
                return false;
              }
            }

            else{
              document.getElementById("message").innerHTML="**Please enter valid phone number";
              return false;
            }
          }
    </script>
    </body>
</html>
