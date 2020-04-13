@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
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

      <div class="row">

        @foreach( $teams as $key => $team )
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon "><img src='{{$team->srcTeam}}'></span>
                <div class="info-box-content">
                  <span class="info-box-text">{{$team->nameTeam}}</span>
                  <span class="info-box-number"><span class="badge badge-success">{{$team->ratingTeam}}</span></span>
                </div>
              </div>
            </div>
        @endforeach


      </div>

    </section>
    <!-- /.content -->


@endsection
