<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
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
        $Blog = Blog::all();
        $all = Blog::all()->count();
        $conse = Blog::where('categorie','Conseils')->count();
        $ven = Blog::where('categorie','Vente')->count();
        $loc = Blog::where('categorie','Location')->count();
        $cons = Blog::where('categorie','Construction')->count();
        return view('blog.index', compact('Blog','all','conse','ven','loc','cons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'titre' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'extrait' => 'required|string|max:255',
            'message' => 'required|string|', // Limitez à 1000 caractères ici, ajustez selon vos besoins.
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Exemple de validation pour les images.
        ]);
         
        $Blog = new Blog;
        // $Blog->user_id = auth()->id();
        $Blog->titre = $request->input('titre');
        $Blog->categorie = $request->input('categorie');
        $Blog->extrait = $request->input('extrait');
        $Blog->message = $request->input('message'); 
        if($request->hasfile('images'))
        {
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Blog/', $filename);
            $Blog->images = $filename;
        }   
        $Blog->save();
        return redirect(url('blog'))->with('status','Article ajouté avec succès');
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
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
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
        $Blog = Blog::find($id);
        $Blog->titre = $request->input('titre');
        $Blog->categorie = $request->input('categorie');
        $Blog->extrait = $request->input('extrait');
        $Blog->message = $request->input('message'); 
        if($request->hasfile('images'))
        {
            $destination = 'uploads/Blog/'.$Blog->images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Blog/', $filename);
            $Blog->images = $filename;
        }   
        
        $Blog->update();
        return redirect(url('blog'))->with('status','Article mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::find($id);
        $destination = 'uploads/Blog/'.$Blog->images;
        
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $Blog->delete();
        return redirect()->back()->with('status','Articles Deleted Successfully');
    }

    public function detail($id){
        $Blog= Blog::find($id);
        return view('blog.detail', compact('Blog'));
    }
}
