<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B.Tech Lateral Entry Admission Form</title>
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
		<h2>B.Tech Lateral Entry Admission Form</h2>
		<form id="btechLateralForm" action="../backend/process_application.php" method="post">
			<input type="hidden" name="program_type" value="BTechLateral">


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
				<label for="titlee_roll_no">TIITJEE Roll No</label>
				<input type="text" id="titlee_roll_no" name="titlee_roll_no">
			</div>


			<div class="form-group">
				<label for="exam_passed_madhyamik">Madhyamik or Equivalent Exam Passed</label>
				<input type="text" id="exam_passed_madhyamik" name="exam_passed_madhyamik"
					value="Madhyamik or Equivalent" readonly>
			</div>


			<div class="form-group">
				<label for="board_university_madhyamik">Board/University (Madhyamik)</label>
				<input type="text" id="board_university_madhyamik" name="board_university_madhyamik">
			</div>


			<div class="form-group">
				<label for="year_of_passing_madhyamik">Year of Passing (Madhyamik)</label>
				<input type="number" id="year_of_passing_madhyamik" name="year_of_passing_madhyamik">
			</div>


			<div class="form-group">
				<label for="exam_passed_diploma">Diploma Exam Passed</label>
				<input type="text" id="exam_passed_diploma" name="exam_passed_diploma" value="Diploma" readonly>
			</div>


			<div class="form-group">
				<label for="board_university_diploma">Board/University (Diploma)</label>
				<input type="text" id="board_university_diploma" name="board_university_diploma">
			</div>


			<div class="form-group">
				<label for="year_of_passing_diploma">Year of Passing (Diploma)</label>
				<input type="number" id="year_of_passing_diploma" name="year_of_passing_diploma">
			</div>


			<div class="form-group">
				<label for="full_marks">Full Marks (Diploma)</label>
				<input type="number" id="full_marks" name="full_marks">
			</div>


			<div class="form-group">
				<label for="marks_obtained">Marks Obtained (Diploma)</label>
				<input type="number" id="marks_obtained" name="marks_obtained">
			</div>


			<div class="form-group">
				<label for="overall_percentage">Overall Percentage (Diploma)</label>
				<input type="number" id="overall_percentage" name="overall_percentage">
			</div>


			<button type="submit">Submit</button>
		</form>
	</div>


	<script src="../assets/js/scripts.js"></script>
	<script>
		// Basic form validation 
		document.getElementById('btechLateralForm').addEventListener('submit', function(event) {
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