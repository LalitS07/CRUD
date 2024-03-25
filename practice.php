<?php

 $var2=5;
 $var="Hi I am Lalit A frontend Developer ".$var2." year of experience " ;
 echo $var; 
 echo var_dump($var);
 echo "<br><br>";

function add($one,$one2){
    echo "Additon is : ".$one+$one2;
}
for($pr=1;$pr<=10;$pr++){
echo $pr."->   ";    
echo add(63,9);
echo "<br><br>";
}
$name1='Gourav';
$name2='Priya';
echo "$name1 is friend of $name2 <br>";
$name1=79.3;
echo var_dump($name1).'<br><br>';

$bol=false;
echo $bol;
echo "<br><br>";
$bol2=true;
echo var_dump($bol);

// constant .....
?>

<br><br>

<?php

// Arrays....
$domain=array("UI","Frontend","Backend","DBMS",);
//echo var_dump($domain);
echo $domain[0];
echo "<br>";
echo $domain[3];
echo "<br>";
$pl="Hi I am Backend Developer";
echo str_word_count($pl);
echo "<br>";
echo strrev($pl);
echo "<br>";
echo strpos($pl,"am");
echo "<br>";
echo str_replace("Backend","Database",$pl);
echo "<br>";
echo str_repeat($pl,7);
echo "<br><br>";

$s=7;
while($s<=10){
    $s+1;
    $s++;
    echo $s."<br>";
}

foreach($domain as $value){     // foreach loop.....(generally used for object)
    echo $value;
    echo "<br>";
}

// Functions...

function process($marks){
    $total=0;
    $k=0;
    foreach($marks as $value){
        $total+=$value;
        $k++;
    }
    return $total/$k;
}

$mymarks=[60,71,78,75,67];
echo "Avg Marks is :  ".process($mymarks);

?>

