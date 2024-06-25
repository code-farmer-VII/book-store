<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book Information</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>
    .me{
        margin-top: 700px;
    }
    footer{
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 100;
    }
    body{
        margin-bottom: 700px
    }
</style>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md me">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-center mb-4">Edit Book Information</h1>
            <form action="{{ route('update', ['book' => $book->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-book"></i> Title:</label>
                    <input value="{{$book->title}}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" placeholder="Enter book title">
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-pen"></i> Author:</label>
                    <input value="{{$book->author}}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="author" name="author" placeholder="Enter author name">
                    @error('author')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="isbn" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-barcode"></i> ISBN:</label>
                    <input value="{{$book->isbn}}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="isbn" name="isbn" placeholder="Enter ISBN">
                    @error('isbn')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="publisher" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-building"></i> Publisher:</label>
                    <input value="{{$book->publisher}}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="publisher" name="publisher" placeholder="Enter publisher">
                    @error('publisher')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="number_pages" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-file-alt"></i> Number of Pages:</label>
                    <input value="{{$book->number_pages}}" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number_pages" name="number_pages" placeholder="Enter number of pages">
                    @error('number_pages')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="language" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-language"></i> Language:</label>
                    <input value="{{$book->language}}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="language" name="language" placeholder="Enter language">
                    @error('language')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="publisher_date" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-calendar-alt"></i> Publisher Date:</label>
                    <input value="{{$book->publisher_date}}" type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="publisher_date" name="publisher_date">
                    @error('publisher_date')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-align-left"></i> Description:</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" rows="4" placeholder="Enter book description">{{$book->description}}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="file_url" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-file-pdf"></i> PDF File:</label>
                    <input value="{{$book->file_url}}" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file_url" name="file_url">
                    @error('file_url')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-image"></i> Image File:</label>
                    <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image_url" name="image_url">
                    @error('image_url')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-dollar-sign"></i> Price:</label>
                    <input value="{{$book->price}}" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" step="0.01" placeholder="Enter price">
                    @error('price')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="fas fa-plus"></i> Update Book</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-q6eumY8C3TLV8AOUfGpyim+yKxF5G4ZqV9VI+tgDUE6z5lSevxCfIEdhhnNI5ESb" crossorigin="anonymous"></script>
</body>
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2024  Your Book Store. All rights reserved.</p>
</footer>
</html>
