@extends('layouts.app')
@section('title', 'Identifications'.$operat->id)

@section('content')

  <!-- début accordion -->
  <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title"><i class="fa fa-chevron-down"></i> INFORMATIONS GENERAL</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>NOM</th>
                                  <th>SIGLE</th>
                                  <th>DESCRIPTION</th>
                                  <th>ADRESSE</th>
                                  <th>PROVINCE</th>
                                  <th>SECTEUR</th>
                                  <th>B. POSTAL</th>
                                  <th>FAX</th>
                                  <th>TELETHONE</th>
                                  <th>MAIL</th>
                                  <th>SITE WEB</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{$operat->denomination}}</td>
                                  <td>{{$operat->sigle}}</td>
                                  <td>{{$operat->denomination}}</td>
                                  <td>{{$operat->adresse}}</td>
                                  @if($operat->province)
                                  <td>{{ $operat->province->nom}}</td>
                                  @endif
                                  @if($operat->secteur)
                                  <td>{{ $operat->secteur->nom}}</td>
                                  @endif
                                  <td>{{$operat->boite_postal}}</td>
                                  <td>{{$operat->num_fax}}</td>
                                  <td>{{$operat->num_telephone}}</td>
                                  <td>{{$operat->mail}}</td>
                                  <td>{{$operat->site_web}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title"><i class="fa fa-chevron-down"></i> INFORMATIONS ADMINISTRATIF</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>NATURE</th>
                                  <th>FILIERE</th>
                                  <th>R. SOCIALE</th>
                                  <th>R. FISCALE</th>
                                  <th>N. SUCCURSALE</th>
                                  <th>C. SOCIAL</th>
                                  <th>C UNIQUE</th>
                                  <th>ID NATIONAL</th>
                                  <th>ID FISCAL</th>
                                  <th>N. IMP. EXPORT</th>
                                  <th>STATUT</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{$operat->nature}}</td>
                                  @if($operat->filiere)
                                  <td>{{ $operat->filiere->nom}}</td>
                                  @endif
                                  <td>{{$operat->raison_sociale}}</td>
                                  <td>{{$operat->regime_fiscal}}</td>
                                  <td>{{$operat->nbre_surccursale}}</td>
                                  <td>{{$operat->capital_social}}</td>
                                  <td>{{$operat->code_unique}}</td>
                                  <td>{{$operat->id_nat}}</td>
                                  <td>{{$operat->num_ident_fiscal}}</td>
                                  <td>{{$operat->num_import_export}}</td>
                                  <td>{{$operat->statut}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-chevron-down"></i> AUTRES INFORMATIONS</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>CMP. INTERNE</th>
                                  <th>CMP. ETRANGER</th>
                                  <th>F. JURIDIQUE</th>
                                  <th>TVA</th>
                                  <th>DGI</th>
                                  <th>DGDA</th>
                                  <th>DGRAD</th>
                                  <th>OCC</th>
                                  <th>CNSS</th>
                                  <th>INPP</th>
                                  <th>A. CREATION</th>
                                  <th>A. FERMETURE</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{$operat->num_compte_bancaire_interne}}</td>
                                  <td>{{$operat->num_compte_bancaire_etranger}}</td>
                                  @if($operat->fjuridique)
                                  <td>{{ $operat->fjuridique->nom}}</td>
                                  @endif
                                  <td>{{$operat->num_tva}}</td>
                                  <td>{{$operat->num_dgi}}</td>
                                  <td>{{$operat->num_dgda}}</td>
                                  <td>{{$operat->num_dgrad}}</td>
                                  <td>{{$operat->num_occ}}</td>
                                  <td>{{$operat->num_aff_cnss}}</td>
                                  <td>{{$operat->num_aff_inpp}}</td>
                                  <td>{{$operat->annee_creation}}</td>
                                  <td>{{$operat->annee_fermeture}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
    </div>
<!-- fin accordion -->
@endsection