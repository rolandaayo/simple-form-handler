<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP form handler</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1>PHP Form Example</h1>
        
        <form action="includes/formhandler.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit Form">
            </div>
        </form>
    
        <?php
        $a = "Hello";
        $b = "World";
        echo $a ." ". $b



        if($a ==)
        ?>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'process.php';
        }
        ?>
    </div>
</body>

</html>