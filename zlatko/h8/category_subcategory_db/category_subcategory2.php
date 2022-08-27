<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>
    <style type="text/css">

        #sub_category {
            display:none;

        }
label {
    font-weight: bold;
}
        #label2 {
            display:none;
        }
    </style>

<?php
define("SECRET","gfhUi34xVbds23Qgk");

require("db_config.php");
$category = array();

$sql = "SELECT id_category,name
		FROM category
		ORDER BY name ASC";
	
$result= mysqli_query($connection,$sql) or die(mysqli_error());

if (mysqli_num_rows($result)>0)
{
	while ($record = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
		$category[$record['id_category']] = $record['name'];    	
    }
}

$sub_category = array();

foreach ($category as $k=>$v)
{
	$sql = "SELECT name
			FROM subcategory
			WHERE id_category = '$k'
			ORDER BY name ASC";
	
	$result= mysqli_query($connection,$sql) or die(mysqli_error());

	if (mysqli_num_rows($result)>0)
	{
		while ($record = mysqli_fetch_array($result,MYSQLI_BOTH))
    	{
			$sub_category["$v"][] = $record['name'];    	
	    }
	}
}

//var_dump($category);
//var_dump($sub_category);
echo '<script type="text/javascript">';
 /*
 echo "var category=['";
 $t = implode("','",$category);
 echo "$t";
 echo "'];\n";
*/
 // var category=['Cake','City','Music','Sport']; 
 
 echo "\nvar sub_category={";

 foreach ($sub_category as $k1=>$v1)
 {
 	echo "$k1:['";
 	$v2 = implode("','",$v1);
 	echo $v2;
 	if($v1==end($sub_category))
 	echo "']\n";
 	else 
 	echo "'],\n";
 }
 echo "};\n";
 
 /*
 var sub_category={Cake:['Banana split','Bluberry pie','Cheese cake','Fruit cup'],City:['Belgrade','Budapest','Subotica','Sydney'],Music:['Pop','Rap','Rock'],Sport:['Basketball','Football','Handball']};
 */
 ?>

        function myFunction(obj)
        {
            var text = "";
            var value = obj.value;
            if(value!='choose')
            {
                document.getElementById('sub_category').style.display='inline';
                
				for(var x in sub_category[value])
				text+='<option value="'+sub_category[value][x]+'">'+sub_category[value][x]+'</option>';

                document.getElementById('sub_category').innerHTML = text;
                document.getElementById('sub_category').disabled=false;
                document.getElementById('label2').style.display='inline';

            }
            else
            {
                document.getElementById('sub_category').disabled=true;
                document.getElementById('sub_category').style.display='none';
                document.getElementById('label2').style.display='none';
            }
        }
    </script>

</head>
<body>
<form name="category_form" action="get.php">
    <label>category: </label><select name="category" onchange="myFunction(this)">
        <script tpye="text/javascript">
        document.write('<option value="choose">choose</option>');
        for(var x in sub_category)
        document.write('<option value="'+x+'">'+x+'</option>');
        </script>

    </select>
    <label id="label2">sub category: </label>
    <select name="sub_category" id="sub_category">

    </select>
    <input type="submit" value="send" />
</form>

</body>
</html>