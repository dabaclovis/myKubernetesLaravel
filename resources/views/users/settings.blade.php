@extends('layouts.users')

@section('content')
    <div id="accord" class="container">
        <h3>Contact</h3>
        <div class="w3-panel">
            <form action="{{ route('contacts.store') }}" method="post">
                @csrf
                <div class="w3-row">
                    <div class="w3-third form-group p-1">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class=" form-control">
                    </div>
                    <div class="w3-third form-group p-1">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class=" form-control">
                    </div>
                    <div class="w3-third form-group p-1">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class=" form-control">
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-third p-1">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" name="zipcode" id="zipcode" class="form-control">
                    </div>
                    <div class="w3-third p-1">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control">
                    </div>
                    <div class="w3-third form-group p-1">
                          <label for="country">Country</label>
                        @include('includers.country')
                    </div>
                </div>
                <div class=" form-group">
                    <label for="notes">Notes</label>
                    <textarea name="biogra" id="notes" cols="30" rows="7" class=" form-control"></textarea>
                </div>
                <div class=" form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <h2>User information</h2>
        <div class="w3-panel">

        </div>
    </div>

@endsection
