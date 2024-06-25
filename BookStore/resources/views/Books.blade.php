

<x-layout>
@include('partials._header');
@if(session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


    <style>
        .con{
            padding-top: 100px;
            
        }
        .card{
            background: white;
            
        }
        img{
            
            width: 200px;
        }
    </style>

    <div class="container con" >
        <div class="row">
        
            @foreach ($books as $book)
                
            
          <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" >
              <img src="{{$book->image_url ? asset('storage/' . $book->image_url): asset('images/emgwa.jpg') }}" class="card-img-top" alt="Placeholder Image">
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('book', ['book' => $book->id]) }}">{{ $book->title }}</a></h5>
                <p class="card-text">{{$book->author}}</p>
                <p class="card-text">${{$book->price}}</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
              </div>
            </div>
          </div>
          @endforeach
      
        </div>
      </div>

</x-layout>
