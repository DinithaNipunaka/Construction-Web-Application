<?php

                @$submit = $_POST['submit'];
                $i1 = ($_POST["i1"]);
                $i2 = ($_POST["i2"]);
                $i3 = ($_POST["i3"]);
                $i4 = ($_POST["i4"]);
                $l1 = ($_POST["l1"]);
                $w1 = ($_POST["w1"]);
                $l2 = ($_POST["l2"]);
                $w2 = ($_POST["w2"]);
                $l3 = ($_POST["l3"]);
                $w3 = ($_POST["w3"]);
                $l4 = ($_POST["l4"]);
                $w4 = ($_POST["w4"]);

                if($submit)

                $ilw1 = $i1 * $w1  *$l1;
                $ilw2 = $i2 * $w2 * $l2;
                $ilw3 = $i3 * $w3 * $l3;
                $ilw4 = $i4 * $w4 * $l4;

                $ft = ($ilw1 + $ilw2 + $ilw3 + $ilw4);

                echo "Ft $ft <br>";
                echo "For 1sqft = Rs 9500<br>";

                $tot = $ft * 9500;
                echo "Total = Rs $tot";
        ?>
