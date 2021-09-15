@extends('layouts.app')
@section('content')


@if(session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

<h1>Esto es la home</h1>

@endsection
