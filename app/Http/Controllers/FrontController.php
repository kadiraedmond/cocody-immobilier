<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Vente;
use App\Models\Rdv;
use App\Models\Newsletter;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Visite;
use App\Models\Communication;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Newsletter = new Newsletter;
        $Newsletter->email = $request->input('email');
         
        $Newsletter->save();
        return redirect()->back()->with('status','Newsletter ajoutée avec succès');
    }


    public function storeee(Request $request)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function home()
    {
        // $pol= Livre::where('categorie','politique')->count();
        // $fin= Livre::where('categorie','finance')->count();
        // $eco= Livre::where('categorie','economie')->count();
        // $conpta= Livre::where('categorie','conptabilité')->count();
        // $entre= Livre::where('categorie','Entreprenariat')->count();
        // $dev= Livre::where('categorie','dev_perso')->count();
        // $droit= Livre::where('categorie','droit')->count();
        // $rh= Livre::where('categorie','ressource_humaine')->count();
        
        // $blog= Blog::take(4)->get();
        
        // $book = Livre::where('user_id',Auth::id())->get();
        // $user = auth()->user();
        // $nbre_like = $user->likedBooks()->count();

        $location= Location::where('status',1)->get();

        $ter= Location::where('type','Terrain')->count();
        $app= Location::where('type','Appartement')->count();
        $stud= Location::where('type','Studio')->count();
        $bur= Location::where('type','Bureaux')->count();
        $mai= Location::where('type','Maison')->count();
        $vil= Location::where('type','Villa')->count();
        $imm= Location::where('type','Immeuble')->count();
        $mag= Location::where('type','Magasin')->count();
        $ent= Location::where('type','Entrepôt')->count();

        $ters= Vente::where('type','Terrain')->count();
        $apps= Vente::where('type','Appartement')->count();
        $studs= Vente::where('type','Studio')->count();
        $burs= Vente::where('type','Bureaux')->count();
        $mais= Vente::where('type','Maison')->count();
        $vils= Vente::where('type','Villa')->count();
        $imms= Vente::where('type','Immeuble')->count();
        $mags= Vente::where('type','Magasin')->count();
        $ents= Vente::where('type','Entrepôt')->count();

        $blog= Blog::take(3)->get();
        $vente= Vente::where('status',1)->get();

        return view('welcome', compact('location','vente','blog' ,'ter','ters','app','apps','stud','studs','bur','burs','mai','mais','vil','vils','imm','imms','mag','mags','ent','ents'));
        
    }

    public function politique()
    {
        return view('pages.politique');
    }

    public function securite()
    {
        return view('pages.securite');
    }

    public function condition()
    {
        return view('pages.condition');
    }

    public function rdv()
    {
        return view('pages.rdv');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function expertise()
    {
        return view('pages.expertise');
    }

    public function construction()
    {
        return view('pages.construction');
    }

    public function gestion()
    {
        return view('pages.gestion');
    }

    public function aide()
    {
        return view('pages.aide');
    }

    public function mutation()
    {
        return view('pages.mutation');
    }

    public function ccm()
    {
        return view('pages.ccm');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blogs()
    {   
        $blog= Blog::all();
        return view('pages.blogs', compact('blog'));
    }

    public function blogs_detail($id)
    {   
        $blog= Blog::find($id);
        $blogs= Blog::all();
        return view('pages.blogs_detail', compact('blog','blogs'));
    }

    public function blogs_gestion()
    {   
        $blog= Blog::where('categorie', 'Gestion')->get();
        return view('pages.categorie_gestion', compact('blog'));
    }

     public function blogs_vente()
    {   
        $blog= Blog::where('categorie', 'Vente')->get();
        return view('pages.categorie_vente', compact('blog'));
    }

     public function blogs_location()
    {   
        $blog= Blog::where('categorie', 'Location')->get();
        return view('pages.categorie_location', compact('blog'));
    }

     public function blogs_construction()
    {   
        $blog= Blog::where('categorie', 'Construction')->get();
        return view('pages.categorie_construction', compact('blog'));
    }

     public function blogs_conseil()
    {   
        $blog= Blog::where('categorie', 'Conseils')->get();
        return view('pages.categorie_conseil', compact('blog'));
    }




    public function location()
    {
        $location = Location::all();
        return view('pages.location', compact('location'));
    }

    public function les_biens()
    {
        $vente = Vente::all();
        $location = Location::all();
    
        return view('pages.les_biens', compact('location','vente'));
    }

    public function vente()
    {
        $vente = Vente::all();
        return view('pages.ventes', compact('vente'));
    }

    public function construire()
    {
        return view('pages.construire');
    }

    public function foncier()
    {
        return view('pages.foncier');
    }

    public function client()
    {
        return view('pages.client');
    }

    public function partenaire()
    {
        return view('pages.partenaire');  
    }

    public function service_client()
    {
        return view('pages.services_client'); 
    }

    public function local()
    {
        $location = Location::take('4')->get();
        return view('pages.local', compact('location'));
    }

    public function vent()
    {
        $vente = Vente::take('4')->get();
        return view('pages.vent',compact('vente'));
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $local = Location::where('type', 'like', "%{$key}%")
            ->orWhere('type', 'like', "%{$key}%")
            ->orWhere('prix', 'like', "%{$key}%")
            ->orWhere('adresse', 'like', "%{$key}%")
            // ->orderBy('created_at', 'desc')
            ->get();

            $vent = Vente::where('type', 'like', "%{$key}%")
            ->orWhere('type', 'like', "%{$key}%")
            ->orWhere('prix', 'like', "%{$key}%")
            ->orWhere('adresse', 'like', "%{$key}%")
            // ->orderBy('created_at', 'desc')
            ->get();

            // $vent = Vente::where('type', 'like', "%{$key}%")
            // ->orWhere('type', 'like', "%{$key}%")
            // ->orWhere('prix', 'like', "%{$key}%")
            // ->orWhere('adresse', 'like', "%{$key}%")
            // // ->orderBy('created_at', 'desc')
            // ->get();

        return view('pages.recherche', [
            'key' => $key,
            'locations' => $local,
            'ventes' => $vent,
            // 'ventes' => $vent,
             
        ]);
    }



    // les pages categorie
    public function terrain()
    {
        $location = Location::where('type','Terrain')->get();
        $vente = Vente::where('type','Terrain')->get();
        $all = $location->concat($vente);
        return view('categorie.terrain', compact('location','vente','all'));
    }

    public function appartement()
    {
        $location = Location::where('type','Appartement')->get();
        $vente = Vente::where('type','Appartement')->get();
        $all = $location->concat($vente);
        return view('categorie.appartement', compact('location','vente','all'));
    }

    public function studio()
    {
        $location = Location::where('type','Studio')->get();
        $vente = Vente::where('type','Studio')->get();
        $all = $location->concat($vente);
        return view('categorie.studio', compact('location','vente','all'));
    }

    public function bureaux()
    {
        $location = Location::where('type','Bureaux')->get();
        $vente = Vente::where('type','Bureaux')->get();
        $all = $location->concat($vente);
        return view('categorie.bureaux', compact('location','vente','all'));
    }
    public function maison()
    {
        $location = Location::where('type','Maison')->get();
        $vente = Vente::where('type','Maison')->get();
        $all = $location->concat($vente);
        return view('categorie.maison', compact('location','vente','all'));
    }

    public function villa()
    {
        $location = Location::where('type','Villa')->get();
        $vente = Vente::where('type','Villa')->get();
        $all = $location->concat($vente);
        return view('categorie.villa', compact('location','vente','all'));
    }

    public function immeuble()
    {
        $location = Location::where('type','Immeuble')->get();
        $vente = Vente::where('type','Immeuble')->get();
        $all = $location->concat($vente);
        return view('categorie.immeuble', compact('location','vente','all'));
    }

    public function magasin()
    {
        $location = Location::where('type','Magasin')->get();
        $vente = Vente::where('type','Magasin')->get();
        $all = $location->concat($vente);
        return view('categorie.magasin', compact('location','vente','all'));
    }

    public function entrepot()
    {
        $location = Location::where('type','Entrepôt')->get();
        $vente = Vente::where('type','Entrepôt')->get();
        $all = $location->concat($vente);
        return view('categorie.magasin', compact('location','vente','all'));
    }

    public function visite($id)
    {
        $location= Location::find($id);
        return view('visite',compact('location'));
    }

    public function visites($id)
    {
        $vente= Vente::find($id);
        return view('visites',compact('vente'));
    }


    public function detail($id){
        if(Location::where('id', '$id'))
        {
          
            $location= Location::where('id', $id)->first();
           $relative = Location::where('type', $location->type)->take(4)->get();
           return view('location.detail', compact('location','relative'));
        }
       
       
    }


    public function detail_vente($id){
        if(Vente::where('id', '$id'))
        {
          
            $vente= Vente::where('id', $id)->first();
           $relative = Vente::where('type', $vente->type)->take(4)->get();
           return view('vente.detail', compact('vente','relative'));
        }
           
    }


    public function store_visite(Request $request)
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


    // les filtres

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


    public function filtrers(Request $request)
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
   
   public function reinitialiserFiltres()
   {
       return redirect(url('En_vente'));
   }
   

   public function filtrerss(Request $request)
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

    //   $tout = $vente->concat($location);
  
      return view('pages.les_biens', compact('vente','location'));
  
  }
  
  public function reinitialiserFiltress()
  {
      return redirect(url('les_bien'));
  }
  


}


 



