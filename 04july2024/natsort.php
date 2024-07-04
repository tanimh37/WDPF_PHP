<?php

$files = array('picture1.jpg', 'picture10.jpg', 'picture2.jpg', 'picture20.jpg' , 'Picture15.jpg' , 'picture5.jpg');

natsort($files);
// natcasesort($files);

echo'<pre>';
print_r($files);

?>