@extends('layouts.app')
@section('title', 'Accueil')

@section('content')
                @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div>
                @endif
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Users</small>
                    <div>
                      @can('create', 'App\Post')
                      <a href="{{ route('posts.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ajouter </a>
                      @endcan
                    </div>
                    </h2>
                    
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
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">TITRE</th>
                          <th scope="col">DESCRIPTION</th>
                          <th scope="col">TYPE D'ARRETES</th>
                          <th scope="col">ANNEES SORTIE</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($posts as $post)
                        <tr>
                          <td>{{ $post->titre }}</td>
                          <td>{{ $post->description }}</td>
                          <td>{{ $post->type_ar }}</td>
                          <td>{{ $post->annees }}</td>
                          <td class="table-buttons">
                              <a href="{{ route('posts.show',$post )}}" class="btn btn-primary btn-xs">
                              <i class="fa fa-folder" ></i> View
                              </a>    
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection