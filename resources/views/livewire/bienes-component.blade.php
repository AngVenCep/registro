<div>
    <div class="container border  mt-3 ">

        <div class="input-group-append">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary  mt-5" data-toggle="modal" data-target="#modelId">
                REGISTRAR
            </button>
            <button type="button" class="btn btn-primary  mt-5 ml-auto" wire:click="regresar()">Regresar</button>
 
        </div>
        <div class="input-group mb-3 mt-3 ">
            <input wire:model="buscarbienes"class="form-control" type="search" placeholder="Buscar" aria-label="Search">

        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre de bienes</th>
                    <th class="btn-group d-flex justify-content-end align-items-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bienes as $biene)
                    <tr>
                        <td>{{$biene->id}}</td>
                        <td>{{$biene->nombre_bienes}}</td>

                        <td>
                            <div class="d-flex justify-content-end align-items-end">
                                <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                    data-target="#modelId" wire:click.prevent='EditarBienes("{{ $biene->id }}")'>
                                    <i class="far fa-edit"></i>Editar</button>
                                <button type="button" class="btn btn-danger m-2"
                                    wire:click='EliminarBienes("{{ $biene->id }}")'>Eliminar</button>
                            </div>

                        </td>
                @endforeach

                </tr>

            </tbody>
        </table>
            {{ $bienes->links() }}
    </div>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">INGRESE BIENES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre_bienes">Nombre Bienes</label>
                        <input type="text" name="" id="nombre_bienes"
                            aria-describedby="helpId" wire:model.lazy='nombre_bienes'
                            class="form-control @error('nombre_bienes') is-invalid @enderror">
                        @error('nombre_bienes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        data-dismiss="modal"wire:click='StoreBienes'>Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
