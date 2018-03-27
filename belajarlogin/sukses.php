<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css"> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        
        <script >
        function showModal() {
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
              });
          }
        </script>
</head>
<body>
    <form class="container">
        <div class="text-center mb-4 alert alert-dark">
            <marquee>
                <h1 style="color: red">Selamat Datang</h1>
            </marquee>
              
        </div>
        <div class="text-center mb-4">
            <button onclick="showModal();" class="btn btn-primary " type="button" data-toggle="modal" data-target="#exampleModal">
            Logout
            </button>  
        </div>
        
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
                  Anda yakin mau keluar?
              </div>
              <div class="modal-footer">
                  <button onclick="window.location = ('index.php');" type="button" class="btn btn-success">YES</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button> 
              </div>
            </div>
          </div>
        </div>
</body>
</html>