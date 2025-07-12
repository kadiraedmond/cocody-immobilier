<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
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
        $Location = Location::all();
        $disp= Location::where('status',1)->count();
        $occ= Location::where('status',0)->count();
        $Locatio = Location::count();
        $terrain = Location::where('type' ,'terrain')->get();
        $appartement = Location::where('type' ,'appartement')->get();
        $studio = Location::where('type' ,'studio')->get();
        $bureaux = Location::where('type' ,'bureaux')->get();
        $maison = Location::where('type' ,'maison')->get();
        $villa = Location::where('type' ,'villa')->get();
        $immeuble = Location::where('type' ,'immeuble')->get();
        $magazin = Location::where('type' ,'magazin')->get();
        $entrepot = Location::where('type' ,'entrepot')->get();
        return view('location.index', compact('Location','terrain','appartement','studio','bureaux','maison','immeuble','magazin','entrepot','villa','Locatio','disp','occ'));
    }

    public function filtrer(Request $request)
{
    $query = Location::query();

    if ($request->filled('type')) {
        $query->where('type', $request->input('type'));
    }

    if ($request->filled('adresse')) {
        $query->where('adresse', 'like', '%' . $request->input('adresse') . '%');
    }

    if ($request->filled('prix')) {
        $query->where('prix', $request->input('prix'));
    }

    $location = $query->get();

    return view('pages.location', compact('location'));

}

public function reinitialiserFiltre()
{
    return redirect(url('En_location'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
    }

  //pour activer un product
  public function activer_loca($id){
    $location= Location::find($id);
    $location->status=1;
        $location->update();
        return redirect()->back()->with('status',
        'le bien  a ete bien desactiver');
        
        //pour desactiver un product
    }
  public function desactiver_loca($id){
   $location= Location::find($id);
        $location->status=0;
        $location->update();
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
        $Location = new Location;
        // $Location->user_id = auth()->id();
        $Location->type = $request->input('type');
        $Location->presentation = $request->input('presentation');
        $Location->adresse = $request->input('adresse');
        $Location->configuration = $request->input('configuration');
        $Location->usage = $request->input('usage');
        $Location->prix = $request->input('prix');
        $Location->superficie = $request->input('superficie');
        $Location->climatisation = $request->input('climatisation');
        $Location->douche = $request->input('douche');
        $Location->cuisine = $request->input('cuisine');
        $Location->balcon = $request->input('balcon');
        $Location->sonnerie = $request->input('sonnerie');
        $Location->alarme = $request->input('alarme');
        $Location->detecteur = $request->input('detecteur');
        $Location->securite = $request->input('securite');
        $Location->groupe = $request->input('groupe');
        $Location->niveau = $request->input('niveau');
        $Location->cour = $request->input('cour');

        $Location->ascenseur = $request->input('ascenseur');
        $Location->caution = $request->input('caution');
        $Location->avance = $request->input('avance');
        $Location->nom = $request->input('nom');
        $Location->prenoms = $request->input('prenoms');
        $Location->telephone = $request->input('telephone');
        $Location->resp_adresse = $request->input('resp_adresse');
        $Location->status=1;

        // if($request->hasfile('images'))
        // {
        //     $file = $request->file('images');
        //     $extention = $file->getClientOriginalName();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/Location/', $filename);
        //     $Location->images = $filename;
        // }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Vérifiez que c'est bien un objet UploadedFile avant d'appeler getClientOriginalName()
                if ($image instanceof \Illuminate\Http\UploadedFile) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    $image->move('uploads/Location/', $filename); // Stockez les images dans le répertoire "public/storage/images"
                    $Location->images = $filename;
                }
            }
            
        }

        if ($request->hasFile('imag')) {
            $file = $request->file('imag');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->imag = $filename;
            
        }

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->picture = $filename;
            
        }

        if ($request->hasFile('ima')) {
            $file = $request->file('ima');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->ima = $filename;
        }

        if ($request->hasFile('im')) {
            $file = $request->file('im');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->im = $filename;
            
        }


        if ($request->hasFile('pictur')) {
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->pictur = $filename;
            
        }

        if ($request->hasFile('pict')) {
            
            $file = $request->file('pict');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->pict = $filename;
            
        }


        if($request->hasfile('videos'))
        {
            $file = $request->file('videos');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->videos = $filename;
        }

        if($request->hasfile('resp_images'))
        {
            $file = $request->file('resp_images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->resp_images = $filename;
        }
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extention = $file->getClientOriginalName();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/Location/', $filename);
        //     $Location->image = $filename;
        // }
        
        $Location->save();
        return redirect(url('location'))->with('status','Bien en location ajouté avec succès');
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
        $Location = Location::find($id);
        return view('location.edit', compact('Location'));
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
        $Location = Location::find($id);
        $Location->type = $request->input('type');
        $Location->presentation = $request->input('presentation');
        $Location->adresse = $request->input('adresse');
        $Location->configuration = $request->input('configuration');
        $Location->usage = $request->input('usage');
        $Location->prix = $request->input('prix');
        $Location->superficie = $request->input('superficie');
        $Location->climatisation = $request->input('climatisation');
        $Location->douche = $request->input('douche');
        $Location->cuisine = $request->input('cuisine');
        $Location->balcon = $request->input('balcon');
        $Location->sonnerie = $request->input('sonnerie');
        $Location->alarme = $request->input('alarme');
        $Location->detecteur = $request->input('detecteur');
        $Location->securite = $request->input('securite');
        $Location->groupe = $request->input('groupe');
        $Location->niveau = $request->input('niveau');
        $Location->cour = $request->input('cour');

        $Location->ascenseur = $request->input('ascenseur');
        $Location->caution = $request->input('caution');
        $Location->avance = $request->input('avance');
        $Location->nom = $request->input('nom');
        $Location->prenoms = $request->input('prenoms');
        $Location->telephone = $request->input('telephone');
        $Location->resp_adresse = $request->input('resp_adresse');
        if($request->hasfile('images'))
        {
            $destination = 'uploads/Location/'.$Location->images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->images = $filename;
        }


        if($request->hasfile('imag'))
        {
            $destinatio = 'uploads/Location/'.$Location->imag;
            if(File::exists($destinatio))
            {
                File::delete($destinatio);
            }
            $file = $request->file('imag');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->imag = $filename;
        }

        if($request->hasfile('picture'))
        {
            $destinati = 'uploads/Location/'.$Location->picture;
            if(File::exists($destinati))
            {
                File::delete($destinati);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->picture = $filename;
        }

        if($request->hasfile('pictur'))
        {
            $destination = 'uploads/Location/'.$Location->pictur;
            if(File::exists($destinat))
            {
                File::delete($destinat);
            }
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->pictur = $filename;
        }

        if($request->hasfile('ima'))
        {
            $destination = 'uploads/Location/'.$Location->ima;
            if(File::exists($destina))
            {
                File::delete($destina);
            }
            $file = $request->file('ima');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->ima = $filename;
        }


        if($request->hasfile('pictur'))
        {
            $destin = 'uploads/Location/'.$Location->pictur;
            if(File::exists($destin))
            {
                File::delete($destin);
            }
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->pictur = $filename;
        }

        if($request->hasfile('pict'))
        {
            $desti = 'uploads/Location/'.$Location->pict;
            if(File::exists($desti))
            {
                File::delete($desti);
            }
            $file = $request->file('pict');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->pict = $filename;
        }

        if($request->hasfile('videos'))
        {
            $destinations = 'uploads/Location/'.$Location->videos;
            if(File::exists($destinations))
            {
                File::delete($destinations);
            }
            $file = $request->file('videos');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->videos = $filename;
        }

        if($request->hasfile('resp_images'))
        {
            $destinationn = 'uploads/Location/'.$Location->resp_images;
            if(File::exists($destinationn))
            {
                File::delete($destinationn);
            }
            $file = $request->file('resp_images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Location/', $filename);
            $Location->resp_images = $filename;
        }
         
        $Location->update();
        return redirect(url('location'))->with('status','Bien en location modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Location = Location::find($id);
        $destination = 'uploads/Location/'.$Location->images;
        $destinatio = 'uploads/Location/'.$Location->imag;
        $destinati = 'uploads/Location/'.$Location->picture;
        $destinat = 'uploads/Location/'.$Location->pictu;
        $destina = 'uploads/Location/'.$Location->ima;
        $destin = 'uploads/Location/'.$Location->pictur;
        $desti = 'uploads/Location/'.$Location->pict;

        $destinations = 'uploads/Location/'.$Location->videos;
        $destinationn = 'uploads/Location/'.$Location->resp_images;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        if(File::exists($destinations))
        {
            File::delete($destinations);
        }

        if(File::exists($destinationn))
        {
            File::delete($destinationn);
        }

        if(File::exists($destinatio))
        {
            File::delete($destinatio);
        }

        if(File::exists($destinati))
        {
            File::delete($destinati);
        }

        if(File::exists($destinat))
        {
            File::delete($destinat);
        }

        if(File::exists($destina))
        {
            File::delete($destina);
        }

        if(File::exists($destin))
        {
            File::delete($destin);
        }
        if(File::exists($desti))
        {
            File::delete($desti);
        }

        if(File::exists($destinat))
        {
            File::delete($destinat);
        }

        if(File::exists($destinat))
        {
            File::delete($destinat);
        }
        $Location->delete();
        return redirect(url('location'))->with('status','Bien en location supprimé avec succès');
    }

    public function detail($id){
        if(Location::where('id', '$id'))
        {
          
            $location= Location::where('id', $id)->first();
           $relative = Location::where('type', $location->type)->take(4)->get();
           return view('location.detail', compact('location','relative'));
        }
       
       
    }


    public function details($id){
        if(Location::where('id', '$id'))
        {
          
            $location= Location::where('id', $id)->first();
        //    $relative = Location::where('type', $location->type)->take(4)->get();
           return view('location.details', compact('location'));
        }
       
       
    }

    public function parametre(){ 

        $Location= Location::get();
        // $relative = Location::where('type', $location->type)->take(4)->get();
        return view('parametre', compact('Location'));   
       
    }
}
