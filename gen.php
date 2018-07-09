<?
$datee= date('Y-m-d H:i:s');
echo "<hr>$datee";
$file ='raw.txt';
$da=file_get_contents($file,true);
$p = explode("\n", $da);
for ($j=0;$j<=count($p);$j++){
	if (strlen($p[$j])>0) $pp[]=$p[$j];	
}
$cp= count($p);
$cpl=$cp-1;
$jnew="data=[";
for ($i=0;$i<=$j;$i++){
//if (strlen($p[$i])>0) $ap.=$p[$i]."\r\n";
//if (strlen($po[$i])>0) $up.=$po[$i]."\r\n";
$jst="'";
if ($i<$j-2) $jsend="',"; else $jsend="'";
if (strlen($p[$i])>0) $daa=$p[$i];
$daa=str_replace("\r","",$daa);
$daa=str_replace("'","\'",$daa);
$daa=str_replace('"','\"',$daa);
$td=trim(daa);
$ld=strlen($p[$i]);
	if ($ld>0) $jnew.=$jst.$daa.$jsend;	
}
$jnew.="]";
//echo $jnew;
$var=" generate to js file .. $cpl #recs".PHP_EOL;
$datee= date('Y-m-d H:i:s');
$log = 'tlog.txt';
file_put_contents($log,$datee.$var, FILE_APPEND | LOCK_EX);
echo "saved $log..";
$jdfile='data.txt';
file_put_contents($jdfile, $jnew);
echo "saved $jdfile ..";
echo "<hr>$datee";
exit;
?>