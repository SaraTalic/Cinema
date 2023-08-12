@extends('layout')

@section('content')
<section id="center" class="center_contact clearfix">
    <div class="center_contact_main clearfix">
             <iframe src="https://maps.google.com/maps?q=laus&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
       </div>
  </section>
  
  <section id="contact">
   <div class="container">
    <div class="row">
     <div class="contact_1 clearfix">
       <div class="contact_1_inner clearfix">
         <h3>Online Movies Booking<a class="pull-right" href="#">All Available Movies</a></h3>
       </div>
       <div class="contact_1_inner_1 clearfix">
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> BRANCH OFFICE</a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> LOREM ROAD LONDON </a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> WEST SIDE PARIS</a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
       </div>
       <div class="contact_1_inner_1 clearfix">
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> IMPERDIET</a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> SEMPER</a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
        <div class="col-sm-4">
         <div class="contact_1_inner_1_left clearfix">
          <h4><a href="#">CINEMA ZONE<br> LACINIA</a></h4>
          <p>120-160 Dolor  Street, Lorem Do. Integer  CS17 2Xb</p>
          <p class="para_1">Address & Contact: <br> <span>012 3456 7890</span></p>
         </div>
        </div>
       </div>
     </div>
    </div>
   </div>
  </section>
  
  <section id="contact_last">
   <div class="container">
    <div class="row">
     <div class="col-sm-12">
      <div class="contact_last_1 clearfix">
       <h2>Get Connected</h2>
       <p>Name</p>
       <input class="form-control" placeholder="Enter your name" type="text">
       <p>Your Email</p>
       <input class="form-control" placeholder="Enter your Email" type="text">
       <div class="contact_last_1_inner clearfix">
        <div class="col-sm-6 space_left">
          <p>Movie</p>
          <select class="form-control">
            <option>Choose the related movie</option>
            <option>Avenger</option>
            <option>Marvel</option>
            <option>Narendra Modi</option>
            <option>Hulk</option>
            <option>Thor</option>
           </select>
        </div>
        <div class="col-sm-6 space_left">
         <p>Question Type</p>
          <select class="form-control">
            <option>Choose an Question type</option>
            <option>Normal Question</option>
            <option>Answer</option>
            <option>Business Enquiry</option>
            <option>Preview Theatre</option>
            <option>Fund Screening</option>
           </select>
        </div>
       </div>
       <p>Your Message</p>
       <textarea class="form-control form_1"></textarea>
      <input class="submit_button" type="submit" name="submit" value="SUBMIT">
      </div>
     </div>
    </div>
   </div>
  </section>

@endsection