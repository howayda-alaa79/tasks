<?php

if (isset($_POST['enter'])) {
  
    $q1 = (($_POST['q1']));
    $q2 = (($_POST['q2']));
    $q3 = (($_POST['q3']));
    $q4 = (($_POST['q4']));
    $q5 = (($_POST['q5']));

    $rev = [
        'bad' => 0,
        'good' => 0,
        'veregood' => 0,
        'excellent' => 10,
    ];
    foreach ($rev as $key => $value) {
        switch ($rev) {
            case 'bad':
                $B = 0;
                break;
            case 'good':
                $G = 3;
                break;
            case 'veregood':
                $V = 5;
                break;
            case 'excellent':
                $E = 10;
                break;
        }}
        
        
        function total($q1, $q2, $q3, $q4, $q5)
        {
            return $q1 + $q2 + $q3 + $q4 + $q5;
        }
        // $number= (isset($_POST['name']));
        if(total($q1, $q2, $q3, $q4, $q5)<=25){
            $massge='We will call you later ';
        }
       else{$massge='good thank for time'.'<br>';}
       
    
}


?>
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
    
    <table class=" col-6 table-center table table-active m-auto">
        <thead class="text-center" >
            <th >Reviews</th>
        </thead>
        <tr><td class="text-center text-m" >  <?php if (isset($massge)) {
           echo $massge.''; '<br>' . 'The gard is review'.print_r(total($q1, $q2, $q3, $q4, $q5));
           
        }?> </td></tr>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>