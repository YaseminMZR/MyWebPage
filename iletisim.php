<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <title> Yasemin ve İstanbul</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon" />
  </head>
  
  
  <body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

<a href="index.html" class="navbar-brand"><img class="mr-3" src="img/logo.jpg" style="width: 60px;;"><i style="color: indianred;">Yasemin ve İstanbul</i></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div id="menu" class="collapse navbar-collapse justify-content-center">
    <ul class="navbar-nav">

        <li class="nav-item"> <a href="index.html"class="nav-link text-white">Anasayfa</a> </li>
        <li class="nav-item"> <a href="özgeçmiş.html"class="nav-link text-white">Özgeçmiş</a></li>
        <li class="nav-item"> <a href="#"class="nav-link  text-white">İstanbul</a> </li>
        <li class="nav-item"> <a href="mirasımız.html"class="nav-link  text-white">Mirasımız</a> </li>
        <li class="nav-item"> <a href="ilgiAlanlarım.html"class="nav-link text-white">İlgi Alanlarım</a> </li>
        <li class="nav-item"> <a href="#"class="nav-link  text-white">Login</a> </li>
        <li class="nav-item"> <a href="iletisim.html"class="nav-link  text-white">İletişim</a> </li>
   
    </ul>
</div>
</nav>


<div id="all" style="height:100%">



<div id="container">

  <div class="row" style="margin: 0px;">
      <div class="col-sm-4" ></div>
      <div class="col-sm-4" style=" margin-top: 80px ;background-color: rgb(137, 226, 241); opacity: 0.8;">
          <?php
                  echo "....Hoşgeldiniz.... !";
                  echo "<br/><br/>";
                  echo "KİŞİSEL BİLGİLERİNİZ ";
                  echo "<br/><br/>";
                  $adi = $_POST["adi"];
                  echo " Adınız ve soyadınız : <b> $adi </b> ";
                  echo "<br/>";
                  $cinsiyet = $_POST["cinsiyet"];
                  echo "Cinsiyetiniz : <b> $cinsiyet </b>";
                  echo "<br/>";
                  $yas = $_POST["yas"];
                  echo "Yaş Aralığınız : <b> $yas </b>";
                  echo "<br/>";
                  $egitim = $_POST["egitim"];
                  echo "Eğitim Durumunuz : <b> $egitim </b>";
                  echo "<br/>";
                  if(isset($_POST["dil"])) {
                      $diller = $_POST["dil"];
                   
                      echo 'Seçtiğiniz yabancı diller : <br/>';
                   
                      foreach($diller as $dil) {
                          echo " <b> $dil </b> ";
                          echo "<br/>";
                      }
                  } else {
                      echo "Hiç yabancı dil  seçmediniz.";
                      echo "<br/>";
                  }
                  $tel = $_POST["tel"];
                  echo " Telefon Numaranız : <b> $tel </b>";
                  echo "<br/>";
                  $email = $_POST["email"];
                  echo " E-Mail Adresiniz : <b> $email </b>";
                  echo "<br/>";
                  $adres = $_POST["adres"];
                  echo " Adresiniz :<b> $adres </b>";
                  echo "<br/>";
  
  
  
          ?>



        </div>
    </div>
</div>
</div>
    

       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

    <footer>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-bottom">
          <div class="collapse navbar-collapse justify-content-center">
           <p> Copyright © Tüm Hakları Saklıdır .</p>
          </div>
        </nav>
      </footer>

  </body>
</html>