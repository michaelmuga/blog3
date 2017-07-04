<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Styles -->
    @yield('css')
    
 

      
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      
</head>
<body>
    <div id="app" class="container-fluid display-table clearfix">
 
 <div class="container inputcontainer transparent">
      <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control transparent" placeholder="Search">
            </div>
                <button type="submit" class="btn btn-default transparent glyphicon glyphicon-search"></button>
        </form>
        <div class="rows social_links_nav">
   
        <ul>
            <li><a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href=""></a></li>
        </ul>
        
    </div>
 
 </div>
  
 <nav class="navbar navbar-default">
 
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src=""><p><b>Deep Griha Society</b></p></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        


      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>   
      <li class="active">
          <a href="aboutus.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a> 
      </li>
      <li class="dropdown-submenu">
        <a href="Programmes.html" class="dropdown-toggle" data-toggle="dropdown">Programmes <b class="caret"></b></a>
         <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Second level</a></li>
                  <li class="dropdown-submenu dropdown-submenuX submenu_left">
                    <a href="#">Even More..</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">3rd level</a></li>
                      <li><a href="#">3rd level</a></li>
                    </ul>  
                  </li>  
          </ul>  
      </li>
      <li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a></li>
      <li class="dropdown dropdown-large">
       <a href="Programmes.html" class="dropdown-toggle" data-toggle="dropdown">Get involved<b class="caret"></b></a>
        <ul class="dropdown-menu dropdown-menu-large row">
                    <div align="center" class="aboutus_center_align">
                            <p align="center" class="icon"><a href="Programmes.html" class="btn" role="button">Programmes</a></p>
                   </div>
            <li class="dropdown-header padding_zero"><a href="childcare.html">Childcare</a></li>
            <li class="divider"></li>
            <li><a href="Become-a-Deep-Griha-Ambassador.html">Become a Deep Griha Ambassador </a></li>
            <li><a href="Donate.html">Donate- Online Giving Centre </a></li>
            <li><a href="Wishlist.html">Wishlist </a></li>
            <li><a href="VolunteerwithUs.html">Volunteer With Us </a></li>             
            <li><a href="CorporateInvolvement.html">Corporate Involvement</a></li>
          <li class="">
            <ul>
              <li class="dropdown-header padding_zero"><a href="childdevelopment">Child Development</a></li>
              <li class="divider"></li>
              <li><a href="aadharkendra.html">Aadhar Kendra</a></li>
              <li><a href="Cityofchild.html">City of Child</a></li>  


              
                            <li class="divider"></li>
                <li class="dropdown-header padding_zero"><a href="#">Women's Empowerment</a></li>
                <li class="divider"></li>              
                <li><a href="AdultEducation.html">Adult Education</a></li>
                <li><a href="Self-HelpGroup.html">Self-Help Group</a></li>
                <li><a href="Counselling&Awareness.html">Counselling & Awareness</a></li>
                <li><a href="LegalAid.html">Legal Aid</a></li>

            </ul>
          </li>
         
        
          




     </ul>

        </li>
       
        <li>
              <a href="shop.html"><span class="glyphicon glyphicon glyphicon-shopping-cart icon_margin" aria-hidden="true"></span>Shop</a>

        </li>


        <li class="dropdown">

          <a href="Contacts.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="shareyourexperience.html">Share your experience</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="social-networking.html">Social Network</a></li>
          </ul>
          <li><a href="login.html"><span class="glyphicon glyphicon glyphicon glyphicon-log-in icon_margin" aria-hidden="true"></span>Login</a></li>

        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>

@if($flash = session('message'))
<div id="message" class="alert alert-success animated  slideOutUp" role="alert">
{{$flash}}
</div>

@endif

        @yield('content')


<div class="container-fluid">
<div class="row footer">
  <div class="col-md-3 footer_logo">
      <img src="footer_logo.jpg" class="img-responsive">
  </div>
  <div class="col-md-3 footer_text">
    <h3><b>About Us</b></h3><hr>
    <ul>
      <li>
        <a href="#">Where We Work</a>
      </li>
      <li>
        <a href="#">Our Partners</a>
      </li>
      <li>
        <a href="#">Our Videos</a>
      </li>
      <li>
        <a href="#">Financial Reports</a>
      </li>
    </ul>
  </div>
  <div class="col-md-3 footer_text">
    <h3><b>Volunteer</b></h3><hr>
    <ul>
      <li>
        <a href="#">Volunteer with us</a>
      </li>
      <li>
        <a href="#">Download our volunteer handbook</a>
      </li>
      <li>
        <a href="#">Volunteer Application Form(International)</a>
      </li>
      <li>
        <a href="#">Volunteer Application Form(local)</a>
      </li>
    </ul>
  </div>
  
  <div class="col-md-3 footer_text footer_text2">
    <h3><b>Connect</b></h3><hr>
     <ul class="social-network social-circle">
        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul><br><br>
      <div class="row last_footer">
    <div class=" ">
         (c) Copyright 2012 - Deep Griha Society<br>
         Registered under SRA (MAH / 1128 / PN),<br>
          B.P.T. - F. 988<br><br>

    
        
            Income Tax Exemption US 80-G, FCRA Reg.<br>
            No. 083930134
         
 
</div>
  </div><hr>

</div>




<hr>


   </div>



</div>

    </div>

   

    <!-- Scripts -->

   
      <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/default.js') }}"></script>
     <script src="{{ asset('js/slick.min.js') }}"></script>
    @yield('scripts')

</body>
</html>
