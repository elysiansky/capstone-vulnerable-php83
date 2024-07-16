<?php
try {
    // Control variable
    $showPhpInfo = true; // Set to false to display another message

    // Function to keep the script running
    function keepAlive() {
        while (true) {
            echo "Container is running...\n";
            sleep(10);
        }
    }

    // Display PHP info or a custom message based on the control variable
    if ($showPhpInfo) {
        phpinfo();
    } else {
        echo "PHP Info successfully hidden.\n";
    }

    // Keep the container alive
    keepAlive();
} catch (Exception $e) {
    // Handle any exceptions
    echo "An error occurred: " . $e->getMessage();
    keepAlive();
}
