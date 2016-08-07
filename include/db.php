<?php 
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");  
mysql_select_db ("$cdb");  
$online = mysql_query ("select count(*) from characters where online = 1");  
$online = mysql_result ($online,0);  
$allianceonline = mysql_query ("select count(*) from characters where online = 1 and race in (1,3,4,7,11)");  
$allianceonline = mysql_result ($allianceonline,0);  
$hordeonline = mysql_query ("select count(*) from characters where online = 1 and race in (2,5,6,8,10)");  
$hordeonline = mysql_result ($hordeonline,0);  
mysql_selectdb ("$rdb");  
$max = mysql_query ("select max(`maxplayers`) from uptime");     
$max = mysql_result ($max,0);  
?>

<?php 
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");  
mysql_select_db ("$cdb");  
$online3 = mysql_query ("select count(*) from characters where online = 1");  
$online3 = mysql_result ($online3,0);  
?>

<?php  
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");        
   mysql_select_db ("$rdb");            
   $uptime = mysql_query ("select max(`starttime`) from `uptime` WHERE `realmid`= '1'");            
   $uptime = time()-mysql_result ($uptime,0);            
   $sec = $uptime%60;            
   $uptime = intval ($uptime/60);            
   $min = $uptime%60;            
   $uptime = intval ($uptime/60);            
   $hours = $uptime%24;            
   $uptime = intval($uptime/24);                 
   $days = $uptime;           
?> 
<?php 
mysql_connect ("$dbip2:$dbport2","$dblogin2","$dbpass2");  
mysql_select_db ("$cdb2"); 
$online2 = mysql_query ("select count(*) from characters where online = 1");  
$online2 = mysql_result ($online2,0);  
$allianceonline2 = mysql_query ("select count(*) from characters where online = 1 and race in (1,3,4,7,11)");  
$allianceonline2 = mysql_result ($allianceonline2,0);  
$hordeonline2 = mysql_query ("select count(*) from characters where online = 1 and race in (2,5,6,8,10)");  
$hordeonline2 = mysql_result ($hordeonline2,0);  
mysql_selectdb ("$rdb2");  
$max2 = mysql_query ("select max(`maxplayers`) from uptime WHERE `realmid`= '2'");     
$max2 = mysql_result ($max2,0);  
?> 
<?php
mysql_connect ("$dbip2:$dbport2","$dblogin2","$dbpass2");        
mysql_select_db ("$rdb2");            
$uptime = mysql_query ("select max(`starttime`) from `uptime` WHERE `realmid`= '2'");            
$uptime = time()-mysql_result ($uptime,0);            
$sec2 = $uptime%60;            
$uptime = intval ($uptime/60);            
$min2 = $uptime%60;            
$uptime = intval ($uptime/60);            
$hours2 = $uptime%24;            
$uptime = intval($uptime/24);                 
$days2 = $uptime;              
?>