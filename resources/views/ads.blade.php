
@extends('layouts.app')
@section('content')
<div class="container my-5">
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h1>Anuncios por categoría: {{$category->name}}</h1>
        @include('ad._ad')
    </div>
</div>
<div class="row my-3">
    <div class="col-12 col-md-6 offset-md-3">
    {{ $ads->links() }}
    </div>
</div>
</div>
@endsection