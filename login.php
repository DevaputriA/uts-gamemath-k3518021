<?php
    session_start();
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <title> Login Math Games </title>
</head>
<body>
<div class="container mt-15" align="center">
    <div class="isi">
        <div class="jumbotron">
          <div id="kontenku">
            <p>&larr; <a href="index.php"> Back to Home</a></p> <br>
              <div class="row">
                  <div class="col-sm-12">
                    <img src="math0.png" alt="math0.png" class="img img-responsive imgku">
                    <br>
        <fieldset>
            <p> <?php
            echo '<h4> Hello, ' . $_SESSION['nama'] . ' Selamat datang kembali di permainan ini!</h4>'; 
            ?>
            </p>
        </fieldset>
        <br>
        <p> Bukan Anda? <a href="regis.php"> Klik di sini</a></p>
        </br>
            <a href="soal1.php"> <input type="submit" class="btn btn-success btn-block" name="submit" value="Start Game"> </a>
        </div>
    </div>
</div>
    <footer id="footer" class="alt">
            <center>
            <br> <font size="1px">Copyright2020. by Deva Putri Anggelina
            <br>More Information devaanggelina@student.uns.ac.id </font></a>
            
            </center>          
        </footer>
</div>
</body>
</html>
