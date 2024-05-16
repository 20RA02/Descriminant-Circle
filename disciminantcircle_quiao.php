<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Discriminant Calculator</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h2>Quadratic Discriminant Calculator</h2>
    <form method="post">
        <label for="a">Coefficient a:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Coefficient b:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <label for="c">Coefficient c:</label>
        <input type="number" id="c" name="c" required>
        <br><br>
        <button type="submit">Calculate Discriminant</button>
    </form>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            function calculate_discriminant($a, $b, $c) {
                return pow($b, 2) - 4 * $a * $c;
            }

            $discriminant = calculate_discriminant($a, $b, $c);
            echo "The discriminant is: <span class='result-circle'>$discriminant</span>";
        }
        ?>
    </div>
</body>
</html>
