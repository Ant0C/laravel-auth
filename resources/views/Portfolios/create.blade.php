@extends('layouts.app')

@section('content')
    <h1>Nuovo progetto</h1>
    <div class="container">
        <form action="{{route('portfolios.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome progetto</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" value="{{ old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Customer</label>
                <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" value="{{ old('customer')}}">
                @error('customer')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description')}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" value="{{ old('url')}}">
                @error('url')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi progetto</button>
        </form>
    </div>
@endsection