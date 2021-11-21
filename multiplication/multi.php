<?php

    $html =
    "<html>
    <head>
        <title> Multiplication Table </title>
    </head>
    <body>
    <table border=\"1\">";

    $rows = 100;
    $cols = 100;

    for ($i = 1; $i <= $rows; $i++){

        $html = $html.'<tr>';

        for ($j = 1; $j <= $cols; $j++){

            $html = $html.'<td>'.$i*$j.'</td>';
        }
        $html = $html.'</tr>';

    }

    $html = $html."</table>
        </body>
    </html>";
    echo $html;
?>