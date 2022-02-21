<h2>1.Write a PHP script to display the following strings.Sample String:'Tomorrow I \'ll learn PHP global variables.''This is a bad command : del c:\\*.*'Expected Output:Tomorrow I 'll learn PHP global variables.This is a bad command : del c:\ </h2>

<?php
echo "Output:    "."Tomorrow I \'ll learn PHP global variables.''This is a bad command : del c:\\*.*'";?>
?>

<h2>2.Write a simple PHP browser detection script.Sample</h2>

<?php
$viewer = getenv( "HTTP_USER_AGENT" );
print_r($viewer);
?>


<h2>3.Write a PHP script to get the current file name.</h2>


<?php echo "Output:    ".$_SERVER['SCRIPT_NAME'];?>


<h2>4.Write a ePHP script to display string, values within a table.Note : Use HTML table elements into echo</h2>

<html>
	<style>
	table, td, th {
	  border: 1px solid;
	  border-collapse: collapse;
	}		
	</style>
	
	<table>
		<tr>
			<td>Salary of Mr. A is</td>
			<td>1000$</td>
		</tr>
		<tr>
			<td>Salary of Mr. B is</td>
			<td>1200$</td>
		</tr>
		<tr>
			<td>Salary of Mr. C is</td>
			<td>1400$</td>
		</tr>
	</table>
</html>

<h2>5.Create a simple HTML form and accept the user name and display the name through PHP echo statement</h2>

<html>
	<h3><a>Please input your name:</a></h3>
	<form action="<?php $_PHP_SELF; ?>" method="POST">
		<input name="name" value=""/>
		<button>submit</button>
	</form>
	<h3><a><?php echo $_POST['name'];?></a></h3>
</html>

<h1><span>PHP ARRAYS</span></h1>


<h2>1.Write a PHP script which will display the colors in the following way :Output :white, green, red,•green•red•white</h2>

<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
	echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
	echo "<li>$y</li>";
}
echo "</ul>";
?>


<h2>2.Write a PHP script which decodes the following JSON string.Sample JSON code :{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}</h2>
<?php

function w3rfunction($value,$key)
{
	echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail":
	{ 
	"Publisher": "Little Brown"
	 }
	  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");
?>


<h2>3.Write a PHP function to check whether all array values are strings or no</h2>

<?php
function check_strings_in_array($arr) 
{
    return array_sum(array_map('is_string', $arr)) == count($arr);
}
$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');
var_dump(check_strings_in_array($arr1));
var_dump(check_strings_in_array($arr2));

?>

<h2>4.Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.Test Data :1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')2nd array : ('c2', 'c4')</h2>

<?php
 $first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
 $second_array = array('c2', 'c4'); 
 print_r(array_intersect_key($first_array, array_flip($second_array)));
?>


<h2>5.Write a PHP script to delete a specific value from an array using array_filter() function.</h2>

<?php
 $colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
 $given_value = 'Black';
 

 $new_filtered_array = array_filter($colors, function ($element) use ($given_value)  
 { return   ($element != $given_value);}); 
 print_r($colors);  
 echo '<br>'.'Want to delete Black'.'<br>';
 print_r($new_filtered_array);
 
?>


<h1> FOR LOOP </h1>

<h2>1.Create a script to construct the following pattern, using nested for loop.*  * *  * * *  * * * *  * * * * * </h2>

<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	 if($y< $x)
	 {
	   echo " ";
	 }
     }
 echo "<br>";
}
?>

<h2>2.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24</h2>

<?php
$n = 4;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=$i+1; 
}
echo "The factorial of  $n = $x"."\n";
?>

<h2>3.Write a program which will count the "r" characters in the text "w3resource".</h2>

<?php
 $text="w3resource";
 
 $search_char="r";
 
 $count="0";
 
 for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
      $count=$count+1;
    }
  }
 echo $count."<br>";

?>


<h1>FUNCTIONS</h1>

<h2>1.Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.</h2>

<?php
function factorial_of_a_number($n)
{
  if($n ==0)
  {
     return 1;
  }
  else 
  {	
     return $n * factorial_of_a_number($n-1);
  }
  
}
print_r(factorial_of_a_number(4)."<br>");
?>

<h2>2.Write a PHP function that checks if a string is all lowercase.</h2>

<?php
function is_str_lowercase($str1)
{
    for ($sc = 0; $sc < strlen($str1); $sc++)
    {
	 if (ord($str1[$sc]) >= ord('A') &&   ord($str1[$sc]) <= ord('Z'))
	 {
             return false;
         }
    }
    return true;
}
var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));
?>



<h1>CLASSES</h1>
<h2>1.Write a simple PHP class which displays the following string</h2>


<?php
class phpclass
{
	public function __construct()
	{
	   echo 'MyClass class has initialized !';
	}
}

echo new phpclass();
?>

<h2>2.Write a PHP script to convert a string to Date and DateTime.Sample Date :'12-08-2004'Expected Output :2004-12-08Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.</h2>


<?php
$datetime = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $datetime;
?>

<h1>SEARCHING&SORTING</h1>

<h2>1.Write a PHP program tosort a list of elements using Quick sort.Quick sort is a comparison sort, meaning that it can sort items of any type for which a "less-than" relation (formally, a total order) is defined.</h2>


<?php
function quick_sort($my_array)
{
	$arr1 = $arr2 = array();
	if(count($my_array) < 2)
	{
	    return $my_array;
	}
	$key = key($my_array);
	$shift = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $shift)
		{
		    $arr1[] = $val;
		}
		elseif ($val > $shift)
		{
		    $arr2[] = $val;
		}
	}
	return array_merge(quick_sort($arr1),array($key=>$shift),quick_sort($arr2));
}
 
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo 'Original Array : '.implode(',',$my_array).'\n';
$my_array = quick_sort($my_array);
echo 'Sorted Array : '.implode(',',$my_array);
?>


<h1>CHALLENGING ONES</h1>


<h2>1.Write a PHP program to find the length of the last word in a string.Input : PHP Exercises</h2>

<?php echo "Output:    ".strlen(substr('PHP Exercises',4));?>

<h2>2.Write a PHP program to find the single number which occurs odd number of times and other numbers occur even number of times.Input : 4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4Output : 2</h2>


<?php
function odd_occurrence($arr)
{
    $result = 0;

    foreach ($arr as &$value)
    {
        $result = $result ^ $value;
    }
    return $result;
}
$num1 = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
print_r(odd_occurrence($num1)."<br>");
?>

<h2>3.Write a PHP program to check if a given positive integer is a power of two.Input : 4Output :4 is power of 2</h2>

<?php
function is_Power_of_four($n)
{
   $x = $n;
   while ($x % 4 == 0) 
   {
       $x /= 4;
   }
       
   if($x == 1)
    {
       return "$n is power of 4";
    }
    else
    {
        return "$n is not power of 4";
    }
  
}
print_r(is_Power_of_four(36)."<br>");
?>
