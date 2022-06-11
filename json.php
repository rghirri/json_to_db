<?php

require "database/database.php";

//var_dump(getItems($conn));
//echo "json file";
$json_array = json_decode(file_get_contents('https://dev.shepherd.appoly.io/fruit.json'), true);

//var_dump($json_array);

function flatten_array(array $items, array $flattened = []){
foreach ($items as $key => $item){
if (is_array($item)){
$flattened = flatten_array($item, $flattened);
continue;
}
$flattened [] = $item;
}
return $flattened;
}

$json_to_db [] = flatten_array($json_array);

$keys = array_keys($json_to_db);
for($i = 0; $i < count($json_to_db); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($json_to_db[$keys[$i]] as $key => $value) {
        echo $key+1 . " : " . $value . "<br>";
    }
    echo "}<br>";
}


//var_dump($json_to_db);

// echo $json_to_db[0][1];

//var_dump($json_to_db);

// echo '<pre>';
// print_r($json_array);
// echo '</pre>';

// foreach($json_array->menu_items as $item):
//   echo $item->label;
//   echo "<br />";
  //create($conn, $item->label, Null);
// endforeach;

//var_dump($json_array);

// function flatten_array(object $items, array $flattened = []){
// foreach ($items as $key => $item){
// if (is_array($item)){
// $flattened = flatten_array($item, $flattened);
// continue;
// }
// $flattened [] = $item ." ". $key ;
// }
// return $flattened;
// }

// var_dump(flatten_array($json_array));