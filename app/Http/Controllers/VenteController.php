<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class VenteController extends Controller
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
        $Vente = Vente::all();
        $disp= Vente::where('status',1)->count();
        $occ= Vente::where('status',0)->count();
        $Locatio = Vente::count();
        $terrain = Vente::where('type' ,'terrain')->get();
        $appartement = Vente::where('type' ,'appartement')->get();
        $studio = Vente::where('type' ,'studio')->get();
        $bureaux = Vente::where('type' ,'bureaux')->get();
        $maison = Vente::where('type' ,'maison')->get();
        $villa = Vente::where('type' ,'villa')->get();
        $immeuble = Vente::where('type' ,'immeuble')->get();
        $magazin = Vente::where('type' ,'magazin')->get();
        $entrepot = Vente::where('type' ,'entrepot')->get();
        return view('vente.index', compact('Vente','terrain','appartement','studio','bureaux','maison','immeuble','magazin','entrepot','villa','Locatio','disp','occ'));
       
    }

    public function filtrer(Request $request)
 {
    $query = Vente::query();

    if ($request->filled('type')) {
        $query->where('type', $request->input('type'));
    }

    if ($request->filled('adresse')) {
        $query->where('adresse', 'like', '%' . $request->input('adresse') . '%');
    }

    if ($request->filled('prix')) {
        $query->where('prix', $request->input('prix'));
    }

    $vente = $query->get();

    return view('pages.ventes', compact('vente'));

}

public function reinitialiserFiltre()
{
    return redirect(url('En_vente'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vente.create');
    }

    //pour activer un product
  public function activer_ven($id){
    $vente= Vente::find($id);
    $vente->status=1;
        $vente->update();
        return redirect()->back()->with('status',
        'le bien  a ete bien desactiver');
        
        //pour desactiver un product
    }
  public function desactiver_ven($id){
   $vente= Vente::find($id);
        $vente->status=0;
        $vente->update();
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
        $Vente = new Vente;
        // $Vente->user_id = auth()->id();
        $Vente->type = $request->input('type');
        $Vente->presentation = $request->input('presentation');
        $Vente->adresse = $request->input('adresse');
        
        $Vente->prix = $request->input('prix');
        $Vente->superficie = $request->input('superficie');
        $Vente->climatisation = $request->input('climatisation');
        $Vente->douche = $request->input('douche');
        $Vente->cuisine = $request->input('cuisine');
        $Vente->balcon = $request->input('balcon');
        $Vente->sonnerie = $request->input('sonnerie');
        $Vente->alarme = $request->input('alarme');
        $Vente->detecteur = $request->input('detecteur');
        $Vente->securite = $request->input('securite');
        $Vente->groupe = $request->input('groupe');
        $Vente->niveau = $request->input('niveau');
        $Vente->cour = $request->input('cour');

        $Vente->ascenseur = $request->input('ascenseur');
        $Vente->caution = $request->input('condition');
        $Vente->nom = $request->input('nom');
        $Vente->prenoms = $request->input('prenoms');
        $Vente->telephone = $request->input('telephone');
        $Vente->resp_adresse = $request->input('resp_adresse');
        $Vente->configuration = $request->input('configuration');
        $Vente->status=1;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Vérifiez que c'est bien un objet UploadedFile avant d'appeler getClientOriginalName()
                if ($image instanceof \Illuminate\Http\UploadedFile) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    $image->move('uploads/Vente/', $filename); // Stockez les images dans le répertoire "public/storage/images"
                    $Vente->images = $filename;
                }
            }
            
        }

        if ($request->hasFile('imag')) {
            $file = $request->file('imag');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->imag = $filename;
            
        }

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->picture = $filename;
            
        }

        if ($request->hasFile('ima')) {
            $file = $request->file('ima');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->ima = $filename;
        }

        if ($request->hasFile('im')) {
            $file = $request->file('im');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->im = $filename;
            
        }


        if ($request->hasFile('pictur')) {
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->pictur = $filename;
            
        }

        if ($request->hasFile('pict')) {
            
            $file = $request->file('pict');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->pict = $filename;
            
        }

        if($request->hasfile('videos'))
        {
            $file = $request->file('videos');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->videos = $filename;
        }

        if($request->hasfile('resp_images'))
        {
            $file = $request->file('resp_images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->resp_images = $filename;
        }
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extention = $file->getClientOriginalName();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/Vente/', $filename);
        //     $Vente->image = $filename;
        // }
        
        $Vente->save();
        return redirect(url('vente'))->with('status','Vente ajoutée avec succès');
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
        $Vente = Vente::find($id);
        return view('vente.edit', compact('Vente'));
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
        $Vente = Vente::find($id);
        $Vente->type = $request->input('type');
        $Vente->presentation = $request->input('presentation');
        $Vente->adresse = $request->input('adresse');
        
        $Vente->prix = $request->input('prix');
        $Vente->superficie = $request->input('superficie');
        $Vente->climatisation = $request->input('climatisation');
        $Vente->douche = $request->input('douche');
        $Vente->cuisine = $request->input('cuisine');
        $Vente->balcon = $request->input('balcon');
        $Vente->sonnerie = $request->input('sonnerie');
        $Vente->alarme = $request->input('alarme');
        $Vente->detecteur = $request->input('detecteur');
        $Vente->securite = $request->input('securite');
        $Vente->groupe = $request->input('groupe');
        $Vente->niveau = $request->input('niveau');
        $Vente->cour = $request->input('cour');
        $Vente->ascenseur = $request->input('ascenseur');
        $Vente->caution = $request->input('condition');
        $Vente->nom = $request->input('nom');
        $Vente->prenoms = $request->input('prenoms');
        $Vente->telephone = $request->input('telephone');
        $Vente->resp_adresse = $request->input('resp_adresse');
        $Vente->configuration = $request->input('configuration');
       
        if($request->hasfile('images'))
        {
            $destination = 'uploads/Vente/'.$Vente->images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->images = $filename;
        }


        if($request->hasfile('imag'))
        {
            $destinatio = 'uploads/Vente/'.$Vente->imag;
            if(File::exists($destinatio))
            {
                File::delete($destinatio);
            }
            $file = $request->file('imag');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->imag = $filename;
        }

        if($request->hasfile('picture'))
        {
            $destinati = 'uploads/Vente/'.$Vente->picture;
            if(File::exists($destinati))
            {
                File::delete($destinati);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->picture = $filename;
        }

        if($request->hasfile('pictur'))
        {
            $destination = 'uploads/Vente/'.$Vente->pictur;
            if(File::exists($destinat))
            {
                File::delete($destinat);
            }
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->pictur = $filename;
        }

        if($request->hasfile('ima'))
        {
            $destination = 'uploads/Vente/'.$Vente->ima;
            if(File::exists($destina))
            {
                File::delete($destina);
            }
            $file = $request->file('ima');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->ima = $filename;
        }


        if($request->hasfile('pictur'))
        {
            $destin = 'uploads/Vente/'.$Vente->pictur;
            if(File::exists($destin))
            {
                File::delete($destin);
            }
            $file = $request->file('pictur');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->pictur = $filename;
        }

        if($request->hasfile('pict'))
        {
            $desti = 'uploads/Vente/'.$Vente->pict;
            if(File::exists($desti))
            {
                File::delete($desti);
            }
            $file = $request->file('pict');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->pict = $filename;
        }


        if($request->hasfile('videos'))
        {
            $destination = 'uploads/Vente/'.$Vente->videos;
            if(File::exists($destinations))
            {
                File::delete($destinations);
            }
            $file = $request->file('videos');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->videos = $filename;
        }

        if($request->hasfile('resp_images'))
        {
            $destination = 'uploads/Vente/'.$Vente->resp_images;
            if(File::exists($destinationn))
            {
                File::delete($destinationn);
            }
            $file = $request->file('resp_images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/Vente/', $filename);
            $Vente->resp_images = $filename;
        }
         
        $Vente->update();
        return redirect(url('vente'))->with('status','Vente mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vente = Vente::find($id);
        $destination = 'uploads/Vente/'.$Vente->images;
        $destinatio = 'uploads/Vente/'.$Vente->imag;
        $destinati = 'uploads/Vente/'.$Vente->picture;
        $destinat = 'uploads/Vente/'.$Vente->pictu;
        $destina = 'uploads/Vente/'.$Vente->ima;
        $destin = 'uploads/Vente/'.$Vente->pictur;
        $desti = 'uploads/Vente/'.$Vente->pict;

        $destinations = 'uploads/Vente/'.$Vente->videos;
        $destinationn = 'uploads/Vente/'.$Vente->resp_images;
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
        $Vente->delete();
        return redirect(url('vente'))->with('status','Vente supprimée avec succès');
    }

    public function detail($id){
        if(Vente::where('id', '$id'))
        {
          
            $vente= Vente::where('id', $id)->first();
           $relative = Vente::where('type', $vente->type)->take(4)->get();
           return view('vente.detail', compact('vente','relative'));
        }
           
    }

    public function details($id){
        if(Vente::where('id', '$id'))
        {
          
            $vente= Vente::where('id', $id)->first();
        //    $relative = Location::where('type', $location->type)->take(4)->get();
           return view('vente.details', compact('vente'));
        }
       
       
    }
}
