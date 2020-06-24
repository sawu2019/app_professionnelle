@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2>Actionnaires <small>Ajouts</small></h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a>
          </li>
          <li><a href="#">Settings 2</a>
          </li>
        </ul>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
    </div>
  </div>
  <div class="x_content">
    <br />
    <form action="{{ route('actionnaires.store') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
      @csrf
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">NOM <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nom" name="nom" required="required" class="form-control has-feedback-left">
          <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prenom">POSTNOM <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="prenom" name="prenom" required="required" class="form-control has-feedback-left">
          <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proprietaire">PROPRIETAIRE <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="proprietaire" name="proprietaire" required="required" class="form-control has-feedback-left">
          <span class="fa fa-toggle-on form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Pays">PAYS <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('pay_id') is-invalid @enderror" name="pay_id">
            @foreach( $pays as $pay )
            <option value="{{ $pay->id }}">{{ $pay->nom }}</option>
            @endforeach
          </select>
          @error('pay_id')
          <div class="invalid-feedback">
            {{ $errors->first('pay_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-repeat"></i> Annuler</button>
          <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-save"></i> Sauvegarde</button>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection