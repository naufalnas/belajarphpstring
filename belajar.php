<?php
$txt = "Hello world lie-lie";
echo $txt;
echo "<br />";
echo strlen($txt);
echo "<br />";
echo str_word_count($txt);
echo "<br />";
echo strpos($txt, "lie-lie");
echo "<br />";
echo str_replace("Hello world", "Halo dunia", $txt); 
?>