<?php include 'rectangle.php'
?>
<?php
$width = 20;
$height = 40;
$rect = new rectangle($height, $width);

//echo $rect -> height ;
//echo $rect -> with ;
echo "Your " . $rect -> display()."<br>";
echo "Area Rectangle :" . $rect -> getArea()."<br>";
echo "Perimeter Rectangle: " .$rect -> getPerimeter(). "<br>";

