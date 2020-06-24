@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="x_panel">
    <div class="x_title">
        <h2>Investisseurs <small>Ajouts</small></h2>
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
        <form method="POST" action="{{ route('investisseurs.update', $investisseure->id) }}" data-parsley-validate class="form-horizontal form-label-left">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">NOM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nom" name="nom" required="required" class="form-control has-feedback-left" value={{ $investisseure->nom }}>
                    <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sigle">SIGLE <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="sigle" name="sigle" required="required" class="form-control has-feedback-left" value={{ $investisseure->sigle }}>
                    <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opeateur">TYPE INVESTISSEUR <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control has-feedback-left @error('tinvestisseur_id') is-invalid @enderror" name="tinvestisseur_id">
                        @foreach( $tinvestisseurs as $tinvestisseur )
                        <option value="{{ $tinvestisseur->id }}" {{ $investisseure->tinvestisseur_id == $tinvestisseur->id ? 'selected' : '' }}> {{ $tinvestisseur ->nom }}</option>
                        @endforeach
                    </select>
                    @error('tinvestisseur_id')
                    <div class="invalid-feedback">
                        {{ $errors->first('tinvestisseur_id') }}
                    </div>
                    @enderror
                    <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pays">PAYS<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control has-feedback-left @error('pay_id') is-invalid @enderror" name="pay_id">
                        @foreach( $pays as $pay )
                        <option value="{{ $pay->id }}" {{ $investisseure->pay_id == $pay->id ? 'selected' : '' }}> {{ $pay ->nom }}</option>
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
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="syboursier">SYMBOLE BOURSIER <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="syboursier" name="syboursier" required="required" class="form-control has-feedback-left" value={{ $investisseure->syboursier }}>
                    <span class="fa fa-toggle-on form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siege">ADRESSE <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="siege" name="siege" required="required" class="form-control has-feedback-left" value={{ $investisseure->siege }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">TELEPHONE <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="telephone" name="telephone" required="required" class="form-control has-feedback-left" value={{ $investisseure->telephone }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fax">N° FAX <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="fax" name="fax" required="required" class="form-control has-feedback-left" value={{ $investisseure->fax }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bpostale">BOITE POSTAL <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="bpostale" name="bpostale" required="required" class="form-control has-feedback-left" value={{ $investisseure->bpostale }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ceo">C.E.O <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ceo" name="ceo" required="required" class="form-control has-feedback-left" value={{ $investisseure->ceo }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">MAIL <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mail" name="mail" required="required" class="form-control has-feedback-left" value={{ $investisseure->mail }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sweb">SITE WEB <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="sweb" name="sweb" required="required" class="form-control has-feedback-left" value={{ $investisseure->sweb }}>
                    <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proprietaire">PROPRIETAIRE <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="proprietaire" name="proprietaire" required="required" class="form-control has-feedback-left" value={{ $investisseure->proprietaire }}>
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