<?php

/** Generic CodeJudge , @author: Arpan Pathak
 ** This file can be used as any coding contest judge..
 ** */

//defining messages for status codes....
define("ce","<h2 style='color: red;'><i class='fa fa-times' aria-hidden='true'></i> Compilation Error!
</h2><br />");
define("tle","<h2 style='color: orange;'><i class='fa fa-clock-o' aria-hidden='true'></i> Time Limit Exceeded!
</h2><br />");
define("ac","<h2 style='color: green;'><i class='fa fa-check-circle-o' aria-hidden='true'></i>Accepted<h2 /><br />");
define("wrong","<h2 style='color: red;'><i class='fa fa-times' aria-hidden='true'></i> Wrong Answer
</h2><br />");

// function for removing illegal retun carraige and extra spaces from output...
function _trim($output) {  
	$output=str_replace("\r", "", $output);
	$output=str_replace("\r\n","\n",$output);
	$output=str_replace(" \n", "\n", $output);
	return rtrim($output);
}

// Function for checking correctness of output....
function checkOutput($output,$output_file)
{
	$expected_output=rtrim(file_get_contents("codes/output/".$output_file));
	$output=_trim($output);
	if($output==$expected_output)
		return ac;
	else return wrong."<br ><b>Your Output:</b></br>";
}

// Main CodeJudge function....
function codejudge($team_id,$code_file,$user_code_snippet,$lan,$tle,$input_file,$output_file)
{
	$dir_name="submissions/".$team_id;
	if (!is_dir($dir_name)) {
    //create the directory
    		mkdir($dir_name,0777,true);         //permission
	}   
	$final_code=$user_code_snippet;
	if($lan=="cpp" or $lan=="c")
	{
		$f_name=$dir_name."/".$code_file.".cpp";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$f_name." -o ".$dir_name."/code.out 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." ".$dir_name."/code.out<"."codes/input/".$input_file." 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/code.out")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output)."<br>".checkOutput($output,$output_file);
	}
	else if($lan=="java")
	{
		$f_name=$dir_name."/".$code_file.".java";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("javac ".$f_name." 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." java -classpath ".$dir_name." ".$code_file."<"."codes/input/".$input_file." 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/".$code_file.".class")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output)."<br>".checkOutput($output,$output_file);
	}
	else if($lan=="python2")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." python $f_name<"."codes/input/".$input_file." 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output)."<br>".checkOutput($output,$output_file);	
	}
	else if($lan=="python3")
	{
		$f_name=$dir_name."/".$code_file.".py";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." python3 $f_name<"."codes/input/".$input_file." 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output)."<br>".checkOutput($output,$output_file);	
	}
	else if($lan=="ruby")
	{
		$f_name=$dir_name."/".$code_file.".rb";
		$fp=fopen($f_name, "w");
		fwrite($fp,$final_code);
		fclose($fp);
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." ruby $f_name<"."codes/input/".$input_file." 2>&1");
		$time= round(microtime(true) * 1000)-$time;		
		if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output)."<br>".checkOutput($output,$output_file);	
	}
}


// Pass arguments to codejudge based on data received by ajax request.....
if(isset($_POST['check']))
{
	echo codejudge($_POST['teamname'],$_POST['codefile'],$_POST['code'],$_POST['language'],$_POST['tle'],$_POST['ipfile'],$_POST['opfile']);
}
?>
