<?php
function Check_login($con)
{
    
    if(isset($_SESSION['staffNo']))

    {
        $id= $_SESSION['staffNo'];
        $query = "select * from admindb where staffno= '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)>0)
        {

            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
    //redirect to login
    header("Location:AdminLogin.php");
    die;
}
//random staffno fuction
function random_num($length)
{
        $text = "";
        if($length <5 )
        {
            $length = 5;
        }   
        $len = rand(4,$length);
        for($i=0; $i< $len; $i++)
        {
        #code...

        $text .=Rand(0,9);
        }
        return $text;
}