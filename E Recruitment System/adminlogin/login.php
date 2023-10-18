<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php include("links.php") ?>
  </head>
  <body>
    <header>
      <div class="container center-div shadow">
        <div class="heading text-center text-uppercase text-white mb-5">
          admin login page
        </div>
          <div class="container row d-flex flex-row jutify-content-center">
            <div class="admin-form">
              <form class="" action="checklogin.php" method="post">
                <div class="form-group">
                  <label>Email Id</label>
                  <input type="text" name="user" value="" class="form-control" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                </div>

                <input type="submit" name="" class="btn btn-success" value="Submit">

              </form>
            </div>
          </div>

      </div>
    </header>
  </body>
</html>
