<?php
$Page_Slug = basename($_SERVER["SCRIPT_FILENAME"], '.php');

if (FILE_EXISTS('./config/' . $Page_Slug . '.json')) {
    $Page_Config = json_decode(file_get_contents('./config/' . $Page_Slug . '.json'));
}

require "./event/header.php";
require "./event/nav.php";
require "./pages/$Page_Slug.tpl.php";
require "./event/footer.php";
?>