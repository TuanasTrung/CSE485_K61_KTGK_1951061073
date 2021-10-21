<?php
        session_start();
        
        define('HOST','localhost');
        define('USER','root');
        const PASS  = '';
        const DB    = 'qldp'; 
        $conn = mysqli_connect(HOST,USER, PASS,DB);
        if(!$conn){
            die('Không thể kết nối');
        }

?>