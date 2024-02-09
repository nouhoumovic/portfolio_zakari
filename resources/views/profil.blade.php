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
        <link rel="stylesheet" href="{{ asset('dropify/css/dropify.css')}}" />
        <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css')}}"/>
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
            <h1>Profil</h1>
          <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Profil</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                   <!-- form -->
                   <div class="card-body">
                    <form action="{{ route('info') }}" method='POST' class="validate-form mt-2" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="Nom">Nom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="{{ auth()->user()->nom }}" />
                                    @if($errors->has('nom'))
                                    <span class="help-block text-danger">
                                        <ul role="alert"><li>{{ $errors->first('nom') }}</li></ul>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Prenom">Prenom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="{{ auth()->user()->prenom }}" />
                                    @if($errors->has('prenom'))
                                    <span class="help-block text-danger">
                                        <ul role="alert"><li>{{ $errors->first('prenom') }}</li></ul>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Profession">Profession</label>
                                    <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession" value="{{ auth()->user()->profession }}" />
                                    @if($errors->has('profession'))
                                    <span class="help-block text-danger">
                                        <ul role="alert"><li>{{ $errors->first('profession') }}</li></ul>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mt-2">Enregistrer</button>
                                <button type="reset" class="btn btn-outline-danger mt-2 ml-1">Annuler</button>
                            </div>
                        </div>
                        </form>
                    </div>
                <!--/ form -->
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
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<script src="{{ asset('dropify/js/dropify.js')}}"></script>
<script src="{{ asset('dropify/js/dropify.min.js')}}"></script>
<script>
   $('.dropify').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, fichier trop volumineux'
        },
        error: {
            'fileSize': 'Désolé, fichier trop volumineux.',
            'pdfFormat': 'Seul les formats (pdf sont autorisés).'
        }
    });
</script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('dist/js/demo.js')}}"></script> --}}
</body>
</html>
