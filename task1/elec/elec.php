<?php
define('vat',0.20);
if($_POST) {
    $units=($_POST["used"]);
    if ($units <= 50) {
        $price = $units * 0.50;
        $priceAfterVat = $price + ($price * vat);

    }
    else if($units < 50 || $units <= 100) {
        $price = $units * 0.75;
        $priceAfterVat = $price + ($price * vat);
    }
    else if($units < 151|| $units <= 250) {
        $price = $units * 1.20;
        $priceAfterVat = $price + ($price * vat);
    }
    else {
        $units>=250;
        $price= $units * 1.50;
        $priceAfterVat = $price + ($price * vat);
    }
}?>
<!doctype html>
<html lang="en">
  <head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row mt-5">
              <div class="col-4 offset-4">
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <li>The units used : <?php echo $_POST['used'] ?></li>
                            <li>Price : <?= $price . '<strong> EGP </strong>'?></li>
                            <li>Vat : <?= vat * 100 . '<strong> % </strong>' ?></li>
                            <li class="text-danger">Total Price : <?=$priceAfterVat . '<strong> EGP </strong>' ?></li>
                        </ul>
                    </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>