<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'address' => ['required','string'],
            'city' => ['required','string'],
            'state' => ['required','string'],
            'zipcode' => ['required','string'],
            'mobile' => ['required','string'],
        ]);
        DB::table('contacts')
            ->insert([
                'user_id' => Auth::user()->id,
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zipcode' => $request->input('zipcode'),
                'mobile' => $request->input('mobile'),
                'country' => $request->input('country'),
                'biogra' => $request->input('biogra'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
