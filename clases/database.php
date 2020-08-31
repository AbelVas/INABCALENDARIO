<?php
    class database{
        function conduc01(){
            $con1=mysqli_connect("localhost","root","");
            mysqli_select_db($con1,"brinab");
            return($con1);
        }
    }
?>