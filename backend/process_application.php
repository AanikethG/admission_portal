<?php
// backend/process_application.php

// 1. Database Connection
include 'db_connect.php';

// 2. Server-Side Validation
$errors = [];

// Function to sanitize and validate input
function validate_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Validate Name
if (empty($_POST['name'])) {
	$errors['name'] = "Name is required";
} else {
	$name = validate_input($_POST['name']);
	if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		$errors['name'] = "Only letters and white space allowed in Name";
	}
}

// Validate Father's Name
if (empty($_POST['father_name'])) {
	$errors['father_name'] = "Father's Name is required";
} else {
	$father_name = validate_input($_POST['father_name']);
	if (!preg_match("/^[a-zA-Z ]*$/", $father_name)) {
		$errors['father_name'] = "Only letters and white space allowed in Father's Name";
	}
}

// Validate Mother's Name
if (empty($_POST['mother_name'])) {
	$errors['mother_name'] = "Mother's Name is required";
} else {
	$mother_name = validate_input($_POST['mother_name']);
	if (!preg_match("/^[a-zA-Z ]*$/", $mother_name)) {
		$errors['mother_name'] = "Only letters and white space allowed in Mother's Name";
	}
}

$father_occupation = validate_input($_POST['father_occupation']);
$mother_occupation = validate_input($_POST['mother_occupation']);
$monthly_income = validate_input($_POST['monthly_income']);

// Validate DOB
if (empty($_POST['dob'])) {
	$errors['dob'] = "Date of Birth is required";
} else {
	$dob = validate_input($_POST['dob']);
}

// Validate Gender
if (empty($_POST['gender'])) {
	$errors['gender'] = "Gender is required";
} else {
	$gender = validate_input($_POST['gender']);
}

$category = validate_input($_POST['category']);
$sub_category = validate_input($_POST['sub_category']);
$religion = validate_input($_POST['religion']);
$nationality = validate_input($_POST['nationality']);
$aadhaar_no = validate_input($_POST['aadhaar_no']);

// Validate Email
if (empty($_POST['email'])) {
	$errors['email'] = "Email is required";
} else {
	$email = validate_input($_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "Invalid email format";
	}
}

// Validate Mobile
if (empty($_POST['mobile'])) {
	$errors['mobile'] = "Mobile number is required";
} else {
	$mobile = validate_input($_POST['mobile']);
	if (!preg_match("/^[0-9]{10}$/", $mobile)) {
		$errors['mobile'] = "Invalid mobile number";
	}
}

$alt_mobile = validate_input($_POST['alt_mobile']);

// Validate Addresses
if (empty($_POST['permanent_address'])) {
	$errors['permanent_address'] = "Permanent Address is required";
} else {
	$permanent_address = validate_input($_POST['permanent_address']);
}

if (empty($_POST['present_address'])) {
	$errors['present_address'] = "Present Address is required";
} else {
	$present_address = validate_input($_POST['present_address']);
}

$bpl = validate_input($_POST['bpl']);
$bank_account_no = validate_input($_POST['bank_account_no']);
$bank_name = validate_input($_POST['bank_name']);
$ifsc_code = validate_input($_POST['ifsc_code']);
$local_guardian_name = validate_input($_POST['local_guardian_name']);
$local_guardian_relationship = validate_input($_POST['local_guardian_relationship']);
$local_guardian_mobile = validate_input($_POST['local_guardian_mobile']);
$deeet_roll_no = validate_input($_POST['deeet_roll_no']);
$deeet_overall_merit = validate_input($_POST['deeet_overall_merit']);
$deeet_category_merit = validate_input($_POST['deeet_category_merit']);
$branch_allotted = validate_input($_POST['branch_allotted']);
$aadhaar_card_no = validate_input($_POST['aadhaar_card_no']);
$exam_passed = validate_input($_POST['exam_passed']);
$board_university = validate_input($_POST['board_university']);
$year_of_passing = validate_input($_POST['year_of_passing']);
$main_subjects_english = validate_input($_POST['main_subjects_english']);
$full_marks_english = validate_input($_POST['full_marks_english']);
$marks_obtained_english = validate_input($_POST['marks_obtained_english']);
$main_subjects_math = validate_input($_POST['main_subjects_math']);
$full_marks_math = validate_input($_POST['full_marks_math']);
$marks_obtained_math = validate_input($_POST['marks_obtained_math']);
$main_subjects_science = validate_input($_POST['main_subjects_science']);
$full_marks_science = validate_input($_POST['full_marks_science']);
$marks_obtained_science = validate_input($_POST['marks_obtained_science']);
$total_marks = validate_input($_POST['total_marks']);
$marks_obtained_total = validate_input($_POST['marks_obtained_total']);
$overall_percentage = validate_input($_POST['overall_percentage']);
$local_guardian = validate_input($_POST['local_guardian']);
$local_guardian_relationship = validate_input($_POST['local_guardian_relationship']);
$local_guardian_mobile = validate_input($_POST['local_guardian_mobile']);

// 3.  Insert Data into Database
if (empty($errors)) {
	$sql = "INSERT INTO diploma_applications (
                program_type, name, father_name, mother_name, father_occupation, mother_occupation, monthly_income,
                dob, gender, category, sub_category, religion, nationality, aadhaar_no, email, mobile, alt_mobile,
                permanent_address, present_address, bpl, bank_account_no, bank_name, ifsc_code, local_guardian_name,
                local_guardian_relationship, local_guardian_mobile, deeet_roll_no, deeet_overall_merit, deeet_category_merit,
                branch_allotted, aadhaar_card_no, exam_passed, board_university, year_of_passing, main_subjects_english,
                full_marks_english, marks_obtained_english, main_subjects_math, full_marks_math, marks_obtained_math,
                main_subjects_science, full_marks_science, marks_obtained_science, total_marks, marks_obtained_total,
                overall_percentage, local_guardian, local_guardian_relationship, local_guardian_mobile
            ) VALUES (
                'Diploma', '$name', '$father_name', '$mother_name', '$father_occupation', '$mother_occupation', '$monthly_income',
                '$dob', '$gender', '$category', '$sub_category', '$religion', '$nationality', '$aadhaar_no', '$email', '$mobile', '$alt_mobile',
                '$permanent_address', '$present_address', '$bpl', '$bank_account_no', '$bank_name', '$ifsc_code', '$local_guardian_name',
                '$local_guardian_relationship', '$local_guardian_mobile', '$deeet_roll_no', '$deeet_overall_merit', '$deeet_category_merit',
                '$branch_allotted', '$aadhaar_card_no', '$exam_passed', '$board_university', '$year_of_passing', '$main_subjects_english',
                '$full_marks_english', '$marks_obtained_english', '$main_subjects_math', '$full_marks_math', '$marks_obtained_math',
                '$main_subjects_science', '$full_marks_science', '$marks_obtained_science', '$total_marks', '$marks_obtained_total',
                '$overall_percentage', '$local_guardian', '$local_guardian_relationship', '$local_guardian_mobile'
            )";

	if ($conn->query($sql) === TRUE) {
		echo "Application submitted successfully";
		// Redirect to success page or print preview
		// header("Location: application_success.php");
		// exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} else {
	// Display Errors (for development only)
	echo "<h3>Errors:</h3>";
	echo "<ul>";
	foreach ($errors as $key => $value) {
		echo "<li>$value</li>";
	}
	echo "</ul>";
}

$conn->close();
