<?php
session_start();

include "database.php";
include "head.php";
include "sign-up.php";
include "log-in.php";
include "slider.php";
include "middle.php";
include "footer.php";


mysqli_close($connection);

?>