<?php

/////////////////////////////// Admin ////////////////////////////////////
use App\Http\Controllers\LocaleController;

use App\Http\Livewire\Admin\CategorieEtablissements;
use App\Http\Livewire\Admin\Etablissements;
use App\Http\Livewire\Admin\Filieres;
use App\Http\Livewire\Admin\Universite;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\Admin\Villes;
use App\Http\Livewire\Admin\VueGlobale;
use App\Http\Livewire\Admin\Formations;
use App\Http\Livewire\Admin\Modules;
use App\Http\Livewire\Admin\Permissions;
use App\Http\Livewire\Admin\Regions;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\TypeEtablissements;
use App\Http\Livewire\Admin\Cours;

/////////////////////////////// Client ////////////////////////////////////
use App\Http\Livewire\Client\Accueil;
use App\Http\Livewire\Client\Etablissement as ClientEtablissement;
use App\Http\Livewire\Client\Module;
use App\Http\Livewire\Client\ContactUs;
use App\Http\Livewire\Client\Cvs;
use App\Http\Livewire\Client\Exemples;
use App\Http\Livewire\Client\Universites;
use App\Http\Livewire\Client\ChercheFormations;
use App\Http\Livewire\Client\Formation as ClientFormation ;
use App\Http\Livewire\Client\Inscription;

/////////////////////////////// __Lafac_Store__ ////////////////////////////////////
use App\Http\Livewire\Lafacstore\LafacStore;
use App\Http\Livewire\Lafacstore\About;
use App\Http\Livewire\Lafacstore\Contact;
/////////////////////////////// __Portfolio__ ////////////////////////////////////
use App\Http\Controllers\PortfolioController;
;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// FRONTEND ROUTES
Route::get('/', Accueil::class)->name('accueil');
Route::get('/universites', Universites::class)->name('universites');
Route::get('/contact-us', ContactUs::class)->name('contact-us');

Route::get('{universite}/{etablissement}/formations', ClientEtablissement::class)->name('universites.etablissement');
Route::get('/module/{id}', Module::class);
Route::get('/exemples/cv/{id}', Cvs::class)->name('exemples.cvs');

Route::get('/exemples', Exemples::class)->name('exemples');
Route::get('/inscription', Inscription::class)->name('inscription');
Route::get('/chercher-formations', ChercheFormations::class)->name('chercher-formations');
Route::get('{universite}/{etablissement}/formations/{id}/{intitule}', ClientFormation::class)->name('formations');


// LOCALE ROUTE
Route::get('locale/{lang}',[LocaleController::class, 'language'])->name('locale');

// Lafacstore ROUTES
Route::middleware(['web'])->group(function () {
    Route::get('/lafacStore', LafacStore::class)->name('lafac-store');
    Route::get('/lafacStore/about-us', About::class)->name('lafac-store.about-us');
    Route::get('/lafacStore/ikhan', Contact::class)->name('lafac-store.contact-us');

   
});


// Portfolio ROUTES
Route::controller(PortfolioController::class)->group(function () {
    Route::get('portfolio',[PortfolioController::class, 'index'])->name('portfolio');
    //Route::post('portfolio/store',[PortfolioController::class, 'store'])->name('portfolio.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



 /// Le groupe des routes relative aux uniquement superadmins  
Route::group([
    'middleware' => ['auth', 'auth.superadmin'],
    'as' => 'superadmin.'
    ],function(){
        Route::group([
            'prefix' => 'habilitations',
            'as' => 'habilitations.',
            ], function(){
                Route::get('/utilisateurs', User::class)->name('users.index')->middleware('auth.superadmin');
                Route::get('/roles', Roles::class)->name('roles.index')->middleware('auth.superadmin');
                Route::get('/permissions', Permissions::class)->name('permissions.index')->middleware('auth.superadmin');
                
        });
        Route::group([
                'prefix' => 'dashboard',
                'as' => 'dashboard.',
                ], function(){
                    Route::get('/vue-globale', VueGlobale::class)->name('vue-globale')->middleware('auth.superadmin');
                });
        Route::group([
            'prefix' => 'gestions',
            'as' => 'gestions.',
            ], function(){   
                Route::get('/regions', Regions::class)->name('regions.index')->middleware('auth.superadmin');
                Route::get('/villes', Villes::class)->name('villes.index')->middleware('auth.superadmin');             
                Route::get('/universites', Universite::class)->name('universites.index')->middleware('auth.superadmin');
                Route::get('etablissements/types', TypeEtablissements::class)->name('etablissements.types.index')->middleware('auth.superadmin');
                Route::get('etablissements/categories', CategorieEtablissements::class)->name('etablissements.categories.index')->middleware('auth.superadmin');
                Route::get('/etablissements', Etablissements::class)->name('etablissements.index')->middleware('auth.superadmin');
                Route::get('/formations', Formations::class)->name('formations.index')->middleware('auth.superadmin');
                Route::get('/filieres', Filieres::class)->name('filieres.index')->middleware('auth.superadmin');
                Route::get('/modules', Modules::class)->name('modules.index')->middleware('auth.superadmin');
                Route::get('/exemples', Exemples::class)->name('exemples.index')->middleware('auth.superadmin');
                Route::get('/cours', Cours::class)->name('cours.index')->middleware('auth.superadmin');
                Route::get('/td', Exemples::class)->name('td.index')->middleware('auth.superadmin');
                Route::get('/tp', Exemples::class)->name('tp.index')->middleware('auth.superadmin');

    });
});

//Route::get('/habilitations/utilisateurs', [App\Http\Controllers\UserController::class,'index'])
//        ->name('utilisateurs')
//        ->middleware('auth.superadmin');
//
            
