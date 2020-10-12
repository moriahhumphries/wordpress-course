<?php 
    function myFirstFunction() {
        echo "<p>Hello, this is my first function.</p>";
    }

    myFirstFunction();

    function greet($name, $color) {
        echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
    }

    greet("John", "Black");
    greet("Jane", "Green");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>