<?php

$float = 0.123456;
$double = 22.33;
$string = "die kan spasies en kak he";
$bool = true;
$date = new DateTime('now');

$array = ['een', 'twee'];
$assoc_array = ['een' => $float, 'twee' => $double, 'drie' => $string, 'vier' => $bool, 'vyf' => $date];

$object_een = (object)['een', 'twee'];
$object_een = (object)$array;
$object_twee = (object)$assoc_array;

$value_van_array = $assoc_array['drie'];
$value_van_object = $object_twee->drie;

$json_string = json_encode($object_twee);
$json_object = json_decode($json_string);

$alles = [
    $float,
    $double,
    $string,
    $bool,
    $array,
    $assoc_array,
    $object_een,
    $object_twee,
    $value_van_array,
    $value_van_object,
    "en shit"
];

if ($bool) {
    echo "bool is true";
    echo '<br><br>';
    echo '<pre>'.json_encode($alles, 128).'</pre>';

} else {
    echo "bool is false";
}

foreach ($assoc_array as $key => $value) {
    if (is_a($value, 'DateTime')) {
        echo '<p>--'.$key.' se value is ['.$value->format('Y-m-d H:i:s').'] en sy var_dump() lyk so: '.var_dump($value).'</p>';

    } else {
        echo '<p>--'.$key.' se value is ['.$value.'] en sy var_dump() lyk so ^ '.var_dump($value).'</p>';
    }
}

?>
<br>
<br>
int : {{ var_dump(123) }}<br>
double : {{ var_dump(.3) }}<br>
float : {{ var_dump(0.123456) }}<br>
string : {{ var_dump('aweness') }}<br>
bool : {{ var_dump(false) }}<br>
bool : {{ var_dump(true) }}<br>
<br>
string to int : {{ intval('123') }}<br>
int to string : {{ strval(123) }}<br>
<br>
bool value : {{ boolval(1) }}<br>
bool value : {{ boolval(0) }}<br>
bool value : {{ boolval(true) }}<br>
bool value : {{ boolval(false) }}<br>
bool value : {{ boolval('') }}<br>
bool value : {{ boolval(' ') }}<br>
bool value : {{ boolval('test') }}<br>
bool value : {{ boolval(null) }}<br>
<br>
<br>
