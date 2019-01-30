
<?php
$stuff = exec('python jdd.py', $output, $return);
$a=null;
foreach($output as $key=>$thing){
 if($key==1)
 print chr(0x0D); //Newline feed after PNG declaration
 if($key>0)
 print "\n";
 print $thing;
}
?>
