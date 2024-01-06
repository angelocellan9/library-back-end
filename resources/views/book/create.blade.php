@extends('home')

@section('content')

    <h1>New Book</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('book/create')}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="author_id"> Select Author </label>
                <select name='author_id'id='author_id' class='form-select'>
                    <option hidden='true'>Select Author</option>
                    <option selected disabled>Select Author</option>
                    @foreach ($authors as $authorId => $author)
                        <option value="{{$authorId}}">{{$author}}</option>
                    @endforeach
                </select>
                @error('author_id')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control">
                @error('isbn')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">
                    Add Book
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection