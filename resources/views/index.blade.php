@extends('layouts.app')

@section('title', 'Validator')

@section('content')

    <div class="col-md-4 offset-md-4 mt-2">
        <form class="form-inline" method="POST" action="{{route('index')}}">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control @error('cnp') is-invalid @enderror" id="cnp" name="cnp" maxlength="13" value="{{old('cnp')}}" placeholder="Insert CNP">
            </div>
            <button type="submit" class="btn btn-secondary mb-2">Validate</button>
        </form>
        @error('cnp')
            <div class="text-danger text-center mt-2">
                {{ $message }}
            </div> 
        @enderror
    </div>

    @if($cnp)
        <div class="col-md-12 mt-5">
            <h2 class="text-center text-info">CNP: {{ $cnp }} is valid!</h2>
        </div>
    @endif

@endsection