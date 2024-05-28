@extends('layouts.app')

@section('content')
{{-- <form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="sname">School Name</label>
        <input type="text" name="sname" class=" form-control">
        @error('sname')
            <span class=" alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class=" form-group">
        <label for="grades">What Class</label>
        <input type="text" name="grades" class=" form-control">
        @error('grades')
            <span class=" alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="subjects">Subjects</label>
        <div class=" form-check">
            <input type="checkbox" name="subjects[]" value="chemistry" id="">
            <label for="chemistry" class=" form-check-label">Chemistry</label>
        </div>
        <div class=" form-check">
            <input type="checkbox" name="subjects[]" value="physics" id="">
            <label for="physics" class=" form-check-label">Physics</label>
        </div>
        <div class=" form-check">
            <input type="checkbox" name="subjects[]" value="biology" id="">
            <label for="biology" class=" form-check-label">Biology</label>
        </div>
        <div class=" form-check">
            <input type="checkbox" name="subjects[]" value="geography" id="">
            <label for="geography" class=" form-check-label">Geography</label>
        </div>
        <div class=" form-check">
            <input type="checkbox" name="subjects[]" value="histroy" id="">
            <label for="histroy" class=" form-check-label">History</label>
        </div><div class=" form-check">
            <input type="checkbox" name="subjects[]" value="economics" id="">
            <label for="economics" class=" form-check-label">Economics</label>
        </div><div class=" form-check">
            <input type="checkbox" name="subjects[]" value="mathematics" id="">
            <label for="mathematics" class=" form-check-label">Mathematics</label>
        </div>
        @error('subjects')
            <span class=" alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">register</button>
    </div>
</form> --}}
<hr>
@foreach ($students as $student)
    <div class=" w3-card-4 w3-container w3-panel">
        School Name
        <ul>
            <li>{{ Str::ucfirst($student->sname) }}</li>
                Your Class
                <ul>
                    <li>{{ Str::ucfirst($student->grades) }}</li>
                    Your Subjects
                    @foreach (json_decode($student->papers) as $paper)
                        <ul>
                            <li>{{ $paper }}</li>
                        </ul>
                    @endforeach
                </ul>

        </ul>
    </div>
@endforeach


@endsection
