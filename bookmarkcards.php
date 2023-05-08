<?php
//require_once("addvisit.php");
print '<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">';
print '<link rel="stylesheet" href="/resources/demos/style.css">';
print '<script src="https://code.jquery.com/jquery-3.6.0.js"></script>';
print '<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>';

// Redirect if accessed directly
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die(header("Location: " . BOOKMARKS));
}
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
                                            print '<a class="deleteButton" id="deleteBookmark" href="deletebookmarks.php?bookmarkID=' . $bookmark->bookmark_id . '">';
                                                print '<img class="deleteIcon" src="images/deleteIcon.png">&nbsp;&nbsp;Delete';
                                            print '</a>';
                                        print '</button>';
                                    print '</div>';
                                    // Bookmark title
									print '<a href ="addvisit.php?bookmark_id=' . $bookmark->bookmark_id . '&bookmarkurl=' . $bookmark->url .'" class="bookmarkTitle" target="_blank"><h5>' . $bookmark->displayname . ' | <span class="visitCount">' . $bookmark->visits . '</span> Visits</h5></a>';
                                    // Bookmark url 
                                    print '<a href ="addvisit.php?bookmark_id=' . $bookmark->bookmark_id . '&bookmarkurl=' . $bookmark->url .'" class="bookmarkURL"  target="_blank"><span>' . $bookmark->url . '</span></a>';
                                print '</div>';
                            print '</div>';    
                        print '</div>';
                    print '</div>';    
                print '</div>';
            print '</div>';
        print '</div>';
    }
	
}
