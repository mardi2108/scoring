@extends('layouts.master')

@section('title')
    <title>Manajemen Kategori</title>
@endsection

@section('content')
    
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                            
                            @if (session('error'))
                                
                                    {!! session('error') !!}
                                
                            @endif

                            <form role="form" action="{{ route('kategori.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Kategori</label>
                                    <input type="text" 
                                    name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Terim</label>
                                    <input type="text" 
                                    name="terima"
                                    class="form-control {{ $errors->has('terima') ? 'is-invalid':'' }}" id="terima" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Kirim</label>
                                <input type="text" 
                                    name="kirim"
                                    class="form-control {{ $errors->has('kirim') ? 'is-invalid':'' }}" id="kirim" required>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-8">

                           List Kategori
                            
                            @if (session('success'))
                                
                                    {!! session('success') !!}
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Kategori</td>
                                            <td>Terima</td>
                                            <td>Kirim</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($categories as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->terima }}</td>
                                            <td>{{ $row->kirim }}</td>
                                            <td>
                                                <form action="{{ route('kategori.destroy', $row->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            @slot('footer')

                            @endslot
                    </div>
                </div>
            </div>
        </section>
@endsection