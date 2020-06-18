@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2>Titres Miniers <small>Ajouts</small></h2>
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
    <form action="{{ route('titrems.store') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
      @csrf
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opeateur">Concerné <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('operat_id') is-invalid @enderror" name="operat_id">
            @foreach( $operats as $operat )
            <option value="{{ $operat->id }}">{{ $operat->sigle }}</option>
            @endforeach
          </select>
          @error('operat_id')
          <div class="invalid-feedback">
            {{ $errors->first('operat_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Province">Province <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('province_id') is-invalid @enderror" name="province_id">
            @foreach( $provinces as $province )
            <option value="{{ $province->id }}">{{ $province->nom }}</option>
            @endforeach
          </select>
          @error('province_id')
          <div class="invalid-feedback">
            {{ $errors->first('province_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Permis">Permis <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="permis" name="permis" required="required" class="form-control has-feedback-left">
          <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Titulaire">Titulaire du site<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="titusite" name="titusite" required="required" class="form-control has-feedback-left">
          <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Type">Type de permis <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="typepermis" name="typepermis" required="required" class="form-control has-feedback-left">
          <span class="fa fa-toggle-on form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="Statut">Statut</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select id="statut" name="statut" class="form-control has-feedback-left">
            <option>Choisir</option>
            <option>ACTIF</option>
            <option>ACTIF EN CONVENTION</option>
            <option>ACTIF EN RENOUVELLEMENT</option>
            <option>EN DECHOIR POUR NON PAIEMENT</option>
            <option>ACTIF EN DECHEANCE NON PAIEMENT</option>
            <option>ACTIF EN FORCE MAJEURE</option>
            <option>ACTIF TRANSFORMATION PEPM EN PE</option>
            <option>ACTIF EN COURS DE CESSION PARTIELLE</option>
            <option>ACTIF TRANSFORMATION EN MULTIPLE</option>
            <option>ACTIF EN COURS DE RENONCIATION PARTIELLE</option>
            <option>ACTIF EN COURS DE TRANSFORMATION PARTIELLE</option>
            <option>ACTIF TRANSFORMATION PR EN PEPM</option>
            <option>ACTIF TRANSFORMATION PR EN PE</option>
            <option>ACTIF EN COURS DE CESSION TOTAL</option>
            <option>ACTIF EN COURS DE RENONCIATION TOTAL</option>
            <option>ACTIF LEVEE DE FORCE MAJEUR</option>
            <option>ACTIF TRANSFORMATION ARPC EN AECP</option>
            <option>DROIT DECHU</option>
            <option>RENOUVELLEMENT OCTROI</option>
          </select>
          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Carre">Carre minier <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="carrem" name="carrem" required="required" class="form-control has-feedback-left">
          <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Localisation">Localisation <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="localisation" name="localisation" required="required" class="form-control has-feedback-left">
          <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Date">Date d'octroi <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="date" id="dateoctroi" name="dateoctroi" required="required" class="form-control has-feedback-left">
          <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Date">Date d'expiration <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="date" id="dateexp" name="dateexp" required="required" class="form-control has-feedback-left">
          <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
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