
@extends('layouts.app')
@section('content')
<h1>Servicio</h1>
<a href="{{ route('landing.index') }} " class = 'btn btn-info'>Inicio</a>
<a href="{{ route('landing.contacto') }} " class = 'btn btn-info'>Servicios</a>
<a href="{{ route('landing.acercade') }} " class = 'btn btn-info'>Acerca de</a>

@endsection
