<?php
session_start();
session_unset();
session_destroy();

header('location: ../../Presentation/authentification/login.php?error=none');