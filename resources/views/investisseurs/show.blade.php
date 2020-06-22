@extends('layouts.app')
@section('title', 'Identifications'.$investisseure->id)

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
                            <th>SYMBOLE BOURSIER</th>
                            <th>ADRESSE</th>
                            <th>TELEPHONE</th>
                            <th>N° FAX</th>
                            <th>BOITE POSTAL</th>
                            <th>C.E.O</th>
                            <th>MAIL</th>
                            <th>SITE WEB</th>
                            <th>PROPRIETAIRE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{{ $investisseure->nom}}</td>
                          <td>{{ $investisseure->sigle}}</td>
                          <td>{{ $investisseure->syboursier}}</td>
                          <td>{{ $investisseure->siege}}</td>
                          <td>{{ $investisseure->telephone}}</td>
                          <td>{{ $investisseure->fax}}</td>
                          <td>{{ $investisseure->bpostale}}</td>
                          <td>{{ $investisseure->ceo}}</td>
                          <td>{{ $investisseure->mail}}</td>
                          <td>{{ $investisseure->sweb}}</td>
                          <td>{{ $investisseure->proprietaire}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- fin accordion -->
@endsection