@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TITRE DE L'ARRETEES :  {{ $post->titre }}</h2>
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

                    <div class="col-md-8 col-lg-8 col-sm-7">
                      <!-- blockquote -->
                      <blockquote>
                        <p>{{ $post->description }}</p>
                        <footer>TYPES D'ARRETES : <cite title="Source Title">{{ $post->type_ar }}</cite>
                        </footer>
                      </blockquote>

                      <blockquote class="blockquote-reverse">
                        <p style="text-align: justify">Les informations visualiser dans cet application, proviens de l'institution de l'Etat qui est en charge de la gestion de différentes fichiers publier.</p>
                        <footer>Source : <cite title="Source Title">Ministère des Mines Rép. Dém. du Congo</cite>
                        </footer>
                      </blockquote>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-5">
                      <h4><span class="label label-primary"><i class="fa fa-calendar-o" ></i> L' années de l'arrêtés</span> {{ $post->annees }}</h4>
                      <h4><span class="label label-primary"><i class="fa fa-file-pdf-o" ></i> Fichier téléchargeable</span> <a href="{{ asset('storage') . '/' .$post->fichier }}" target="_blank"> <i class="fa fa-file-pdf-o" ></i> </a></h4>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <h4>Labels and badges</h4>
                      <a href="{{ route('posts.index')}}"><span class="label label-primary"><i class="fa fa-home" ></i> Accueil</span></a>
                      <span class="label label-success"><i class="fa fa-envelope-o" ></i> Message</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection