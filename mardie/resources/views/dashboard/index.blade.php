@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashbaord</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          
          <h1 class="card-title">LEVEL <strong>{{ auth()->user()->name }}</strong></h1>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <p>
          Username :<br>
          <strong>{{ Auth::user()->username }}</strong>
          <p>
          Nama :<br>
          <strong>{{ Auth::user()->name }}</strong>
          <p>
          Email :<br>
          <strong>{{ Auth::user()->email }}</strong>
          <p>
          Bank :<br>
          <strong>{{ Auth::user()->bank }}</strong>
          <p>
          No. Rekening :<br>
          <strong>{{ Auth::user()->norek }}</strong>
          <p>
          No. Handphone :<br>
          <strong>{{ Auth::user()->phone }}</strong>
        </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
          Pengguna
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection