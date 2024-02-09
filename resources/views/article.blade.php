<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admininstration</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      </head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('topbar')
  <!-- /.navbar -->

  @include('nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @include('header')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h1>Liste des articles</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Liste</h3>
                </div>
                <a href="{{ route('create') }}" type="button" class="btn btn-outline-success waves-effect m-2" title="Nouveau">
                    Nouveau
                </a>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Titre</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($articles->isNotEmpty())
                            @foreach ($articles as $key => $article)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{  $article->libelle }}</td>
                                <td>
                                    <a title="Détails" href="{{ route('article_show',$article->id) }}"  class="btn btn-outline-info waves-effect" >
                                        Voir
                                    </a>
                                    <a href="{{ route('create',$article->id) }}"  class="btn btn-outline-primary waves-effect" title="Modifier">
                                    Editer
                                    </a>
                                    <a href="{{ route('delete',$article->id) }}" type="button" class="btn btn-outline-danger waves-effect" title="Supprimer">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr class="text-center">
                            <td colspan="3"> Aucun Article !!</td>
                        </tr>
                        @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <p>Copyright (c) {{ date('Y') }}, Tout droit réservé.</p>

    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
</body>
</html>
