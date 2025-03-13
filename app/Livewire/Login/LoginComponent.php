<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email ,$password;
    protected $rules = [
        "email" => "required",
        "password" => "required",
    ];
    protected $messages = ["email.required" => "Obrigatorio", "password.required" => "Obrigatorio"];
    
   

    public function render()
    {
        return view('livewire.login.login-component')->layout("layouts.login.app");
    }
    

    public function signIn () {   
       
        $this->validate();
        try {
            if (Auth::attempt(["email" => $this->email, "password" => $this->password])) {
                if (Auth::user()->profile == "admin") {
                    return redirect()->route("dashboard.admin");
                }else if (Auth::user()->profile == "client") {
                    return redirect()->to("/");
                }

            }else{               
                return back()->with(["authenticationError" => "Credenciais incorretas!"]);
            }
           
        } catch (\Throwable $th) {
            return back()->with(["error" => $th->getMessage()]);
        }
    }
}
