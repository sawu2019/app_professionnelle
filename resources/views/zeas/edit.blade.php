@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2>ZEA <small>Modification</small></h2>
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
    <form method="POST" action="{{ route('zeas.update', $zea->id) }}" data-parsley-validate class="form-horizontal form-label-left">
    @method('PATCH')
      @csrf 
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Province">Province <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('province_id') is-invalid @enderror" name="province_id">
            @foreach( $provinces as $province )
            <option value="{{ $province->id }}"{{ $zea->province_id == $province->id ? 'selected' : '' }}> {{ $province ->nom }}</option>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Filière">Filière <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="filie" name="filie" required="required" class="form-control has-feedback-left" value={{ $zea->filie }}>
          <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dure">N° Arrêtée <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="narrete" name="narrete" required="required" class="form-control has-feedback-left" value={{ $zea->narrete }}>
          <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Qualification">Qualification <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="qualification" name="qualification" required="required" class="form-control has-feedback-left" value={{ $zea->qualification }}>
          <span class="fa fa-toggle-on form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Transformation">Transformation <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="transformation" name="transformation" required="required" class="form-control has-feedback-left" value={{ $zea->transformation }}>
          <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" for="Années">Années</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select id="annee" name="annee" class="form-control has-feedback-left">
            <option>Choisir</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
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