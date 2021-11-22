<style>
<?php include 'style.css'; ?>
</style>

<?php

    $password = $_POST["password"];
    echo "<p> Thank you for shopping with us. Your password is: " . $password . "</p><br>";
    echo "<p> Here is your receipt: </p><br>";

    $num1 = $_POST["item1"];
    $num2 = $_POST["item2"];
    $num3 = $_POST["item3"];
    $ship = $_POST["ship"];
    $shipCost = 0;
    if($ship == "$5 Three Day"){

        $shipCost = 5;
    }
    if($ship == "$50 Overnight"){

        $shipCost = 50;
    }

    echo "<table border=\"1\">";
    for ($i = 0; $i <= 4; $i++){

        echo "<tr>";

        for ($j = 0; $j < 4; $j++){

            if(($i == 0) && ($j == 0)){

                echo "<td>&nbsp;</td>";
            }
            else if(($i == 4) && ($j == 0)){

                echo "<td>Shipping</td>";
            }
            else if($j == 0){

                echo "<td>Item".$i."</td>";
            }
            else if(($i == 4) && ($j == 2)){

                echo "<td colspan=\"2\">".$ship."</td>";
            }
            else if(($i == 4) && ($j == 3)){

                echo "<td>$".$shipCost."<td>";
            }
            else if($i == 0){

                if($j == 1){

                    echo "<td>Quantity</td>";
                }
                if($j == 2){

                    echo "<td>Cost Per Item</td>";
                }
                if($j == 3){

                    echo "<td>Subtotal</td>";
                }
            }
            else if($j == 1){

                if($i == 1){

                    echo "<td>".$num1."</td>";
                }
                if($i == 2){

                    echo "<td>".$num2."</td>";
                }
                if($i == 3){

                    echo "<td>".$num3."</td>";
                }
            }
            else if($j == 2){

                if($i == 1){

                    echo "<td>$12.00</td>";
                }
                if($i == 2){

                    echo "<td>$50.00</td>";
                }
                if($i == 3){

                    echo "<td>$100.00</td>";
                }
            }
            else if($j == 3){

                if($i == 1){

                    echo "<td>$".($num1*12)."</td>";
                }
                if($i == 2){

                    echo "<td>$".($num2*50)."</td>";
                }
                if($i == 3){

                    echo "<td>$".($num3*100)."</td>";
                }
            }
        }
        echo "</tr>";

    }
    echo "<tr>";
    echo "<td colspan=\"3\" style=\"text-align:center\">Total Cost</td>";
    echo "<td>$".(($num1*12)+($num2*50)+($num3*100)+$shipCost)."</td>";
    echo "</tr>";
    echo "</table>";
?>