<?php
if ($_POST) {
    $Phy = ($_POST["Phy"]);
    $Chem = ($_POST["Chem"]);
    $Bio = ($_POST["Bio"]);
    $Math = ($_POST["Math"]);
    $Comp = ($_POST["Comp"]);
    $per = $Phy + $Chem + $Bio + $Math + $Comp;
    $out = $per / 250;
    $prs = $out * 100;
    switch ($_POST["submit"]) {
        case $prs >= 90:
            $message =  "mark" . $per . "/250" . 'percentage =' . $prs . "% " . "<br>"." Grade A";
            $color = "success";
            break;
        case $prs >= 80:
            $message = "mark" . $per . "/250" . 'percentage =' . $prs . "% " . "<br>". " Grade B";
            $color = "success";
            break;
        case $prs>=70:
            $message = "mark" . $per . "/250" . 'percentage =' . $prs. "% " . "<br>". " Grade C";
            $color = "success";
            break;
        case $prs >=60:
            $message = "mark" . $per . "/250" . 'percentage =' . $prs . "% " . "<br>". " Grade D";
            $color = "success";
            break;
        case $prs >=40:
            $message = "mark". $per . "/250" . 'percentage =' . $prs . "% " . "<br>". "<br>"." Grade E";
            $color = "success";
            break;
        case $prs <40:
            $message = "mark" . $per . "/250" . 'percentage =' . $prs. "% " . "<br>". " Grade F";
            $color=  "danger";
            break;

        default:
        $message = "Error";
        break;
            echo $message;
    }
} ?>
<!doctype html>
<html lang="en">

<head>
    <title> marks  subjects</title>
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
                <h1 class="text-center text-info">
                marks of subjects
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <label for="Phy">Physics</label>
                        <input type="text" name="Phy" id=" number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="Chem">Chemistry</label>
                        <input type="text" name="Chem" id=" number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="Bio">Biology</label>
                        <input type="text" name="Bio" id=" number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="Math">Mathematic</label>
                        <input type="text" name="Math" id=" number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="Comp">Computer</label>
                        <input type="text" name="Comp" id=" number" class="form-control" placeholder="" aria-describedby="helpId">

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>