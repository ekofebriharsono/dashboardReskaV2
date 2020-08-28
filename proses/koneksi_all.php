<?php
 define('HOST1','localhost');
 define('USER1','root');
 define('PASS1','');
 define('DB1','parkir_dbserver');

 $conTURI = mysqli_connect(HOST1,USER1,PASS1,DB1) or die('Unable to Connect');

 define('HOST2','localhost');
 define('USER2','root');
 define('PASS2','');
 define('DB2','parkir_pgs');

 $conPGS = mysqli_connect(HOST2,USER2,PASS2,DB2) or die('Unable to Connect');

 define('HOST3','localhost');
 define('USER3','root');
 define('PASS3','');
 define('DB3','parkir_pgs');

 $conTUBAN = mysqli_connect(HOST3,USER3,PASS3,DB3) or die('Unable to Connect');

 ?>