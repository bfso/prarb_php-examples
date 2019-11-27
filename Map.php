<?php

function field($x,$y,$i,$j){
    $vision = 2;

    if($i==$x && $j==$y){
        return 'player';
    }

    if($i >= ($x+$vision) && $j <= ($y+$vision)){
        return 'gray';
    }

    if($i <= ($x+$vision) && $j >= ($y+$vision)){
        return 'gray';
    }

    if($i >= ($x-$vision) && $j <= ($y-$vision)){
        return 'gray';
    }

    if($i <= ($x-$vision) && $j >= ($y-$vision)){
        return 'gray';
    }

    if($i >= ($x+$vision) && $j >= ($y+$vision)){
        return 'gray';
    }

    if($i <= ($x-$vision) && $j <= ($y-$vision)){
        return 'gray';
    }

    return 'green';
}

$x = $_GET['x'];
$y = $_GET['y'];
$mapSize = 12;

echo "<table>";
for ($i = 0; $i <= $mapSize; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= $mapSize; $j++) {
        echo "<td>";

        $field = field($x,$y,$i,$j);

        if($field == 'player'){
            echo '<img style="width: 20px; height: 20px;" src="data:image/jpeg;base64,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">';
        }

        if($field == 'green'){
            echo '<a href="Map.php?x='.$i.'&y='.$j.'"><img style="width: 20px; height: 20px;" src="https://images-na.ssl-images-amazon.com/images/I/217IhwZpIIL.jpg"></a>';
        }

        if($field == 'gray'){
            echo '<img style="width: 20px; height: 20px;" src="https://sherwin.scene7.com/is/image/sw/color-swatch?_tparam_size=250,250&layer=comp&_tparam_color=C2C0BB">';
        }

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";