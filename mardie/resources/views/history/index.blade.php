@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>History</h1>
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
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
              <a href="#" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Kategory</th>
                    <th scope="col">Terima</th>
                    <th scope="col">Kirim</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>{{ auth()->user()->name }}</td>
                      <td>{{ auth()->user()->name }}</td>
                      <td>{{ auth()->user()->name }}</td>
                      <td class="text-center">
                       <button type="submit" class="btn btn-sm btn-primary">AKTIF</button>
                       </form>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection