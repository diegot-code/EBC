<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electronic Business Card Form</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-SH53dFAEPkPNAR7UiOHbatIR5JNEM2EcWwxUIXc1Q/FLycGTbNapWXB4tP889k5T5JU8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="form-container">
      <h2>Create Your Electronic Business Card</h2>
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="first-name" required />
        </div>

        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="last-name" required />
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required />
        </div>

        <div class="form-group">
          <label for="profile-img">Profile Picture (Image)</label>
          <input
            type="file"
            id="profile-img"
            name="profile-img"
            accept="image/*"
            required
          />
        </div>

        <div class="form-group">
          <label for="background-img">Background Image (Image)</label>
          <input
            type="file"
            id="background-img"
            name="background-img"
            accept="image/*"
            required
          />
        </div>

        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>
    <?php
// $directory = './';

// if (!is_dir($directory)) {
//     exit('Invalid diretory path');
// }

// $files = [];
// foreach (scandir($directory) as $file) {
//     if ($file !== '.' && $file !== '..') {
//         $files[] = $file;
//     }
// }

// var_dump($files);
    ?>
  </body>
</html>
