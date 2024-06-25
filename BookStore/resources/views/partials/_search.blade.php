<style>
    .search-bar {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .search-input {
      flex: 1;
      padding: 8px; 
      border: 2px solid transparent; 
      outline: none;
      animation: border-color-rotate 5s linear infinite;
      background-clip: padding-box; 
      outline: none
    }
    .search-btn {
      min-width: 100px;
    }
    
    @keyframes border-color-rotate {
      0% { border-color: #ff0000; }
      25% { border-color: #00ff00; }
      50% { border-color: #0000ff; }
      75% { border-color: #ffff00; }
      100% { border-color: #ff00ff; }
    }
  </style>
</head>
<body>

  <div class="container">
    <form action="{{ route('books') }}" class="search-bar">
      <input class="form-control search-input" name="search"  placeholder="Search">
      <button class="btn btn-primary search-btn" type="submit">Search</button>
    </form>
  </div>