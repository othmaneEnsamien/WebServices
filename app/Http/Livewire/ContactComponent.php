<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $nom;
    public $email;
    public $mobile;
    public $message;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'mobile' => 'required',
            'message' => 'required',
        ]);
    }

    public function SendContact()
    {
        $this->validate([
            'email' => 'required|email',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->nom = $this->nom;
        $contact->email = $this->email;
        $contact->mobile = $this->mobile;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('contact_message', 'thanks ,message has been sent successfully');
    }
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
