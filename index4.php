<html>
<head>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<?php

$dir_path = getcwd();
if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {  
            echo "<div>";
		    echo "<a href ='$files[$i]'><img src='$files[$i]' style='width:30px;height:30px;'></a>&nbsp&nbsp";
		    echo "<a href ='$files[$i]'> $files[$i]<br><br> </a>";
            echo "</div>";
        }
    }
	
}


?>
</body>
</html>
