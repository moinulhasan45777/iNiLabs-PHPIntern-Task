<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Implementation</title>
</head>
<body>
    <?php
        interface LoggerInterface{
            public function logMessage($message);
        }

        class Warning implements LoggerInterface{
            public function logMessage($message){
                echo "[WARNING][". $message . "]<br>";
            }
        }

        class ErrorLog implements LoggerInterface{
            public function logMessage($message){
                echo "[ERROR][". $message . "]<br>";
            }
        }

        class Info implements LoggerInterface{
            public function logMessage($message){
                echo "[INFO][". $message . "]<br>";
            }
        }

        $warning = new Warning();
        $error = new ErrorLog();
        $info = new Info();

        $warning->logMessage("User attempted to access restricted page.");
        $info->logMessage("User successfully logged in.");
        $error->logMessage("Failed to fetch todo list!");
    ?>
</body>
</html>