<?php 
// Include router class
include('Route.php');

// Add base route (startpage)
Route::add('/',function(){
    echo 'Welcome :-)';
});
?>