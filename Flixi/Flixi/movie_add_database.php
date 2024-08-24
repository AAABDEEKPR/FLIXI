<?php

require_once('database.php');  


  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $rdate = $_POST['rdate'];
  $rating = $_POST['rating'];
  $runtime = $_POST['runtime'];
  $description = $_POST['description'];
  $viewers = $_POST['viewers'];


  $target_dir = "images/"; // Change this to your upload directory path
  $allowed_extensions = array("jpg", "jpeg", "png");

  $imgcast = ""; 
  $imgpath = "";
  $imglogo = "";

  if (isset($_FILES["imgpath"]) && isset($_FILES["imglogo"]) && isset($_FILES["imgcast"]) ) {
    $check_imgpath = getimagesize($_FILES["imgpath"]["tmp_name"]);
    $check_imglogo = getimagesize($_FILES["imglogo"]["tmp_name"]);
    $check_imgcast = getimagesize($_FILES["imgcast"]["tmp_name"]);

    if ($check_imgpath !== false && $check_imglogo !== false && $check_imgcast !== false) {
      $imgpath_extension = strtolower(pathinfo($_FILES["imgpath"]["name"], PATHINFO_EXTENSION));
      $imglogo_extension = strtolower(pathinfo($_FILES["imglogo"]["name"], PATHINFO_EXTENSION));
      $imgcast_extension = strtolower(pathinfo($_FILES["imgcast"]["name"], PATHINFO_EXTENSION));


      if (in_array($imgpath_extension, $allowed_extensions) && in_array($imglogo_extension, $allowed_extensions) && in_array($imgcast_extension, $allowed_extensions)) {
        // Generate unique filenames for security
        $imgpath_filename = uniqid() . "." . $imgpath_extension;
        $imglogo_filename = uniqid() . "." . $imglogo_extension;
        $imgcast_filename = uniqid() . "." . $imgcast_extension;

        // Upload files to the target directory
        $target_imgpath = $target_dir . $imgpath_filename;
        $target_imglogo = $target_dir . $imglogo_filename;
        $target_imgcast = $target_dir . $imgcast_filename;
        if (move_uploaded_file($_FILES["imgpath"]["tmp_name"], $target_imgpath) && move_uploaded_file($_FILES["imglogo"]["tmp_name"], $target_imglogo) && move_uploaded_file($_FILES["imgcast"]["tmp_name"], $target_imgcast)) {
          $imgpath = $target_imgpath;
          $imglogo = $target_imglogo;
          $imgcast = $target_imgcast;
        } else {
          echo "Sorry, there was an error uploading your files.";
        }
      } else {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
      }
    } else {
      echo "Sorry, file is not an image.";
    }
  }

  // Convert "latest", "trending", and "todaybest" to numeric values
  $latest = (int) $_POST['latest'];
  $trending = (int) $_POST['trending'];
  $todaybest = (int) $_POST['todaybest'];
  $oscar = (int) $_POST['oscar'];

  $videopath = $_POST['videopath']; 

  // Prepare and execute insert query
  
  $sql = "INSERT INTO `movies`(`mid`, `name`, `genre`, `rdate`, `rating`, `cast`, `runtime`, `description`, `viewers`, `imgpath`, `imglogo`, `videopath`, `latest`, `trending`, `todaybest` ,`oscar`) VALUES ('','$name', '$genre', '$rdate', '$rating', '$imgcast' , '$runtime' , '$description' ,'$viewers', '$imgpath', '$imglogo', '$videopath', '$latest',' $trending', '$todaybest','$oscar')";

 // Execute the query
if (mysqli_query($conn, $sql)) {


    header("Location: all.php");
    exit(); 

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Close connection
  mysqli_close($conn);
  ?>
    