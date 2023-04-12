<?php

require_once("autoload.php");
require_once("classes/SitePage.class.php");
$page = new SitePage("Homepage");

print $page->getTopSection();

  //Navigation Bar
  print '<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">';
    print '<div class="container-fluid mx-5 px-5 py-2">';
      print '<a class="navbar-brand" href="' . HOME . '">Project Name</a>';
      print '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
        print '<span class="navbar-toggler-icon"></span>';
      print '</button>';
      print '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        print '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
          print '<li class="nav-item px-2">';
            print '<a class="nav-link active" aria-current="page" href="' . HOME . '">Home</a>';
          print '</li>';

          // If logged in add the My Bookmarks link to navigation  
          if (isset($_SESSION['id'])) {
              print '<li class="nav-item px-2">';
                print '<a class="nav-link" href="' . BOOKMARKS . '">My Bookmarks</a>';
              print '</li>';

          }

          // Updated the <button> to <a> to fix redirects 
          // If logged in change Login button to Logout button 
          if (isset($_SESSION['id'])) {
            print '<li class="nav-item px-2">';
              print '<a class="btn btn-outline-light" href="' . LOGOUT . '">Logout</a>';
            print '</li>';
          } else {
            // If not logged in, display Login button
            print '<li class="nav-item px-2">';
              print '<a class="btn btn-outline-light" href="' . LOGIN . '">Login</a>'; 
            print '</li>';
          }

        print '</ul>';
      print '</div>';
    print '</div>';
  print '</nav>';

    
  //Footer
  print '<footer class="footer mt-auto py-3 bg-dark fixed-bottom">';
    print '<div class="container py-2 text-center">';
      print '<span class="text-white-50 ">Copyright 2023</span>';
    print '</div>';
  print '</footer>';


print $page->getBottomSection();