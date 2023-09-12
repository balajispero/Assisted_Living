<?php 

 // public function auto_backup_generator(){
        
        $dbhost   = "localhost";
        $dbuser   = "speroems_mumbai";
        $dbpwd    = "spero@1234";
        $dbname   = "speroems_assited_living";
        
       
        
        $dumpfile = "/home/speroems/public_html/Assisted_Living/Database_backup/".$dbname . "_" . date("Y-m-d_H-i-s") . ".sql";
        //echo "mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpwd $dbname > $dumpfile";
        $db_result = system("mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpwd $dbname > $dumpfile");
       // var_dump($db_result);
        die();
       
   // }
?>