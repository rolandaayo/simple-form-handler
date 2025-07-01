<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Built-in Variables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .variable-section {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .variable-name {
            font-weight: bold;
            color: #0066cc;
        }

        .variable-value {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 3px;
            margin: 5px 0;
            font-family: monospace;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PHP Built-in Variables & Superglobals</h1>

        <?php
        // Server Information
        echo '<div class="variable-section">';
        echo '<h2>Server Information</h2>';
        echo '<p><span class="variable-name">$_SERVER[\'SERVER_NAME\']:</span></p>';
        echo '<div class="variable-value">' . ($_SERVER['SERVER_NAME'] ?? 'Not available') . '</div>';

        echo '<p><span class="variable-name">$_SERVER[\'SERVER_SOFTWARE\']:</span></p>';
        echo '<div class="variable-value">' . ($_SERVER['SERVER_SOFTWARE'] ?? 'Not available') . '</div>';

        echo '<p><span class="variable-name">$_SERVER[\'PHP_VERSION\']:</span></p>';
        echo '<div class="variable-value">' . (PHP_VERSION ?? 'Not available') . '</div>';
        echo '</div>';

        // Request Information
        echo '<div class="variable-section">';
        echo '<h2>Request Information</h2>';
        echo '<p><span class="variable-name">$_SERVER[\'REQUEST_METHOD\']:</span></p>';
        echo '<div class="variable-value">' . ($_SERVER['REQUEST_METHOD'] ?? 'Not available') . '</div>';

        echo '<p><span class="variable-name">$_SERVER[\'REQUEST_URI\']:</span></p>';
        echo '<div class="variable-value">' . ($_SERVER['REQUEST_URI'] ?? 'Not available') . '</div>';

        echo '<p><span class="variable-name">$_SERVER[\'HTTP_USER_AGENT\']:</span></p>';
        echo '<div class="variable-value">' . ($_SERVER['HTTP_USER_AGENT'] ?? 'Not available') . '</div>';
        echo '</div>';

        // PHP Constants
        echo '<div class="variable-section">';
        echo '<h2>PHP Constants</h2>';
        echo '<p><span class="variable-name">PHP_VERSION:</span></p>';
        echo '<div class="variable-value">' . PHP_VERSION . '</div>';

        echo '<p><span class="variable-name">PHP_OS:</span></p>';
        echo '<div class="variable-value">' . PHP_OS . '</div>';

        echo '<p><span class="variable-name">PHP_INT_MAX:</span></p>';
        echo '<div class="variable-value">' . PHP_INT_MAX . '</div>';

        echo '<p><span class="variable-name">PHP_INT_SIZE:</span></p>';
        echo '<div class="variable-value">' . PHP_INT_SIZE . '</div>';
        echo '</div>';

        // Environment Variables
        echo '<div class="variable-section">';
        echo '<h2>Environment Variables</h2>';
        echo '<p><span class="variable-name">$_ENV[\'PATH\']:</span></p>';
        echo '<div class="variable-value">' . ($_ENV['PATH'] ?? 'Not available') . '</div>';

        echo '<p><span class="variable-name">$_ENV[\'HOME\']:</span></p>';
        echo '<div class="variable-value">' . ($_ENV['HOME'] ?? 'Not available') . '</div>';
        echo '</div>';

        // GET and POST Data (if any)
        echo '<div class="variable-section">';
        echo '<h2>Request Data</h2>';

        if (!empty($_GET)) {
            echo '<p><span class="variable-name">$_GET:</span></p>';
            echo '<div class="variable-value">' . print_r($_GET, true) . '</div>';
        } else {
            echo '<p><span class="variable-name">$_GET:</span></p>';
            echo '<div class="variable-value">Empty (no GET parameters)</div>';
        }

        if (!empty($_POST)) {
            echo '<p><span class="variable-name">$_POST:</span></p>';
            echo '<div class="variable-value">' . print_r($_POST, true) . '</div>';
        } else {
            echo '<p><span class="variable-name">$_POST:</span></p>';
            echo '<div class="variable-value">Empty (no POST data)</div>';
        }
        echo '</div>';

        // Session Information
        echo '<div class="variable-section">';
        echo '<h2>Session Information</h2>';
        echo '<p><span class="variable-name">Session Status:</span></p>';
        echo '<div class="variable-value">' . session_status() . ' (0=disabled, 1=none, 2=active)</div>';

        if (session_status() === PHP_SESSION_ACTIVE) {
            echo '<p><span class="variable-name">Session ID:</span></p>';
            echo '<div class="variable-value">' . session_id() . '</div>';
        }
        echo '</div>';

        // File Information
        echo '<div class="variable-section">';
        echo '<h2>File Information</h2>';
        echo '<p><span class="variable-name">__FILE__:</span></p>';
        echo '<div class="variable-value">' . __FILE__ . '</div>';

        echo '<p><span class="variable-name">__DIR__:</span></p>';
        echo '<div class="variable-value">' . __DIR__ . '</div>';

        echo '<p><span class="variable-name">__LINE__:</span></p>';
        echo '<div class="variable-value">' . __LINE__ . '</div>';
        echo '</div>';

        // Error Reporting
        echo '<div class="variable-section">';
        echo '<h2>Error Reporting</h2>';
        echo '<p><span class="variable-name">error_reporting():</span></p>';
        echo '<div class="variable-value">' . error_reporting() . '</div>';

        echo '<p><span class="variable-name">display_errors:</span></p>';
        echo '<div class="variable-value">' . (ini_get('display_errors') ? 'On' : 'Off') . '</div>';
        echo '</div>';
        ?>

        <div class="variable-section">
            <h2>Test Forms</h2>
            <p>Try these forms to see $_GET and $_POST in action:</p>

            <h3>GET Form</h3>
            <form method="GET">
                <input type="text" name="test_get" placeholder="Enter some text">
                <input type="submit" value="Submit via GET">
            </form>

            <h3>POST Form</h3>
            <form method="POST">
                <input type="text" name="test_post" placeholder="Enter some text">
                <input type="submit" value="Submit via POST">
            </form>
        </div>
    </div>
</body>

</html>