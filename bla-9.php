<?php

global $wpdb;

$listofthings = $wpdb->get_col( 'SELECT something FROM somewhere WHERE someotherthing = 1' ); // Warning.

