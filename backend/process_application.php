<?php


// process_application.php


// 1. Database Connection (Replace with your actual credentials)
$servername = "your_db_host";
$username = "your_db_user";
$password = "your_db_password";
$dbname = "your_db_name";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


// 2. Get Program Type
$program_type = $_POST['program_type'];


// 3. Process Based on Program Type
switch ($program_type) {
	case 'Diploma':
		processDiplomaApplication($conn);
		break;
	case 'Degree':
		processDegreeApplication($conn);
		break;
	case 'ITILateral':
		processITILateralApplication($conn);
		break;
	case 'MTech':
		//  Leave empty for now.  MTech will be handled later
		break;
	default:
		echo "Invalid program type.";
}


$conn->close();


function processDiplomaApplication($conn)
{
	//  Get all the data from the form
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$monthly_income = $_POST['monthly_income'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$aadhaar_no = $_POST['aadhaar_no'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$alt_mobile = $_POST['alt_mobile'];
	$permanent_address = $_POST['permanent_address'];
	$present_address = $_POST['present_address'];
	$bpl = $_POST['bpl'];
	$bank_account_no = $_POST['bank_account_no'];
	$bank_name = $_POST['bank_name'];
	$ifsc_code = $_POST['ifsc_code'];
	$local_guardian_name = $_POST['local_guardian_name'];
	$local_guardian_relationship = $_POST['local_guardian_relationship'];
	$local_guardian_mobile = $_POST['local_guardian_mobile'];
	$deeet_roll_no = $_POST['deeet_roll_no'];
	$exam_passed_madhyamik = $_POST['exam_passed_madhyamik'];
	$board_madhyamik = $_POST['board_madhyamik'];
	$year_of_passing_madhyamik = $_POST['year_of_passing_madhyamik'];
	$english_marks = $_POST['english_marks'];
	$math_marks = $_POST['math_marks'];
	$science_marks = $_POST['science_marks'];
	$total_marks = $_POST['total_marks'];
	$marks_obtained_total = $_POST['marks_obtained_total'];
	$overall_percentage = $_POST['overall_percentage'];


	//  SQL to insert data (Replace 'diploma_applications' with your table name)
	$sql = "INSERT INTO diploma_applications (
  name, father_name, mother_name, father_occupation, mother_occupation, monthly_income,
  dob, gender, category, sub_category, religion, nationality, aadhaar_no, email, mobile,
  alt_mobile, permanent_address, present_address, bpl, bank_account_no, bank_name,
  ifsc_code, local_guardian_name, local_guardian_relationship, local_guardian_mobile,
  deeet_roll_no, exam_passed_madhyamik, board_madhyamik, year_of_passing_madhyamik,
  english_marks, math_marks, science_marks, total_marks, marks_obtained_total,
  overall_percentage
  ) VALUES (
  '$name', '$father_name', '$mother_name', '$father_occupation', '$mother_occupation', '$monthly_income',
  '$dob', '$gender', '$category', '$sub_category', '$religion', '$nationality', '$aadhaar_no', '$email', '$mobile',
  '$alt_mobile', '$permanent_address', '$present_address', '$bpl', '$bank_account_no', '$bank_name',
  '$ifsc_code', '$local_guardian_name', '$local_guardian_relationship', '$local_guardian_mobile',
  '$deeet_roll_no', '$exam_passed_madhyamik', '$board_madhyamik', '$year_of_passing_madhyamik',
  '$english_marks', '$math_marks', '$science_marks', '$total_marks', '$marks_obtained_total',
  '$overall_percentage'
  )";


	if ($conn->query($sql) === TRUE) {
		echo "Diploma application submitted successfully";
		//  You might want to redirect to a confirmation page
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


function processDegreeApplication($conn)
{
	//  Get all the data from the form
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$monthly_income = $_POST['monthly_income'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$aadhaar_no = $_POST['aadhaar_no'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$alt_mobile = $_POST['alt_mobile'];
	$permanent_address = $_POST['permanent_address'];
	$present_address = $_POST['present_address'];
	$bpl = $_POST['bpl'];
	$bank_account_no = $_POST['bank_account_no'];
	$bank_name = $_POST['bank_name'];
	$ifsc_code = $_POST['ifsc_code'];
	$local_guardian_name = $_POST['local_guardian_name'];
	$local_guardian_relationship = $_POST['local_guardian_relationship'];
	$local_guardian_mobile = $_POST['local_guardian_mobile'];
	$tbjee_roll_no = $_POST['tbjee_roll_no'];
	$exam_passed_madhyamik = $_POST['exam_passed_madhyamik'];
	$board_madhyamik = $_POST['board_madhyamik'];
	$year_of_passing_madhyamik = $_POST['year_of_passing_madhyamik'];
	$exam_passed_hs = $_POST['exam_passed_hs'];
	$board_hs = $_POST['board_hs'];
	$year_of_passing_hs = $_POST['year_of_passing_hs'];
	$main_subjects_physics = $_POST['main_subjects_physics'];
	$full_marks_physics = $_POST['full_marks_physics'];
	$marks_obtained_physics = $_POST['marks_obtained_physics'];
	$main_subjects_chemistry = $_POST['main_subjects_chemistry'];
	$full_marks_chemistry = $_POST['full_marks_chemistry'];
	$marks_obtained_chemistry = $_POST['marks_obtained_chemistry'];
	$main_subjects_math = $_POST['main_subjects_math'];
	$full_marks_math = $_POST['full_marks_math'];
	$marks_obtained_math = $_POST['marks_obtained_math'];
	$total_marks = $_POST['total_marks'];
	$marks_obtained_total = $_POST['marks_obtained_total'];
	$overall_percentage = $_POST['overall_percentage'];


	//  SQL to insert data (Replace 'degree_applications' with your table name)
	$sql = "INSERT INTO degree_applications (
  name, father_name, mother_name, father_occupation, mother_occupation, monthly_income,
  dob, gender, category, sub_category, religion, nationality, aadhaar_no, email, mobile,
  alt_mobile, permanent_address, present_address, bpl, bank_account_no, bank_name,
  ifsc_code, local_guardian_name, local_guardian_relationship, local_guardian_mobile,
  tbjee_roll_no, exam_passed_madhyamik, board_madhyamik, year_of_passing_madhyamik,
  exam_passed_hs, board_hs, year_of_passing_hs,
  main_subjects_physics, full_marks_physics, marks_obtained_physics,
  main_subjects_chemistry, full_marks_chemistry, marks_obtained_chemistry,
  main_subjects_math, full_marks_math, marks_obtained_math,
  total_marks, marks_obtained_total, overall_percentage
  ) VALUES (
  '$name', '$father_name', '$mother_name', '$father_occupation', '$mother_occupation', '$monthly_income',
  '$dob', '$gender', '$category', '$sub_category', '$religion', '$nationality', '$aadhaar_no', '$email', '$mobile',
  '$alt_mobile', '$permanent_address', '$present_address', '$bpl', '$bank_account_no', '$bank_name',
  '$ifsc_code', '$local_guardian_name', '$local_guardian_relationship', '$local_guardian_mobile',
  '$tbjee_roll_no', '$exam_passed_madhyamik', '$board_madhyamik', '$year_of_passing_madhyamik',
  '$exam_passed_hs', '$board_hs', '$year_of_passing_hs',
  '$main_subjects_physics', '$full_marks_physics', '$marks_obtained_physics',
  '$main_subjects_chemistry', '$full_marks_chemistry', '$marks_obtained_chemistry',
  '$main_subjects_math', '$full_marks_math', '$marks_obtained_math',
  '$total_marks', '$marks_obtained_total', '$overall_percentage'
  )";


	if ($conn->query($sql) === TRUE) {
		echo "Degree application submitted successfully";
		//  You might want to redirect to a confirmation page
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


function processITILateralApplication($conn)
{
	//  Get all the data from the form
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$monthly_income = $_POST['monthly_income'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$aadhaar_no = $_POST['aadhaar_no'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$alt_mobile = $_POST['alt_mobile'];
	$permanent_address = $_POST['permanent_address'];
	$present_address = $_POST['present_address'];
	$bpl = $_POST['bpl'];
	$bank_account_no = $_POST['bank_account_no'];
	$bank_name = $_POST['bank_name'];
	$ifsc_code = $_POST['ifsc_code'];
	$local_guardian_name = $_POST['local_guardian_name'];
	$local_guardian_relationship = $_POST['local_guardian_relationship'];
	$local_guardian_mobile = $_POST['local_guardian_mobile'];
	$itilee_roll_no = $_POST['itilee_roll_no'];
	$exam_passed_madhyamik = $_POST['exam_passed_madhyamik'];
	$board_university_madhyamik = $_POST['board_university_madhyamik'];
	$year_of_passing_madhyamik = $_POST['year_of_passing_madhyamik'];
	$exam_passed_iti = $_POST['exam_passed_iti'];
	$board_university_iti = $_POST['board_university_iti'];
	$year_of_passing_iti = $_POST['year_of_passing_iti'];
	$full_marks_iti = $_POST['full_marks_iti'];
	$marks_obtained_iti = $_POST['marks_obtained_iti'];
	$overall_percentage_iti = $_POST['overall_percentage_iti'];


	//  SQL to insert data (Replace 'iti_lateral_applications' with your table name)
	$sql = "INSERT INTO iti_lateral_applications (
  name, father_name, mother_name, father_occupation, mother_occupation, monthly_income,
  dob, gender, category, sub_category, religion, nationality, aadhaar_no, email, mobile,
  alt_mobile, permanent_address, present_address, bpl, bank_account_no, bank_name,
  ifsc_code, local_guardian_name, local_guardian_relationship, local_guardian_mobile,
  itilee_roll_no, exam_passed_madhyamik, board_university_madhyamik, year_of_passing_madhyamik,
  exam_passed_iti, board_university_iti, year_of_passing_iti,
  full_marks_iti, marks_obtained_iti, overall_percentage_iti
  ) VALUES (
  '$name', '$father_name', '$mother_name', '$father_occupation', '$mother_occupation', '$monthly_income',
  '$dob', '$gender', '$category', '$sub_category', '$religion', '$nationality', '$aadhaar_no', '$email', '$mobile',
  '$alt_mobile', '$permanent_address', '$present_address', '$bpl', '$bank_account_no', '$bank_name',
  '$ifsc_code', '$local_guardian_name', '$local_guardian_relationship', '$local_guardian_mobile',
  '$itilee_roll_no', '$exam_passed_madhyamik', '$board_university_madhyamik', '$year_of_passing_madhyamik',
  '$exam_passed_iti', '$board_university_iti', '$year_of_passing_iti',
  '$full_marks_iti', '$marks_obtained_iti', '$overall_percentage_iti'
  )";


	if ($conn->query($sql) === TRUE) {
		echo "ITI Lateral Entry application submitted successfully";
		//  You might want to redirect to a confirmation page
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//  4. MTech Functionality (To be added later)
