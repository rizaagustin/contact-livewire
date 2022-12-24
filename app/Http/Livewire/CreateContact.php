<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateContact extends Component
{
    public $name; 
    public $phone;

    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.create-contact',[
            'contacts' => $contacts
        ]);
    }

    private function resetInputFields(){
        $this->name = '';
        $this->phone = '';
    }

    public function createPost()
    {
        Contact::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'phone' => $this->phone,
        ]);

        $this->resetInputFields();

    }   

}
