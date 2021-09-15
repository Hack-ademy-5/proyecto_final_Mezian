       @foreach($ads as $ad)
        <div class="card mb-5" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> {{$ad->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
              <p class="card-text"> {{$ad->body}}</p>
              <h6 class="card-subtitle mb-2">
                <strong>Categoria: <a href="#">{{$ad->category->name}}</a></strong>
            <i>{{$ad->created_at->format('d/m/Y')}} - {{ $ad->user->name }}</i></h6>
            <a href="{{route("ad.details", ['id'=>$ad->id])}}">Leer más</a>
            </div>
          </div>
          @endforeach