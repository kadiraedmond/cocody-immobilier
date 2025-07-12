<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ParametreController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        $users = user::all()->count();
        $role = user::all()->unique();
        return view('parametre',compact('user','users','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('parametre.create');
    }

    public function creates()
    {
       return view('parametre.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role;
        $role->nom = $request->input('nom');
        $role->attribution = $request->input('attribution');
        $role->save();

        return redirect(url('parametre'))->with('status','role Added Successfully');
       
    }

    public function stores(Request $request)
    {
        $user = new User;
        // $Contact->user_id = auth()->id();
        $user->name = $request->input('name');
        $user->prenoms = $request->input('prenoms');
        $user->telephone = $request->input('telephone');
        $user->email = $request->input('email');
        $user->type = $request->input('type'); 
        $user->poste = $request->input('poste'); 
        $password = $request->input('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->password = $hashedPassword;
         
        $user->save();

        return redirect(url('parametre'))->with('status','Utilisateur ajouté avec succès');
       
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
        $user = User::find($id);
        return view('parametre.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $user = User::find($id);
        $user->prenoms = $request->input('prenoms');
        $user->telephone = $request->input('telephone');
        $user->email = $request->input('email');
        $user->type = $request->input('type'); 
        $user->poste = $request->input('poste'); 
        $password = $request->input('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->password = $hashedPassword;
        $user->update();
        return redirect(url('parametre'))->with('success', 'L’utilisateur a mise à jour avec succès!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('parametre'))->with('status','Utilisateur supprimé avec succès');
    }
}
