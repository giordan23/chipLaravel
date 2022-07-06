<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class RegistrarSolicitud extends Component
{

    public $dni, $sede, $facultad, $escuela_profesional, $codigo, $nombre;

    public function render()
    {
        return view('livewire.registrar-solicitud')
            ->extends('layouts.app')
            ->section('content');
    }

    public function updatedDni($value)
    {
        //
        dd('hola');
        // $estudiante = Estudiante::where('dni', $value)->first();

        // if ($estudiante) {
        //     $this->sede = $estudiante->sede;
        //     $this->facultad = $estudiante->facultad;
        //     $this->escuela_profesional = $estudiante->escuela_profesional;
        //     $this->codigo = $estudiante->codigo;
        //     $this->nombre = $estudiante->nombre;
        // }

    }
}
