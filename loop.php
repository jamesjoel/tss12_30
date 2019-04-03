<?php
for($i=1; $i<=10; $i++)
{
	if($i>=7 && $i < 9)
	{
		continue;
	}
	echo $i;
	echo "<Br />";

}
echo "<hr />";

for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=$i; $j++)
	{
		echo "*";
	}
	echo "<Br />";

}
echo "<hr />";


for($i=1; $i<=5; $i++)
{
	for($j=$i; $j<=5; $j++)
	{
		echo "*";
	}


	echo "<Br />";
}


echo "<hr />";
for($i='a'; $i<='j'; $i++)
{
	echo $i;
}





?>