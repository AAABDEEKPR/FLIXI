<?php
session_start();

// Check if watchlist exists in session
if (isset($_SESSION["watchlist"]) && !empty($_SESSION["watchlist"])) {
  $movieIdToRemove = $_POST['hiddenid_session']; // Assuming movie ID is passed in URL parameter "id"

  $filteredWatchlist = array_filter($_SESSION["watchlist"], function ($movieId) use ($movieIdToRemove) {
    return $movieId != $movieIdToRemove; // Keep IDs that don't match the one to remove
  });

  // Update session if changes were made
  if (count($filteredWatchlist) !== count($_SESSION["watchlist"])) {
    $_SESSION["watchlist"] = $filteredWatchlist;
  }

  // (Optional) Confirmation message
  header("Location: watchlist.php");
  exit(); // Stop further script execution
} else {
  echo "Your watchlist is empty.";
}
?>
