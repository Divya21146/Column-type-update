<?php
function update_table_column_size() {
    global $wpdb;

    $table_name = $wpdb->prefix . "table_name";  // replace with your table name

    $result = $wpdb->query("ALTER TABLE $table_name MODIFY COLUMN column_name VARCHAR(2000);");  //replace with your column name

    if ($result === false) {
        echo "Error: " . $wpdb->last_error;
    } else {
        echo "Column modified successfully.";
    }
}

add_action('init', 'update_irap_table');
