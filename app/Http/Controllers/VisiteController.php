<?php

namespace App\Http\Controllers;

use App\Models\Visite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class VisiteController extends Controller
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
        $Visite = Visite::all();
        $vis = Visite::all()->count();
        $en = Visite::where('status','En attente')->count();
        $ter = Visite::where('status','Terminée')->count();
        return view('visite.index', compact('Visite','vis','en','ter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visite.create');
    }

    
  //pour activer un product
  public function activer_visite($id){
    $visite= Visite::find($id);
    $visite->status='Terminée';
        $visite->update();
        return redirect()->back()->with('status',
        'le bien  a ete bien desactiver');
        
        //pour desactiver un product
    }
  public function desactiver_visite($id){
   $visite= Visite::find($id);
        $visite->status='En attente';
        $visite->update();
        return redirect()->back()->with('status','le bien a ete bien active');

  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Visite = new Visite;
        $Visite->nom = $request->input('nom');
        $Visite->prenoms = $request->input('prenoms');
        $Visite->email = $request->input('email');
        $Visite->telephone = $request->input('telephone');
        $Visite->profession = $request->input('profession');
        $Visite->heure = $request->input('heure');
        $Visite->date = $request->input('date');
        $Visite->bien = $request->input('bien');
        $Visite->type = $request->input('type');
        $Visite->status='En attente';
        
        
        $Visite->save();
        return redirect(url('/'))->with('status','Visite ajouté avec succès');
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
        $Visite = Visite::find($id);
        return view('Visite.edit', compact('Visite'));
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
        $Visite = Visite::find($id);
        $Visite->nom = $request->input('nom');
        $Visite->prenoms = $request->input('prenoms');
        $Visite->email = $request->input('email');
        $Visite->telephone = $request->input('telephone');
        $Visite->profession = $request->input('profession');
        $Visite->heure = $request->input('heure');
        $Visite->date = $request->input('date');
        $Visite->bien = $request->input('bien');
        $Visite->type = $request->input('type');
         
        $Visite->update();
        return redirect()->back()->with('status','Visite Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Visite = Visite::find($id);
        
        $Visite->delete();
        return redirect(url('visites'))->with('status','Visite Deleted Successfully');
    }

    public function detail($id){
        $visite= Visite::find($id);
        return view('visite.detail', compact('visite'));
    }

}
