<?php

namespace App\Livewire;

use App\Models\Account;
use Livewire\Component;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Roddy\FirestoreEloquent\Auth\FAuth;

class SideBar extends Component
{
    public $sideBarItems;
    public $activeSideBar;
    public $listeners = ["logout" => "logout"];

    public function mount($sideBarItems = [])
    {
        $this->sideBarItems = $sideBarItems;
        $this->activeSideBar = session('activeSideBar', $this->sideBarItems[0]['name']);
        session(['activeSideBar' => $this->activeSideBar]);
    }

    public function setActiveSideBar($activatedSideBar)
    {
        $this->activeSideBar = $activatedSideBar;
        session(['activeSideBar' => $activatedSideBar]);
        $this->dispatch('setAcivatedSideBar', $activatedSideBar);
    }

    public function logout(Request $request)
    {
        FAuth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function logoutConfirm()
    {
        $this->dispatch('show-logout-confirm');
    }

    public function render()
    {
        return view('livewire.side-bar');
    }
}
