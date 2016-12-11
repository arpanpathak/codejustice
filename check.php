<?php

/** Test Your code against custom input, @author: Arpan Pathak
 ** This file can be used in any online IDE..
 ** */

//defining messages for status codes....
define("ce","<h2 style='color: red;'><i class='fa fa-times' aria-hidden='true'></i> Compilation Error!
</h2><br />");
define("tle","<h2 style='color: orange;'><i class='fa fa-clock-o' aria-hidden='true'></i> Time Limit Exceeded!
</h2><br />");

// Main CodeJudge function....
function codejudge($team_id,$code_file,$user_code_snippet,$lan,$tle,$input)
{

	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
		return codejudge_windows($team_id,$code_file,$user_code_snippet,$lan,$tle,$input);
	
	$dir_name="submissions/".$team_id;
	if (!is_dir($dir_name)) {
    //create the directory
    		mkdir($dir_name,0777,true);         //permission
	}   
	$fp=fopen($dir_name."/input.in","w");
	fwrite($fp,$input);
	fclose($fp);
	$final_code=$user_code_snippet;
	$ip=$dir_name."/input.in";
	if($lan=="cpp" or $lan=="c")
	{
		$f_name=$dir_name."/".$code_file.".cpp";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$f_name." -o ".$dir_name."/code.out 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." ".$dir_name."/code.out<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/code.out")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="java")
	{
		$f_name=$dir_name."/".$code_file.".java";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("javac ".$f_name." 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." java -classpath ".$dir_name." ".$code_file."<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/".$code_file.".class")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="python2")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." python $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="python3")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." python3 $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="ruby")
	{
		$f_name=$dir_name."/".$code_file.".rb";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." ruby $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
}


// Codejudge for windows plarform....
function codejudge_windows($team_id,$code_file,$user_code_snippet,$lan,$tle,$input)
{
	$dir_name="submissions/".$team_id;
	if (!is_dir($dir_name)) {
    //create the directory
    		mkdir($dir_name,0777,true);         //permission
	}   
	$fp=fopen($dir_name."/input.in","w");
	fwrite($fp,$input);
	fclose($fp);
	$final_code=$user_code_snippet;
	$ip=$dir_name."/input.in";
	if($lan=="cpp" or $lan=="c")
	{
		$f_name=$dir_name."/".$code_file.".cpp";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$f_name." -o ".$dir_name."/code.out 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("powershell ".$dir_name."/code.exe<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/code.exe")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="java")
	{
		$f_name=$dir_name."/".$code_file.".java";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("javac ".$f_name." 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("powershell java -classpath ".$dir_name." ".$code_file."<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/".$code_file.".class")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="python2")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("powershell python $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="python3")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("powershell python3 $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
	else if($lan=="ruby")
	{
		$f_name=$dir_name."/".$code_file.".rb";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("powershell ruby $f_name<"."$ip 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms,Your Output : <br >".nl2br($output)."<br />";
	}
}
// Pass arguments to codejudge based on data received by ajax request.....
if(isset($_POST['check']))
{
	echo codejudge($_POST['teamname'],$_POST['codefile'],$_POST['code'],$_POST['language'],$_POST['tle'],$_POST['input']);
}
?>
