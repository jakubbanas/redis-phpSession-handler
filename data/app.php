<?php

session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;
echo ++$_SESSION['count'];