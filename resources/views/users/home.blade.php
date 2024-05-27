@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header w3-padding-24 w3-xlarge">{{ __('Dashboard') }}</div> --}}

                <div class="card-body w3-card-4 w3-container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <a href="" class="list-group-item-action">
                        <div class="w3-panel">
                            <div class=" d-flex justify-content-between">
                                <h3>clovis daba</h3>
                                <small>created on</small>
                            </div>
                            <div>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum doloribus delectus nam, ducimus vel exercitationem!

                            </div>
                            <small>clovis daba</small>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
