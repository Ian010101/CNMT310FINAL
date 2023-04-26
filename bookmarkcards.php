<?php

// Add redirects to prevent direct access

// Function to create bookmark cards
function generateBookmarkCards($bookmarks) {
    // Loop through bookmarks array and generate a card for each bookmark
    foreach ($bookmarks as $bookmark) {
        // Bookmark card 
        print '<div class="d-flex justify-content-center align-items-center mb-2">';
            print '<div class="container">';
                print '<div class="row d-flex justify-content-center">';
                    print '<div class="col-12 col-md-8 col-lg-10">';
                        print '<div class="card bg-white">';
                            print '<div class="card-body p-3">';
                                print '<div>';
                                    print '<div class="float-end">';
                                        // Delete bookmark button 
                                        print '<button type="button" class="btn btn-light" name="submit">';
                                            print '<a href="deleteBookmarks.php?bookmarkID=' . $bookmark->bookmark_id . '">';
                                                print '<img class="deleteIcon" src="images/deleteIcon.png">&nbsp;&nbsp;Delete';
                                            print '</a>';
                                        print '</button>';
                                    print '</div>';
                                    // Bookmark title
                                    print '<a href="' . $bookmark->url . '" class="bookmarkTitle"><h5>' . $bookmark->displayname . '</h5></a>';
                                    // Bookmark url 
                                    print '<a href="' . $bookmark->url . '" class="bookmarkURL"><span>' . $bookmark->url . '</span></a>';
                                print '</div>';
                            print '</div>';    
                        print '</div>';
                    print '</div>';    
                print '</div>';
            print '</div>';
        print '</div>';
    }
}
