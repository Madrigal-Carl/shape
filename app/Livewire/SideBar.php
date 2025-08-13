<?php

namespace App\Livewire;

use Livewire\Component;

class SideBar extends Component
{
    public $sideBarItems;
    public $activeSideBar;

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

    public function render()
    {
        return view('livewire.side-bar');
    }
}
