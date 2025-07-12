<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Vente;
use App\Models\Newsletter;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Visite;
use App\Models\Communication;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ve= Vente::all()->count();
        $loc= Location::all()->count();
        $new= Newsletter::all()->count();
        $blo= Blog::all()->count();
        $cont= Contact::all()->count();
        $vis= Visite::all()->count();
        $com= Communication::all()->count();
        return view('dashboard',compact('ve','loc','new','blo','cont','vis','com'));
    }
}
