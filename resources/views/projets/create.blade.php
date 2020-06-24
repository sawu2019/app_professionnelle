@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2>Projets <small>Ajouts</small></h2>
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
    <form action="{{ route('projets.store') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
      @csrf
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Filière">NOM PROJET <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nom" name="nom" required="required" class="form-control has-feedback-left">
          <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Permis">PERMIS <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('permi_id') is-invalid @enderror" name="permi_id">
            @foreach( $permis as $permi )
            <option value="{{ $permi->id }}">{{ $permi->nom }}</option>
            @endforeach
          </select>
          @error('permi_id')
          <div class="invalid-feedback">
            {{ $errors->first('permi_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Stade">STADE <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('stade_id') is-invalid @enderror" name="stade_id">
            @foreach( $stades as $stade )
            <option value="{{ $stade->id }}">{{ $stade->nom }}</option>
            @endforeach
          </select>
          @error('stade_id')
          <div class="invalid-feedback">
            {{ $errors->first('stade_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tprojet">TYPE PROJET <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('tprojet_id') is-invalid @enderror" name="tprojet_id">
            @foreach( $tprojets as $tprojet )
            <option value="{{ $tprojet->id }}">{{ $tprojet->nom }}</option>
            @endforeach
          </select>
          @error('tprojet_id')
          <div class="invalid-feedback">
            {{ $errors->first('tprojet_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tprojet">CONCERNE <span class="required">*</span>
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
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="tmines">TYPE MINES</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select id="tmines" name="tmines" class="form-control has-feedback-left">
            <option>Choisir</option>
            <option>A CIEL OUVERT</option>
            <option>AUCUN</option>
          </select>
          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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