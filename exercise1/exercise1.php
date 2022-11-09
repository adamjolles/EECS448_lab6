<?php
        for($i = 0; $i < 101; $i++) {
            echo "<tr>";
                for($x = 0; $x < 101; $x++) {
                    echo "<td>";
                    if($i == 0) {
                        if($x != 0) {
                            echo $x;
                        }
                    } else if($x == 0) {
                        if($i != 0) {
                            echo $i;
                        }
                    } else {
                        echo $i*$x;
                    }
                    echo "</td>";
                }
            echo "</tr>";
        }

        error_reporting(E_ALL);
        ini_set("display_errors",1);
        ?>