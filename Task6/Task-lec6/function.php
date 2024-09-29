<?php
function get_page_type()
{
    $file_path= $_SERVER['SCRIPT_FILENAME'];
    $values=explode('/',$file_path);
    $new_file=end($values);
    $values=explode('.',$new_file);
    echo $values[0];
}

?>