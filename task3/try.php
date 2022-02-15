<?php
declare(strict_types=1);
if (isset($_POST['enter'])) {
    switch ($_POST['city']) {
        case 'Cairo':
            $delivery = 0;
            break;
        case 'Giza':
            $delivery = 30;
            break;
        case 'Alex':
            $delivery = 50;
            break;
        default:
            $delivery = 100;
    }
}
if (isset($_POST['cal'])) {
    $price = $_POST['price'];
    $qun = ($_POST['qun']);
    print_r($price);
    print_r($qun);
    $total = $price * $qun;
    print_r($total);
} 
$data=(isset($_POST['pro']));
if ( isset($_POST['enert'])) {
    $data=[(object)[
        'product'=>'',
        'price'=> 0,
        'qun'=>   0,
    ]];
}

// print_r($data);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Supermarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row ">
            <div class="col-4  offset-4">
                <h1 class="text-center text-info ">Supermarkt
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form class="" method="post">
                    <div class="form-group">
                        <label for=" " class="text-info"> your name </label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php if (isset($_POST['name'])) {
                                                                                                    echo $_POST['name'];
                                                                                                } ?>">
                        <label for=" " class="text-info "> how many buy </label>
                        <input type="number" name="pro" id="pro" class="form-control" value="<?php if (isset($_POST['pro'])) {
                                                                                                    echo $_POST['pro'];
                                                                                                } ?>">
                    </div>
                    <div class="form-group">
                        <label for=" city" class="text-info -auto">city</label>
                        <select name="city" class="form-control" id="city" value="">
                            <option value="Cairo" name="Cairo">cairo</option>
                            <option value="Giza" name="Giza">Giza</option>
                            <option value="Alex" name="Alex">Alex</option>
                            <option value="Other" name="Other">Other</option>
                        </select>
                    </div>

                    <div class="col">
                        <div class="form-group offset-5 ">
                            <input type="submit" name="enter" value="enter" id="enter" class=" btn btn-dark rounded col-4 m-auto">
                        </div>
                        <?php
                        if (isset($_POST['enter'])) {
                            echo $_POST['enter']; ?>
                           
                            <table class="col-12">
                                <thead>
                                    <th>proudct name</th>
                                    <th>price </th>
                                    <th>Quantites </th>
                                </thead>
                                
                                <tbody> 
                                <?php if (is_countable($data) && count($data)>0){?>
                                 <?php foreach ($data as  $D)  ?>
                                    <tr>
                                    <?php foreach ($D as $key => $value) { ?>
                                        <td>
                    <?php if(gettype($value) == 'array' || gettype($value) == 'object'){
                                       
                                            echo $value;
                                            }
                                        
                                ?>
                   </td>
                                        <?php }  ?>
                                    </tr>
                                    <?php  }?>
                                </tbody>
                            </table>
                            <input type="submit" name="cal" value="Calculate" id="cal" class=" btn btn-dark rounded col-4 m-auto">
                        <?php } ?> 
                        
                         
                </form>
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