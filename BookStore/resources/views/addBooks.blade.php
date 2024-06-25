<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .me{
        margin-top: 700px;
    }
  </style>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen pt-6">

<div class="w-full max-w-md mt-6 me">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h2 class="text-center mb-4">Introduce Your Book to the Market</h2>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-book"></i> Title</label>
        <input value="{{ old('title') }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" placeholder="Enter book title">
        @error('title')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="author" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-pen"></i> Author</label>
        <input value="{{ old('author') }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="author" name="author" placeholder="Enter author name">
        @error('author')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="isbn" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-barcode"></i> ISBN</label>
        <input value="{{ old('isbn') }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="isbn" name="isbn" placeholder="Enter ISBN">
        @error('isbn')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="publisher" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-building"></i> Publisher</label>
        <input value="{{ old('publisher') }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="publisher" name="publisher" placeholder="Enter publisher">
        @error('publisher')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="number_pages" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-file-alt"></i> Number of Pages</label>
        <input value="{{ old('number_pages') }}" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number_pages" name="number_pages" placeholder="Enter number of pages">
        @error('number_pages')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="language" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-language"></i> Language</label>
        <input value="{{ old('language') }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="language" name="language" placeholder="Enter language">
        @error('language')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="publisher_date" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-calendar-alt"></i> Publisher Date</label>
        <input value="{{ old('publisher_date') }}" type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="publisher_date" name="publisher_date">
        @error('publisher_date')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-align-left"></i> Description</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" rows="4" placeholder="Enter book description">{{ old('description') }}</textarea>
        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="file_url" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-file-pdf"></i> PDF File</label>
        <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file_url" name="file_url">
        @error('file_url')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-image"></i> Image File</label>
        <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image_url" name="image_url">
        @error('image_url')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-dollar-sign"></i> Price</label>
        <input value="{{ old('price') }}" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" step="0.01" placeholder="Enter price">
        @error('price')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center justify-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="fas fa-plus"></i> Upload Book</button>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-q6eumY8C3TLV8AOUfGpyim+yKxF5G4ZqV9VI+tgDUE6z5lSevxCfIEdhhnNI5ESb" crossorigin="anonymous"></script>
</body>
</html>
