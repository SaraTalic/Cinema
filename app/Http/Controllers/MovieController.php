<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Event;
use App\Models\Usersreservation;
use Illuminate\Support\Arr;


class MovieController extends Controller
{
    //
    public function index() {
        return view('index', [
            'movies' => Movie::all()
        ]);
    }

    public function show(Movie $movie) {
        return view('show', [
            'movie' => $movie,
            'movies' => Movie::all()
        ]);
    }
    public function repertoar() {
        return view('repertoar', [
            'movies' => Movie::all()
        ]);
    }

    public function uskoro() {
        return view('uskoro', [
            'movies' => Movie::all()
        ]);
    }
    public function cjenovnik() {
        return view('cjenovnik');
    }
    public function rezervacija(Movie $movie) {
        return view('rezervacija',[
            'movie' => $movie
        ]);
    }

    public function storeReservation(Request $request, Movie $movie){
        //dd($request);
        
        $formFields = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'number_of_tickets' => 'required'
            
        ]);
        
        $events = Event::all();
        
        $formFields['time']=$formFields['time'].':00';
        foreach($events as $event){
        
            if($event->time == $formFields['time'] && $event->date == $formFields['date'] && $event->movie_id == $movie->id ){
              
                $e = Event::find($event->id);
                $br=intval($formFields['number_of_tickets']);
            
                if($e->available_tickets>=$br) {
                     $e->available_tickets = $e->available_tickets - $br;
                     $e->save();
                     $formFields['user_id'] = auth()->id();
                     $formFields['event_id']= $e->id;
                     $formFields = Arr::except($formFields, 'date');
                     $formFields = Arr::except($formFields, 'time');
                     $ur = new Usersreservation;
                     $ur->user_id = auth()->id();
                     $ur->number_of_tickets = $br;
                     $ur->event_id=$e->id;
                     $ur->save();
                   // Usersreservation::create($formFields);
                }
            }
           
            
        }

        
        
        //$reservation = Reservation::create($formFields);

        return redirect('/');
    }

    public function manage() {
        //dd(auth()->user()->events()->get());
        return view('mojerezervacije', ['events' => auth()->user()->events()->get(), 'movies' => Movie::all(), 'usersreservations' => Usersreservation::all() ]);
    }

    public function single($id){
        $movies=Movie::all();
        $m=NULL;
        $usrs = Usersreservation::all();
        $ur1 = NULL;
        foreach($usrs as $ur){
            if($ur->id == intval($id)){
                $ur1 = $ur; 
            }
        }
        $events= Event::all();
        $event=NULL;
        foreach($events as $e){
            if($e->id==$ur1->event_id){
                $event = $e;
            }
        }

        //$event=$ur1->event_id;
        //dd($id);
        foreach($movies as $movie){
            if($movie->id == $event->movie_id){
                $m=$movie;
            }
        }
        return view('single',['event' => $event, 'movie' => $m, 'ur' => $ur1 ]);
    }



    
}
