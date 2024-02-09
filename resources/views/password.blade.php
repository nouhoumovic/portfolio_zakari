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
            <h1>Modification mot de passe</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Liste</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('user.password') }}" method='POST' class="validate-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="ancien_mot_de_passe">Ancien mot de passe <span class="text-danger">*</span></label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input type="password" class="form-control {{ $errors->has('ancien_mot_de_passe') ? 'is-invalid' : '' }}" id="ancien_mot_de_passe" name="ancien_mot_de_passe" placeholder="Ancien mot de passe" />
                                        <div class="input-group-append">
                                            <div class="input-group-text cursor-pointer">
                                                <i data-feather="eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @if($errors->has('ancien_mot_de_passe'))
                                    <span class="help-block text-danger">
                                        <ul role="alert"><li>{{ $errors->first('ancien_mot_de_passe') }}</li></ul>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="password">Nouveau mot de passe <span class="text-danger">*</span></label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Nouveau mot de passe" />
                                        <div class="input-group-append">
                                            <div class="input-group-text cursor-pointer">
                                                <i data-feather="eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @if($errors->has('password'))
                                        <span class="help-block text-danger">
                                            <ul role="alert"><li>{{ $errors->first('password') }}</li></ul>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirmation <span class="text-danger">*</span></label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="Confirmation" />
                                        <div class="input-group-append">
                                            <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                        </div>
                                    </div>
                                    @if($errors->has('password_confirmation'))
                                        <span class="help-block text-danger">
                                            <ul role="alert"><li>{{ $errors->first('password_confirmation') }}</li></ul>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mt-1">Enregistrer</button>
                                <button type="reset" class="btn btn-outline-danger mt-1 ml-1">Annuler</button>
                            </div>
                        </div>
                    </form>
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
