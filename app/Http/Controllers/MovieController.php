<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Event;

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
        

        foreach($events as $event){
            if($event->time == $formFields['time'] && $event->date == $formFields['date']){
               
                $e = Event::find($event->id);
                $br=intval($formFields['number_of_tickets']);
            
                if($e) {
                     $e->available_tickets = $e->available_tickets - $br;
                     $e->save();
                }
            }
           
            
        }
        
        //$reservation = Reservation::create($formFields);

        return redirect('/');
    }

    
}
