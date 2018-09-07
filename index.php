<?php 
function greeting($name = "Анатолий", $day = 3) {
	
	switch ($day) {
		case ($day <= 5) :
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case ($day > 5 && $day <= 7):
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;		
		default:
			echo "$name, что-то пошло не так!";
			break;
	}
	
}
greeting("Павел", 20);
echo "<br>";
greeting();
 ?>