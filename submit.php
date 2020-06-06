<?php
ob_start();
session_start();

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
  <title> Submit Math Game </title>
</head>
<body class="bg-light">
<div class="container mt-5" align="center">
        <form action="soal1.php" method="post">
        	<div class="col-md-15">
        		<?php
					// membuat obyek class
            include 'class-game.php';

					$game1 = new mathgame();
					if ($game1->result() == $_POST['kode'])
					{
            //jika jawaban benar
						echo 'Hello, ' . $_SESSION['nama']; 
    				echo '<p><b>Jawaban Anda Benar </b></p>';
            echo '<p> Lives: ' .$_SESSION['lives']. ' ';
            echo '| Score:'. $_SESSION['score'] +=10;
					} else {
            //jika jawaban salah
						echo 'Hello, ' . $_SESSION['nama']; 
    				echo '<p><b>Jawaban Anda Salah</b></p>';
            echo '<p> Lives: ' .$_SESSION['lives']-=1;
            echo '| Score:'. $_SESSION['score'] -=2;
    				}
            // jika lives = 0 , akan gameover
            if ($_SESSION['lives'] ==0) 
              header("location:gameover.php");
            
            ?>
    				<p><a href='soal1.php'> Soal Selanjutnya </a></p>
    		</div>
    	</form>
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