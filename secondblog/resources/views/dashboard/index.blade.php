@extends('layouts.master')

<style>
#players {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#players td, #players th {
  border: 1px solid #ddd;
  padding: 1px;
  padding-top: 5px;
  text-align: center;
}

#players tr:nth-child(even){background-color: #f2f2f2;}

#players tr:hover {background-color: #ddd;}

#players th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  text-align: center;
}
</style>

@section('content')
<section>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

      <!-- Default box -->

    <div class="card-body row">
        <div class="card card-success login-box">
            @if (session('error'))
            {!! session('error') !!}
            @endif
              <div class="card-header">
                <h3 class="card-title">INPUT PLAYER</h3>
              </div>

        <form action="/store" method="post">
          @csrf
        <div class="card-body">
          <input class="form-control " type="hidden" name="player_id" value="">
          <input class="form-control " type="text" name="name" placeholder="Player Name">
          <br>
          <input class="form-control" type="text" name="hcap" placeholder="Handicap">
          <br>
          <select class="form-control form-control-sm" type="text" name="flight" placeholder="Flight">
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
          <br>
          <input class="form-control form-control-sm" type="text" name="bagtag"placeholder="BagTag">
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      <!-- /.card-body -->
  <div class="d-inline justify-content-center card-body p-2" style="overflow-x:auto; width: 65%">

  <form action="/dashboard/cari" method="GET" class="form-inline md-form mr-auto mb-4">
    <input class="form-control" type="text" name="cari" placeholder="Player Name.." value="{{ old('cari') }}">
    <button type="submit" class="btn btn-sm btn-primary">Search</button>
  </form>

    <table id="players" class="table table-bordered table-hover">
        <thead>
        <tr role="row">
          <th>Player Name</th>
          <th>Handicap</th>
          <th>Flight</th>
          <th>Bag Tag</th>
          <th>Act</th>
        </tr>
        </thead>
        <tbody>
          <tr role="row" class="odd">
            @foreach ($players as $scores => $players)
            <td>{{$players->name}}</td>
            <td>{{$players->hcap}}</td>
            <td>{{$players->flight}}</td>
            <td>{{$players->bagtag}}</td>
            <td>
            <form action="dashboard/{{$players->id}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="dashboard/{{$players->id}}/edit" 
                    class="btn btn-warning btn-sm">
                    <i class="fa fa-edit"></i>
                </a>
                <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- /.card-body -->
</div>
</div>
    </section>
    <!-- /.content -->

@endsection
