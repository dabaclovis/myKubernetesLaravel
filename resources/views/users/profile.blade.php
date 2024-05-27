@extends('layouts.users')

@section('content')
<div class="w3-row-padding">
    <div class="w3-third">
        @if (Auth::user()->avatar)
        <div class="w3-light-grey w3-card-4 w3-round-xlarge">
            <div class="w3-display-container">
                <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}" class="w3-round-xlarge" alt="profile"
                    width="100%">
            </div>
        </div>
        @endif
    {{-- display name  --}}
        <div class=" w3-panel">
           <div><strong>{{ Str::ucfirst($user->fname) }}, {{ Str::ucfirst($user->lname) }}</strong></div>
           <div><strong>{{ Str::lower($user->email) }}</strong></div>
           <div><strong>{{ Str::ucfirst($user->roles) }}</strong></div>
       </div>
       {{-- form upload  --}}
       <div class="w3-container w3-panel w3-card-4 pt-2">
        <form action="{{ route('uploadavatar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" form-group d-flex justify-content-between">
                <input type="file" name="avatar" id="avatar">
                <button type="submit" class=" btn btn-sm btn-success">upload</button>
            </div>
       </form>
       </div>
    </div>
    <div class="w3-twothird">
        <div class="w3-card-4 w3-container">
            <div class="w3-container">
                @foreach ($contacts as $contact)
                    @if (Auth::user()->id === $contact->user_id)
                        <h3>Address</h3>
                        <div class="col-md-6">
                            <div class="w3-panel w3-container w3-card-4 ">
                                {{ $contact->address }} <br>
                                {{ $contact->city }} {{ $contact->state }},{{ $contact->zipcode }}. <br>
                                {{ $contact->country }}
                            </div>
                        </div>
                        <h3>Contact</h3>
                       <div class="col-md-6">
                            <div class="w3-pandel w3-container w3-card-4 mb-3">
                                {{ Str::ucfirst($contact->user->fname)}}, {{ Str::ucfirst($contact->user->lname)}} <br>
                                {{ Str::lower($contact->user->email)}} <br>
                               +1{{ $contact->mobile}}
                            </div>
                       </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<hr>

@endsection
