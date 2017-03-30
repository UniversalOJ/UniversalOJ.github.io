<?php

#index

echo "Generating\033[34m index \033[0m...  ";
system("php generate.php index.md 首页 >index.html");
echo "\033[32m\033[1m✓\033[0m\n";



#post
require_once("content.php");

foreach ($content as $posts)
{
	foreach ($posts as $name => $file)
	{
		echo "Generating\033[34m $name \033[0m...  ";
        $ht=str_replace(".md",".html",$file);
        system("php generate.php $file $name >$ht");
        echo "\033[32m\033[1m✓\033[0m\n";
	}
	echo "\n";
}

echo "Done.\n";


?>