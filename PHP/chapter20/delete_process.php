<?php
    unlink('data/'.$_POST['id']);
    header('Location: /index5.php');
?>