@extends('layouts.app')
@section('title', 'Identifications')

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Opérateur <small>Modification</small></h2>
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
    <form method="POST" action="{{ route('operats.update', $operat->id) }}" data-parsley-validate class="form-horizontal form-label-left">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="denomination">Denomination <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="denomination" name="denomination" required="required" class="form-control has-feedback-left" value={{ $operat->denomination }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sigle">Sigle <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="sigle" name="sigle" required="required" class="form-control has-feedback-left" value={{ $operat->sigle }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="description" name="description" required="required" class="form-control has-feedback-left" value={{ $operat->description }}>
          <span class="fa fa-file-text form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adresse">Adresse <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="adresse" name="adresse" required="required" class="form-control has-feedback-left" value={{ $operat->adresse }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Province">Province <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('province_id') is-invalid @enderror" name="province_id">
            @foreach( $provinces as $province )
            <option value="{{ $province->id }}" {{ $operat->province_id == $province->id ? 'selected' : '' }}> {{ $province ->nom }}</option>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Secteur">Secteur <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('secteur_id') is-invalid @enderror" name="secteur_id">
            @foreach( $secteurs as $secteur )
            <option value="{{ $secteur->id }}" {{ $operat->secteur_id == $secteur->id ? 'selected' : '' }}> {{ $secteur->nom }}</option>
            @endforeach
          </select>
          @error('secteur_id')
          <div class="invalid-feedback">
            {{ $errors->first('secteur_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Catégories">Catégories <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('filiere_id') is-invalid @enderror" name="filiere_id">
            @foreach( $filieres as $filiere )
            <option value="{{ $filiere->id }}" {{ $operat->filiere_id == $filiere->id ? 'selected' : '' }}> {{ $filiere->nom }}</option>
            @endforeach
          </select>
          @error('filiere_id')
          <div class="invalid-feedback">
            {{ $errors->first('filiere_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nature">Nature <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nature" name="nature" required="required" class="form-control has-feedback-left" value={{ $operat->nature }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Forme_Juridique">Forme Juridique <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control has-feedback-left @error('fjuridique_id') is-invalid @enderror" name="fjuridique_id">
            @foreach( $fjuridiques as $fjuridique )
            <option value="{{ $fjuridique->id }}" {{ $operat->fjuridique_id == $fjuridique->id ? 'selected' : '' }}> {{ $fjuridique->nom }}</option>
            @endforeach
          </select>
          @error('fjuridique_id')
          <div class="invalid-feedback">
            {{ $errors->first('fjuridique_id') }}
          </div>
          @enderror
          <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="raison_sociale">Raison Sociale <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="raison_sociale" name="raison_sociale" required="required" class="form-control has-feedback-left" value={{ $operat->raison_sociale }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="regime_fiscal">Regime_Fiscal <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="regime_fiscal" name="regime_fiscal" required="required" class="form-control has-feedback-left" value={{ $operat->regime_fiscal }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="annee_creation">Annee de Creation <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="annee_creation" name="annee_creation" required="required" class="form-control has-feedback-left" value={{ $operat->annee_creation }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="annee_fermeture">Annee de Fermeture <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="annee_fermeture" name="annee_fermeture" required="required" class="form-control has-feedback-left" value={{ $operat->annee_fermeture }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nbre_surccursale">Nombre de Surccursale <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nbre_surccursale" name="nbre_surccursale" required="required" class="form-control has-feedback-left" value={{ $operat->nbre_surccursale }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code_unique">Code Unique <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="code_unique" name="code_unique" required="required" class="form-control has-feedback-left" value={{ $operat->code_unique }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rccm">RCCM <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="rccm" name="rccm" required="required" class="form-control has-feedback-left" value={{ $operat->rccm }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_nat">Identification National <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="id_nat" name="id_nat" required="required" class="form-control has-feedback-left" value={{ $operat->id_nat }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_ident_fiscal">N° Identification Fiscal <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_ident_fiscal" name="num_ident_fiscal" required="required" class="form-control has-feedback-left" value={{ $operat->num_ident_fiscal }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_import_export">N° Import Export <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_import_export" name="num_import_export" required="required" class="form-control has-feedback-left" value={{ $operat->num_import_export }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_aff_cnss">N° Affiliation CNSS <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_aff_cnss" name="num_aff_cnss" required="required" class="form-control has-feedback-left" value={{ $operat->num_aff_cnss }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_aff_inpp">N° Affiliation INPP <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_aff_inpp" name="num_aff_inpp" required="required" class="form-control has-feedback-left" value={{ $operat->num_aff_inpp }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_compte_bancaire_interne">N° Compte Bancaire Interne <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_compte_bancaire_interne" name="num_compte_bancaire_interne" required="required" class="form-control has-feedback-left" value={{ $operat->num_compte_bancaire_interne }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_compte_bancaire_etranger">N° Compte Bancaire Etranger <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_compte_bancaire_etranger" name="num_compte_bancaire_etranger" required="required" class="form-control has-feedback-left" value={{ $operat->num_compte_bancaire_etranger }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capital_social">Capital Social <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="capital_social" name="capital_social" required="required" class="form-control has-feedback-left" value={{ $operat->capital_social }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_tva">N° TVA <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_tva" name="num_tva" required="required" class="form-control has-feedback-left" value={{ $operat->num_tva }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_dgda">N° DGDA <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_dgda" name="num_dgda" required="required" class="form-control has-feedback-left" value={{ $operat->num_dgda }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_dgi">N° DGI <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_dgi" name="num_dgi" required="required" class="form-control has-feedback-left" value={{ $operat->num_dgi }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_dgrad">N° DGRAD <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_dgrad" name="num_dgrad" required="required" class="form-control has-feedback-left" value={{ $operat->num_dgrad }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_occ">N° OCC <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_occ" name="num_occ" required="required" class="form-control has-feedback-left" value={{ $operat->num_occ }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="boite_postal">Boite Postal <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="boite_postal" name="boite_postal" required="required" class="form-control has-feedback-left" value={{ $operat->boite_postal }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_fax">N° Fax <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_fax" name="num_fax" required="required" class="form-control has-feedback-left" value={{ $operat->num_fax }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_telephone">N° Téléphone <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="num_telephone" name="num_telephone" required="required" class="form-control has-feedback-left" value={{ $operat->num_telephone }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">Mail <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="mail" name="mail" required="required" class="form-control has-feedback-left" value={{ $operat->mail }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_web">Site Web <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="site_web" name="site_web" required="required" class="form-control has-feedback-left" value={{ $operat->site_web }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="statut">Statut <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="statut" name="statut" required="required" class="form-control has-feedback-left" value={{ $operat->statut }}>
          <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
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