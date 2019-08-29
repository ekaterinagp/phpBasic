<?php

session_start();
session_destroy(); //forget everything about this session

header('Location:profile.php');