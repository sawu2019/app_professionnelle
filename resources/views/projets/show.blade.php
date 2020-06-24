@extends('layouts.app')
@section('title', 'Identifications'.$projet->id)

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
                            <th>NOM PROJET</th>
                            <th>CONCERNE</th>
                            <th>TYPE PROJETS</th>
                            <th>PERMIS</th>
                            <th>STADE</th>
                            <th>TYPE MINES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$projet->nom}}</td>
                            <td>{{$projet->operat->sigle}}</td>
                            <td>{{$projet->tprojet->nom}}</td>
                            <td>{{$projet->permi->nom}}</td>
                            <td>{{$projet->stade->nom}}</td>
                            <td>{{$projet->tmines}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- fin accordion -->
@endsection