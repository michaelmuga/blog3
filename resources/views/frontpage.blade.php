@extends('layouts.app')

@section('content')
<div class="container">
    
</div>


<div class="container-fluid">
 <div class="row silderColmn">






   <div id="carousel-example-generic" class="carousel carouseljs slide " data-ride="carousel"  data-interval="false">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
                    

                
            @foreach ($homeslider->homeslides as $homeslide) 
             
            

                                @if ($loop->first)
                      <div class="active item itemx">
                                        <img  src="{{Storage::url($homeslide->filename)}}" class="img-responsive">
                                        <div class="myCc2">
                                           <div class="carousel-caption myCc">
                                              <h3>  {{$homeslide->tagline}}</h3>
                                                 <h1>{{$homeslide->title}}</h1>
                                                     {!! $homeslide->intro !!}
                                                   <a href="/homeslide/{{$homeslide->id}}/show" class="rss" title="Rss">Read More</a>
       
                                       </div>
                                        </div>
                        </div>

                                   @else

                        <div class="item itemx">
                                        <img  src="{{Storage::url($homeslide->filename)}}" class="img-responsive">  <div class="myCc2">       
                                         <div class="carousel-caption">
                                                <h3>  {{$homeslide->tagline}}</h3>
                                                  <h1>  {{$homeslide->title}}</h1>
                                                      {!! $homeslide->intro !!}
                                               <a href="/homeslide/{{$homeslide->id}}/show" class="rss" title="Rss">Read More</a>

                                        </div>
                                        </div>
                        </div>
         @endif
                                        @endforeach

       </div>

                              <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left chevon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right chevon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
 </div>



                 


 </div>




 </div>
 <div class="container programscontainer">
      <div class="row programsrow">
            <div class="col-md-12">
               <center>
                 <div class="row programsheader">
                    <h3>
                    Deep Griha runs a range of projects, working for the specific needs of different sectors of society.
                    </h3>
               </div> 
                <div class="row programsthumbstop">
                     <div class="col-md-4">
                         <div class="thumbnail">
                               <center>
                              <i class="fa fa-child fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>Child Care</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                         </div>
               
               
                     <div class="col-md-4">
                          <div class="thumbnail">
                               <center>
                              <i class="fa fa-hand-rock-o fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>Child Developement</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div> 
                     </div>
                     <div class="col-md-4">
                          <div class="thumbnail">
                               <center>
                              <i class="fa fa-money fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>IGP(Income generation program)</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div> 
                     </div>
               </div> 
                <div class="row programsthumbsbottom">
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-graduation-cap fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>City of Child</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-male fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                <h3>Youth Empowerment</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-female fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>Women's Empowerment</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
               </div>
               <div class="row programsthumbsbottom">
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-medkit fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>Medical & Healthcare</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-heartbeat fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                <h3>DISHA(HIV & AIDS)</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
                     <div class="col-md-4">
                           <div class="thumbnail">
                               <center>
                              <i class="fa fa-cogs fa_progs" aria-hidden="true"></i>
                              <div class="caption">
                                
                                    <h3>Vidyanagari</h3>
                                <p>We work to hunger and food insecurity; 
                                     and children’s education.
                                </p>
                                </div>
                                </center>
                          </div>
                     </div>
               </div> 
            </div>
      </div>
 </div>


 <div class="container">

   <div class="row">
        <div class="row section1">
            <div class="col-md-9 About_title section1title">
                <h2>
                    <b>Our Wishlist</b>

                </h2>
                    <p>You can help a lot of people by donating little.</p>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-slider" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-slider" href="#carousel-example"
                            data-slide="next"></a>
                </div>
                <div id="#carousel-example-one-controls" class="controls pull-right carousel-example-one-controls hidden-sm hidden-md hidden-lg">
                    <a class="left fa fa-chevron-left btn btn-slider" href="#carousel-example-one"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-slider" href="#carousel-example-one"
                            data-slide="next"></a>
                </div>

                <div id="#carousel-example-two-controls" class="controls pull-right carousel-example-two-controls hidden-sm hidden-md hidden-lg">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-two"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-slider" href="#carousel-example-two"
                            data-slide="next"></a>
                </div>

                
            </div>
        </div> 

      <div class="row">
       <div id="carousel-example" class="carousel slide hidden-xs campaignslider" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===2)

                              <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        @elseif($loop->iteration === 3)
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>>
                        </div>
                        </div>

                        
                @elseif($loop->iteration === 4)
                <div class="item">

                    <div class="row">
                         <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 5)
                            <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===6)
                             <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                       </div>
                       </div>

                        @elseif($loop->iteration ===7)
                        <div class="item">

                    <div class="row">
                              <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 8)
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 9)
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @elseif($loop->iteration === 10)

                         <div class="item">

                    <div class="row">
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 11)
                    <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 12)
                      <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @elseif($loop->iteration === 13)

                         <div class="item">

                    <div class="row">
                    <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 14)
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 15)
                 <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row inforow">
                                        <div class="price col-md-12 infocol">
                                            <h4>
                                                {{$campaign->title}}
                                            </h4>
                                            <h5 class="price-text-color">
                                               <i class="fa fa-inr" aria-hidden="true"></i>{{$campaign->fundraising_goal}}
                                            </h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left infop">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <center>
                                        <div class="read-more col-md-12">
                                           <button class="read-more-btn">Read more<i class="fa fa-angle-right icon_margin2" aria-hidden="true"></i></button>
                                        </div>
                                        </center>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @endif
                       @endforeach

                       </div>
                       </div>

       </div>
   </div>


 
    <div id="carousel-example-one" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>


                        @elseif($loop->iteration ===2)

                         <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>


                        @elseif($loop->iteration === 3)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 4)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 5)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 6)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 7)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 8)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 9)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 10)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>

                        @elseif($loop->iteration === 11)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 12)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @elseif($loop->iteration === 13)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        @elseif($loop->iteration === 14)


                          <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>
                        @else($loop->iteration === 15)
                        <div class="item">

                    <div class="row">
                    <div class="col-xs-6">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>
                        @endif
                        @endforeach

                          

                        </div>
    </div>


     <div id="carousel-example-two" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($campaigns as $campaign)
            @if($loop->first)
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>
                        </div>
                        </div>


                        @else
                <div class="item">
                    <div class="row">
                         <div class="col-xs-12">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{Storage::url($campaign->photo)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xs-12">
                                            <h5>
                                                {{$campaign->title}}</h5>
                                            <h5 class="price-text-color">
                                               {{$campaign->fundraising_goal}}</h5>
                                        </div>
                                       
                                    </div>
                                    <div class="separator clear-left">
                                       <p>{{str_limit($campaign->body, 125)}}</p>
                                    </div>
                                    <div class="row text">
                                        <div class="read-more col-xs-12">
                                           <button>Read more</button>
                                        </div>
                                       
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>



                        </div>

                        </div>
                        </div>

                        @endif
                        @endforeach

                    </div>
       </div>
</div>    
        

 </center>
 </div>
 </div>
</div>
       
<div class="container-fluid">
  

  <div class="row">
    
    
      
      <div class="col-md-12 featured-campaign clearfix"  style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::url($featuredcampaign->photo)}}); background-size: cover;">
               <div class="opacity_class">
                   <center>
                     <h2 class="featuredcampaign_title">{{$featuredcampaign->title}}</h2>
                     <div class="row">
                         <div class="col-md-4">
                           
                         </div>
                         <div class="col-md-4 featuredcampaign_body">
                           <h4 class="">{!! str_limit($featuredcampaign->body,200) !!}</h4>
                         </div>
                     </div>
                      <div class="featuredcampaign_goal">
                        <h4 class="rounh4"><i class="fa fa-inr icon_margin" aria-hidden="true"></i>{{$featuredcampaign->fundraising_goal}} </h4>
                      </div>
                      <a href="/campaigns/{{$featuredcampaign->id}}/display">More details</a>
                   </center>
               </div>
     </div> 
    
  </div>


</div>

<div class="container">
      <div class="row About_title">
        <center>
          <h1>About our organisation</h1>
        </center>
      </div>
      <div class="row AboutOrg">
         <div class="col-md-6 img_box itemxyz">
             <img src="http://fcchurch.com/wp-content/uploads/2012/08/neeelabaskar71.jpg" class="img-responsive">
         </div>
         <div class="col-md-6 About_txt itemxyz">
           <h2>Together We can do more</h2>
           <p>
             Through a range of family welfare programmes encompassing education, health, awareness building and self-help projects, DGS helps thousands of beneficiaries within Pune and several nearby villages.
           </p>
           <br>
           <h4>Become a volunteer</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            </p>
           <a href="" class="join_with_us">JOIN WITH US</a>
         </div>
      </div>
      <div class="row supporters">
         <div class="">
            <div class="col-md-6 padding_o">
                <div class="thumbnail supporters_thumbnail">
                  
                  <div class="caption supporters_thumbnail_caption">
                 <div class="row">
                    <i class="fa col-md-3 fa-handshake-o " aria-hidden="true"></i>
                    <h3 class="pull-right col-md-9 txt_pad"><a href="">Encourage Corporate Involvement</a></h3>
                 </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    
                  </div>
                </div>
            </div>
           <div class="col-md-6 padding_o">
                <div class="thumbnail supporters_thumbnail">
                  
                  <div class="caption supporters_thumbnail_caption">
                 <div class="row">
                    <i class="fa col-md-3 fa-handshake-o " aria-hidden="true"></i>
                    <h3 class="pull-right col-md-9 txt_pad"><a href="">Join our social network</a></h3>
                 </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    
                  </div>
                </div>
            </div>
         </div>
      </div>
</div>

<div class="container-fluid">
 <div class="row slide_row">
    
    <div class="col-md-12 padding_o">

    <section class="customer-logos slider">
        @foreach($campaignsurgents as $campaignurgent)

      <div class="slide text-center" >
      <img class="imgg" src="{{Storage::url($campaignurgent->photo)}}">
      <i class="fa fa-search-plus" aria-hidden="true"></i>
      <p class="campaignurgentp text-center">
           {{$campaignurgent->title}}
      </p>
      </div>

      @endforeach
    </section>

    </div>
  </div>
  <div class="row call_out">
    <div class="container padding_o">
       <div class="col-md-8 call_out_col">
        <h4 class="pull-left">Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4> 
     </div>
     <div class="col-md-4 call_out_col"> 
       <a href="" class="become_a_volunteer pull-right"> BECOME A VOLUNTEER</a>
     </div>
    </div>
  </div>
</div>

<div class="container upcomingeventscontainer">
   <div class="row About_title">
       <center>
         <h1>UpComing Events</h1>
       </center>
   </div>
    <div class="row upcomingeventstitle">
    
    <div class="col-md-12">

    <section class="events slider">
    
    @foreach($events as $event)

      <div class="slide" >
      
    <center>
      <div class="row slide_row_event">
    <div class="col-md-6 padding_o eventimg">
      <img src="{{Storage::url($event->photo)}}">
    </div>
      <div class="col-md-6 eventtxt">
        <h4>{{$event->title}}</h4>
        <div class="post-meta"><i class="fa fa-calendar"></i>{{$event->date}}<br><i class="fa fa-map-marker"></i> {{$event->venue}}</div>
       <p>{!! str_limit($event->body,125) !!}</p>
      </div>
      <a href="/events/{{$event->id}}" class="join_with_us">Read More </a>
    </div>

    
    </center>
    </div>

  @endforeach
  </section>


    </div>
    </div>



    <div class="row slidecontrol">
        <div class="col-md-12 text-center" >
            <i class="fa fa-chevron-left btn-slider" aria-hidden="true"></i>

      

       
           <i class="fa fa-chevron-right btn-slider" aria-hidden="true"></i>

        </div>
    </div>

  

</div>

<div class="container-fluid">
 <div class="row">

 <div class="col-md-12 padding_o">


<div id="carousel-example-testimonials" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel-innerx" role="listbox">
                    

                
            @foreach ($testimonials as $testimonial) 
             
            

                                @if ($loop->first)
                    <div class="active item itemx2">
                                        <img class="img-responsive itemx2img" src="{{Storage::url($testimonial->photo)}}">
                                        <div class="carousel-caption captionx">
                                        <img class="testimonial_prof_pic" src="{{Storage::url($testimonial->photo)}}">
                                          <p>{{$testimonial->name}}</p>
                                          <p>{!! $testimonial->body !!}</p>
                                      
                                        </div>
                     </div>

                                   @else

                      <div class="item itemx2">
                                      <img class="img-responsive itemx2img" src="{{Storage::url($testimonial->photo)}}">
                                      <div class="carousel-caption captionx">
                                      <img class="testimonial_prof_pic" src="{{Storage::url($testimonial->photo)}}">
                                      <p>{{$testimonial->name}}</p>
                                      <p>{!! $testimonial->body !!}</p>   
                                      </div>
                      </div>
                                     @endif
                                        @endforeach

    </div>

      <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-testimonials" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-testimonials" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>



                 


 </div>
 </div>
 </div>




<div class="container latestnews">
      <center>
        <div class="row  About_title">
          <h1>Latest News</h1>
      </div>
      </center>
     <div class="row latestnewsrow">
                      @foreach($blogs as $blog)

             <div class="col-md-4 latestnewscol">
                 
                 <img src="{{Storage::url($blog->photo->filename)}}" class="img-responsive">
                 <p class="date_xt"><i class="fa fa-calendar icon_margin" aria-hidden="true"></i>{{$blog->created_at}}</p>
                  <h4>{{$blog->title}}</h4>
                  <p><b>{{$blog->user->first_name}} {{$blog->user->last_name}}</b></p>
                  <p>{!! str_limit($blog->body,125) !!}</p>

                  <button id="btn-link">Read more<i class="fa fa-chevron-right icon_margin2" aria-hidden="true"></i></button>
             </div>

             @endforeach
        
     </div>
 </div>


<div class="container-fluid">
      <div class="row About_title2">
       
      </div>
      <div class="row AboutOrg">
         
         <div class="col-md-6 About_txt itemxyz new_padding">
           
           <br>
           <h4>Want to join with us</h4>
           <h2>Become a proud volunteer</h2>
            <p>
             When you bring together those who have, with those miracles happen.Become a time hero by volunteering with us. Meet new friends, gain new skills, get happiness and have fun!
            </p>
           <a href="" class="join_with_us">JOIN WITH US</a>
         </div>

         <div class="col-md-6 img_box itemxyz padding_o">
             <img src="http://fcchurch.com/wp-content/uploads/2012/08/neeelabaskar71.jpg" class="img-responsive">
         </div>


      </div>
    
</div>


<div class="container">
     <center>
       <div class="row About_title">
       <h1>Our Sponsors</h1>
      </div>
     </center>
     <div class="row">
                      @foreach($sponsors as $sponsor)

             <div class="col-md-3">
                 
                 <img src="{{Storage::url($sponsor->photo)}}" class="img-responsive">
                 
             </div>

             @endforeach
        
     </div>
 </div>





   
 @endsection

 @section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
        pauseOnHover: true,
        responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },{
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      },{
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 620,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('.events').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
        pauseOnHover: true,
        responsive: [{
        breakpoint: 620,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
</script>

<script type="text/javascript">
    
  $(document).ready(function(){

    $('.fa-chevron-left').on('click', function(){
  
  $('.events').slick('slickPrev');
});

$('.fa-chevron-right').on('click', function(){
  
  $('.events').slick('slickNext');

});

});
</script>





 @endsection