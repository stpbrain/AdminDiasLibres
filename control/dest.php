<?php
session_start();
$session_id_to_destroy = 'prueba';
session_destroy();
    session_commit();
    header("location: ../index.html");
    ?>