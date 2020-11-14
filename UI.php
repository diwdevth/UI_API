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
            #--- 1 ---# เป็นส่วนที่ปลอดภัยสามารถใช้งานได้
        }
        else
        {
            #--- 2 ---# เป็นส่วนที่ไม่ปลอดภัยหรือเรียกอีกอย่างว่าส่วนที่ตรวจจับได้ว่ามีการโจมตีมาจากผู้ใช้
        }
    }
    else
    {
		#--- 3 ---# เป็นส่วนในการบอกว่าการเชื่อมต่อระหว่างเว็บแอปพลิเคชัน เกิดข้อผิดพลาด
    }
# Function protect
?>