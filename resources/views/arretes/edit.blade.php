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
        <form  action="{{ route('arretes.update', $arrete->id) }}" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="first_name">Titre : </label>
                <input type="text" class="form-control" name="titre" value={{ $arrete->titre }} >
            </div>


            <div class="form-group">
                <label for="city">Années d'Arrêtés : </label>
                <input type="text" class="form-control" name="annees" value={{ $arrete->annees }} >
            </div>
            <div class="form-group">
                <label for="country">Document : </label>
                <input type="file" class="form-control" name="fichier" value={{ $arrete->fichier }} >
            </div>
            
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection