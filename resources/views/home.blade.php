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
                                <div class="col-sm-4 m">
                                    <label for="facultadInput" class="form-label">Facultad</label>
                                    <input type="text" class="form-control" id="facultadInput">
                                </div>
                                <div class="col-sm-5">
                                    <label for="epInput" class="form-label">Escuela Profesional</label>
                                    <input type="text" class="form-control" id="epInput">
                                </div>
                                <div class="col-sm-3">
                                    <label for="sedeInput" class="form-label">Sede</label>
                                    <input type="text" class="form-control" id="sedeInput">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-8">
                                    <label for="descMotivoInput">Describir problema o motivo</label>
                                    <textarea class="form-control" placeholder="Se me extravió el chip en la Universidad" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                </div>
                                <div class="col-sm-4">
                                    <label for="sedeInput" class="form-label">Seleccione:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Pérdida de chip
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Otro problema técnico
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Registrar solicitud</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
