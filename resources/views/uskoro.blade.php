@extends('layout')

@section('content')
<section id="center" class="center_events clearfix">
    <div class="center_events_main text-center clearfix">
     <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="center_events_1 clearfix">
         <h1>Uskoro </h1>
       </div>
      </div>
     </div>
    </div>
    </div>
   </section>
   
   <section id="events">
    <div class="container">
     <div class="row">
       <div class="events_main clearfix">
              
        @foreach($movies as $movie)
        @if($movie->on_air == "no")
                       <div class="tab-content clearfix">
                 <div id="home" class="tab-pane fade in active clearfix">
                    <div class="click clearfix">
                      <div class="col-sm-8 space_left">
                       <div class="click_left clearfix">
                        <div class="col-sm-4 space_left">
                         <div class="click_left_inner clearfix">
                           <a href="/movies/{{$movie->id}}"><img src="images/{{$movie->logo}}" width="100%" height="360px"></a>
                         </div>
                        </div>
                        <div class="col-sm-8">
                         <div class="click_left_inner_1 clearfix">
                            <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
                            
                            <h6>Action, Comedy, Drama</h6>
                            <p class="para_1">{{$movie->description}}<a href="/movies/{{$movie->id}}">Vise </a></p>
                           
                            <p class="para_2"><span>Glumci:</span> {{$movie->actors}}</p>
                         </div>
                        
                         
                        </div>
                       </div>
                      </div>
                      <div class="col-sm-4">
                       <div class="click_right clearfix">
                        <h4>Informacije</h4>
                        <ul>
                         <li><i class="fa fa-backward"></i> {{$movie->title}}</li>
                         <li><i class="fa fa-clock-o"></i> {{$movie->duration}} min</li>
                         <li><i class="fa fa-list"></i> Action, Comedy, Drama</li>
                         <li><i class="fa fa-image"></i> Nibh Elementum</li>
                         <li><i class="fa fa-star"></i> {{$movie->actors}}</li>
                         
                        </ul>
                       </div>
                      
                      </div>
                     </div>
                     @endif
                     @endforeach
                    
      </div>
     </div>
    </div>
   </section>
   

@endsection