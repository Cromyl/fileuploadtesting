<?php

    
        if(isset($_POST['submit'])){
        $files=$_FILES['uploadfile'];
        print_r($files);

        $filename=$files['name'];
        $filetmp=$files['tmp_name'];
        $destinationfile='folder/'.$filename;
        print_r($filename);
        print_r($filetmp);
        print_r($destinationfile);
        move_uploaded_file($filetmp,$destinationfile);
    }

?>  