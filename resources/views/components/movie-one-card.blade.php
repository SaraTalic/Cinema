@props(['movie'])
<div class="col-sm-3">
    <div class="click_2_inner clearfix">
       <a href="movies/{{$movie->id}}"><img src="images/{{$movie->logo}}" width="100%" height="220px"></a>
       <p class="text-center"><a href="#">{{$movie->title}}</a></p>
   </div>
</div>