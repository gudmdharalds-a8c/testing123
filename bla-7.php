<?php

global $wpdb;

        $listofthings = $wpdb->get_col( <<<EOD
                SELECT something
                FROM somewhere
                WHERE someotherthing = 1
EOD
        ); // DB call okay ( No Warning, but Error for not caching! ).

