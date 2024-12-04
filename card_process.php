<?php

if(!isset($_POST['buildsites'])) {
    header("Location: index.php");
    exit;
}


$firstname = $_POST['firstname'] ?: "John";
$lastname = $_POST['lastname'] ?: "Doe";
$email = $_POST['email'] ?: "johndoe@gmail.com";
$phonenumber = $_POST['phone'] ?: "904-111-1111";
$profile_pic = $_POST['proflie-img'] ?: "../../male-profile-pic.png";
$profile_background = $_POST['background-img'] ?: "../../bgi.webp";

$user_directory = "./business-cards/" . $_POST['firstname'] . "_" . $_POST['lastname'];

mkdir($user_directory);

    $myfile = fopen($user_directory . "index.html", "w") or die("Unable to open file!");
    $txt = <<<BUSINESSCARD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electronic Business Card</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../../sample.css" />
    <style>
    /* Card Header (Profile Section) */
    .card-header {
    background: url("$profile_background") center/cover no-repeat;
    padding: 20px;
    text-align: center;
    }
    </style>
  </head>
  <body>
    <div class="card">
      <div class="card-header">
        <img
          src="$profile_pic"
          class="profile-picture"
          alt="Profile Picture"
        />
      </div>
      <div class="card-body">
        <div class="social-links">
          <a
            id="youtube-link"
            href="https://youtube.com"
            target="_blank"
            aria-label="YouTube"
          >
            <i class="fa-brands fa-youtube"></i>
            <!-- YouTube Icon -->
          </a>
          <a
            id="google-link"
            href="https://google.com"
            target="_blank"
            aria-label="Google"
          >
            <i class="fa-brands fa-google"></i>
            <!-- Google Icon -->
          </a>
        </div>

        <div class="description">Short Intro to Person</div>
        <div class="contact-info">Contact Info</div>
      </div>
    </div>
  </body>
</html>
BUSINESSCARD;
    fwrite($myfile, $txt);
    fclose($myfile);


header("Location: index.php");




