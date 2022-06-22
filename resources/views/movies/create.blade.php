@extends('parts.body')
@section('MainContent')

<form action="{{ route('movies.store') }}" method="POST" class="boot">
    @csrf
    <div class="mb-3 row justify-content-center">
        <label for="name" class="col-sm-8 col-form-label">Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Inserisci un titolo" name="name">
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror
        <div class="col-sm-8">
            <label for="description" class="col-sm-4 col-form-label">Description</label>
            <textarea name="description" type="text" cols="50" rows="10" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserisci un titolo">
        </textarea>
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror

        <div class="col-sm-8">
            <label for="thumb" class="col-sm-4 col-form-label">Image: </label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="thumb" name="thumb">
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-warning"><strong>Save</strong></button>
</form>