<?php
    $conn =new mysqli('localhost', 'root', '', 'pesan');
    if($conn->connection_error){
        die('connection failed :');
    }else{
        
        $nama = $_REQUEST["nama"];
        $email = $_REQUEST['email'];
        $pesann=$_REQUEST['pesann'];

      

        $stmt = $conn->prepare("INSERT INTO form_kontak (nama, email, pesann) VALUES(?,?,?)");
        $stmt->bind_param("sss",$nama,$email,$pesann);


        $stmt->execute();
        echo "message sent";
        $stmt->close();
        $conn->close();
    }
?>