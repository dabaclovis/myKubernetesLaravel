@extends('layouts.admins')

@section('content')

<div class=" card w3-card-4 mb-2">
    <div class="card-header">
        <form action="" method="get">
            <div class="input-group">
                <input type="text" class=" form-control" placeholder="Search here ..." name="search">
                <div class="input-group-append">
                    <span class=" input-group-text">search</span>
                </div>
            </div>
        </form>
    </div>
</div>
  <div class="row w3-card-4">
    <div class="w3-panel col-md-12">
        @include('includers.allusers')
    </div>
    <div class="w3-container d-flex justify-content-center">
        <p>{{ $users->links() }}</p>
    </div>
  </div>
@endsection
