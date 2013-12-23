
<?php
/*
Thomas Sonnemann
CSC 443
Assignment #4
*/


	if (isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['question4']) && isset($_POST['question5']) && isset($_POST['question6']) && isset($_POST['question7']) && isset($_POST['question8']))
	{
		$question1 = $_REQUEST['question1'];
		$question2 = $_REQUEST['question2'];
		$question3 = $_REQUEST['question3'];
		$question4 = $_REQUEST['question4'];
		$question5 = $_REQUEST['question5'];
		$question6 = $_REQUEST['question6'];
		$question7 = $_REQUEST['question7'];
		$question8 = $_REQUEST['question8'];

		$resultFile=file_get_contents("results.txt","r+"); // grabs content to be tokenized

		$rowArray = explode("\n" , $resultFile);
		$row1 = explode(",", $rowArray[0]);
		$row2 = explode(",", $rowArray[1]);
		$row3 = explode(",", $rowArray[2]);
		$row4 = explode(",", $rowArray[3]);
		$row5 = explode(",", $rowArray[4]);
		$row6 = explode(",", $rowArray[5]);
		$row7 = explode(",", $rowArray[6]);
		$row8 = explode(",", $rowArray[7]);

		switch($question1)
		{
			case 1:
				$row1[0] = $row1[0] + 1;
				break;
			case 2:
				$row1[1] = $row1[1] + 1;
				break;
			case 3:
				$row1[2] = $row1[2] + 1;
				break;
			case 4:
				$row1[3] = $row1[3] + 1;
				break;
			case 5:
				$row1[4] = $row1[4] + 1;
				break;
		}
		/* Gets total for each value for question 1
			To be used for pie chart and total value
			*/
		$q1_v1_count = $row1[0]; //Gets count for question1 value 1
		$q1_v2_count = $row1[1];
		$q1_v3_count = $row1[2];
		$q1_v4_count = $row1[3];
		$q1_v5_count = $row1[4];
		$q1_total = $q1_v1_count + $q1_v2_count + $q1_v3_count + $q1_v4_count + $q1_v5_count; //Grabs total for question 1
		$q1_average = number_format(( $q1_v1_count + 2 * ($q1_v2_count) + 3 * ($q1_v3_count) + 4 * ($q1_v4_count) + 5 * ($q1_v5_count)) / $q1_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function
		$rowArray[0] = implode("," , $row1);
		switch($question2)
		{
			case 1:
				$row2[0] = $row2[0] + 1;
				break;
			case 2:
				$row2[1] = $row2[1] + 1;
				break;
			case 3:
				$row2[2] = $row2[2] + 1;
				break;
			case 4:
				$row2[3] = $row2[3] + 1;
				break;
			case 5:
				$row2[4] = $row2[4] + 1;
				break;
		}

		$q2_v1_count = $row2[0]; 
		$q2_v2_count = $row2[1];
		$q2_v3_count = $row2[2];
		$q2_v4_count = $row2[3];
		$q2_v5_count = $row2[4];
		$q2_total = $q2_v1_count + $q2_v2_count + $q2_v3_count + $q2_v4_count + $q2_v5_count; //Grabs total for question 2
		$q2_average = number_format(( $q2_v1_count + 2 * ($q2_v2_count) + 3 * ($q2_v3_count) + 4 * ($q2_v4_count) + 5 * ($q2_v5_count)) / $q2_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[1] = implode("," , $row2);
		switch($question3)
		{
			case 1:
				$row3[0] = $row3[0] + 1;
				break;
			case 2:
				$row3[1] = $row3[1] + 1;
				break;
			case 3:
				$row3[2] = $row3[2] + 1;
				break;
			case 4:
				$row3[3] = $row3[3] + 1;
				break;
			case 5:
				$row3[4] = $row3[4] + 1;
				break;
		}

		$q3_v1_count = $row3[0]; 
		$q3_v2_count = $row3[1];
		$q3_v3_count = $row3[2];
		$q3_v4_count = $row3[3];
		$q3_v5_count = $row3[4];
		$q3_total = $q3_v1_count + $q3_v2_count + $q3_v3_count + $q3_v4_count + $q3_v5_count; //Grabs total for question 3
		$q3_average = number_format(( $q3_v1_count + 2 * ($q3_v2_count) + 3 * ($q3_v3_count) + 4 * ($q3_v4_count) + 5 * ($q3_v5_count)) / $q3_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[2] = implode("," , $row3);
		switch($question4)
		{
			case 1:
				$row4[0] = $row4[0] + 1;
				break;
			case 2:
				$row4[1] = $row4[1] + 1;
				break;
			case 3:
				$row4[2] = $row4[2] + 1;
				break;
			case 4:
				$row4[3] = $row4[3] + 1;
				break;
			case 5:
				$row4[4] = $row4[4] + 1;
				break;
		}

		$q4_v1_count = $row4[0]; 
		$q4_v2_count = $row4[1];
		$q4_v3_count = $row4[2];
		$q4_v4_count = $row4[3];
		$q4_v5_count = $row4[4];
		$q4_total = $q4_v1_count + $q4_v2_count + $q4_v3_count + $q4_v4_count + $q4_v5_count; //Grabs total for question 4
		$q4_average = number_format(( $q4_v1_count + 2 * ($q4_v2_count) + 3 * ($q4_v3_count) + 4 * ($q4_v4_count) + 5 * ($q4_v5_count)) / $q4_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function


		$rowArray[3] = implode("," , $row4);
		switch($question5)
		{
			case 1:
				$row5[0] = $row5[0] + 1;
				break;
			case 2:
				$row5[1] = $row5[1] + 1;
				break;
			case 3:
				$row5[2] = $row5[2] + 1;
				break;
			case 4:
				$row5[3] = $row5[3] + 1;
				break;
			case 5:
				$row5[4] = $row5[4] + 1;
				break;
		}


		$q5_v1_count = $row5[0]; 
		$q5_v2_count = $row5[1];
		$q5_v3_count = $row5[2];
		$q5_v4_count = $row5[3];
		$q5_v5_count = $row5[4];
		$q5_total = $q5_v1_count + $q5_v2_count + $q5_v3_count + $q5_v4_count + $q5_v5_count; //Grabs total for question 5
		$q5_average = number_format(( $q5_v1_count + 2 * ($q5_v2_count) + 3 * ($q5_v3_count) + 4 * ($q5_v4_count) + 5 * ($q5_v5_count)) / $q5_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[4] = implode("," , $row5);
		switch($question6)
		{
			case 1:
				$row6[0] = $row6[0] + 1;
				break;
			case 2:
				$row6[1] = $row6[1] + 1;
				break;
			case 3:
				$row6[2] = $row6[2] + 1;
				break;
			case 4:
				$row6[3] = $row6[3] + 1;
				break;
			case 5:
				$row6[4] = $row6[4] + 1;
				break;
		}


		$q6_v1_count = $row6[0]; 
		$q6_v2_count = $row6[1];
		$q6_v3_count = $row6[2];
		$q6_v4_count = $row6[3];
		$q6_v5_count = $row6[4];
		$q6_total = $q6_v1_count + $q6_v2_count + $q6_v3_count + $q6_v4_count + $q6_v5_count; //Grabs total for question 6
		$q6_average = number_format(( $q6_v1_count + 2 * ($q6_v2_count) + 3 * ($q6_v3_count) + 4 * ($q6_v4_count) + 5 * ($q6_v5_count)) / $q6_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[5] = implode("," , $row6);
		switch($question7)
		{
			case 1:
				$row7[0] = $row7[0] + 1;
				break;
			case 2:
				$row7[1] = $row7[1] + 1;
				break;
			case 3:
				$row7[2] = $row7[2] + 1;
				break;
			case 4:
				$row7[3] = $row7[3] + 1;
				break;
			case 5:
				$row7[4] = $row7[4] + 1;
				break;
		}

		$q7_v1_count = $row7[0]; 
		$q7_v2_count = $row7[1];
		$q7_v3_count = $row7[2];
		$q7_v4_count = $row7[3];
		$q7_v5_count = $row7[4];
		$q7_total = $q7_v1_count + $q7_v2_count + $q7_v3_count + $q7_v4_count + $q7_v5_count; //Grabs total for question 7
		$q7_average = number_format(( $q7_v1_count + 2 * ($q7_v2_count) + 3 * ($q7_v3_count) + 4 * ($q7_v4_count) + 5 * ($q7_v5_count)) / $q7_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[6] = implode("," , $row7);
		switch($question8)
		{
			case 1:
				$row8[0] = $row8[0] + 1;
				break;
			case 2:
				$row8[1] = $row8[1] + 1;
				break;
			case 3:
				$row8[2] = $row8[2] + 1;
				break;
			case 4:
				$row8[3] = $row8[3] + 1;
				break;
			case 5:
				$row8[4] = $row8[4] + 1;
				break;
		}

		$q8_v1_count = $row8[0]; 
		$q8_v2_count = $row8[1];
		$q8_v3_count = $row8[2];
		$q8_v4_count = $row8[3];
		$q8_v5_count = $row8[4];
		$q8_total = $q8_v1_count + $q8_v2_count + $q8_v3_count + $q8_v4_count + $q8_v5_count; //Grabs total for question 8
		$q8_average = number_format(( $q8_v1_count + 2 * ($q8_v2_count) + 3 * ($q8_v3_count) + 4 * ($q8_v4_count) + 5 * ($q8_v5_count)) / $q8_total , 2); //gets average, and uses 2 decimal places with the number_format($variable , 2) function

		$rowArray[7] = implode("," , $row8);
		$rowArray = implode("\n", $rowArray);

		$file = fopen("results.txt", "w") or die("results.txt could not be opened");
		fwrite($file, $rowArray);
		fclose($file);
	}

?>



<html>
<head>
	<title>Survey (CSC443)</title>
</head>
<body>
<table style='border:groove 2px #0000ff' cellpadding:10px>
		<tr style='border:groove 2px #0000ff'>
			<td colspan=70>
				<center>CSC 443 Survey</center>
			</td>
		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				#
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				Question
			</td>
			<td style='border:groove 2px #0000ff' colspan=3>
				Average
			</td>
			<td style='border:groove 2px #0000ff' colspan=3>
				Percents
			</td>
			
			<td style='border:groove 2px #0000ff' colspan=3>
				Total
			</td>
			
		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				1
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				This course helped me develop problem-solving skills.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q1_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>

			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q1_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				2
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				This course was very challenging.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q2_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			<?php echo $q2_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				3
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				My programming ability increased after taking this course.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q3_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			<?php echo $q3_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				4
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				I will list 'JavaScript' on my resume.			
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q4_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q4_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				5
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				I will list 'Perl Scripting' on my resume.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q5_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q5_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				6
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				I will list 'PHP Scripting' on my resume.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q6_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q6_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				7
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				If I had more time, I would have done better in this course.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q7_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q7_total; ?>
			</td>

		</tr>
		<tr style='border:groove 2px #0000ff'>
			<td style='border:groove 2px #0000ff'>
				8
			</td>
			<td style='border:groove 2px #0000ff' colspan=30>
				I will recommend this course to other students.
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center >
				<?php echo $q8_average; ?>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
			</td>
			<td style='border:groove 2px #0000ff' colspan=3 align=center>
				<?php echo $q8_total; ?>
			</td>

		</tr>

	</table>
</body>
</html>

