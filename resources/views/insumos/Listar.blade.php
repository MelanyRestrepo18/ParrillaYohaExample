@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Insumos</h1>
@stop

@section('content')



    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tablas Insumos</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Insumos</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Medida</th>
                                        <th>Stock_Minimo</th>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Carne res</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-warning">kg</span></td>
                                        <td>3</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Editar
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Eliminar
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="#">
                                                <i class="fas fa-plus-square">
                                                </i>
                                                Agregar
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>carne cerdo</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-primary">kg</span></td>
                                        <td>2</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Editar
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Eliminar
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="#">
                                                <i class="fas fa-plus-square">
                                                </i>
                                                Agregar
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>pollo</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-danger">kg</span></td>
                                        <td>1</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Editar
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Eliminar
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="#">
                                                <i class="fas fa-plus-square">
                                                </i>
                                                Agregar
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    </thead>
                </div>
            </div>
        </section>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
