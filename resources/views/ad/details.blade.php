
<div class="row ">
    
    <div class="col-12 col-md-4 my-5 d-flex justify-content-around container-fluid">

        <div class="card" style="width: 18rem;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($ad->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{Storage::url($image->file)}}"" class=" d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class="card-body">
                <h5 class="card-title"> {{$ad->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}} €</h6>
                <p class="card-text"> {{$ad->body}}</p>
                <h6 class="card-subtitle mb-2">
                    {{__('ui.categoria')}}: <a href="#">{{$ad->category->name}}</a> <br><br>
                    <i>{{$ad->created_at->format('d/m/Y')}} - {{ $ad->user->name }}</i></h6>
                <a href="{{route("ad.details", ['id'=>$ad->id])}}">Leer más</a>
            </div>
        </div>

    </div>
    
</div>