<?php
/**
 * Auto-deployment script for WordPress theme
 * This script pulls the latest changes from the Git repository
 * when triggered by a webhook or manual execution
 */

// Security: Only allow execution from specific IPs or with a secret key
$allowed_ips = ['127.0.0.1', '::1']; // Add GitHub webhook IPs as needed
$secret_key = 'your-secret-key-here'; // Change this to a secure random string

// Check if request is authorized
if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips) && 
    (!isset($_GET['key']) || $_GET['key'] !== $secret_key)) {
    http_response_code(403);
    die('Unauthorized');
}

// Log deployment attempts
function log_deployment($message) {
    $log_file = __DIR__ . '/deployment.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($log_file, "[$timestamp] $message\n", FILE_APPEND | LOCK_EX);
}

try {
    // Change to theme directory
    $theme_dir = __DIR__;
    chdir($theme_dir);
    
    log_deployment('Starting deployment...');
    
    // Pull latest changes from repository
    $output = [];
    $return_code = 0;
    
    // Fetch latest changes
    exec('git fetch origin 2>&1', $output, $return_code);
    if ($return_code !== 0) {
        throw new Exception('Git fetch failed: ' . implode('\n', $output));
    }
    
    // Reset to latest commit (WARNING: This will overwrite local changes)
    exec('git reset --hard origin/main 2>&1', $output, $return_code);
    if ($return_code !== 0) {
        throw new Exception('Git reset failed: ' . implode('\n', $output));
    }
    
    // Optional: Clear any WordPress caches
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
    
    log_deployment('Deployment completed successfully');
    echo json_encode([
        'status' => 'success',
        'message' => 'Theme updated successfully',
        'timestamp' => date('Y-m-d H:i:s')
    ]);
    
} catch (Exception $e) {
    log_deployment('Deployment failed: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
        'timestamp' => date('Y-m-d H:i:s')
    ]);
}
?>