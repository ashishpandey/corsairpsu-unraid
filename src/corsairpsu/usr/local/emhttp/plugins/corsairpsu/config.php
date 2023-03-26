<?php
if (file_exists("/boot/config/plugins/corsairpsu/corsairpsu.cfg")) {
	$settings = parse_ini_file( "/boot/config/plugins/corsairpsu/corsairpsu.cfg" );
} else {
	$settings["UIREFRESH"] = "0";
}

header('Content-Type: application/json');
echo json_encode($settings, JSON_THROW_ON_ERROR);
?>