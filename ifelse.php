<?php
$marks = 67;
if($marks>79 && $marks<=100)
{
		echo "Grade:A+";

}
elseif($marks>69 && $marks<80)
{
	echo "Grade:A";
}
elseif($marks>59 && $marks<70)
{
	echo "Grade:A-";
}

elseif($marks>49 && $marks<60)
{
	echo "Grade:B";}

elseif($marks>39 && $marks<50)
{
	echo "Grade:C";}

elseif($marks>33 && $marks<40)
{
	echo "Grade:D";}


elseif($marks>=0 && $marks<32)
{
	echo "Grade:F";}

?>