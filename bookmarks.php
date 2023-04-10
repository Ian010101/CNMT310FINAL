<?php

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Bookmarks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid mx-5 px-5 py-2">
          <a class="navbar-brand" href="#">Project Name</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active" aria-current="page" href="#">My Bookmarks</a>
              </li>
              <li class="nav-item px-2">
                <button class="btn btn-outline-light" href="#">Logout</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    



    <div class="d-flex justify-content-center align-items-center mt-5"> <!-- vh-100 --> 
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-10">
                    <form class="d-flex">
                        <input class="form-control me-1 inputFocus" type="search" placeholder="Search your bookmarks" aria-label="Search">
                        <button class="btn btn-dark px-4" type="submit">
                            <img src="searchIcon.png">
                        </button>
                    </form>
                </div>    
            </div>
        </div> 
    </div> 
    
    <div class="d-flex justify-content-center align-items-center mt-5"> <!-- vh-100 --> 
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-10">
                    <button class="btn purpleButton" type="submit">+ Add Bookmark</button>
                </div>    
            </div>
        </div> 
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3"> <!-- vh-100 --> 
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-10">
                    <div class="card bg-white">
                        <div class="card-body p-2">
                            <div>
                                <h5 class="bookmarkTitle">Bookmark Title</h5>
                                <p>Bookmark URL</p>
                            </div>
                            
                        </div>    
                    </div>
                </div>    
            </div>
        </div> 
    </div>


    <footer class="footer mt-auto py-3 bg-dark fixed-bottom">
        <div class="container py-2 text-center">
            <span class="text-white-50 ">Copyright 2023</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>