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
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="w-full max-w-md">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h2 class="text-center mb-4">User Registration</h2>
    <form method="POST" action="{{route('storeUser')}}">
        @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-user"></i> Name</label>
        <input value="{{old('name')}}" name="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" placeholder="Enter your name">
      </div>
      @error('name')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-envelope"></i> Email address</label>
        <input value="{{old('email')}}" name="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" placeholder="Enter your email">
      </div>
      @error('email')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
      <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-lock"></i> Password</label>
        <input value="{{old("password")}}" name="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" placeholder="Enter password">
      </div>
      @error('password')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-lock"></i> Confirm Password</label>
        <input value="{{old('password_confirmation')}}" name="password_confirmation" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" placeholder="Confirm password">
      </div>
      @error('password_confirmation')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
      <div class="flex items-center justify-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="fas fa-user-plus"></i> Register</button>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-q6eumY8C3TLV8AOUfGpyim+yKxF5G4ZqV9VI+tgDUE6z5lSevxCfIEdhhnNI5ESb" crossorigin="anonymous"></script>
</body>
</html>
