<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Admin - PT. Abidin Jaya Teknik</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container">
               <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
               <div class="collapse navbar-collapse">
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link" href="{{ route('admin.products') }}">Produk</a></li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>

       <div class="container my-5">
           @if(session('success'))
           <div class="alert alert-success">{{ session('success') }}</div>
           @endif
           @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif
           @yield('content')
       </div>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   </body>
   </html>