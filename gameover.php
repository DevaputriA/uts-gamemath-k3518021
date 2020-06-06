<?php    
// koneksi database
    session_start();
    include "koneksi.php";
    $nama = $_SESSION['nama'];
    $score = $_SESSION['score'];
    mysqli_query($koneksi,"insert into tb_user values('','$nama','$score')");

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
  <title> Gameover ! </title>
</head>
<body class="bg-light">
<div class="container mt-5" align="center">
        <form action="soal1.php" method="post">
        	<div class="col-md-15">
        		<?php
						echo '<p><b> Hallo, ' . $_SESSION['nama']; 
    				echo '.... Sayangnya, permainan sudah selesai, Semoga kali lain bisa lebih baik  </b></p>';
            echo 'Score Anda :'. $_SESSION['score'];
            ?>
    				<p><a href='regis.php'> Main Lagi </a></p>
    		</div>
        <label><h5>HALL OF FAME</h5></label>
                <table border="2">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Score</td>
                    <tr>
                    <?php
                    $sql = "SELECT * FROM tb_user ORDER BY score DESC LIMIT 10";
                    $result = mysqli_query($GLOBALS['koneksi'], $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['score'] . "</td>";
                            echo "</tr>";
                            $i = $i + 1;  
                        }
                    } else {
                        
                    }
                    mysqli_close($GLOBALS['koneksi']);
                    ?>
                  </tr>
                </tr>
              </table>
            </label>
          </label>
        </form>
        <footer id="footer" class="alt">
            <center>
            <br> <font size="1px">Copyright2020. by Deva Putri Anggelina
            <br>More Information devaanggelina@student.uns.ac.id </font></a>
            
            </center>          
        </footer>
      </div>
    </body>
    </html>