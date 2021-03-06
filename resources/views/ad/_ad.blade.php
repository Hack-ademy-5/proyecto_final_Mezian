
<div class="row ">
    @foreach($ads as $ad)
    <div class="col-12 col-md-4 my-5 d-flex justify-content-around container-fluid">

        <div class="card " style="width: 18rem;">
        
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($ad->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class=" d-block w-100 " alt="...">
                    </div>
                    
                    <button class="carousel-control" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                @endforeach
                </div>
               
                
             
            </div>
            
            <div class="card-body">
                <h5 class="card-title"> {{$ad->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}} €</h6>
                <p class="card-text"> {{$ad->description}}</p>
                <h6 class="card-subtitle mb-2">
                    {{__('ui.categoria')}}: <a href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}"><button type="button" class="btn btn-outline-dark btn-xs">{{$ad->category->name}}</button></a> <br><br>
                    <i>{{$ad->created_at->format('d/m/Y')}} - {{ $ad->user->name }}</i></h6>
                <a href="{{route("ad.details", ['id'=>$ad->id])}}"><button type="button" class="btn btn-dark btn-sm">Leer Más</button></a>
            </div>
        </div>

    </div>
    @endforeach
</div>