<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Book Store</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white-100">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('books')}}">
            <i class="fas fa-arrow-left"></i>
          </a>
        </div>
      </nav>
      

  <header class="text-center my-6">
    <h1 class="text-3xl font-bold uppercase">YOUR BOOK STORE</h1>
  </header>

  <div class="container">
    <table class="table table-striped">
      <tbody>
        @unless($Books->isEmpty())
        @foreach($Books as $book)
        <tr>
          <td>
            <a href="{{ route('book', ['book' => $book->id]) }}" class="text-blue-600">{{ $book->title }}</a>
          </td>
          <td>
            <a href="/books/{{$book->id}}/edit" class="btn btn-primary">
              <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>
          </td>
          <td>
            <form method="POST" action="/books/{{$book->id}}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i> Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="3" class="text-center">No Listings Found</td>
        </tr>
        @endunless
      </tbody>
    </table>
  </div>

  <footer class="fixed bottom-0 right-0 left-0 bg-gray-900 text-white text-center py-4 mt-8">
    <p>&copy; 2024  Your Book Store. All rights reserved.</p>
  </footer>

</body>
</html>
