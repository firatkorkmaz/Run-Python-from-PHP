<html>
<body>

<?php

#echo $_GET["brand"];

// Writing the Brand Data into "data.txt" File
$myFile = "data.txt";
$fh = fopen($myFile, 'w') or die("Cannot Open File!");
fwrite($fh, $_GET["brand"]);
fclose($fh);

// Executing "run.py" to Modify "data.txt"
$run = "./run.py";
$data = "./data.txt";
#echo exec("python3 $run $data");	// Linux
echo exec("python $run $data");		// Windows

/*************************************/
function get_all_lines($file_handle) { 
    while (!feof($file_handle)) {
        yield fgets($file_handle);
    }
}
/*************************************/

// Reading "data.txt" to Show Its Modified Content
$file_handle = fopen($myFile, 'r');
foreach (get_all_lines($file_handle) as $line) {
    echo $line."<br/>";
}

fclose($file_handle);

?>

</body>
</html> 


