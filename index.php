<?php 
$myName = "Moriah";
$names = array("Moriah", "Andrew", "Kerrigan", "Iggy");

$count = 0;

while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>

<p>Hi my name is <?php echo $myName ?>.</p>

<p>Hi my name is <?php echo $names[2] ?>.</p>

