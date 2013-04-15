<?php

// Start output buffer
ob_start();

echo "Test";

// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
?>