@extends('layouts.master')

@section('content')

<div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="/tiket">Produk</a></li>
                            <li class="breadcrumb-item active">Kirim</li>
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
                            
                            
                            <form action="/sendItem" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" name="username" required 
                                        value=""
                                        class="form-control {{ $errors->has('username') ? 'is-invalid':'' }}">
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="number" name="price" required 
                                        value="50000"
                                        class="form-control">
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" name="stock" required 
                                        value=""
                                        class="form-control">
                                    <p class="text-danger">{{ $errors->first('stock') }}</p>
                                </div>
                                

                                <div class="form-group">
                                    <label for="">Sisa Tiket</label>
                                    <input type="number" name="stock" required 
                                        value="{{ $product->stock }}"
                                        class="form-control {{ $errors->has('stock') ? 'is-invalid':'' }}">
                                    <p class="text-danger">{{ $errors->first('stock') }}</p>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-refresh"></i> Kirim
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