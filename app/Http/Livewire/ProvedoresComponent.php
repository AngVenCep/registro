<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Routing\Redirector;

class ProvedoresComponent extends Component
{
   
    public function render()
    {
        return view('livewire.provedores-component');
    }

    public function servicios()
{
        return redirect()->route('servicios');
}

public function bienes()
{
        return redirect()->route('bienes');
}

}
