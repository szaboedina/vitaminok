<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'szaboedina');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
  if (isset($_POST['save'])) {
    $hagyomanyosNev = $_POST['hagyomanyosNev'];
    $tudomanyosNev = $_POST['tudomanyosNev'];
    $termeszetesForrasok = $_POST['termeszetesForrasok'];
  	$napiSzukseglet = $_POST['napiSzukseglet'];

  	$sql = "INSERT INTO vitaminok (hagyomanyosNev, tudomanyosNev, termeszetesForrasok, napiSzukseglet) VALUES ('{$hagyomanyosNev}', '{$tudomanyosNev}','{$termeszetesForrasok}','{$napiSzukseglet}')";
  	if (mysqli_query($conn, $sql)) {
  	  $id = mysqli_insert_id($conn);
      $saved_vitamin = '<div class="comment_box">
      		<span class="delete" data-id="' . $id . '" >Törlés</span>
      		<span class="edit" data-id="' . $id . '">Módosítás</span>
            <div class="display_hagyomanyosNev">'. $hagyomanyosNev .'</div>
            <div class="vitamin_tudomanyosNev">'. $tudomanyosNev.'</div>
            <div class="vitamin_termeszetesForrasok">'. $termeszetesForrasok.'</div>
            <div class="vitamin_napiSzukseglet">'. $napiSzukseglet.'</div>
      	</div>';
  	  echo $saved_vitamin;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM vitaminok WHERE id=" . $id;
  	mysqli_query($conn, $sql);
  	exit();
  }
  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$hagyomanyosNev = $_POST['hagyomanyosNev'];
    $tudomanyosNev = $_POST['tudomanyosNev'];
    $termeszetesForrasok = $_POST['termeszetesForrasok'];
    $napiSzukseglet = $_POST['napiSzukseglet'];
  	$sql = "UPDATE vitaminok SET hagyomanyosNev='{$hagyomanyosNev}', tudomanyosNev='{$tudomanyosNev}', SET termeszetesForrasok='{$termeszetesForrasok}', SET napiSzukseglet='{$napiSzukseglet}' WHERE id=".$id;
  	if (mysqli_query($conn, $sql)) {
  		$id = mysqli_insert_id($conn);
  		$saved_vitamin = '<div class="comment_box">
  		  <span class="delete" data-id="' . $id . '" >Törlés</span>
  		  <span class="edit" data-id="' . $id . '">Módosítás</span>
          <div class="display_hagyomanyosNev">'. $hagyomanyosNev .'</div>
          <div class="vitamin_tudomanyosNev">'. $tudomanyosNev .'</div>
          <div class="vitamin_termeszetesForrasok">'. $termeszetesForrasok .'</div>
          <div class="vitamin_napiSzukseglet">'. $napiSzukseglet .'</div>
  	  </div>';
  	  echo $saved_vitamin;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }


  // Retrieve comments from database
  $sql = "SELECT * FROM vitaminok";
  $result = mysqli_query($conn, $sql);
  $vitaminok = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
  	$vitaminok .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >Törlés</span>
  		  <span class="edit" data-id="' . $row['id'] . '">Módosítás</span>
          <div class="display_hagyomanyosNev">'. $row['hagyomanyosNev'] .'</div>
          <div class="vitamin_tudomanyosNev">'. $row['tudomanyosNev'] .'</div>
          <div class="vitamin_termeszetesForrasok">'. $row['termeszetesForrasok'] .'</div>
          <div class="vitamin_napiSzukseglet">'. $row['napiSzukseglet'] .'</div>
  	  </div>';
  }
  $vitaminok .= '</div>';
?>