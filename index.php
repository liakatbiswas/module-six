<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Registration Form</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
    a {
      display: inline-block;
      margin-right: 10px;
      padding: 10px 12px;
    }
    </style>
  </head>

  <body>


    <div class="container">
      <div class="row">
        <div class="column-60 column-offset-20">
          <a href="./index.php">Registration</a>
          <a href="./display.php">Display</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="column-60 column-offset-20">


          <form method="post" action="functions.php" enctype="multipart/form-data">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="profile_pic" class="form-label">Profile Picture:</label>
              <div class="input-group">
                <input type="file" class="form-control" id="profile_pic" name="profile_pic"
                  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Choose
                  file</button>
              </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>



        </div>
      </div>


    </div>
  </body>

</html>