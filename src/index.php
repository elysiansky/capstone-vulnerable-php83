<?php
try {
    // Control variable
    $showPhpInfo = true; // Set to false to display another message

    // Display PHP info or a custom message based on the control variable
    if ($showPhpInfo) {
        phpinfo();
    } else {
        echo "PHP Info successfully hidden.\n";
    }
    
} catch (Exception $e) {
    // Handle any exceptions
    echo "An error occurred: " . $e->getMessage();
    keepAlive();
}
