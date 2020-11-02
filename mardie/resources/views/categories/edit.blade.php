@extends('layouts.master')

@section('title')
    <title>Edit Kategori</title>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                        @if (session('error'))
                            @alert(['type' => 'danger'])
                                {!! session('error') !!}
                            @endalert
                        @endif

                        <form role="form" action="{{ route('kategori.update', $categories->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="name">Kategori</label>
                                <input type="text" 
                                    name="name"
                                    value="{{ $categories->name }}"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="terima">Deskripsi</label>
                                <input type="text" 
                                    name="terima"
                                    value="{{ $categories->terima }}"
                                    class="form-control {{ $errors->has('terima') ? 'is-invalid':'' }}" id="terima" required>
                            </div>
                            <div class="form-group">
                                <label for="kirim">Deskripsi</label>
                                <input type="text" 
                                    name="kirim"
                                    value="{{ $categories->kirim }}"
                                    class="form-control {{ $errors->has('kirim') ? 'is-invalid':'' }}" id="kirim" required>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        </section>
@endsection