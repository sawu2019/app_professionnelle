<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Accueil | e-Mines</title>

  <!-- Bootstrap -->
  <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  <!-- PNotify -->
  <link href="{{asset('vendors/pnotify/dist/pnotify.css ')}}" rel="stylesheet">
  <link href="{{asset('vendors/pnotify/dist/pnotify.buttons.css ')}}" rel="stylesheet">
  <link href="{{asset('vendors/pnotify/dist/pnotify.nonblock.css ')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Accueil </a>
                </li>
                <li><a><i class="fa fa-home"></i> Opérateurs Miniers <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('operats.index') }}">Tous</a>
                    <li><a> Catégories <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="{{ route('operats.Bureaux_Etudes_Environnemental') }}"> Bureaux d'Etudes Environnemental </a>
                        </li>
                        <li><a href="{{ route('operats.Comptoirs') }}"> Comptoirs </a>
                        </li>
                        <li><a href="{{ route('operats.Cooperatives_Minieres') }}"> Coopératives Minières </a>
                        </li>
                        <li><a href="{{ route('operats.Cooperatives_Produits_Carrieres') }}"> Cooperatives des Produits des Carrières </a>
                        </li>
                        <li><a href="{{ route('operats.Detenteurs_Produits_Explosifs') }}"> Detenteurs des Produits Explosifs </a>
                        </li>
                        <li><a href="{{ route('operats.Entites_traitements') }}"> Entités de Traitement </a>
                        </li>
                        <li><a href="{{ route('operats.Laboratoires') }}"> Laboratoires </a>
                        </li>
                        <li><a href="{{ route('operats.Mandataires') }}"> Mandataires </a>
                        </li>
                        <li><a href="{{ route('operats.Titulaires_droits_miniers') }}"> Titulaires des Droits Miniers </a>
                        </li>
                        <li><a href="{{ route('operats.Titulaires_Produits_Carrieres') }}"> Titulaires des Produits des Carrières </a>
                        </li>
                        <li><a href="{{ route('operats.Sous_Traitants') }}"> Sous Traitants </a>
                        </li>
                      </ul>
                    </li>
                    <li><a> F. Juriques <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="{{ route('operats.Societes_Anonyme') }}"> Société Anonyme (SA) </a>
                        </li>
                        <li><a href="{{ route('operats.Societe_Responsabilite_Limitee') }}"> Société à responsabilité Limitée (SARL) </a>
                        </li>
                        <li><a href="{{ route('operats.Societe_Responsabilite_Limitée_Unipersonelle') }}"> Société à responsabilité Limitée Unipersonelle (SARLU) </a>
                        </li>
                        <li><a href="{{ route('operats.Societe_Commandite_Simple') }}"> Société en Commandite Simple (SCS) </a>
                        </li>
                        <li><a href="{{ route('operats.Societe_Participation') }}"> Société en Participation (SEP) </a>
                        </li>
                        <li><a href="{{ route('operats.Groupement_Interet_Economique') }}"> Groupement D'interet Economique (GIE) </a>
                        </li>
                      </ul>
                    </li>
                    <li><a> Secteurs <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="{{ route('operats.artisanals') }}"> Artisanal </a>
                        </li>
                        <li><a href="{{ route('operats.industriel') }}"> Industriel </a>
                        </li>
                        <li><a href="{{ route('operats.service') }}"> Service </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-slack"></i> Partenariats <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a> Investisseurs <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="{{ route('investisseurs.index') }}"> Tous</a>
                        </li>
                        <li><a href="{{ route('investisseurs.Etranger') }}"> Etranger </a>
                        </li>
                        <li><a href="{{ route('investisseurs.Public') }}"> Public </a>
                        </li>
                        <li><a href="{{ route('investisseurs.Privee') }}"> Privée </a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="{{ route('actionnaires.index') }}"> Actionnaires </a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-file-text"></i> Projets Miniers <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('projets.index') }}"> Tous </a></li>
                    <li><a href="{{ route('projets.Grande_Echelle') }}"> Grande echelles</a>
                    </li>
                    <li><a href="{{ route('projets.Petite_Echelle') }}"> Petits echelles </a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> Contrats Miniers <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('contrats.index') }}"> Tous </a></li>
                    <li><a href="{{ route('contrats.contratsminiers') }}"> Contrats Miniers </a>
                    </li>
                    <li><a href="{{ route('contrats.conventionsminiers') }}"> Conventions Miniers </a>
                    </li>
                  </ul>
                </li>
                <li><a href="{{ route('titrems.index') }}"><i class="fa fa-file-text"></i> Titres Miniers </a>
                </li>
                <li><a><i class="fa fa-file-pdf-o"></i>Arrêtés <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('arretes.index') }}">Tous</a></li>
                    <li><a href="{{ route('arretes.ministeriels') }}">Ministériel</a></li>
                    <li><a href="{{ route('arretes.interministeriels') }}">InterMinistériel</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('zeas.index') }}"><i class="fa fa-clone"></i> Zone Exploitation Artisanal </a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('se connecter') }}</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"> <i class="fa fa-floppy-o" aria-hidden="true"></i> {{ __('s\'enregistrer') }}</a>
                  </li>
                  @endif
                  @else
                  <li class="nav-item dropdown">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <img src="{{asset('images/img.jpg')}}" alt=""> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                  @endguest
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>e - Mines </h3>
              <!-- debut intégration la multilangue de google -->
              <div class="float-right">
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                  function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                      pageLanguage: 'fr',
                      includedLanguages: 'ar,en,de,es,fr,hi,id,it,iw,ja,ml,no,pt,ru,sv,sw,tr,zh-CN,zh-TW',
                      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                      multilanguagePage: true
                    }, 'google_translate_element');
                  }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

              </div>
            </div>
            <!-- fin intégration la multilangue de google -->
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                @if ( session()->has('message') )
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>{{ session()->get('message') }}</strong>
                </div>
                @endif
                @yield('content')


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Plate-forme de Gestion des Opérateurs Miniers Oeuvrant en République Démocratique du Congo <a href="#"> | Ministère des Mines</a> <strong>{{ now() }}</strong>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
  <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
  <!-- PNotify -->
  <script src="{{asset('vendors/pnotify/dist/pnotify.js ')}}"></script>
  <script src="{{asset('vendors/pnotify/dist/pnotify.buttons.js ')}}"></script>
  <script src="{{asset('vendors/pnotify/dist/pnotify.nonblock.js ')}}"></script>


  <!-- Custom Theme Scripts -->
  <script src="{{asset('build/js/custom.min.js')}}"></script>

  <!-- Datatables -->
  <script>
    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [{
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "{{asset('js/datatables/json/scroller-demo.json')}}",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [
          [1, 'asc']
        ],
        'columnDefs': [{
          orderable: false,
          targets: [0]
        }]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });
  </script>
  <!-- /Datatables -->
</body>

</html>