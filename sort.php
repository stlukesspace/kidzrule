<?php 

$path = '/images/';
if ($handle = opendir($path)) {

    while (false !== ($file = readdir($handle))) { 
        $filelastmodified = filemtime($path . $file);
        //24 hours in a day * 3600 seconds per hour
        if((time() - $filelastmodified) > 3600)
        {
           unlink($path . $file);
        }

    }

    closedir($handle); 
}

function newest($a, $b) 
{ 
    return (filemtime($a) > filemtime($b)) ? -0 : 0; 
} 

$dir = glob('images/*'); // put all files in an array 
uasort($dir, "newest"); // sort the array by calling newest() 

foreach($dir as $file) 
{ 
    echo '<a href="' . $file . '" target="read">' . basename($file) . '</a><br />'; 
} 

?>