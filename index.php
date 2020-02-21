<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="hun">
<head>
  <meta charset="UTF-8">
  <title>Vitaminok</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="wrapper">
  	<?php echo $vitaminok; ?>
  	<form class="comment_form">
      <div>
        <label for="name">Hagyományos név :</label>
        <input type="text" name="hagyomanyosNev" id="hagyomanyosNev">
      </div>
      <div>
        <label for="name">Tudományos név:</label>
        <input type="text" name="tudomanyosNev" id="tudomanyosNev">
      </div>
      <div>
        <label for="name">Természetes források:</label>
        <input type="text" name="termeszetesForrasok" id="termeszetesForrasok">
      </div>
      <div>
        <label for="name">Napi szükséglet (µg):</label>
        <input type="number" name="napiSzukseglet" id="napiSzukseglet">
      </div>

      <button type="button" id="submit_btn">Felvétel</button>
      <button type="button" id="update_btn" style="display: none;">Módosítás</button>
  	</form>
  </div>
</body>
</html>
<!-- Add JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts.js"></script>