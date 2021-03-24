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

                        <form action="" method="post">

                            <a href=""><i class="fas fa-info-circle fa-lg text-success"></i></a>


                                <a href=""><i class="fas fa-user-plus fa-lg" ></i></a>

                            @csrf @method('DELETE')
                                <button type="submit" style="border: none"><i class="fas fa-trash-alt fa-lg text-danger"></i></button>

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
