@extends('layouts.app')

<div class="row">
  <div class="col-12">
    <h1 class="text-center contenido">Bienvenido</h1>
  </div>
</div>
<div class="row">
  <div class="d-flex justify-content-center">
    <a href="{{ route('categoria') }}" class="btn btn-primary">Categoria</a>
  </div>
</div>
<br>
<div class="row">
  <div class="d-flex justify-content-center">
    <a href="{{ route('alimento') }}" class="btn btn-primary">Alimento</a>
  </div>
</div>
