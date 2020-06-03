@extends('layouts.app')
@section('title', 'Identifications')

@section('content')

                <div class="x_panel">
                  <div class="x_title">
                    <small>Les opérateurs minier oeuvrant en République Démocratique du Congo au secteur d'industriel</small>
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
                  Créer
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
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($operats as $operat)
                        <tr>
                          <td>{{ $operat->sigle}}</td>
                          <td>{{ $operat->adresse}}</td>
                          <td>{{ $operat->nature}}</td>
                          @if($operat->secteur)
                          <td>{{ $operat->secteur->nom}}</td>
                          @endif
                          <td>{{ $operat->site_web}}</td>
                          <td class="table-buttons">
                              <a href="{{ route('operats.show',$operat )}}" class="btn btn-success">
                              <i class="fa fa-eye" ></i>
                              </a>               
                              <a href="{{ route('operats.edit',$operat->id)}}" class="btn btn-primary"> 
                              <i class="fa fa-pencil" ></i>
                              </a>
                            
                              <form  action="{{ route('operats.destroy', $operat->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash" ></i>
                              </button>
                              </form>
                          </td>
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>     
@endsection