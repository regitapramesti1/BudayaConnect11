<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.index');
    }

    public function details()
    {
        return view('landing.details');
    }

    public function musiks()
    {
        return view('landing.musiks');
    }

    public function tari()
    {
        return view('landing.tari');
    }

    public function ludruk()
    {
        return view('landing.ludruk');
    }

    public function batik()
    {
        return view('landing.batik');
    }

    public function patungpahat()
    {
        return view('landing.patungpahat');
    }
    public function makanan()
    {
        return view('landing.makanan');
    }
    public function jajanan()
    {
        return view('landing.jajanan');
    }
    public function categories()
    {
        return view('landing.categories');
    }

    public function testimonials()
    {
        return view('landing.testimonials');
    }
    public function signIn()
    {
        return view('Landing.signIn');
    }

    public function login()
    {
        return view('Landing.masuk');
    }

    public function register()
    {
        return view('Landing.register_form');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
