<?php
    class database{
        function conduc01(){
            $con1=mysqli_connect("172.19.0.2","inab_calforestal","inab_calforestal");
            mysqli_select_db($con1,"inab_calforestal");
            return($con1);
        }
    }
?>