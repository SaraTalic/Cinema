@extends('layout')

@section('content')

<section id="booking">
    <div class="container">
     <div class="row">
      <div class="booking clearfix">
    <div class="col-sm-4">
        <div class="booking_right_main clearfix">
          <div class="booking_right_main_1 clearfix">
           <ul>
            <li class="book_1">REZERVISI</li>
            <li class="pull-right"><a href="#"><i class="fa fa-ticket"></i></a></li>
           </ul>
          </div>
          <form method="POST" action="/movies/{{$movie->id}}/rezervacija" class="appointment-form">
            @csrf
         <p name="movie"> {{$movie->title}} </p>
           <div class="booking_right_main_2_inner clearfix">
             <?php $string = $movie->time; $str_arr = explode (",", $string); ?>
             <p>Odaberite termin</p>
             <select name="time" class="form-control">
                <option> - </option>
                @foreach($str_arr as $s)
                <?php if($event->time == $s.':00') { ?> <option selected>{{$s}}</option> <?php }else{?>
                
                 <option >{{$s}}</option>
                 <?php }?>
                 @endforeach
            </select>
           </div>
           <div class="booking_right_main_2_inner clearfix">
             <p>Odaberite datum</p>
             <input name="date" type="date" id="date" value="{{$event->date}}">
           <div> 
            <p>Odaberite broj karata</p>
            <input name="number_of_tickets" type="number" id="broj" value="{{$ur->number_of_tickets}}">
           </div>
             <button type="submit" id="izmjena"> Izmijeni </button>
             <button type="submit" id="obrisi"> Obrisi </button>
            <p class="p_1">Please complete the form above.</p>
           
        </form>
            <h4>20% DISCOUNT ON BOOKING</h4>
            <ul class="social-network social-circle">
                           <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                           <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
           </ul>
           </div>
          </div>
    </div>
      </div>
     </div>
</section>

@endsection