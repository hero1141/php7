<?php

    $analytics = new class {
        public function __ToString() {
            return "Anonymous Analytics";
        }
    };

    echo $analytics;
//returns "Anonymous Analytics" Everything's fine 
 ?>
