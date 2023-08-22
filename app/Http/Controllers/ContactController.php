<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function kontakt()
    {
        return view('kontakt');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect('/kontakt')->with(['message' => 'Hvala Vam što ste zainteresovani za nas. Javićemo Vam se ubrzo.']);
    }
}