@extends('home')

@section('content')

  
  <!-- Modal -->
  <div class="modal fade" id="deleteRentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete copy with the copy ID# of  - {{$copy->id}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('copy/delete/'.$copy->id)}}" method="POST">
            @csrf 
            @method('DELETE')
        <div class="modal-body">
            Are you sure you want to delete this copy?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete Copy</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <h1>Edit Copy</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('copy/'.$copy->id)}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="book_id"> Select Book </label>
                <select name='book_id'id='book_id' class='form-select' value="{{$copy->book_id}}">
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
                <input type="text" name="copy_number" class="form-control" value="{{$copy->copy_number}}">
                @error('copy_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{$copy->status}}">
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Button trigger modal -->
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRentModal">
    Delete Copy
  </button>
                <button class="btn btn-primary">
                    Update Copy
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection