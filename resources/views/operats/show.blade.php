@extends('layouts.app')
@section('title', 'Identifications'.$operat->id)

@section('content')

  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Les Informations Général de la Société : <small>{{$operat->sigle}}</small></h2>
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
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>DENOMINATION</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>DENOMINATION</a>
                                      </h2>
                        
                          <p class="excerpt">{{$operat->denomination}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>SIGLE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>SIGLE</a>
                                      </h2>
                          
                          <p class="excerpt">{{$operat->sigle}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>DESCRIPTION</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>DESCRIPTION
                                      </h2>
                          
                          <p class="excerpt">{{$operat->description}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>ADRESSE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>ADRESSE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->adresse}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>NATURE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>NATURE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->nature}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>RAISON SOCIALE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>RAISON SOCIALE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->raison_sociale}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>REGIME FISCAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>REGIME FISCAL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->regime_fiscal}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>ANNEE DE CREATION</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>ANNEE DE CREATION
                                      </h2>
                          
                          <p class="excerpt">{{$operat->annee_creation}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>ANNEE DE FERMETURE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>ANNEE DE FERMETURE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->annee_fermeture}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>NOMBRE DE SURCURSALE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>NOMBRE DE SURCURSALE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->nbre_surccursale}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>CODE UNIQUE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>CODE UNIQUE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->code_unique}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>RCCM</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>RCCM
                                      </h2>
                          
                          <p class="excerpt">{{$operat->rccm}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>IDENTIFICATION NATIONAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>IDENTIFICATION NATIONAL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->id_nat}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° IDENTIFICATION FISCAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° IDENTIFICATION FISCAL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_ident_fiscal}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° IMPORT EXPORT</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° IMPORT EXPORT
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_import_export}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° AFFILIATION CNSS</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° AFFILIATION CNSS
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_aff_cnss}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° AFFILIATION INPP</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° AFFILIATION INPP
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_aff_inpp}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° COMPTE BANCAIRE INTERNE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° COMPTE BANCAIRE INTERNE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_compte_bancaire_interne}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° COMPTE BANCAIRE ETRANGER</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° COMPTE BANCAIRE ETRANGER
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_compte_bancaire_etranger}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>CAPITAL SOCIAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>CAPITAL SOCIAL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->capital_social}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° TVA</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° TVA
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_tva}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° DGDA</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° DGDA
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_dgda}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° DGI</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° DGI
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_dgi}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° DGRAD</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° DGRAD
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_dgrad}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° OCC</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° OCC
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_occ}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>BOITE POSTAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>BOITE POSTAL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->boite_postal}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° FAX</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° FAX
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_fax}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>N° TELEPHONE</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>N° TELEPHONE
                                      </h2>
                          
                          <p class="excerpt">{{$operat->num_telephone}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>EMAIL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>EMAIL
                                      </h2>
                          
                          <p class="excerpt">{{$operat->mail}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>SITE WEB</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>SITE WEB 
                                      </h2>
                          
                          <p class="excerpt">{{$operat->site_web}}
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>STATUT</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>STATUT 
                                      </h2>
                          
                          <p class="excerpt">{{$operat->statut}}
                          </p>
                        </div>
                      </div>
                    </li>
                    
                  </ul>

                </div>
              </div>
            </div>
              </div>
@endsection