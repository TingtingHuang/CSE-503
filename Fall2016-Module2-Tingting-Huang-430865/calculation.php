<!DOCTYPE HTML>
    <html>
        <head>
            <title>php calculation result</title>
        </head>
        <body>
            <?php
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $method = $_GET['method'];
            //detemine which method the user chooses specifically
            //use switch to avoid a lot of if loops
            switch ($method) {
                case "add":
                    echo "The result is: " .($num1 + $num2);
                    exit;
                case "subtract":
                    echo "The result is: " .($num1 - $num2);
                    exit;
                case "multiply":
                    echo "The result is: " .($num1 * $num2);
                    exit;
                case "divide":
                    if ($num2 == 0) { //corner case of dividing by 0
                        echo "undifined when denominator is 0.";
                    } else {
                    echo "The result is: " .($num1 / $num2);
                    exit;
                    }
            }
            ?>
        </body>
    </html>