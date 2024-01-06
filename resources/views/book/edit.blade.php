@extends('home')

@section('content')

  
  <!-- Modal -->
  <div class="modal fade" id="deleteRentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Book with the title - {{$book->title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('book/delete/'.$book->id)}}" method="POST">
            @csrf 
            @method('DELETE')
        <div class="modal-body">
            Are you sure you want to delete this book?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete Book</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <h1>Edit Book</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('book/'.$book->id)}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="author_id"> Select Author </label>
                <select name='author_id'id='author_id' class='form-select' value="{{$book->author_id}}">
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
                <input type="text" name="title" class="form-control" value="{{$book->title}}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{$book->isbn}}">
                @error('isbn')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Button trigger modal -->
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRentModal">
    Delete Book
  </button>
                <button class="btn btn-primary">
                    Update Book
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection