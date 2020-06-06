<?php
session_start();
	if(isset($_POST['nama'])){
		$_SESSION['nama'] = $_POST['nama'];
		header("Location: login.php");
	}
    $_SESSION['lives'] = '5';
    $_SESSION['score'] = '0';
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <title> Regis Math Game </title>
</head>
<body class="bg-light">
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-6">
          <p>&larr; <a href="awal.php"> Back Home</a>
    <br/><br/>
    <h4>Ayo mainkan Game mu ! </h4>
    <form action="" method="post">
      <div class="form-group">
          <label for="name"> Masukkan Nama Anda :  </label>
          <input class="form-control" type="text" name="nama" placeholder="Nama Anda" />
      </div>
      <div class="form-group">
          <label for="email"> Masukkan Email Anda : </label>
          <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
      </div>
      <input type="submit" class="btn btn-success btn-block" name="submit" value="Submit" />
  </form>
</div>
<div class="col-md-6" >
    <img class="img img-responsive" src="math0.png"  />
    <footer id="footer" class="alt">
            <center>
            <br> <font size="1px">Copyright2020. by Deva Putri Anggelina
            <br>More Information devaanggelina@student.uns.ac.id </font></a>
            
            </center>          
        </footer>
</div>
</body>
</html>
