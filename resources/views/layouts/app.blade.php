<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta property="og:image" content="https://s31.postimg.org/6hs3bs7m3/13413676_828901833906356_2952480689422237510_n.png"/>
  <meta name="name" content="First Online Youth Employment Platform in Bangladesh">
  <meta name="jobs" content="Find Jobs, Tuitions , Internships">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=2.0,Transition=12)">

  <title>Internships & Jobs for Young Talents</title>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>



  <!-- pass through the CSRF (cross-site request forgery) token -->
  <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
  <!-- Fonts--->
  <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
  <!-- Fonts--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" media="screen" title="no title">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans" />
  <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" media="screen" title="no title" charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- jqurey -->
  <!--js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" charset="utf-8"></script>



  {!! Html::script('js/sweetalert.min.js') !!}
  {!! Html::script('js/prism.js') !!}
  {!! Html::script('js/index.js') !!}
  {!! Html::script('js/awesomplete.js') !!}
  {!! Html::script('css/js/material-kit.js') !!}
  {!! Html::script('css/js/material.min.js') !!}
  {!! Html::script('css/js/nouislider.min.js') !!}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
  <!--- Css -->
  {!! Html::style('css/rotating-card.css') !!}
  {!! Html::style('css/css/material-kit.css') !!}
  {!! Html::style('css/css/demo.css') !!}
  {!! Html::style('css/css/bootstrap.min.css') !!}

  {!! Html::style('css/style.css') !!}
  {!! Html::style('css/sweetalert.css') !!}
  {!! Html::style('css/prism.css') !!}
  {!! Html::style('css/awesomplete.css') !!}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">
  <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  <script type="text/javascript">
  $(function () {
    $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      $('#search').addClass('open');
      $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
      if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
        $(this).removeClass('open');
      }
    });

  });

  </script>



  <style>
  @media (max-width: 768px) {
  html, body {
  width: auto !important;
  overflow-x: hidden !important;
  }
  }

  body {
    font-family: 'Raleway', sans-serif;
    background-color:#f7f7f7;
    font-size: 13px;
    margin-top: 50px;
  }
  .padtop{
    padding-top: 50px;
  }

  .font-cor{
    font-family: 'Raleway', cursive;
    font-size: 16px;
  }
  .font-corb{
    font-family: 'Coming Soon', cursive;
  }
  .nav
  {
    font-size: 15px;

  }

  .ssmal{
    font-size: 10px;
  }
  .center{
    text-align:center;;
  }
  .blue
  {
    background-color: #3b5998;
  }
  .white{
    background-color: #f7f7f7;
  }
  .whiteproper{
    background-color: #fff;
  }
  .textw
  {
    color:white;
  }
  .pad{
    padding:50px;
  }
  .padsmall{
    padding:20px;
  }
  .pb{
    padding-bottom: 100px;
  }
  .fa-btn {
    margin-right: 6px;
  }
  .ft{
    font-size: 14px;
  }
  .textb{
    color:#3b5998;
  }
  .textg{
    color:#4bbd93;
  }
  .student{
    background-image: url(http://cdn1.theodysseyonline.com/files/2016/01/23/635891727862807756463608822_inspiration.jpg);
  }
  .transparentbg
  {
    background-color: rgba(0, 0, 0, 0.7);;
  }
  .navbar{

    min-height: 50px ;

  }
  .navbar-brand{

    font-size: 30px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;


  }
  .navbar-nav{

    font-size: 17px;
    font-weight: 500;


  }
  .verified{
    font-size: 25px;
    font-weight: bold;
  }
  </style>


  <script src="//load.sumome.com/" data-sumo-site-id="79713ef64a547e6957b04c95a8e49c51d903a0a06c631de8bebd3aaa78b44098" async="async"></script>

</head>
<body id="app-layout">

  @if(Auth::guest())

    <nav class="navbar navbar-success navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand " href="{{ url('/') }}" >
            <i class="fa fa-graduation-cap  "></i>  unigigg<sub>&beta;eta</sub>
          </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links  btn-change hvr-underline-from-center-->
            <ul class="nav navbar-nav">

              <li class=" "><a href="{{ url('/recruiter') }}">For Employers</a></li>
              <li class=" "><a href="{{ url('/talent') }}">For Talents</a></li>

              <li class="show-on-hover">
                <a  href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"  aria-haspopup="true">
                  <i class="fa fa-btn fa-lightbulb-o"></i> Resources <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" >
                  <li><a href="{{ url('blogs') }}"><i class="fa fa-btn fa-paperclip hvr-shutter-out-horizontal"></i>Blog</a></li>
                  <li><a href="{{ url('competitions') }}"><i class="fa fa-btn fa-rocket hvr-shutter-out-horizontal"></i>Competitions</a></li>
                  <li><a href="{{ url('faqs') }}"><i class="fa fa-btn fa-question-circle hvr-shutter-out-horizontal"></i>FAQs</a></li>
                  <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-sitemap hvr-shutter-out-horizontal"></i>Tutorials</a></li>
                  <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-tablet hvr-shutter-out-horizontal"></i>Training</a></li>
                </ul>
              </li>
              <li class="show-on-hover">
                <a  href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-btn fa-sign-up"></i> Sign Up <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/register') }}" class=""><i class="fa fa-btn fa-user"></i>Talent</a></li>
                  <li><a href="{{ url('employer/register') }}" class=""><i class="fa fa-btn fa-users"></i>Employer</a></li>
                </ul>
              </li>
            </ul>

            <li><a href="{{ url('/login') }}" class=""><i class="fa fa-sign-in"></i> Sign in</a></li>

          </ul>
        </div>
      </div>
    </nav>
  @else
    <nav class="navbar navbar-success navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand " href="{{ url('/') }}" >
            <i class="fa fa-graduation-cap "></i>unigigg<sub><small>&beta;eta</small></sub>
          </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            <li>
              <a class=" text-primary" href="{{ url('/home') }}" >
                <i class="fa fa-home "></i> Dashboard
              </a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->


            <ul class="nav navbar-nav">
              @if(Auth::user()->type===1)

                <li>
                  <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-btn fa-lightbulb-o"></i> Resources <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu " role="menu">

                    <li><a href="{{ url('blogs') }}"><i class="fa fa-btn fa-paperclip animsition-link"></i>Blog</a></li>
                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-rocket animsition-link"></i>Competitions</a></li>
                    <li><a href="{{ url('faqs') }}"><i class="fa fa-btn fa-question-circle animsition-link"></i>FAQs</a></li>


                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-sitemap animsition-link"></i>Tutorials</a></li>
                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-tablet animsition-link"></i>Training</a></li>

                  </ul>
                </li>
              @endif



                <li>  <a href="{{ url('/logout') }}">

                                  Logout</a>


                                </li>

            </ul>
          </div>
        </div>
      </nav>
    @endif

    @yield('content')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Call Us To Post a Job</h4>
          </div>
          <div class="modal-body">
            <h5>Call us on : 01987847548</h5>
            <p>
              Just call us, tell job details and we'll let you know within 24 hours
              You can Also SMS us. We'll call you back.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>

    <!-- JavaScripts -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.stellar/0.6.2/jquery.stellar.min.js"></script>
    <div id="search">
      <button type="button" class="close textw">×</button>
      <form role="form" method="GET" action="{{ url('/search/people') }}">
        {!! csrf_field() !!}
        <input type="search" name="search" value="" placeholder="type skill(s) here" />
        <button type="submit" class="btn btn-primary" >Find Me Jobs</button>
        <p>
          Search People
        </p>
      </form>
    </div>
    <script>
    function myFunction() {
      swal("We are working on It!", "Thank you for trying out :D")
    }

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
  </html>
