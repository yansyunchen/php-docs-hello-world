<?php
// print_r(get_loaded_extensions());
$upload_max_size = ini_get('upload_max_filesize');
$post_max_size = ini_get('post_max_size');
print "upload_max_size:" . $upload_max_size;
print "post_max_size:" . $post_max_size;
// php -r '$all = get_loaded_extensions(); foreach($all as $i) { $ext = new ReflectionExtension($i); $ver = $ext->getVersion(); echo "$i - $ver" . PHP_EOL;}'
?>