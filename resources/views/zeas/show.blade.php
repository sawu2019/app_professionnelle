@extends('layouts.app')
@section('title', 'Identifications'.$zea->id)

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
                            <th>FILLIERE</th>
                            <th>N° ARRETES</th>
                            <th>QUALIFICATION</th>
                            <th>TRANSFORMATION</th>
                            <th>ANNEE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if($zea->province)
                            <td>{{ $zea->province->nom}}</td>
                            @endif
                            <td>{{$zea->filie}}</td>
                            <td>{{$zea->narrete}}</td>
                            <td>{{$zea->qualification}}</td>
                            <td>{{$zea->transformation}}</td>
                            <td>{{$zea->annee}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- fin accordion -->
@endsection