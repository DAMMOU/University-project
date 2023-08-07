<?php


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
use App\Http\Livewire\Client\Accueil;
use App\Http\Livewire\Client\Etablissement as ClientEtablissement;
use App\Http\Livewire\Client\Module;
use App\Http\Livewire\Client\ContactUs;
use App\Http\Livewire\Client\Cvs;
use App\Http\Livewire\Client\Exemples;
use App\Http\Livewire\Client\Universites;


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
//Route::get('/e', function(){
//    return view('etablissements');
//})->name('welcome');
//Route::get('/', function(){
//    $universites = ModelsUniversite::get(['id','nom','ville_id']);
//    $etablissements = Etablissement::get(['id','nom','ville_id','universite_id']);
//    return view('accueil.welcome',compact('universites','etablissements'));
//})->name('welcome');
////Route::get('/accueil', Accueil::class)->name('accueil');


  





Route::get('/', Accueil::class)->name('accueil');
Route::get('/universites', Universites::class)->name('universites');
Route::get('/contact-us', ContactUs::class)->name('contact-us');

Route::get('/etablissement/{id}', ClientEtablissement::class)->name('universites.etablissement');
Route::get('/module/{id}', Module::class);
Route::get('/exemples/cv/{id}', Cvs::class)->name('exemples.cvs');
Route::get('/inscription', Inscription::class)->name('inscription');

Route::get('exemples', Exemples::class)->name('exemples');

Route::get('/inscription', Utilisateurs::class)->name('inscription');

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
            
