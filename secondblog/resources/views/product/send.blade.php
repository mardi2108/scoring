@extends('layouts.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="tiket">Tiket</a></li>
                    <li class="breadcrumb-item active">Kirim</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ auth()->user()->name }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          @if (session('error'))
                                
                {!! session('error') !!}
            
        @endif
        <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php $no = 1; @endphp
                                @forelse ($products as $row)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <strong>{{ ucfirst($row->name) }}</strong>
                                    </td>
                                    <td>Rp {{ number_format($row->price) }}</td>
                                    <td>{{ $row->stock }}</td>
                                    <td>
                                        <form action="/destroy/{{$row->id}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="/edit/{{$row->id}}" 
                                                class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">
                        {!! $products->links() !!}
                    </div>
                    @slot('footer')

                    @endslot
                
            </div>
        </div>
    </div>
</section>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          information
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

@endsection