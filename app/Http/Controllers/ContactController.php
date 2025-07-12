<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\Rdv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contact = Contact::all();
        $rdv = Rdv::all();
       
        $cont = Contact::all()->count();
        $r = Rdv::all()->count();
        $all = $cont + $r;
        return view('contact.index', compact('Contact','rdv','cont','r','all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Contact = new Contact;
        // $Contact->user_id = auth()->id();
        $Contact->nom = $request->input('nom');
        $Contact->prenoms = $request->input('prenoms');
        $Contact->telephone = $request->input('telephone');
        $Contact->email = $request->input('email');
        $Contact->objet = $request->input('objet'); 
        $Contact->message = $request->input('message'); 

        $Contact->save();
        return redirect()->back()->with('status','Contact Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Contact = Contact::find($id);
        return view('contact.edit', compact('Contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Contact = Contact::find($id);
        
        $Contact->update();
        return redirect()->back()->with('status','Contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Contact = Contact::find($id);

        $Contact->delete();
        return redirect()->back()->with('status','Contact Deleted Successfully');
    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creates()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request)
    {
        $rdv = new Rdv;
        // $Contact->user_id = auth()->id();
        $rdv->nom = $request->input('nom');
        $rdv->type = $request->input('type');
        $rdv->telephone = $request->input('telephone');
        $rdv->email = $request->input('email');
        $rdv->date = $request->input('date'); 
        $rdv->heure = $request->input('heure'); 
        $rdv->message = $request->input('message'); 

        $rdv->save();
        return redirect()->back()->with('status','Contact Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shows($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edits($id)
    {
        $rdv = Rdv::find($id);
        return view('contact.edit', compact('rdv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request, $id)
    {
        $rdv = Rdv::find($id);
        
        $rdv->update();
        return redirect()->back()->with('status','Rdv Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroys($id)
    {
        $rdv = Rdv::find($id);

        $rdv->delete();
        return redirect()->back()->with('status','Contact Deleted Successfully');
    }


    public function detail($id){
        $Contact= Contact::find($id);
        return view('contact.detail', compact('Contact'));
    }

    public function details($id){
        $rdv= Rdv::find($id);
        return view('contact.details', compact('rdv'));
    }

    
}
