<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Validation\ValidationException;
use Roddy\FirestoreEloquent\Auth\FAuth;

class Authentication extends Component
{
    public $username;
    public $password;

    public function login()
    {
        try {
            $this->validate([
                'username'    => 'required|min:5|max:18',
                'password' => 'required|min:5|max:18|regex:/^[a-zA-Z0-9]+$/',
            ], [
                'username.required'    => 'Username is required.',
                'username.min'      => 'Username must be at least 5 characters.',
                'username.max'      => 'Username must not be more than 18 characters.',
                'password.required' => 'Password is required.',
                'password.min'      => 'Password must be at least 5 characters.',
                'password.max'      => 'Password must not be more than 18 characters.',
                'password.regex'    => 'Password must contain only letters and numbers (no special characters).',
            ]);
        } catch (ValidationException $e) {
            $message = $e->validator->errors()->first();
            return $this->dispatch('swal-toast', icon : 'error', title : $message);
        }

        if (!FAuth::attempt(['username' => $this->username, 'password' => $this->password])) {
            return $this->dispatch('swal-toast', icon : 'error', title : 'Invalid credentials.');
        }

        if(FAuth::user()->role === 'student'){
            return $this->dispatch('swal-toast', icon : 'error', title : 'Student accounts cannot log in here.');
        }

        // if(FAuth::user()->role === 'instructor' && FAuth::user()->instructor()->status !== 'active'){
        //     return notyf()->position('x', 'center')->position('y', 'top')->error('You cannot login because your account is '.FAuth::user()->status);
        // }

        request()->session()->regenerate();
        $this->dispatch('swal-toast', icon : 'success', title : 'You\'ve successfully logged in.');
        return redirect()->route('authentication');
    }

    public function render()
    {
        return view('livewire.authentication');
    }
}
