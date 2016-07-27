<?php

include "lib/include.php";

includeHeader();
includeSkin("error.php", array('msg' => $_GET['msg']));
includeFooter();

?>