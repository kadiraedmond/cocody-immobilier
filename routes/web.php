<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontController::class, 'home'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
 
Route::get('visite/{id}', [App\Http\Controllers\FrontController::class, 'visite'])->name('visite');
Route::get('visitess/{id}', [App\Http\Controllers\FrontController::class, 'visites'])->name('visites');

Route::get('location', [App\Http\Controllers\LocationController::class, 'index']);
Route::get('add-location', [App\Http\Controllers\LocationController::class, 'create']);
Route::post('add-location', [App\Http\Controllers\LocationController::class, 'store']);
Route::get('edit-location/{id}', [App\Http\Controllers\LocationController::class, 'edit']);
Route::PUT('update-location/{id}', [App\Http\Controllers\LocationController::class, 'update']);
Route::delete('delete-location/{id}', [App\Http\Controllers\LocationController::class, 'destroy']);
Route::get('location-detail/{id}', [App\Http\Controllers\FrontController::class, 'detail']);
Route::get('location-details/{id}', [App\Http\Controllers\LocationController::class, 'details']);

Route::post('/biens/filtrer', [App\Http\Controllers\FrontController::class, 'filtrer']);
Route::post('En_location',  [App\Http\Controllers\FrontController::class, 'reinitialiserFiltre']);



Route::get('parametre', [App\Http\Controllers\ParametreController::class, 'index']);
Route::get('add-role', [App\Http\Controllers\ParametreController::class, 'create']);
Route::post('add-role', [App\Http\Controllers\ParametreController::class, 'store']);
 
Route::get('add-user', [App\Http\Controllers\ParametreController::class, 'creates']);
Route::post('add-user', [App\Http\Controllers\ParametreController::class, 'stores']);
Route::get('edit-user/{id}', [App\Http\Controllers\ParametreController::class, 'edit']);
Route::put('update-user/{id}', [App\Http\Controllers\ParametreController::class, 'update']);
Route::delete('delete-user/{id}', [App\Http\Controllers\ParametreController::class, 'destroy']);

Route::get( '/activer_bien/{id}', [App\Http\Controllers\LocationController::class, 'activer_loca']);
Route::get( '/desactiver_bien/{id}', [App\Http\Controllers\LocationController::class, 'desactiver_loca']);

// Route::get('locations/{Location}/activate', 'LocationController@activate')->name('locations.activate');
// Route::get('locations/{Location}/deactivate', 'LocationController@deactivate')->name('locations.deactivate');


Route::get('vente', [App\Http\Controllers\VenteController::class, 'index']);
Route::get('add-vente', [App\Http\Controllers\VenteController::class, 'create']);
Route::post('add-vente', [App\Http\Controllers\VenteController::class, 'store']);
Route::get('edit-vente/{id}', [App\Http\Controllers\VenteController::class, 'edit']);
Route::put('update-vente/{id}', [App\Http\Controllers\VenteController::class, 'update']);
Route::delete('delete-vente/{id}', [App\Http\Controllers\VenteController::class, 'destroy']);
Route::get('vente-details/{id}', [App\Http\Controllers\FrontController::class, 'detail_vente']);
Route::get('vente-detail/{id}', [App\Http\Controllers\VenteController::class, 'details']);
Route::post('filtrers', [App\Http\Controllers\FrontController::class, 'filtrers']);
Route::get('reinitialisers',  [App\Http\Controllers\FrontController::class, 'reinitialiserFiltres']);

Route::post('filtrerss', [App\Http\Controllers\FrontController::class, 'filtrerss']);
Route::get('reinitialiserss',  [App\Http\Controllers\FrontController::class, 'reinitialiserFiltress']);

Route::get( '/activer_ven/{id}', [App\Http\Controllers\VenteController::class, 'activer_ven']);
Route::get( '/desactiver_ven/{id}', [App\Http\Controllers\VenteController::class, 'desactiver_ven']);

Route::get('communication', [App\Http\Controllers\CommunicationController::class, 'index']);
Route::get('add-communication', [App\Http\Controllers\CommunicationController::class, 'create']);
Route::post('add-communication', [App\Http\Controllers\CommunicationController::class, 'store']);
Route::get('edit-communication/{id}', [App\Http\Controllers\CommunicationController::class, 'edit']);
Route::put('update-communication/{id}', [App\Http\Controllers\CommunicationController::class, 'update']);
Route::delete('delete-communication/{id}', [App\Http\Controllers\CommunicationController::class, 'destroy']);
Route::get('communication-detail/{id}', [App\Http\Controllers\CommunicationController::class, 'detail']);

Route::get('blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('add-blog', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('add-blog', [App\Http\Controllers\BlogController::class, 'store']);
Route::get('edit-blog/{id}', [App\Http\Controllers\BlogController::class, 'edit']);
Route::put('update-blog/{id}', [App\Http\Controllers\BlogController::class, 'update']);
Route::delete('delete-blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy']);
Route::get('detail-blog/{id}', [App\Http\Controllers\BlogController::class, 'detail']);
Route::post('comment', [App\Http\Controllers\CommentController::class, 'store']);
 


Route::get('visites', [App\Http\Controllers\VisiteController::class, 'index']);
Route::get('add-visite', [App\Http\Controllers\VisiteController::class, 'create']);
Route::post('add-visite', [App\Http\Controllers\FrontController::class, 'store_visite']);
Route::get('edit-visite/{id}', [App\Http\Controllers\VisiteController::class, 'edit']);
Route::put('edit-visite/{id}', [App\Http\Controllers\VisiteController::class, 'update']);
Route::delete('delete-visite/{id}', [App\Http\Controllers\VisiteController::class, 'destroy']);
Route::get('visite-detail/{id}', [App\Http\Controllers\VisiteController::class, 'detail']);

Route::get( '/activer_visite/{id}', [App\Http\Controllers\VisiteController::class, 'activer_visite']);
Route::get( '/desactiver_visite/{id}', [App\Http\Controllers\VisiteController::class, 'desactiver_visite']);


Route::get('newsletter', [App\Http\Controllers\NewsletterController::class, 'index']);
Route::get('add-newsletter', [App\Http\Controllers\NewsletterController::class, 'create']);
Route::post('add-newsletter', [App\Http\Controllers\FrontController::class, 'store']);
Route::get('edit-newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'edit']);
Route::put('edit-newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'update']);
Route::delete('delete-newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'destroy']);
Route::get('visite-newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'detail']);

Route::get('contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('add-contact', [App\Http\Controllers\ContactController::class, 'create']);
Route::post('add-contact', [App\Http\Controllers\FrontController::class, 'storeee']);
Route::get('edit-contact/{id}', [App\Http\Controllers\ContactController::class, 'edit']);
Route::put('edit-contact/{id}', [App\Http\Controllers\ContactController::class, 'update']);
Route::delete('delete-contact/{id}', [App\Http\Controllers\ContactController::class, 'destroy']);
Route::get('contact-details/{id}', [App\Http\Controllers\ContactController::class, 'detail']);



Route::get('add-rdv', [App\Http\Controllers\ContactController::class, 'creates']);
Route::post('add-rdv', [App\Http\Controllers\FrontController::class, 'stores']);
Route::get('edit-rdv/{id}', [App\Http\Controllers\ContactController::class, 'edits']);
Route::put('edit-rdv/{id}', [App\Http\Controllers\ContactController::class, 'updates']);
Route::delete('delete-rdv/{id}', [App\Http\Controllers\ContactController::class, 'destroys']);
Route::get('rdv-details/{id}', [App\Http\Controllers\ContactController::class, 'details']);

Route::get('Politiqque_de_confidentialité', [App\Http\Controllers\FrontController::class, 'politique']);
Route::get('Politique-securite', [App\Http\Controllers\FrontController::class, 'securite']);
Route::get('terme_condition', [App\Http\Controllers\FrontController::class, 'condition']);
Route::get('front_contact', [App\Http\Controllers\FrontController::class, 'contact']);
Route::get('rdv', [App\Http\Controllers\FrontController::class, 'rdv']);
Route::get('expertise', [App\Http\Controllers\FrontController::class, 'expertise']);
Route::get('constuction', [App\Http\Controllers\FrontController::class, 'construction']);
Route::get('aide', [App\Http\Controllers\FrontController::class, 'aide']);
Route::get('mutation', [App\Http\Controllers\FrontController::class, 'mutation']);
Route::get('comment_ca_marche', [App\Http\Controllers\FrontController::class, 'ccm']);
Route::get('faq', [App\Http\Controllers\FrontController::class, 'faq']);
Route::get('about', [App\Http\Controllers\FrontController::class, 'about']);
Route::get('blogs', [App\Http\Controllers\FrontController::class, 'blogs']);
Route::get('blog-details/{id}', [App\Http\Controllers\FrontController::class, 'blogs_detail']);
Route::get('blog-location', [App\Http\Controllers\FrontController::class, 'blogs_location']);
Route::get('blog-gestion', [App\Http\Controllers\FrontController::class, 'blogs_gestion']);
Route::get('blog-conseil', [App\Http\Controllers\FrontController::class, 'blogs_conseil']);
Route::get('blog-vente', [App\Http\Controllers\FrontController::class, 'blogs_vente']);
Route::get('blog-construction', [App\Http\Controllers\FrontController::class, 'blogs_construction']);


Route::get('En_location', [App\Http\Controllers\FrontController::class, 'location']);
Route::get('les_biens', [App\Http\Controllers\FrontController::class, 'les_biens']);
Route::get('En_vente', [App\Http\Controllers\FrontController::class, 'vente']);
Route::get('Foncier', [App\Http\Controllers\FrontController::class, 'foncier']);
Route::get('Construire', [App\Http\Controllers\FrontController::class, 'construire']);
Route::get('location_immobilier', [App\Http\Controllers\FrontController::class, 'local']);
Route::get('vente_immobilier', [App\Http\Controllers\FrontController::class, 'vent']);
Route::get('partenaire', [App\Http\Controllers\FrontController::class, 'partenaire']);
Route::get('client', [App\Http\Controllers\FrontController::class, 'client']);
Route::get('service_client', [App\Http\Controllers\FrontController::class, 'service_client']);
Route::get('gestion', [App\Http\Controllers\FrontController::class, 'gestion']);

Route::get('/search', [App\Http\Controllers\FrontController::class, 'search']);


Route::get('Terrain', [App\Http\Controllers\FrontController::class, 'terrain']);
Route::get('Appartement', [App\Http\Controllers\FrontController::class, 'appartement']);
Route::get('Studio', [App\Http\Controllers\FrontController::class, 'studio']);
Route::get('Bureaux', [App\Http\Controllers\FrontController::class, 'bureaux']);
Route::get('Maison', [App\Http\Controllers\FrontController::class, 'maison']);
Route::get('Villa', [App\Http\Controllers\FrontController::class, 'villa']);
Route::get('Immeuble', [App\Http\Controllers\FrontController::class, 'immeuble']);
Route::get('Magazin', [App\Http\Controllers\FrontController::class, 'magazin']);
Route::get('Entrepot', [App\Http\Controllers\FrontController::class, 'entrepot']);
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
