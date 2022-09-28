<?php
print_r(get_loaded_extensions());
$upload_max_size = ini_get('upload_max_filesize');
print $upload_max_size;
ini_set('upload_max_filesize', '500M');
print " " + $upload_max_size;
// php -r '$all = get_loaded_extensions(); foreach($all as $i) { $ext = new ReflectionExtension($i); $ver = $ext->getVersion(); echo "$i - $ver" . PHP_EOL;}'
?>