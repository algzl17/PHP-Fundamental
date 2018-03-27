<?php
session_start();
if(isset($_SESSION["salah"])){
    if($_SESSION["salah"] >= 3){
        echo '<h1>ANDA TELAH DIBLOKIR</h1>';
        exit();
    } elseif ($_SESSION["salah"] < 3) {
        
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Belajar Login</title>
        <link rel="icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css"> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        
        <script >
          window.setTimeout(function () {
            $(".alert").fadeTo(400,0).slideUp(400,function () {
              $(this).remove();
            });
          }, 4000);
        function showModal() {
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
              });
          }
        </script>
   
    </head>    
    <body>
      <form method="POST" action="login.php" class=" container form-signin jumbotron">
          <div class="text-center mb-4">
            <img class="mb-4" width="72" height="72" src="assets/images/Logo.png">
            <h1>ADMINISTRATOR</h1>
            <p>Login Untuk Masuk Sistem</p>
          </div>

          <div>
            <?php
              if (isset($_SESSION["salah"])) {
                if ($_SESSION["salah"] < 3 ) {
                  echo '<div align="center" class="alert alert-danger alert-dismissible fade show" role="alert">
                        -= PERHATIAN =- <br>
                        Anda Gagal Masuk ke-'.$_SESSION["salah"].'
                        <button type="button" class="close" data-dismiss="alert" arial-label="close">
                       <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                }
               }
            ?>
          </div>

          <div class="form-label-group">
            <input class="form-control " type="email" name="email" id="email" required="" placeholder="Email Address" autofocus="yes" autocomplete="no">
            <label for="email">Email Address</label>
          </div>
          <div class="form-label-group">
            <input class="form-control" type="password" name="password" required="yes" id="password" placeholder="password">
            <label for="email">Password</label>
          </div>
          <div class="checkbox mb-4">
            <label>
            <input type="checkbox">
            Remember me
            </label>
          </div>
                    
        <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>
        <button onclick="showModal();" class="btn btn-warning btn-block" type="button" data-toggle="modal" data-target="#exampleModal">
        SHOW WARNING
        </button>                
                
      </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">WARNING !!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
                  5150411119 <br>
                  Shofiyullah AL Ghozaly <br>
                ========================== <p>
               Email : admin@gmail.com <br>
               Password : akuganteng
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                
              </div>
            </div>
          </div>
        </div>
        
        <!-- Javascript -->
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
