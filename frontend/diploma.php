<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diploma Admission Form</title>
	<link rel="stylesheet" href="../assets/css/styles.css">
	<style>
		.form-group {
			margin-bottom: 15px;
		}


		label {
			display: block;
			margin-bottom: 5px;
		}


		input,
		select,
		textarea {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}


		.error {
			color: red;
		}
	</style>
</head>


<body>
	<div class="container">
		<h2>Diploma Admission Form</h2>
		<form id="diplomaForm" action="../backend/process_application.php" method="post">
			<input type="hidden" name="program_type" value="Diploma">


			<div class="form-group">
				<label for="name">Name of Applicant (Block Letters)</label>
				<input type="text" id="name" name="name" required>
				<span class="error" id="nameError"></span>
			</div>


			<div class="form-group">
				<label for="father_name">Father's Name</label>
				<input type="text" id="father_name" name="father_name" required>
				<span class="error" id="father_nameError"></span>
			</div>


			<div class="form-group">
				<label for="mother_name">Mother's Name</label>
				<input type="text" id="mother_name" name="mother_name" required>
				<span class="error" id="mother_nameError"></span>
			</div>


			<div class="form-group">
				<label for="father_occupation">Father's Occupation</label>
				<input type="text" id="father_occupation" name="father_occupation">
			</div>


			<div class="form-group">
				<label for="mother_occupation">Mother's Occupation</label>
				<input type="text" id="mother_occupation" name="mother_occupation">
			</div>


			<div class="form-group">
				<label for="monthly_income">Monthly Income</label>
				<input type="number" id="monthly_income" name="monthly_income">
			</div>


			<div class="form-group">
				<label for="dob">Date of Birth</label>
				<input type="date" id="dob" name="dob" required>
				<span class="error" id="dobError"></span>
			</div>


			<div class="form-group">
				<label for="gender">Gender</label>
				<select id="gender" name="gender" required>
					<option value="">Select</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
					<option value="Other">Other</option>
				</select>
				<span class="error" id="genderError"></span>
			</div>


			<div class="form-group">
				<label for="category">Category</label>
				<input type="text" id="category" name="category">
			</div>


			<div class="form-group">
				<label for="sub_category">Sub Category</label>
				<input type="text" id="sub_category" name="sub_category">
			</div>


			<div class="form-group">
				<label for="religion">Religion</label>
				<input type="text" id="religion" name="religion">
			</div>


			<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" id="nationality" name="nationality">
			</div>


			<div class="form-group">
				<label for="aadhaar_no">Aadhaar No.</label>
				<input type="text" id="aadhaar_no" name="aadhaar_no">
			</div>


			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
				<span class="error" id="emailError"></span>
			</div>


			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="tel" id="mobile" name="mobile" required>
				<span class="error" id="mobileError"></span>
			</div>


			<div class="form-group">
				<label for="alt_mobile">Alternative Mobile</label>
				<input type="tel" id="alt_mobile" name="alt_mobile">
			</div>


			<div class="form-group">
				<label for="permanent_address">Permanent Address</label>
				<textarea id="permanent_address" name="permanent_address" rows="3" required></textarea>
				<span class="error" id="permanent_addressError"></span>
			</div>


			<div class="form-group">
				<label for="present_address">Present Address</label>
				<textarea id="present_address" name="present_address" rows="3" required></textarea>
				<span class="error" id="present_addressError"></span>
			</div>


			<div class="form-group">
				<label for="bpl">Whether belongs to BPL Category?</label>
				<select id="bpl" name="bpl">
					<option value="0">No</option>
					<option value="1">Yes</option>
				</select>
			</div>


			<div class="form-group">
				<label for="bank_account_no">Bank A/C No.</label>
				<input type="text" id="bank_account_no" name="bank_account_no">
			</div>


			<div class="form-group">
				<label for="bank_name">Bank Name</label>
				<input type="text" id="bank_name" name="bank_name">
			</div>


			<div class="form-group">
				<label for="ifsc_code">IFSC Code</label>
				<input type="text" id="ifsc_code" name="ifsc_code">
			</div>


			<div class="form-group">
				<label for="local_guardian_name">Local Guardian Name</label>
				<input type="text" id="local_guardian_name" name="local_guardian_name">
			</div>


			<div class="form-group">
				<label for="local_guardian_relationship">Local Guardian Relationship</label>
				<input type="text" id="local_guardian_relationship" name="local_guardian_relationship">
			</div>


			<div class="form-group">
				<label for="local_guardian_mobile">Local Guardian Mobile</label>
				<input type="tel" id="local_guardian_mobile" name="local_guardian_mobile">
			</div>


			<div class="form-group">
				<label for="deeet_roll_no">DEEET-<?php echo date("Y"); ?> Enrolment No</label>
				<input type="text" id="deeet_roll_no" name="deeet_roll_no">
			</div>


			<div class="form-group">
				<label for="deeet_overall_merit">DEEET-<?php echo date("Y"); ?> Overall Merit Position</label>
				<input type="number" id="deeet_overall_merit" name="deeet_overall_merit">
			</div>


			<div class="form-group">
				<label for="deeet_category_merit">DEEET-<?php echo date("Y"); ?> Category wise Merit Position</label>
				<input type="number" id="deeet_category_merit" name="deeet_category_merit">
			</div>


			<div class="form-group">
				<label for="branch_allotted">Branch Allotted (by DHE/DEEET)</label>
				<input type="text" id="branch_allotted" name="branch_allotted">
			</div>


			<div class="form-group">
				<label for="aadhaar_card_no">Aadhaar Card No.</label>
				<input type="text" id="aadhaar_card_no" name="aadhaar_card_no">
			</div>


			<div class="form-group">
				<label for="exam_passed">Madhyamik or Equivalent Exam Passed</label>
				<input type="text" id="exam_passed" name="exam_passed" value="Madhyamik or Equivalent" readonly>
			</div>


			<div class="form-group">
				<label for="board_university">Board/University</label>
				<input type="text" id="board_university" name="board_university">
			</div>


			<div class="form-group">
				<label for="year_of_passing">Year of Passing</label>
				<input type="number" id="year_of_passing" name="year_of_passing">
			</div>


			<div class="form-group">
				<label for="main_subjects_english">Main Subjects (English)</label>
				<input type="text" id="main_subjects_english" name="main_subjects_english" value="English" readonly>
			</div>


			<div class="form-group">
				<label for="full_marks_english">Full Marks (English)</label>
				<input type="number" id="full_marks_english" name="full_marks_english">
			</div>


			<div class="form-group">
				<label for="marks_obtained_english">Marks Obtained (English)</label>
				<input type="number" id="marks_obtained_english" name="marks_obtained_english">
			</div>


			<div class="form-group">
				<label for="main_subjects_math">Main Subjects (Mathematics)</label>
				<input type="text" id="main_subjects_math" name="main_subjects_math" value="Mathematics" readonly>
			</div>


			<div class="form-group">
				<label for="full_marks_math">Full Marks (Mathematics)</label>
				<input type="number" id="full_marks_math" name="full_marks_math">
			</div>


			<div class="form-group">
				<label for="marks_obtained_math">Marks Obtained (Mathematics)</label>
				<input type="number" id="marks_obtained_math" name="marks_obtained_math">
			</div>


			<div class="form-group">
				<label for="main_subjects_science">Main Subjects (Phy. Science/Science)</label>
				<input type="text" id="main_subjects_science" name="main_subjects_science" value="Phy. Science/Science"
					readonly>
			</div>


			<div class="form-group">
				<label for="full_marks_science">Full Marks (Phy. Science/Science)</label>
				<input type="number" id="full_marks_science" name="full_marks_science">
			</div>


			<div class="form-group">
				<label for="marks_obtained_science">Marks Obtained (Phy. Science/Science)</label>
				<input type="number" id="marks_obtained_science" name="marks_obtained_science">
			</div>


			<div class="form-group">
				<label for="total_marks">Total Marks</label>
				<input type="number" id="total_marks" name="total_marks">
			</div>


			<div class="form-group">
				<label for="marks_obtained_total">Total Marks Obtained</label>
				<input type="number" id="marks_obtained_total" name="marks_obtained_total">
			</div>


			<div class="form-group">
				<label for="overall_percentage">Overall Percentage</label>
				<input type="number" id="overall_percentage" name="overall_percentage">
			</div>


			<div class="form-group">
				<label for="local_guardian">Name of Local Guardian</label>
				<input type="text" id="local_guardian" name="local_guardian">
			</div>


			<div class="form-group">
				<label for="local_guardian_relationship">Relationship with Local Guardian</label>
				<input type="text" id="local_guardian_relationship" name="local_guardian_relationship">
			</div>


			<div class="form-group">
				<label for="local_guardian_mobile">Mobile No. of Local Guardian</label>
				<input type="tel" id="local_guardian_mobile" name="local_guardian_mobile">
			</div>


			<button type="submit">Submit</button>
		</form>
	</div>


	<script src="../assets/js/scripts.js"></script>
	<script>
		// Basic form validation
		document.getElementById('diplomaForm').addEventListener('submit', function(event) {
			let isValid = true;


			// Reset error messages
			document.querySelectorAll('.error').forEach(el => el.textContent = '');


			// Name validation
			if (document.getElementById('name').value.trim() === '') {
				document.getElementById('nameError').textContent = 'Name is required';
				isValid = false;
			}


			// Father's Name validation
			if (document.getElementById('father_name').value.trim() === '') {
				document.getElementById('father_nameError').textContent = "Father's Name is required";
				isValid = false;
			}


			// Mother's Name validation
			if (document.getElementById('mother_name').value.trim() === '') {
				document.getElementById('mother_nameError').textContent = "Mother's Name is required";
				isValid = false;
			}


			// DOB validation
			if (document.getElementById('dob').value.trim() === '') {
				document.getElementById('dobError').textContent = 'Date of Birth is required';
				isValid = false;
			}


			// Gender Validation
			if (document.getElementById('gender').value === '') {
				document.getElementById('genderError').textContent = 'Gender is required';
				isValid = false;
			}


			// Email Validation
			const emailValue = document.getElementById('email').value.trim();
			if (emailValue === '') {
				document.getElementById('emailError').textContent = 'Email is required';
				isValid = false;
			} else if (!emailValue.includes('@')) {
				document.getElementById('emailError').textContent = 'Invalid email format';
				isValid = false;
			}


			// Mobile Validation
			const mobileValue = document.getElementById('mobile').value.trim();
			if (mobileValue === '') {
				document.getElementById('mobileError').textContent = 'Mobile number is required';
				isValid = false;
			} else if (mobileValue.length !== 10 || isNaN(mobileValue)) {
				document.getElementById('mobileError').textContent = 'Invalid mobile number';
				isValid = false;
			}


			// Permanent Address Validation
			if (document.getElementById('permanent_address').value.trim() === '') {
				document.getElementById('permanent_addressError').textContent = 'Permanent Address is required';
				isValid = false;
			}


			// Present Address Validation
			if (document.getElementById('present_address').value.trim() === '') {
				document.getElementById('present_addressError').textContent = 'Present Address is required';
				isValid = false;
			}


			if (!isValid) {
				event.preventDefault(); // Prevent form submission
			}
		});
	</script>
</body>


</html>