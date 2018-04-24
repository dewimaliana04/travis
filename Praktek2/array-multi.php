<?php
$data = array(
    "web.prog" => array(
        "dewi" => 7,
        "zilmi" => 6,
        "isna" => 5
    ),
    "kalkulus" => array(
        "dewi" => 9,
        "zilmi" => 8,
        "isna" => 6
    )
);

echo "Nilai web.prog untuk zilmi :"
    .$data["web.prog"]["zilmi"] . "<br>";
echo "Nilai kalkulus untuk dewi :"
    .$data["kalkulus"]["dewi"];
?>
