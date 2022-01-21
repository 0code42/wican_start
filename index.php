<html>
  <head>
    <title>Antall dager igjen til ny jobb i Wican Data</title>
    <meta name="description" content="Alltid gøy med .php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">  
  </head>
  <body>
	  <h3>Vi teller ned!</h3>
	  <img src="/img/wican-gra.png" alt="Wican Logo">
	  </p>
	  <?php
	  echo "Dagens dato:<br>";
	  echo date("d/m/y");
      ?>
	  </p>
      <h5>Antall dager igjen:</h5>
	  <?php
	  $startdate = "1st february";
      $days = round(abs(strtotime($startdate)-time()) / 86400);
      echo $days;
	 ?>
    </p>
    <h5>Antall minutter igjen:</h5>
    </p>
    <?php
	  $startdate = "1st february 2022";
      $minutes = round(abs(strtotime($startdate)-time()) / 60);
      echo $minutes;
	 ?>
    <h5>Antall sekunder igjen:</h5>
    <?php
	 $startdate = "1st february 2022";
       $bts = strtotime($startdate);
       $ts = time();

     if ($bts > $ts) {
        $remaining = $bts - $ts;
     echo "" . $remaining;
    }    
	 ?>  
  </body>
</html>
