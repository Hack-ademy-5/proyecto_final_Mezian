
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo Anuncio
                </div>
                <div class="card-body">

                <form method="POST" action='{{route("ad.create")}}'>
                 @csrf
                 <div class="form-group">
                 <label for="adName">Titulo</label>
                 <input type="text" class="form-control" id="adName"
                 
                 name="title" value="{{old('title')}}">

                  @error('title')
                  <small id="emailHelp" class="form-text" style="color:red;">
                  {{ $message }}
                  </small>
                  @enderror

                </div>
                <div class="form-group">
                <label for="adBody">Anuncio</label>
                <textarea class="form-control" name="body" id="adBody" cols="30"
                rows="10">{{old("body")}}</textarea>

                @error('body')
                <small id="emailHelp" class="form-text" style="color:red;">
                {{ $message }}
                </small>
               @enderror
                

            <div class="form-group text-bold me-5  ms-5">
            <label for="form-label" class="my-2">Categorias</label>
            <select class="form-control" id="categories" name="category">
            @foreach($categories ?? '' as $category)
            <option value="{{$category->id}}" 
                    {{old('category') == $category->id ? 'selected' : ''}}
                >{{$category->name}}</option>
            @endforeach
              </select>
             </div>

               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection