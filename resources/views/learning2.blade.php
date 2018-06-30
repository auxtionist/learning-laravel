<?php
//

//-----------------------------------------------------------------------------------------------------
//USING IF, ELSEIF THEN ELSE
//-----------------------------------------------------------------------------------------------------

//$t = 18;
//
//if ($t<"10"){
//    echo('good day');}
//    elseif($t<"20"){
//    echo ('have a good night');}
//    else {
//    echo ('i dont know what going on');
//
//
//}


//-----------------------------------------------------------------------------------------------------
//USING (SWITCH) WITH OPTIONS
//-----------------------------------------------------------------------------------------------------

//$favcolor = "red";
//
//switch ($favcolor){
//    case "red":
//    echo "your favorite color is red";
//    break;
//    case "blue":
//    echo "your favorite color is blue";
//    break;
//    case "yellow":
//    echo "your favorite color is yellow";
//    break;
//    default:
//        echo "none of the colors mentioned is your favorites";
//
//}


//$x = 3;
//
//while($x <= 5) {
//    echo "The number is: $x <br>";
//    $x++;
//}


//-----------------------------------------------------------------------------------------------------
//FOR LOOP
//-----------------------------------------------------------------------------------------------------

//for ($x = 4; $x <= 1000; $x++) {
//    echo "The number is: $x <br>";
//}


//-----------------------------------------------------------------------------------------------------
//FOREACH LOOP
// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
//-----------------------------------------------------------------------------------------------------

//$poes = array("rooi", "blou", "swart", "geel");
//foreach ($poes as $kleur){
//    echo "$kleur</br>";
//}

//$poes = [
//    "rooi",
//    "blou",
//    "swart",
//    "geel"
//];
//foreach ($poes as $kleur){
//    echo "$kleur</br>";
//}
//$poes[3];

//--------------------------------------------------------------------------------------------
//ASSOC ARRAY
//--------------------------------------------------------------------------------------------

//$poes = [
//    'ID' => 12,
//    'kleur' => 'rooi',
//    'name' => 'daniel',
//    'piesang' => 'vrug',
//    'emotality' => 'cool',
//    'auxtionist' => 'division rogue op-poeser'
//];
//foreach ($poes as $die_key => $die_value) {
//    echo "$die_key is $die_value</br>";
//}
//$poes['auxtionist'];

//--------------------------------------------------------------------------------------------
//FUNCTIONS
//--------------------------------------------------------------------------------------------

//function familyname($fname){
//    echo "$fname Fourie.</br>";
//    }
//
//    familyname("Daniel");
//    familyname("Jean-Pierre");
//    familyname("Susan");


//function familyname($fname, $year, $age)
//{
//    echo "$fname Fourie is born in year $year and is now $age years old.</br>";
//}
//
//familyname("Daniel", "1984", "34");
//familyname("Jean-Pierre", "1989", "28");
//familyname("Susan", "1958", "60");



//$answer = familynameNew("Daniel", 1984,34);
//echo $answer;
//$answer = familynameNew("Jean-Pierre", 1989,28);
//echo $answer;
//$answer = familynameNew("Susan", 1958,60);
//echo $answer;
//
//function familynameNew(string $fname, int $year, int $age) : ?string
//{
//    return "$fname Fourie is born in year $year and is now $age years old.</br>";
//}

//--------------------------------------------------------------------------------------------
//SPLITTING THE ARRAY INTO INDIVIDUAL OPTIONS
//--------------------------------------------------------------------------------------------

//$cars = array("volvo", "vw", "toyota");
//echo "I like $cars[0] and $cars[1] but not a big fan of $cars[2]";


//--------------------------------------------------------------------------------------------
//COUNTING ARRAYS
//--------------------------------------------------------------------------------------------

//$cars= array("vw","toyota","bmw");
//echo count($cars);


//--------------------------------------------------------------------------------------------
//ASSOC ARRAYS EXAMPLE
//--------------------------------------------------------------------------------------------
//        $age = array("daniel"=>"34","susan"=>"60","spyker"=>"29");
//        foreach($age as $name => $name_value){
//            echo "his name is ". $name . " and he is aged ". $name_value ;
//            echo "</br>";
//
//
//        }



?>



<html>
    <body>

        <form action="welcome_get.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>

    </body>
</html>


{{--<form action="welcome_get.php" method="get">--}}
    {{--Name: <input type="text" name="name"><br>--}}
    {{--E-mail: <input type="text" name="email"><br>--}}
{{--<input type="submit">--}}
{{--</form>--}}

