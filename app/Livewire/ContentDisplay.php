<?php

namespace App\Livewire;

use Livewire\Component;

class ContentDisplay extends Component
{
    public $sideBarItems;
    public $activeSideBar = '';
    protected $listeners = ['setAcivatedSideBar' => 'updateActive'];

    public function mount($sideBarItems = [])
    {
        $this->sideBarItems = $sideBarItems;
        $this->activeSideBar = session('activeSideBar', $this->sideBarItem[0]['name'] ?? '');
    }

    public function updateActive($activatedSideBar)
    {
        $this->activeSideBar = $activatedSideBar;
    }

    public function render()
    {
        return view('livewire.content-display');
    }
}
