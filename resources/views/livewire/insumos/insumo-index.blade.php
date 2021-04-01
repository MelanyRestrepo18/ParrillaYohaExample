<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" ire:model="search" class="form-control" placeholder="ingrese nombre del insumo">
        </div>
        <div class="card-body">


            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Medida</th>
                    <th>Stock_Minimo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($insumos as $insumo)
                    <tr>
                        <td>{{$insumo->id}}</td>
                        <td>{{$insumo->nombre}}</td>
                        <td>{{$insumo->medida}}</td>
                        <td>{{$insumo->stock_minimo}}</td>
                        <td>
                            <form action="{{route('insumoEliminar', $insumo->id)}}" method="post">
                                @csrf @method('DELETE')

                                <button type="submit" class="btn btn-danger" style="border: none"><i class="fas fa-trash-alt fa-lg"></i>Eliminar</button>

                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Listar" data-whatever="@mdo"> <i class="fas fa-plus-square"></i>  Agregar Insumo</button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Entrada" data-whatever="@fat"><i class="fas fa-list"></i>  Listado de entradas</button>

                                <div class="modal fade" id="Listar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Entradas de Insumos</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="Entrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Lista Entradas de Insumos</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table ">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </form>




                        </td>

                    </tr>


                </tbody>
                @endforeach
            </table>


        </div>

        <div class="card-footer">



            {{$insumos -> links()}}
        </div>

    </div>


</div>
