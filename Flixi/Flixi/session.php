<?php
session_start();

// Check if a watchlist array exists in the session
if (!isset($_SESSION["watchlist"])) {
  $_SESSION["watchlist"] = array(); // Initialize as an empty array
}

// Add the movie ID to the watchlist array
array_push($_SESSION["watchlist"], $_POST['hiddenid']);

// (Optional) Display the watchlist contents for verification
header("Location: watchlist.php");
exit(); // Stop further script execution
?>
