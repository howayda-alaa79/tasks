<!doctype html>
<html lang="en">

<head>
    <title>hospat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contaner">
        <div class="row">
            <div class="col-10">
                <form method="post" action="Result.php">
                    <table class="  table table table-dark">
                        <thead>
                            <tr>
                                <th>Qestion</th>
                                <th>Bad</th>
                                <th>Good</th>
                                <th>Vere Goood</th>
                                <th>excellent</th>
                            </tr>
                        </thead>
                        <tbody value="rev">

                            <tr>
                                <td>Are you satisfied with the level of cleanliness?</td>
                                <td><input type="radio" name="q1" value="0"<?php intval('0')?>></td>
                                <td><input type="radio" name="q1" value="3"<?php intval('3')?>></td>
                                <td><input type="radio" name="q1" value="5"<?php intval('5')?>></td>
                                <td><input type="radio" name="q1" value="10" <?php intval('10')?>></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the service prices?</td>
                                <td><input type="radio" name="q2" value="0"></td>
                                <td><input type="radio" name="q2" value="3"></td>
                                <td><input type="radio" name="q2" value="5"></td>
                                <td><input type="radio" name="q2" value="10"></td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the nursing service?</td>
                                <td><input type="radio" name="q3" value="0" > </td>
                                <td><input type="radio" name="q3" value="3"></td>
                                <td><input type="radio" name="q3" value="5"></td>
                                <td><input type="radio" name="q3" value="10"></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td><input type="radio" name="q4" value="0"></td>
                                <td><input type="radio" name="q4" value="3"></td>
                                <td><input type="radio" name="q4" value="5"></td>
                                <td><input type="radio" name="q4" value="10"></td>

                            <tr>
                                <td>Are you satisfied with the calmness in the hospital?</td>
                                <td><input type="radio" name="q5" value="0"></td>
                                <td><input type="radio" name="q5" value="3"></td>
                                <td><input type="radio" name="q5" value="5"></td>
                                <td><input type="radio" name="q5" value="10"></td>                           
                        </tbody>

                    </table>
                    <div class="form-group offset-5 ">
                                <input type="submit" name="enter" value="enter" id="enter" class=" btn btn-dark rounded col-4 m-auto">
                            </div>


                </form>
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