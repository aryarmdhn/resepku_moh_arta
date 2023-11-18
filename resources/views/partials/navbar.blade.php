<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">RESEPKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
            <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Posts</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts/create">Tulis Resepmu</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Kategori Resep</a>
          </li> 
        </ul>

        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
              </li>
            </ul>
          </li>
          @else
           <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>