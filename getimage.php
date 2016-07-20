<?php
			$dir = '/home/users/web/b648/ipg.stlukesspace';
			$base_url = 'images';
			$newest_mtime = 0;
			$show_file = 'BROKEN';
			if ($handle = opendir($base_url)) {
				while (false !== ($file = readdir($handle))) {
					if (($file != '.') && ($file != '..') && ($file != '.htaccess')) {
						$mtime = filemtime("$base_url/$file");
							if ($mtime > $newest_mtime) {
								$newest_mtime = $mtime;
								$show_file = "$base_url/$file";
       }
    }
  }
}if (file_get_contents($show_file) != "") {
    print '<img src="' .$show_file. '" alt="Latest image uploaded" width="640" height="352">';
} else {
	sleep(1)
    print '<img src="' .$show_file. '" alt="Latest image uploaded" width="640" height="352">';
}

?>
