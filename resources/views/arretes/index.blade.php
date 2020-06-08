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
                  @can('create', 'App\Arrete')
                  <a href="{{ route('arretes.create') }}" class="btn btn-success">
                  Créer
                  </a>
                  @endcan
                  
                    <table id="datatable-buttons" class="table table-striped table-bordered mt-3">
                      <thead>
                        <tr>
                          <th scope="col">TITRE</th>
                          <th scope="col">TYPE D'ARRETES</th>
                          <th scope="col">DOCUMENTS</th>
                          <th scope="col">ANNEES DE PUBLICATION</th>
                          <th scope="col">DETAILS</th>
                        </tr>
                      </thead>
                      <tbody >
                      @foreach($arretes as $arrete)
                        <tr>
                          <td>{{ $arrete->titre}}</td>
                          @if($arrete->typearrete)
                          <td>{{ $arrete->typearrete->nom}}</td>
                          @endif
                          <td> Fichier <a href="{{ asset('storage') . '/' .$arrete->fichier }}" target="_blank"> <i class="fa fa-file-pdf-o" ></i> </a></td>
                          <td>{{ $arrete->annees}}</td>
                          <td class="table-buttons">
                              <a href="{{ route('arretes.show', $arrete )}}" class="btn btn-success">
                              <i class="fa fa-eye" ></i>
                              </a> 
                              @can('create', 'App\Arrete')              
                              <a href="{{ route('arretes.edit', $arrete->id)}}" class="btn btn-primary"> 
                              <i class="fa fa-pencil" ></i>
                              </a>
                              @endcan
                              @can('create', 'App\Arrete')
                              <form  action="{{ route('arretes.destroy', $arrete->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash" ></i>
                              </button>
                              </form>
                              @endcan
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>     
@endsection