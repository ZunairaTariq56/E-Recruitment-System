<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="index.php" method="post" enctype="multipart/form-data">
  <input type="text" name="user" value="">
  <input type="file" name="img" value="">
  <input type="submit" name="submit" value="submit">
</form>
    </form>
    <?php

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"recruitment");
    if(isset($_POST['submit'])){
      $username = $_POST['user'];
      $files = $_FILES['img'];

      $filename = $files['name'];
      $fileerror = $files['error'];
      $filetmp = $files['tmp_name'];

      // To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
      $fileext = explode('.',$filename);
      // to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
      // we will get jpg
      $filecheck = strtolower(end($fileext));
      $fileextstored = array('png','jpg','jpeg');
      if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'uploads/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $sql = "INSERT INTO testing1(name, image) VALUES ('$username','$destinationfile')";
        $query = mysqli_query($con,$sql);

        $sql1 = "SELECT * FROM testing1";
        $query1 = mysqli_query($con,$sql1);
      //  $row = mysqli_num_rows($query1);
        while($result = mysqli_fetch_array($query1)) {
          ?>

            <tr>
              <td><?php echo $result['id'] ;?></td>
              <td><?php echo $result['name'] ;?></td>
              <td> <img src=" <?php echo $result['image'];?>"height="100px" width="100px"></td>
            </tr><br>

          <?php
        }
      }

    }

     ?>
  </body>
</html>
