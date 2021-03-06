@extends('layouts.app')
@section('content')
@if ($ad)
<div class='container my-5 py-5'>
    <div class='row'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Anuncio #{{$ad->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Usuario</h3>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}}
                            {{$ad->user->name}}
                            {{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Titulo</h3>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Descripción</h3>
                        </div>
                        <div class="col-md-9">
                            {{$ad->description}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Anuncio</h3>
                        </div>
                        <div class="col-md-9">
                            {{$ad->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-3">
                        <h3>Imagen</h3>
                    </div>
                    @foreach ($ad->images as $image)
                    <div class="row justify-content-around">

                        <div class="col-md-5 my-4">
                            <img src="{{ $image->getUrl(300,150)}}" class="img-fluid" alt=""><br><br>
                        
                            <h7> Adult : {{ $image->adult}} <br>
                                spoof : {{ $image->spoof}} <br>
                                medical : {{ $image->medical}} <br>
                                violence : {{ $image->violence}} <br>
                                racy : {{ $image->racy}} <br></h7>


                        </div>

                        <div class="col-md-4 my-4  ">
                            
                            <h4 class="text-center">Labels</h4>
                                   <ul>
                                        @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                        <li>{{$label}}</li>
                                        @endforeach
                                        @endif
                                    </ul>
                        </div>


                        @endforeach
                        <hr>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-6">
                                <form action="{{route('revisor.ad.reject',['id'=>$ad->id])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rechazar</button>
                                </form>
                            </div>
                            <div class="col-md-6 text-right">
                                <form action="{{route('revisor.ad.accept',['id'=>$ad->id])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Aceptar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @else
    <h3 class="text-center"> no hay anuncios para revisar </h3>

    @endif
    @endsection