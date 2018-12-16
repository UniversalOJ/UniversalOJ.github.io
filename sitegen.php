<?php


#single
if ($argc == 3)
{
	require_once("header.php");
	system("python3 mdgen.py $argv[1]");
	$argv[1] = str_replace(".md","",$argv[1]);
	require_once("footer.php");
	exit();
}


#index
echo "Generating\033[34m index \033[0m...  ";
system("php sitegen.php index.md 首页 >index.html");
echo "\033[32m\033[1m✓\033[0m\n";


#post
require_once("content.php");
foreach ($content as $posts)
{
	foreach ($posts as $name => $file)
	{
		echo "Generating\033[34m $name \033[0m...  ";
		$ht=str_replace(".md",".html",$file);
		system("php sitegen.php $file $name >$ht");
		echo "\033[32m\033[1m✓\033[0m\n";
	}
	echo "\n";
}
echo "Done.\n";


?>
