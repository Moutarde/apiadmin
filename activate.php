<?php
$path = elgg_get_config('path');

// create the tables for API stats
run_sql_script("{$path}mod/apiadmin/schema/mysql.sql");

if ( !file_exists($browscapdir = elgg_get_data_path() . 'phpbrowscap') ) {
    mkdir($browscapdir);
}

// plugin can be activated
return true;