<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommunicationMail; 
use App\Models\Communication;
use App\Models\Newsletter;
use App\Models\Rdv;
use App\Models\Contact;
use App\Models\Visite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class CommunicationController extends Controller
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
        $Communication = Communication::all();
        $tot = Communication::all()->count();
        $info = Communication::where('categorie','Information')->count();
        $mark = Communication::where('categorie','Marketing')->count();
        return view('communication.index', compact('Communication','tot','info','mark'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new = Newsletter::pluck('email');
        $rdv = Rdv::pluck('email');
        $contact = Contact::pluck('email');
        // $visite = Visite::pluck('email');
        $Comm =Visite::pluck('email');
        $visite = $Comm->toArray();
        return view('communication.create' , compact('new','rdv', 'contact','visite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Communication = new Communication;
        // $Communication->user_id = auth()->id();
        $Communication->titre = $request->input('titre');
        $Communication->categorie = $request->input('categorie');
        $Communication->destinataire = $request->input('destinataire');
        $Communication->message = $request->input('message'); 
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Communication/', $filename);
            $Communication->images = $filename;
            
        }   
        $Communication->save();
        Mail::to($Communication->destinataire)->send(new CommunicationMail($Communication));

        return redirect()->route('communications.index')
            ->with('success', 'Communication envoyée avec succès.');
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
        $Communication = Communication::find($id);
        return view('communication.edit', compact('Communication'));
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
        $Communication = Communication::find($id);
        $Communication->titre = $request->input('titre');
        $Communication->categorie = $request->input('categorie');
        $Communication->destinataire = $request->input('destinataire');
        $Communication->message = $request->input('message');    
         
        $Communication->update();
        return redirect(url('communication'))->with('status','Communication modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Communication = Communication::find($id);
        $Communication->delete();
        return redirect()->back()->with('status','Communication Deleted Successfully');
    }

    public function detail($id){
        $Communication= Communication::find($id);
        return view('Communication.detail', compact('Communication'));
    }
}
