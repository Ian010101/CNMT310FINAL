<?php

require_once("autoload.php");
require_once("classes/SitePage.class.php");
$page = new SitePage("Homepage");

print $page->getTopSection();

    // Navigation bar 
    print '<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">';
        print '<div class="container-fluid mx-5 px-5 py-2">';
            print '<a class="navbar-brand" href="' . HOME . '">Project Name</a>';
            print '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                print '<span class="navbar-toggler-icon"></span>';
            print '</button>';
            print '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                print '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
                    print '<li class="nav-item px-2">';
                        print '<a class="nav-link" href="' . HOME . '">Home</a>';
                    print '</li>';
                    print '<li class="nav-item px-2">';
                        print '<a class="nav-link active" aria-current="page" href="#">My Bookmarks</a>';
                    print '</li>';
                    print '<li class="nav-item px-2">';
                        print '<button class="btn btn-outline-light" href="#">Logout</button>';
                    print '</li>';
                print '</ul>';
            print '</div>';
        print '</div>';
    print '</nav>';
    


    // Search bar
    print '<div class="d-flex justify-content-center align-items-center mt-5">'; 
        print '<div class="container">';
            print '<div class="row d-flex justify-content-center">';
                print '<div class="col-12 col-md-8 col-lg-10">';
                    print '<form class="d-flex">';
                        print '<input class="form-control me-1 inputFocus" type="search" placeholder="Search your bookmarks" aria-label="Search">';
                        print '<button class="btn btn-dark px-4" type="submit">';
                            print '<img src="searchIcon.png">';
                        print '</button>';
                    print '</form>';
                print '</div>';
            print '</div>';
        print '</div>';
    print '</div>'; 
    
    // Add bookmark button 
    print '<div class="d-flex justify-content-center align-items-center mt-5">';
        print '<div class="container">';
            print '<div class="row d-flex justify-content-center">';
                print '<div class="col-12 col-md-8 col-lg-10">';
                    print '<button class="btn purpleButton" type="submit">+ Add Bookmark</button>';
                print '</div>';
            print '</div>';
        print '</div>';
    print '</div>';

    // Bookmark card 
    print '<div class="d-flex justify-content-center align-items-center mt-3">';
        print '<div class="container">';
            print '<div class="row d-flex justify-content-center">';
                print '<div class="col-12 col-md-8 col-lg-10">';
                    print '<div class="card bg-white">';
                        print '<div class="card-body p-2">';
                            print '<div>';
                                print '<h5 class="bookmarkTitle">Bookmark Title</h5>';
                                print '<p>Bookmark URL</p>';
                            print '</div>';
                        print '</div>';    
                    print '</div>';
                print '</div>';    
            print '</div>';
        print '</div>';
    print '</div>';


    // Footer 
    print '<footer class="footer mt-auto py-3 bg-dark fixed-bottom">';
        print '<div class="container py-2 text-center">';
            print '<span class="text-white-50 ">Copyright 2023</span>';
        print '</div>';
    print '</footer>';

print $page->getBottomSection();
