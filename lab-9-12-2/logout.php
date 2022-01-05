<?php
    require_once ('session.php');

    // Remove All Session Variables
    session_unset();

    // Destroy the Session
    session_destroy();

    header('Location: index.php');
?>