@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 id="card_title" class="font-weight-bold mb-0">
                                {{ __('Proyecto') }}
                            </h5>
                                
                            <div class="float-right">
                                {{-- //GENERAR PDF --}}
                                <a href="{{ route('proyecto.pdf') }}" class="btn btn-primary btn-sm"
                                    data-placement="left">
                                    {{ __('GENERAR PDF') }}
                                </a>
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nombre proyecto</th>
                                        <th>Fuente de fondos</th>
                                        <th class="text-right">Monto planificado</th>
                                        <th class="text-right">Monto patrocinado</th>
                                        <th class="text-right">Monto fondos propios</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
                                            <td>{{ $proyecto->NombreProyecto }}</td>
                                            <td>{{ $proyecto->FuenteFondos }}</td>
                                            <td class="text-right">{{ $proyecto->MontoPlanificado }}</td>
                                            <td class="text-right">{{ $proyecto->MontoPatrocinado }}</td>
                                            <td class="text-right">{{ $proyecto->MontoFondosPropios }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('proyectos.show', $proyecto->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit', $proyecto->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    {!! $proyectos->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
