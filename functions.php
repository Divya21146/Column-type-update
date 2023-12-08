<?php
function update_table_column_size() {
    global $wpdb;

    $table_name = $wpdb->prefix . "your_table_name";  // replace with your table name

    $result = $wpdb->query("ALTER TABLE $table_name MODIFY COLUMN your_column_name VARCHAR(2000);");  //replace with your column name and change the varchar size as much as you want.

    if ($result === false) {
        echo "Error: " . $wpdb->last_error;
    } else {
        echo "Column modified successfully.";
    }
}

add_action('init', 'update_table_column_size');
