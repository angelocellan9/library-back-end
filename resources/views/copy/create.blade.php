@extends('home')

@section('content')

    <h1>New Copy</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('copy/create')}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="book_id"> Select Book </label>
                <select name='book_id'id='book_id' class='form-select'>
                    <option hidden='true'>Select Book</option>
                    <option selected disabled>Select Book</option>
                    @foreach ($books as $bookId => $book)
                        <option value="{{$bookId}}">{{$book}}</option>
                    @endforeach
                </select>
                @error('book_id')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mt-2">
                <label for="copy_number">Copy No.</label>
                <input type="text" name="copy_number" class="form-control">
                @error('copy_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control">
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">
                    Add Copy
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection