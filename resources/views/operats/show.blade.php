@extends('layouts.app')
@section('title', 'Identifications'.$operat->id)

@section('content')

  <div class="row">
  <div class="col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
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

                    <table class="table table-striped" >
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>DENOMINATION</th>
                          <th>SIGLE</th>
                          <th>DESCRIPTION</th>
                          <th>ADRESSE</th>
                          <th>NATURE</th>
                          <th>RAISON SOCIALE</th>
                          <th>REGIME FISCALE</th>
                          <th>ANNEE CREATION</th>
                          <th>ANNEE FERMETURE</th>
                        </tr>
                      </thead>
                      <tbody >
                        <tr>
                          <th scope="row">{{$operat->id}}</th>
                          <td>{{$operat->denomination}}</td>
                          <td>{{$operat->sigle}}</td>
                          <td>{{$operat->description}}</td>
                          <td>{{$operat->adresse}}</td>
                          <td>{{$operat->nature}}</td>
                          <td>{{$operat->raison_sociale}}</td>
                          <td>{{$operat->regime_fiscal}}</td>
                          <td>{{$operat->annee_creation}}</td>
                          <td>{{$operat->annee_fermeture}}</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
                </div>
              </div>
@endsection