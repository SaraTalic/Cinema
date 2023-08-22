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
            'movies' => Movie::latest()->paginate(7)
        ]);
    }


    //Prikaz Jednog Filma
    public function show(Movie $movie)
    {
        return view('show', [
            'movie' => $movie,
            'movies' => Movie::latest()->paginate(4)
        ]);
    }


    //Prikaz Repertoara
    public function repertoar()
    {
        return view('repertoar', [
            'movies' => Movie::latest()->paginate(4)
        ]);
    }


    //Prikaz Uskoro
    public function uskoro()
    {
        return view('uskoro', [
            'movies' => Movie::latest()->paginate(4)
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
        // dd($request);

        $formFields = $request->validate([
            'dateInput' => 'required',
            'time' => 'required',
            'number_of_tickets' => 'required'

        ]);


        $events = Event::all();
        $formFields['time'] = $formFields['time'] . ':00';
        $usersres = Usersreservation::all();

        foreach ($events as $event) {
            if ($event->time == $formFields['time'] && $event->date == $formFields['dateInput'] && $event->movie_id == $movie->id) {

                $e = Event::find($event->id);
                $br = intval($formFields['number_of_tickets']);

                if ($e->available_tickets >= $br) {

                    $e->available_tickets = $e->available_tickets - $br;
                    $e->save();

                    foreach ($usersres as $us) {
                        if ($us->user_id == auth()->id() && $us->event_id == $event->id) {
                            $us->number_of_tickets = $us->number_of_tickets + $br;
                            $us->save();
                            return redirect('/mojerezervacije')->with('message', 'Postoji već Vaša rezervacija za ovaj termin, te je Vaša rezervacija izmijenjena');
                        }
                    }
                    $ur = new Usersreservation;
                    $ur->user_id = auth()->id();
                    $ur->number_of_tickets = $br;
                    $ur->event_id = $e->id;
                    $ur->save();
                    return redirect('/mojerezervacije')->with('message', 'Rezervacija uspješno izvršena');


                }

            }


        }
        return back()->withErrors(['not' => 'NAZALOST, NEDOVOLJAN BROJ SLOBODNIH KARATA.']);

    }


    //Prikaz Mojih Rezervacija
    public function manage()
    {
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

        foreach ($movies as $movie) {
            if ($movie->id == $event->movie_id) {
                $m = $movie;
            }
        }
        return view('single', ['event' => $event, 'movie' => $m, 'ur' => $ur1]);
    }


    //Brisanje Rezervacije
    public function destroy($id)
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


        if ($ur1->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $event->available_tickets = $event->available_tickets + $ur1->number_of_tickets;
        $event->save();

        $ur1->delete();


        return redirect('/mojerezervacije')->with('message', 'Rezervacija uspješno otkazana.');
    }



    //Izmjena Rezervacije
    public function update(Request $request, $id)
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

        if ($ur->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'time' => 'required',
            'dateInput' => 'required',
            'number_of_tickets' => 'required'
        ]);


        $br = intval($formFields['number_of_tickets']);

        $staravrijednost = $ur1->number_of_tickets;

        $event->available_tickets = $event->available_tickets + $staravrijednost;

        $event->save();


        if ($event->available_tickets >= $br) {

            $event->available_tickets = $event->available_tickets - $br;
            $event->save();
            // dd($event);

            $ur1->number_of_tickets = $br;
            $ur1->save();

            return redirect('/mojerezervacije')->with('message', 'Rezervacija uspješno izmijenjena.');

        } else {
            $event->available_tickets = $event->available_tickets - $staravrijednost;
            $event->save();



        }
        return back()->withErrors(['not' => 'NAZALOST, NEDOVOLJAN BROJ SLOBODNIH KARATA']);
    }


    //Pretraga
    public function search(Request $request)
    {
        $query = $request->input('query');


        $movies = Movie::where('title', 'like', $query)
            ->orWhere('description', 'like', $query);
        //->paginate(4); 
        //dd($movies);
        return view('pretraga', ['movies' => $movies]);
    }




}