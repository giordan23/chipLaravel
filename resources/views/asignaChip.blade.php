@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card">
                    <div class="card-header"><strong>{{ __('Registrar solicitud de nuevo Chip') }}</strong></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-3">
                                    <label for="dniInput" class="form-label">DNI</label>
                                    <input type="number" class="form-control" id="dniInput">
                                </div>
                                <div class="col-sm-3">
                                    <label for="codMatriculaInput" class="form-label">Codigo Matricula</label>
                                    <input type="text" class="form-control" id="codMatriculaInput">
                                </div>
                                <div class="col-sm-6">
                                    <label for="nombresInput" class="form-label">Apellidos y nombres</label>
                                    <input type="text" class="form-control" id="nombresInput">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 mb-md-3">
                                <div class="col-sm-4">
                                    <label for="facultadInput" class="form-label">Chip actual activo</label>
                                    <input type="text" class="form-control" id="facultadInput">
                                </div>
                                <div class="col-sm-4">
                                    <label for="facultadInput" class="form-label">Chip nuevo</label>
                                    <input type="text" class="form-control" id="facultadInput">
                                </div>
                                <div class="col-sm-4 align-self-end">
                                    <button type="submit" class="btn btn-primary">Asignar Nuevo Chip</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
