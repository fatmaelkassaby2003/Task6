<?php  if(isset($_POST['opera'])): ?>
    <?php
   switch ($_POST['opera']){
    case '+':
       $result =  $_POST['num1'] + $_POST['num2'];
       break;
    case '-':
        $result = $_POST['num1'] - $_POST['num2'];
       break;
    case '*':
        $result = $_POST['num1'] * $_POST['num2'];
       break;
    case '/':
        if($_POST['num2'] == 0){
            $result =  "Cannot divide by zero!";
        }else{
            $result = $_POST['num1'] / $_POST['num2'];
        }
       break;
    default:
    $result = "Invalid operator!";
   }
   
?>

<?php endif; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-2">Calculator</h1>

    <div class="conatiner">
        <div class="row">
            <div class="col-6 mx-auto">
                <?php if(isset($result)): ?>
                    <h3>Result is : <?php echo $result; ?></h3>
                <?php endif; ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; /*بيرجع نفس الصفحه */?>" class="border p-3" method="POST" >
                    <div class="mb-3">
                        <label for="">Number 1</label>
                        <input type="text" name="num1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Number 2</label>
                        <input type="text" name="num2" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Operator</label>
                        <select name="opera" class="form-control" >
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Send" class="form-control bg-success btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>