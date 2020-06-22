@extends('layouts.app')
@section('title', 'Identifications'.$titrem->id)

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
                            <th>PROVINCE</th>
                            <th>PERMIS</th>
                            <th>TIT. DU SITE</th>
                            <th>TYPE DE PERMIS</th>
                            <th>STATUT</th>
                            <th>CARRE MINIERE</th>
                            <th>LIEU</th>
                            <th>ACQUIS LE</th>
                            <th>EXPIRE LE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if($titrem->province)
                            <td>{{ $titrem->province->nom}}</td>
                            @endif
                            <td>{{$titrem->permis}}</td>
                            <td>{{$titrem->titusite}}</td>
                            <td>{{$titrem->typepermis}}</td>
                            <td>{{$titrem->statut}}</td>
                            <td>{{$titrem->carrem}}</td>
                            <td>{{$titrem->localisation}}</td>
                            <td>{{$titrem->dateoctroi}}</td>
                            <td>{{$titrem->dateexp}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- fin accordion -->
@endsection