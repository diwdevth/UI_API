<?php
# Function protect
    $password = base64_encode($_POST['password']);
    $url = "http://127.0.0.1:8000/{OPTIONS}/".$password."/";
    $content = file_get_contents($url);
    if($content !== false)
    {
        $arr = json_decode($content, true);
        if($arr['status'] == "true")
        {
			#--- 1 ---#
        }
        else
        {
            #--- 2 ---#
        }
    }
    else
    {
		#--- 3 ---#
    }
# Function protect
?>