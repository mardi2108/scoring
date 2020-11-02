@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/tiket">Produk</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                        @slot('title')
                        
                        @endslot
                        
                        @if (session('error'))
                            @alert(['type' => 'danger'])
                                {!! session('error') !!}
                            @endalert
                        @endif
                        <form action="/store" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="name" required 
                                    class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="price" required 
                                    class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="category_id" id="category_id" 
                                    required class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}">
                                    <option value="">Pilih</option>
                                    @foreach ($users as $row)
                                        <option value="{{ $row->name }}">{{ ucfirst($row->name) }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">{{ $errors->first('user_id') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="">Stock</label>
                                <input type="number" name="stock" required 
                                    class="form-control {{ $errors->has('stock') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('stock') }}</p>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-send"></i> Simpan
                                </button>
                            </div>
                        </form>
                        @slot('footer')

                        @endslot
                    
                </div>
            </div>
        </div>
    </section>
@endsection