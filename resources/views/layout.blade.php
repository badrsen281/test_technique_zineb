<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ECG GROUPE PEREIRE</title>
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
    

<div class="wrapper" id="app">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <ul class="navbar-nav ml-auto">
     <!-- *** *** *** -->
  </ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link">
    
    <span class="brand-text font-weight-light ml-5">ECG GROUPE</span>
  </a>

  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Zineb SENNAN</a>
      </div>
    </div>

    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Rechercher" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Commandes
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Articles
            </p>
          </a>
        </li>



      </ul>
    </nav>

  </div>

</aside>

<div class="content-wrapper">

  <router-view></router-view>

</div>


<aside class="control-sidebar control-sidebar-dark">
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>


<footer class="main-footer">
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <strong>Copyright &copy; 2024 <a href="#">ECG GROUPE PEREIRE</a>.</strong> All rights
  reserved.
</footer>
</div>
    
</body>
</html>