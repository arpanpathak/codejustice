Welcome to CodeJustice
===================


A codejudge written in PHP and that can be used in any coding contest.
CodeJustice is a codejudge that can be used in any coding contest for evaluating user submitted code. Everything is super easy.You just need to send all the desired parameter of user code via ajax request. CodeJustice will check the correctness of code and output by providing inputs depending upon the given parameter.You can also give the maximum execution time.

Supported Languages
----------------------------
CodeJustice is programmed for evaluating codes written in C,C++ 11,Java 8, Python3, Python4 ,and Ruby 2.3. Currently this codejudge will work only in linux hosted apache server. In future, more languages will be added.
How to Use CodeJustice
-------------------------------
Using codejustice is super easy. You just need to import the codejudge.php file where ever you want.. This file contains the main codejudge function. You can send request using ajax to evaluate your code.  The function which is used to evaluate your code is,
`function codejudge($team_id,$code_file,$user_code,$lan,$tle,$input_file,$output_file)`

Here you need to pass all suitable parameters

 - `$team_id : `
 `team_id` is the name of the directory where all the codes of that team or any user is located. All of such teams directories are available at `submissions` directory of this project .This directory is protected by `.htacces` from the web crawlers.
 - `$code_file`:
	 it's the name of the file for the current submission. Please don't write any extension to it. Extension will automatically be added based on the programming language. The current submission is available at server's submissions/team_id/ directory by this file name
 - $user_code`
  It's the user submitted code.
  
 - `$lan`
   It's the name of the programming language. Use any name among "cpp","java","python2","python3","ruby"
   
 - `$tle` is the execution time limit in milliseconds.
 - `$input_file` is the name of the test case input file. All such test case files must be kept in server's codes/input directory. You just need to pass the name of that testcase input file
 - `$output_file` is the name of the expected output file. All such output files must be kept inside server's codes/output directory.

 

About index.php
---------------------
This file is used as a test interface. How to use this interface is written in the info section of this page.



