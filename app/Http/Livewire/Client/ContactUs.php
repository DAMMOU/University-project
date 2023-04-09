<?php

namespace App\Http\Livewire\Client;

use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;


class ContactUs extends Component
{
    public $newLine = [];

    protected $rules = [
       
        'newLine.message'=>'required|max:1500',
        'newLine.subject'=>'required|max:255',
        'newLine.fullName'=>'required|max:255',
        'newLine.phone'=>'required|max:255',
        'newLine.email'=>'required|email',
       
    ];
    
    public function render()
    {    
        return view('livewire.client.contact-us.contact-us')
            ->extends('layouts.accueil')
            ->section('contenu');
    }


////////////////////////////////////////////  //////////////////////////////////////////////////////////
    

    public function addLine()
    {
        $validatedData = $this->validate();
   
        $data = $validatedData['newLine'];
        
        Mail::to('udammou@gmail.com')->send(new ContactUsMailable($data));
        session()->flash('message',"Merci, votre message a été envoyé avec succès.");

        $this->reset();
    }
   

/////////////////////////////////////////  ///////////////////////////////////////////////////
   

   
   
}
