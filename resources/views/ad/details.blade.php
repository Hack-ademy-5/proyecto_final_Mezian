@extends('layouts.app')
@section('content')


    </div>
    <div class="row">

        <div class="container-md  " style="width: 30rem;">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded1 ">
                    @foreach ($ad->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class=" d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
                
                    <div class="row my-3 ">
                   
            
                        <div class="col-12">
                            <h4>{{$ad->title}}</h4>
                        </div>
                        
                        <div class="col-12">
                        <h2 class ="price">{{$ad->price}} €</h2>
                        </div>
                        <div class="col-12 my-2">
                        <h7 class= "bodytext">{{$ad->body}}</h7>
                        </div>

                        <div class="col-6 my-5">
                        <h6> {{__('ui.categoria')}}: <a
                        href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{$ad->category->name}}</a><h6> 
                                    
                    </div>
                    <div class="col-6 my-5 text-end ">
                       
                        <a href="{{route("home")}}">volver atras</a>
                        <br>
                        <br> 
                        <h6><i>Anuncio creado por {{ $ad->user->name }} <br> {{$ad->created_at->format('d/m/Y')}}</i></h6>                       
                    </div>
                    

                    </div>
                
            
            @endsection