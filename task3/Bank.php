<?php
if ($_POST) {
    $year = ($_POST["year"]);
    $user = ($_POST["name"]);
    $loan = ($_POST["loan"]);
    $intrate = "";
    $total = "";
    $payM = "";
    // $int=0;
    if(!empty($year) && !empty($loan)){
        switch ($_POST["cal"]) {
            case $year <= 3:
                $int = $loan * (0.10);
                $intrate = $int * $year;
                $total = $intrate + $loan;
                $month = $year * 12;
                $payM = $total / $month;
                break;
            case $year > 3:
                $int = $loan * (0.15);
                $intrate = $int * $year;
                $total = $intrate + $loan;
                $month = $year * 12;
                $payM = $total / $month;
                break;
        }
    }
    
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row mr-auto">
            <div class="col-12">
                <h1 class="text-center text-info ">Bank
                </h1>
            </div>
            <div class="col-4 mr-auto offset-4">
                <form class="" method="post">
                    <div class="form-group">
                        <label for=" Bank " class="text-info"> User name </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if (isset($_POST['name'])) {
                                                                                                                                            echo $_POST['name'];
                                                                                                                                        } ?>">
                        <label for=" Bank " class="text-info  "> loan amount </label>
                        <input type="number" name="loan" id="loan" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if (isset($_POST['loan'])) {
                                                                                                                                            echo $_POST['loan'];
                                                                                                                                        } ?>">
                        <label for=" Bank " class="text-info "> loan years </label>
                        <input type="number" name="year" id="year" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if (isset($_POST['year'])) {
                                                                                                                                            echo $_POST['year'];
                                                                                                                                        } ?>">

                    </div>

                    <div class="form-group">
                        <button name="cal" value="cal" id="cal" class=" m-auto btn btn-dark rounded"> Calculate</button>
                    </div>
                    <?php if ($_POST) {
                        if (empty($user)) {

                            echo "<div class='alert alert-danger'> Please enter your name </div>";
                        }
                        if (empty($loan)) {
                            echo "<div class='alert alert-danger'> Please enter  your loan </div>";
                        }
                        if (empty($year)) {
                            echo "<div class='alert alert-danger'> Please enter data </div>";
                        }
                    } ?>
                </form>
                <div>
                    <?php
                    if ($_POST) { ?>
                        <table class="col-12 table-sm table-bordered  ">
                            <thead>
                                <th>user name</th>
                                <th> Interest rate </th>
                                <th>loan after interest </th>
                                <th>Monthly </th>
                            </thead>
                            <tbody class="table-info">
                                <td> <?= $user ?></td>
                                <td> <?= $intrate ?></td>
                                <td><?= $total ?></td>
                                <td><?= $payM ?></td>

                            </tbody>
                        </table>
                    <?php
                    } ?>

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