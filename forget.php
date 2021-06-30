<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>RESET PASSWORD WEBTIX</h1>
            <form action="proses/reset-pass.php" method="post">
              <div class="form-group">
                  <label>E-mail Anda</label>
                  <input class="form-control" type="email" name="email" placeholder="Email@example.com">
              </div>
              <button class="btn btn-success" type="submit" name="reset_pass">SEND</button>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>