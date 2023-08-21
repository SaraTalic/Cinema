<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Event;
use App\Models\Usersreservation;
use Illuminate\Support\Arr;


class MovieController extends Controller
{
    
    //Prikaz Pocetne Strane
    public function index()
    {
        return view('index', [
            'movies' => Movie::all()
        ]);
    }

    //Prikaz Jednog Filma
    public function show(Movie $movie)
    {
        return view('show', [
            'movie' => $movie,
            'movies' => Movie::all()
        ]);
    }

    //Prikaz Repertoara
    public function repertoar()
    {
        return view('repertoar', [
            'movies' => Movie::all()
        ]);
    }

    //Prikaz Uskoro
    public function uskoro()
    {
        return view('uskoro', [
            'movies' => Movie::all()
        ]);
    }

    //Prikaz Cjenovnika
    public function cjenovnik()
    {
        return view('cjenovnik');
    }

    //Prikaz Rezervacije
    public function rezervacija(Movie $movie)
    {
        return view('rezervacija', [
            'movie' => $movie
        ]);
    }


    //Cuvanje Rezervacije
    public function storeReservation(Request $request, Movie $movie)
    {
        //dd($request);

        $formFields = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'number_of_tickets' => 'required'

        ]);

        $events = Event::all();

        $formFields['time'] = $formFields['time'] . ':00';
        foreach ($events as $event) {

            if ($event->time == $formFields['time'] && $event->date == $formFields['date'] && $event->movie_id == $movie->id) {

                $e = Event::find($event->id);
                $br = intval($formFields['number_of_tickets']);

                if ($e->available_tickets >= $br) {
                    
                    $e->available_tickets = $e->available_tickets - $br;
                    $e->save();

                    $ur = new Usersreservation;
                    $ur->user_id = auth()->id();
                    $ur->number_of_tickets = $br;
                    $ur->event_id = $e->id;
                    $ur->save();
                    
                }
            }


        }

        return redirect('/')->with('message','Rezervacija uspješno izvršena');
    }

    //Prikaz Mojih Rezervacija
    public function manage()
    {
        //dd(auth()->user()->events()->get());
        return view('mojerezervacije', ['events' => auth()->user()->events()->get(), 'movies' => Movie::all(), 'usersreservations' => Usersreservation::all()]);
    }


    //Prikaz Jedne Rezervacije
    public function single($id)
    {
        $movies = Movie::all();
        $m = NULL;
        $usrs = Usersreservation::all();
        $ur1 = NULL;
        foreach ($usrs as $ur) {
            if ($ur->id == intval($id)) {
                $ur1 = $ur;
            }
        }
        $events = Event::all();
        $event = NULL;
        foreach ($events as $e) {
            if ($e->id == $ur1->event_id) {
                $event = $e;
            }
        }

        //$event=$ur1->event_id;
        //dd($id);
        foreach ($movies as $movie) {
            if ($movie->id == $event->movie_id) {
                $m = $movie;
            }
        }
        return view('single', ['event' => $event, 'movie' => $m, 'ur' => $ur1]);
    }


    //Izmjena Rezervacije
    public function update(Request $request, Usersreservation $ur)
    {

        //Make sure logged in user is owner
        if ($ur->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'number_of_tickets' => 'required'
        ]);




    }




}