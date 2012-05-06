
<?
function factorial($n)
{
	if ($n<0)	
		{
			return "Ошибка!Факториал числа $n не существет.";
		}
	else{
		if($n == 0){return 1;}
		return  $n*factorial($n-1);
	}

}
echo factorial(0);
?>