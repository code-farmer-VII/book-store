<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
  .navbar{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100; 
  }
  .search-input{
    animation: border-color-rotate 5s linear infinite;
    
  }
  @keyframes border-color-rotate {
      0% { border-color: #ff0000; }
      25% { border-color: #00ff00; }
      50% { border-color: #0000ff; }
      75% { border-color: #ffff00; }
      100% { border-color: #ff00ff; }
    }
    footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            width: 100%;
        }
        .me{
          position: absolute;
          right: 3px;
        }
        input:focus{
          margin-right: -2px;
          border-left-width: 0px;
          outline: none;
          
        }
        .button{
          margin-right: 100px;
        }

</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('books')}}">Book Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" ><form action="{{ route('books') }}" class="d-flex">
              <input class="form-control  search-input"  placeholder="Search" name="search" >
              <button class="btn bg-success text-white button" type="submit">Search</button>
            </form></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route("create")}}">Sell Books</a>
          </li>
          @auth

          <li>
            <span class="font-bold  uppercase me">
              Welcome {{auth()->user()->name}}
            </span>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('myStore')}}"><i class="fas fa-book"></i>My Store</a>
          </li>

          <li class="nav-item">
            <form class="inline" method="POST" action="{{route('logout')}}">
              <a class="nav-link" href="#"><form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                  <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
          </li>

          @else

          <li class="nav-item">
            <a class="nav-link" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('register')}}">Register</a>
          </li>

              @endauth
            </form></a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <main>
    {{ $slot }}
  </main>
</body>
<footer>
  
  <p>&copy; 2024 Temesgen BOOK STORE Company. All rights reserved.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
