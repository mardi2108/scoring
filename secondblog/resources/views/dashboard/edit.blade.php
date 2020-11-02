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
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <div class="card-body row">
        <div class="card card-success login-box">
            @if (session('error'))
            {!! session('error') !!}
            @endif
              <div class="card-header">
                <h3 class="card-title">EDIT PLAYER</h3>
              </div>

                    @slot('title')
                    
                    @endslot
                    
                    @if (session('error'))
                        @alert(['type' => 'danger'])
                            {!! session('error') !!}
                        @endalert
                    @endif
                    <form action="update" method="post">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Player</label>
                            <input type="text" name="name" 
                                value="{{ $player->name }}"
                                class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}">
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">Handicap</label>
                            <input type="text" name="hcap" required 
                                value="{{ $player->hcap }}"
                                class="form-control {{ $errors->has('hcap') ? 'is-invalid':'' }}">
                            <p class="text-danger">{{ $errors->first('hcap') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">Flight</label>
                            <select type="text" name="flight" required 
                                value="{{ $player->flight }}"
                                class="form-control {{ $errors->has('flight') ? 'is-invalid':'' }}">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('flight') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">Bag Tag</label>
                            <input type="number" name="bagtag" required 
                                value="{{ $player->bagtag }}"
                                class="form-control form-control-sm {{ $errors->has('bagtag') ? 'is-invalid':'' }}">
                            <p class="text-danger">{{ $errors->first('bagtag') }}</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                        </div>
                    </form>
                  </div>
                  </div>
                  @include('dashboard.score')
                    @slot('footer')
                    @endslot

            </div>

@endsection