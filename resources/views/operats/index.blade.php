@extends('layouts.app')
@section('title', 'Identifications')

@section('content')

                <div class="x_panel">
                  <div class="x_title">
                    <small>Les opérateurs minier oeuvrant en République Démocratique du Congo</small>
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
                  @can('create', 'App\Operat')
                  <a href="{{ route('operats.create') }}" class="btn btn-success">
                  <i class="glyphicon glyphicon-floppy-save" ></i> Créer
                  </a>
                  @endcan
                  
                    <table id="datatable-buttons" class="table table-striped table-bordered mt-3">
                      
                      <thead>
                        <tr>
                          <th scope="col">NOM</th>
                          <th scope="col">ADRESSE</th>
                          <th scope="col">NATURE</th>
                          <th scope="col">DATE DE CREATION</th>
                          <th scope="col">SITE WEB</th>
                          <th scope="col">DETAILS</th>
                        </tr>
                      </thead>
                      <tbody >
                    @foreach($operats as $operat)
                        <tr>
                          <td>{{ $operat->sigle}}</td>
                          <td>{{ $operat->adresse}}</td>
                          <td>{{ $operat->nature}}</td>
                          @if($operat->province)
                          <td>{{ $operat->province->nom}}</td>
                          @endif
                          <td>{{ $operat->site_web}}</td>
                          <td class="table-buttons">
                              <a href="{{ route('operats.show',$operat )}}" class="btn btn-success">
                              <i class="glyphicon glyphicon-eye-open" ></i>
                              </a> 
                              @can('create', 'App\Operat')              
                              <a href="{{ route('operats.edit',$operat->id)}}" class="btn btn-primary"> 
                              <i class="glyphicon glyphicon-pencil" ></i>
                              </a>
                              @endcan
                              @can('create', 'App\Operat')
                              <form  action="{{ route('operats.destroy', $operat->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                              <i class="glyphicon glyphicon-trash" ></i>
                              </button>
                              </form>
                              @endcan
                          </td>
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                    <div class="x_content">
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false"> <i class="glyphicon glyphicon-download-alt" ></i>  Exporter en <span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="{{URL::to('/export')}}"><i class="fa fa-file-excel-o" ></i> Excel </a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="{{URL::to('getPDF')}}"><i class="fa fa-file-pdf-o" ></i> Pdf </a>
                      </li>
                    </ul>
                  </div>
                  </div>
                </div>     
@endsection