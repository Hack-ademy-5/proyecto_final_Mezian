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
                        <div class="card-header">
                            Nuevo anuncio (Secret: {{$uniqueSecret}})
                        </div>
                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="form-group">
                            <label for="adName">Titulo</label>
                            <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">

                            @error('title')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>
                        
                        <div class="form-group">
                            <label for="adDescription">descripcion</label>
                            <textarea placeholder="200 max" class="form-control" name="description" id="adDescription" 
                                rows="1">{{old("description")}}</textarea>

                            @error('description')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror


                        <div class="form-group">
                            <label for="adBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="adBody" cols="30"
                                rows="10">{{old("body")}}</textarea>

                            @error('body')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror


                            <div class="form-group ">
                                <label for="form-label" class="my-2">Categorias</label>
                                <select class="form-control" id="categories" name="category">
                                    @foreach($categories ?? '' as $category)
                                    <option class="body" value="{{$category->id}}"
                                        {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="adPrice">Precio</label>
                                <input step="0.01" class="form-control my-3" id="adPrice" aria-describedby="priceHelp"
                                    name="price" value="{{old("price")}}">
                                @error('price')
                                <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="adImages" class="form-label">Imagenes</label>
                                <div class="dropzone" id="drophere"></div>
                                @error('images')
                                <small class="alert alert-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="btn btn-dark btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection