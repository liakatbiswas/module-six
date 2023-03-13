<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Display</title>
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
      <h2>User Information</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Picture</th>
          </tr>
        </thead>
        <tbody>
          <?php
if (  ( $handle = fopen( "users.csv", "r" ) ) !== FALSE ):
 while (  ( $data = fgetcsv( $handle, 1000, "," ) ) !== FALSE ):
 ?>
          <tr>
            <td><?php echo $data[0]; ?> </td>
            <td><?php echo $data[1]; ?> </td>
            <td> <img src="<?php echo $data[2]; ?>" height='100'> </td>
          </tr>


          <?php
endwhile;
fclose( $handle );
endif;
?>
        </tbody>
      </table>
      <?php
if ( isset( $_COOKIE["username"] ) ) {
 echo "<p>Welcome, " . $_COOKIE["username"] . "!</p>";
}
?>
    </div>


  </body>

</html>