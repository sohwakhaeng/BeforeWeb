<?php
header("Content-Type: text/html; charset=UTF-8");
    include "dbconn.php";
    
    $sql = "select * from member where id = '$sign_id' and pwd = '$sign_pass'";
    $result = mysql_query($sql);
    $count = @mysql_num_rows($result); //-> select * 이었을 때
    //if($count)
    if($count){
        echo "<script>alert('어서오세요!');</script>";
        echo "<script>location.href='session.php?id=$sign_id&name=$sign_name&nick=$sign_nick'</script>";
    }else{
        echo "<script>alert('ID나 비밀번호가 맞지 않습니다');</script>";
        echo "<script>location.href='signIn.php'</script>";
       
    }
    
?>