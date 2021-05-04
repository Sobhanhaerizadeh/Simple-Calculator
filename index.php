<?php
                    $value = "";
                    if (isset($_GET['plusBtn']) || isset($_GET['minusBtn']) || isset($_GET['multiplicationBtn']) || isset($_GET['divisionBtn']))
                    {
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                            if (is_numeric($num1) && is_numeric($num2)){             
               
                        if (isset($_GET['plusBtn'])){
                            $value = $num1 + $num2;
                        }

                        else if (isset($_GET['minusBtn'])){
                            $value = $num1 - $num2;
                        }

                        else if (isset($_GET['multiplicationBtn'])){
                            $value = $num1 * $num2;
                        }
                        
                        else if (isset($_GET['divisionBtn'])){
                            $value = $num1 / $num2;
                        }
                    }
                    else{
                        echo "<script> window.alert('Just Type Numeric!'); </script>";
                    }
                    }
                    ?>  

                    <!-- Copy Right => Sobhan Haerizadeh  -->
                    <!-- Telegram => @SobhanHrzBot -->
                    <!-- Enjoy It ! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <br><br>
                        <form action="" method="GET">
                        <input type="text" name="num1" required class="form-control" style="width:200px;display:inline-block;padding:20px;" maxlength = 7/> 
                        <input type="text" name="num2" required class="form-control" style="width:200px;display:inline-block;padding:20px;" maxlength = 7/> 
                           <font color='green' size='18px' style="margin-left:30px;margin-top:-20px;position:absolute;"> = </font>
                            <input type="text" READONLY name="put"  style='margin-left:110px;padding:5px;' value="<?php echo $value; ?>" />
                           <br/><br/><br/>
                            <button  class="btn btn-info" name="plusBtn" style="margin-left:160px;padding:30px;">+</button>
                             <button  class="btn btn-info" name="minusBtn" style="padding:30px;">-</button>
                             <br/><br/>
                             <button  class="btn btn-info" name="multiplicationBtn" style="margin-left:160px;padding:30px;">*</button>
                             <button  class="btn btn-info" name="divisionBtn" style="padding:30px;">/</button>
                        </form>
        </div>

        
</body>
</html>