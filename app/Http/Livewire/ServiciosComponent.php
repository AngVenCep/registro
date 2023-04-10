<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class ServiciosComponent extends Component
{
    use LivewireWithPagination;
    public $buscar;
    public $nombre_servicio;

    public function render()
    {

        if ($this->buscar == "") {
            $servicios = Servicio::paginate(4);
        } else {
            $servicios = Servicio::where('nombre_servicio', 'like', "%$this->buscar%")->paginate(5);
        }
        return view('livewire.servicios-component', compact('servicios'));
    }
    public function store()
    {

        $servicio = new Servicio();
        $servicio->nombre_servicio = $this->nombre_servicio;
        $servicio->save();
        $this->limpiar();
    }
    public function limpiar()
    {
        $this->nombre_servicio = "";
    }

    public function Editar($id)
    {
        $servicio = Servicio::find($id);
        $this->nombre_servicio = $servicio->nombre_servicio;
    }

    // public function update($id){
    //     $servicio=Servicio::find($id);
    //     $servicio->nombre_servicio= $this->nombre_servicio;
    //     $servicio->save;
    //     $this->clear();
    //     }
    public function Eliminar(Servicio $servicio)
    {
        $servicio->delete();
        $this->emit('swalDefaultSuccess', 'Registro eliminado correctamente.');
    }
   
    public function regresar()
    {
        return redirect()->route('welcome');
    }
   
}
