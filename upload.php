
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Calorie Camera Demo</title>
  <meta name="description" content="Calorie Camera Demo">
  <meta name="author" content="Axel Ali">
  <style gf-font-style="'Abel script=all rev=2':400">@font-face {
    font-family: 'Abel script=all rev=2';
    font-style: normal;
    font-weight: 400;
    src:   url(https://fonts.gstatic.com/l/font?kit=bxgMFWio_H6aBiKtgFQXv431S-SeozXCtSt6F11xXdIythkddbjxiayT3-8IYwKbujm4K-eVZHavHVh839UYnN-PwCzcFZQTeF_I41DH7gz7r2JVGcY1iblqCBWHfGVb0iLboBMlxBFYWGCMnAyBbpcFbpxlqe4UyLfYvnR9wW_3rGVtsTkPsbDajuO5ueQw&skey=bf47258294911e6d&v=v6) format('woff2');
  }
  </style>
  <link rel="stylesheet" href="styles.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <div id="top">
    Calorie Counter Demo!
  </div>
  <div id="mid">
<?php
define("UPLOAD_DIR", "./uploads/");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
       echo "An error occurred.";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "Unable to save file.";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
    echo "<img src=". UPLOAD_DIR . $name ." >";


}
?>

  </div>
  <div id="bot">

  <?php
    $output = shell_exec ( "python ./Tensorflow-Image-Classification/label_image.py  ./". UPLOAD_DIR . $name );

    $firstresult = explode("(",$output);
    $FOOD = $firstresult[0];
     ?>
    <table class="table">

<caption>
<?php echo strtoupper($FOOD);
?>
</caption>
    	<caption>Nutrition Facts </caption>
      <caption>
        <?php
        switch ($FOOD) {
        case "uncooked egg ":
          echo "Serving Size: 1 oz";
          break;
        case "mostachol ":
          echo "Serving Size a cup (91g)";
          break;
        case "apple ":
          echo "Serving Size of Medium sized(3''  dia - 182g) ";
          break;
        case "corn flakes ":
          echo "Serving Size of 2 Tablespoons (14g)  ";
          break;
          case "vitamin water bottle essential ":
              echo "Serving Size of  1 Bottle 20 fl oz (600ml) ";
              break;
              default:
                echo "We coulnt find: "."*".$FOOD."*";
        }
           ?>
</caption>
    	<thead>
    	<tr>
    		<th><br></th>
    		<th>Amount</th>
    	</tr>
    	</thead>
    	<tbody>
    	<tr>
    		<td>Calories</td>
    		<td><?php
        switch ($FOOD) {
        case "uncooked egg ":
          echo "14.6 Kcal";
          break;
        case "mostachol ":
          echo "182 Kcal";
          break;
        case "apple ":
          echo "94.64 Kcal";
          break;
        case "corn flakes ":
          echo "50 Kcal";
          break;
          case "vitamin water bottle essential ":
              echo "120 Kcal";
              break;
              default:
                echo "We coulnt find";
        }
           ?></td>
    	</tr>
    	<tr>
    		<td>Fats</td>
    		<td><?php
        switch ($FOOD) {
        case "uncooked egg ":
          echo "0g";
          break;
        case "mostachol ":
          echo "9.1g";
          break;
        case "apple ":
          echo "0.3g";
          break;
        case "corn flakes ":
          echo "0.5g";
          break;
          case "vitamin water bottle essential ":
              echo "0g";
              break;
              default:
                echo "We coulnt find";
        }
           ?></td>
    	</tr>
    	<tr>
    		<td>Sodium</td>
    		<td><?php
        switch ($FOOD) {
        case "uncooked egg ":
          echo "0.0 mg";
          break;
        case "mostachol ":
          echo "971 mg";
          break;
        case "apple ":
          echo "1.82 mg";
          break;
        case "corn flakes ":
          echo "35 mg";
          break;
          case "vitamin water bottle essential ":
              echo "0 mg";
              break;
              default:
                echo "We coulnt find";
        }
           ?></td>
    	</tr>
    	<tr>
    		<td>Protein</td>
    		<td><?php
        switch ($FOOD) {
        case "uncooked egg ":
          echo "0.1g";
          break;
        case "mostachol ":
          echo "21.2g";
          break;
        case "apple ":
          echo "0.5g";
          break;
        case "corn flakes ":
          echo "<1g";
          break;
          case "vitamin water bottle essential ":
              echo "0g";
              break;
              default:
                echo "We coulnt find";
        }
           ?></td>
    	</tr>
    	</tbody>
    </table>
Made By Axel Ali , <a href="https://github.com/AxelAli/"> My Github!</a>
<br>All Values Are Figurative.
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="X7T9H7G2ZAKZJ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

</html>
