<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valid Parentheses</title>
</head>
<body>
    <form method="POST" enctype="application/x-www-form-urlencoded">
    <label for="parentheses">String:</label><br>
    <input type="text" placeholder="Enter the string." name="parentheses" id="parentheses">
    <button type="submit">Verify</button>
    </form>
    
    <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $text = $_POST['parentheses'];
            $stack = [];
            $isValid = true;
            for($i = 0; $i < strlen($text); $i++){
                if($text[$i] === '(' || $text[$i] === '{' || $text[$i] === "["){
                    array_push($stack, $text[$i]);
                    continue;
                }
                $popped = array_pop($stack);
                if($popped === '(' && $text[$i] !== ')' || $popped === '[' && $text[$i] !== ']' || $popped === '{' && $text[$i] !== '}'){
                    $isValid = false;
                    break;
                }

            }
            if($isValid){
                echo "true";
            }else{
                echo "false";
            }
        }
    ?>

</body>
</html>