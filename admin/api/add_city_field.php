<?php
// Fix the path to config.php
define('LIBRARIES', '../../libraries/');
require_once LIBRARIES . "config.php";
require_once LIBRARIES . 'autoload.php';
new AutoLoad();
$d = new PDODb($config['database']);
$cache = new Cache($d);
$func = new Functions($d, $cache);

// Add city column to user table if it doesn't exist
try {
    // Check if the city column exists
    $columns = $d->rawQuery("SHOW COLUMNS FROM `table_user` LIKE 'city'");
    
    if (empty($columns)) {
        // Add the city column
        $d->rawQuery("ALTER TABLE `table_user` ADD `city` VARCHAR(10) NULL DEFAULT NULL AFTER `address`");
        echo "City column added successfully to user table.";
    } else {
        echo "City column already exists in user table.";
    }
} catch (Exception $e) {
    echo "Error adding city column: " . $e->getMessage();
}
?>