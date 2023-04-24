<?php

session_start();

session_destroy();

header("Location: profilelv.php");
exit;