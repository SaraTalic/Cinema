@extends('layout')

@section('content')

<section id="center" class="center_events clearfix">
    <div class="center_events_main text-center clearfix">
     <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="center_events_1 clearfix">
         <h1>Moje rezervacije </h1>
       </div>
      </div>
     </div>
    </div>
    </div>
   </section>

  <table class="w-full table-auto rounded-sm">
    <tbody>
      @unless($events->isEmpty())
      @foreach($events as $event)
      <tr class="border-gray-300">
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          
            @foreach($usersreservations as $us)
            @if($event->id == $us->event_id && auth()->id()==$us->user_id)
            <a href="/mojerezervacije/{{$us->id}}">
            @endif
            @endforeach
            @foreach($movies as $movie)
            @if($movie->id == $event->movie_id)
          {{$movie->title}}</a>
            @endif
            @endforeach
            ,{{$event->date}},{{$event->time}} 
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <a href="/mojerezervacije/{{$event->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
              class="fa-solid fa-pen-to-square"></i>
            Izmijeni</a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <form method="POST" action="/mojerezervacije/{{$event->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Obrisi</button>
          </form>
        </td>
      </tr>
      @endforeach
      @else
      <tr class="border-gray-300">
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <p class="text-center">No Listings Found</p>
        </td>
      </tr>
      @endunless

    </tbody>
  </table>

@endsection