<?php

namespace App\Http\Livewire;

use App\Models\Biene;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
class BienesComponent extends Component
{   
    use LivewireWithPagination;
     public $buscarbienes;
    public $nombre_bienes;

    public function render()
    {
           if ($this->buscarbienes == "") {
            $bienes = Biene::paginate(4);
        } else {
            $bienes = Biene::where('nombre_bienes', 'like', "%$this->buscarbienes%")->paginate(5);
        }
        return view('livewire.bienes-component', compact('bienes'));
    }
    public function StoreBienes()
    {

         $bienes = new Biene();
         $bienes->nombre_bienes = $this->nombre_bienes;
         $bienes->save();
        $this->limpiar();
    }
    public function limpiar()
    {
        $this->nombre_bienes = "";
    }

    public function EditarBienes($id)
    {
        $biene = Biene::find($id);
        $this->nombre_bienes = $biene->nombre_bienes;
    }

    public function EliminarBienes(Biene $biene)
    {
        $biene->delete();
        $this->emit('swalDefaultSuccess', 'Registro eliminado correctamente.');
    }
   
    public function regresar()
    {
        return redirect()->route('welcome');
    }
    
}
