@extends('layouts.app')
@section('title', 'Accueil')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modification d'un cas</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form  action="{{ route('posts.update', $post->id) }}" method="post" >
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">Titre : </label>
                <input type="text" class="form-control" name="titre" value={{ $post->titre }} />
            </div>

            <div class="form-group">
                <label for="last_name">Description : </label>
                <input type="text" class="form-control" name="description" value={{ $post->description }} />
            </div>

            <div class="form-group">
                <label for="email">Type d'Arrêtés : </label>
                <input type="text" class="form-control" name="type_ar" value={{ $post->type_ar }} />
            </div>
            <div class="form-group">
                <label for="city">Années d'Arrêtés : </label>
                <input type="text" class="form-control" name="annees" value={{ $post->annees }} />
            </div>
            <div class="form-group">
                <label for="country">Document : </label>
                <input type="text" class="form-control" name="fichier" value={{ $post->fichier }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection