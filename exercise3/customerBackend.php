<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $item1 = $_POST["item1"];
            $item2 = $_POST["item2"];
            $item3 = $_POST["item3"];
            $shipping = $_POST["shipping"];
            $total = $item1*100+$item2*150+$item3*800;
            echo "<h1>Welcome ".$user."!</h1>";
            echo "<p>Password: ".$pass."</p>";
        ?>
        <table>
            <tr class="header">
                <td></td>
                <td>Quantity</td>
                <td>Cost Per Item</td>
                <td>Subtotal</td>
            </tr>
            <tr>
                <td>ACRONYM x Nike Blazer Low "Black"</td>
                <td><?php echo $item1;?></td>
                <td>$100</td>
                <td>$<?php echo $item1*100;?></td>
            </tr>
            <tr>
                <td>Nike Air Max BW "Cream"</td>
                <td><?php echo $item2;?></td>
                <td>$150</td>
                <td>$<?php echo $item2*150;?></td>
            </tr>
            <tr>
                <td>G DLP x New Balance 327 "Sabará"</td>
                <td><?php echo $item3;?></td>
                <td>$800</td>
                <td>$<?php echo $item3*800;?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td colspan="2"><?php echo $shipping;?></td>
                <td>
                    <?php
                        if($shipping == "Free 7 day") {
                            echo "$0";
                            $total += 0;
                        } else if ($shipping == "$50.00 over night") {
                            echo "$50";
                            $total += 50;
                        } else if ($shipping == "$50.00 over night") {
                            echo "$5";
                            $total += 5;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>$<?php echo $total;?></td>
            </tr>
        </table>
    </body>
</html>