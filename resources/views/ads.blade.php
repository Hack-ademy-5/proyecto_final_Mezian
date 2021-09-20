
@extends('layouts.app')
@section('content')
<div class="container-fluid my-5">

<div class="text-center">
<h1>Anuncios por categoría: {{$category->name}}</h1>
</div>
       
@include('ad._ad')
   
<div class="row my-3">
    <div class="col-12 col-md-6 offset-md-3">
    {{ $ads->links() }}
    </div>
</div>
</div>
@endsection