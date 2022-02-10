<?php
if ($_POST) {
    $num1 = ($_POST["number1"]);
    $num2 = ($_POST["root"]);

    switch ($_POST["submit"]) {
        case ($num1 > 0):
            $color = "success";
            $message = "The root of the number ".$num1 ." is".  pow($num1, (1 / $num2));
            break;
          default:  
            $message = "Error";
            $color=  "danger";
            break;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> root  </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center text-danger">
                Calculate specific root of any number
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <label for="number1">Number</label>
                        <input type="text" name="number1" id=" number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="number2">Root number</label>
                        <input type="text" name="root" id="  root" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <label for="number3">Number3</label>
                        <input type="text" name=" number3" id=" number" class="form-control" placeholder="" aria-describedby="helpId"> -->

                    </div>
                    <div class="form-group col-4 offset-4">
                        <input type="submit" name="submit" value="Calculate" />
                    </div>
                </form>
                <div>
                    <?php
                    if (isset($message)) {
                        echo "<div class='alert alert-$color'> $message </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>