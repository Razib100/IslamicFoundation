@extends('frontEnd.master')

@section('mainContent')
<!--ABOUT-SECTION-HEADER-->
<section id="about-section" class="text-center text-light">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col pt-5 mt-4">
                    <h2>About US</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laudantium eum, dignissimos provident autem, nesciunt earum ducimus error praesentium tempora.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT-MIDDLE-SECTION-->
<section id="about-middle-section" class="py-5 text-left">
    <div class="container">
        <div class="row">
                <div class="col-md-6 align-self-center">
                    <h3>What We Do</h3>
                    @foreach($publishedAbouts as $publishedAbout)
                    <p class="lead">{{strip_tags($publishedAbout->aboutDescription)}}</p>
                    @endforeach
                </div>
            <div class="col-md-6 text-center">
                <img src="{{asset('public/frontEnd')}}/img/if/logo.png" class="img-fluid rounded-circle" alt="img">
            </div>
        </div>
    </div>
</section>
@endsection


