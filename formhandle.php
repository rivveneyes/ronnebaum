<?php

// ===========NOTE ON SECUTIRY INFO HASHING AND COMANDS FOR DATA ENTRY 
if(isset($_POST['submit'])){
    $name = $_POST['first-name'];
    header("Location: index.php?mailsend");
    print("end");
    exit();
};


