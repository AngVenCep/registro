<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h1>Proveedores</h1>
                        <button type="button" class="btn btn-primary" style="float: right;"data-toggle="modal"
                            data-target="#modalresitro">registra nuevos
                            Proveedor</button>
                    </div>

                    <div class="card-body">

                    </div>


                </div>
            </div>
        </div>
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modalresitro" tabindex="-1" role="dialog"
            aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ingrese Nuevo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                                <div class="form-group ">
                                    <div class="form-group mb-3" >
                                        <label for="nombre">ruc</label>
                                        <input type="text" class="form-control" id="nombre" wire:model="nombre">
                                        @error('nombre')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <label>Nombre de empresa</label>
                                    <input wire:model.lazy="#" type="text"
                                        class="form-control mb-3 @error('#') is-invalid @enderror">
                                    @error('#')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="direccion">razon_social</label>
                                    <input type="text" class="form-control" id="direccion" wire:model="direccion">
                                    @error('direccion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="telefono">representate_legal</label>
                                    <input type="text" class="form-control" id="telefono" wire:model="telefono">
                                    @error('telefono')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">domicilio_legal</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">departamento_provincia_distrito</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">actividad_econmica</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">numero_celular</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">correo_electronico</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">rnp</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">cuenta_cci</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">regimen_tributario</label>
                                    <input type="email" class="form-control" id="email" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <label for="" class="col-4"></label>
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button wire:click.prevent="saveBienes" type="button"
                                class="btn btn-primary">Registrar</button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th class="text-right" style="text-align: right;">procesos o intercambio</th>
                    <th class="d-flex justify-content-end ">acciones</th>

                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($rbienes as $rbiene) --}}
                <tr>

                    <td>1</td>
                    <td>CAJA HUANCAYO</td>
                    <td>
                        <div class="d-flex justify-content-end ">
                            <button type="button" class="btn btn-success m-2" wire:click="bienes">
                                <i class="far fa-edit"></i>Bienes
                            </button>
                            <button type="button" class="btn btn-warning m-2"  wire:click='servicios'>
                                Servicios
                                
                            </button>
                        
                        </div>

                    </td>
                    <td>
                        <div class="d-flex justify-content-end ">
                            <button type="button" class="btn btn-primary m-2">
                                <i class="far fa-edit"></i>Editar</button>
                            <button type="button" class="btn btn-danger m-2">Eliminar</button>
                        </div>

                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>



</div>
