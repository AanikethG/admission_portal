<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>M.Tech Admission Form</title>
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
		<h2>M.Tech Application Form</h2>
		<form id="mtechForm" action="../backend/process_application.php" method="post">
			<input type="hidden" name="program_type" value="MTech">


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
				<label for="father_occupation">Father's Occupation</label>
				<input type="text" id="father_occupation" name="father_occupation">
			</div>


			<div class="form-group">
				<label for="monthly_income_father">Father's Monthly Income</label>
				<input type="number" id="monthly_income_father" name="monthly_income_father">
			</div>


			<div class="form-group">
				<label for="mother_name">Mother's Name</label>
				<input type="text" id="mother_name" name="mother_name" required>
				<span class="error" id="mother_nameError"></span>
			</div>


			<div class="form-group">
				<label for="mother_occupation">Mother's Occupation</label>
				<input type="text" id="mother_occupation" name="mother_occupation">
			</div>


			<div class="form-group">
				<label for="monthly_income_mother">Mother's Monthly Income</label>
				<input type="number" id="monthly_income_mother" name="monthly_income_mother">
			</div>


			<div class="form-group">
				<label for="permanent_address">Permanent Address</label>
				<textarea id="permanent_address" name="permanent_address" rows="3" required></textarea>
				<span class="error" id="permanent_addressError"></span>
			</div>


			<div class="form-group">
				<label for="permanent_address_mobile">Phone/Mobile 1 (Permanent Address)</label>
				<input type="tel" id="permanent_address_mobile" name="permanent_address_mobile">
			</div>


			<div class="form-group">
				<label for="permanent_address_pin_code">PIN Code (Permanent Address)</label>
				<input type="text" id="permanent_address_pin_code" name="permanent_address_pin_code">
			</div>


			<div class="form-group">
				<label for="present_address">Present Address</label>
				<textarea id="present_address" name="present_address" rows="3" required></textarea>
				<span class="error" id="present_addressError"></span>
			</div>


			<div class="form-group">
				<label for="present_address_mobile">Phone/Mobile 2 (Present Address)</label>
				<input type="tel" id="present_address_mobile" name="present_address_mobile">
			</div>


			<div class="form-group">
				<label for="present_address_pin_code">PIN Code (Present Address)</label>
				<input type="text" id="present_address_pin_code" name="present_address_pin_code">
			</div>


			<div class="form-group">
				<label>Category</label>
				<select id="category" name="category">
					<option value="UR">UR</option>
					<option value="OBC">OBC</option>
					<option value="ST">ST</option>
					<option value="SC">SC</option>
					<option value="XS">XS</option>
					<option value="PWD">PWD</option>
				</select>
			</div>


			<div class="form-group">
				<label>Whether a Permanent Resident of Tripura?</label>
				<select id="permanent_resident" name="permanent_resident">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>


			<div class="form-group">
				<label for="religion">Religion</label>
				<input type="text" id="religion" name="religion">
			</div>


			<div class="form-group">
				<label for="dob">Date of Birth</label>
				<input type="date" id="dob" name="dob" required>
				<span class="error" id="dobError"></span>
			</div>


			<div class="form-group">
				<label for="locality">Locality</label>
				<select id="locality" name="locality">
					<option value="Urban">Urban</option>
					<option value="Rural">Rural</option>
				</select>
			</div>


			<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" id="nationality" name="nationality">
			</div>


			<div class="form-group">
				<label for="gender">Gender</label>
				<select id="gender" name="gender">
					<option value="M">Male</option>
					<option value="F">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>


			<div class="form-group">
				<label for="titpgee_roll_no">TITPGEE Roll No</label>
				<input type="text" id="titpgee_roll_no" name="titpgee_roll_no">
			</div>


			<div class="form-group">
				<label for="titpgee_merit_position">TITPGEE Overall Merit Position</label>
				<input type="text" id="titpgee_merit_position" name="titpgee_merit_position">
			</div>


			<div class="form-group">
				<label for="titpgee_category_merit_position">TITPGEE Category wise Merit Position (If
					applicable)</label>
				<input type="text" id="titpgee_category_merit_position"
					name="titpgee_category_merit_position">
			</div>


			<div class="form-group">
				<label for="titpgee_branch_alloted">TITPGEE Branch Allotted</label>
				<input type="text" id="titpgee_branch_alloted" name="titpgee_branch_alloted">
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
				<label for="bank_ifsc_code">IFSC Code</label>
				<input type="text" id="bank_ifsc_code" name="bank_ifsc_code">
			</div>


			<div class="form-group">
				<label for="specialization">Specialization</label>
				<input type="text" id="specialization" name="specialization">
			</div>


			<div class="form-group">
				<label for="aadhaar_card_no">Aadhaar Card No</label>
				<input type="text" id="aadhaar_card_no" name="aadhaar_card_no">
			</div>


			<div class="form-group">
				<label for="email">Email address (in the name of student)</label>
				<input type="email" id="email" name="email" required>
				<span class="error" id="emailError"></span>
			</div>


			<div class="form-group">
				<label>Whether Employed?</label>
				<select id="employed" name="employed">
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
				<small>If yes, NOC required</small>
			</div>


			<div class="form-group">
				<label>Whether GATE qualified?</label>
				<select id="gate_qualified" name="gate_qualified">
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
				<small>If yes, mention GATE score in academic qualification</small>
			</div>


			<div class="form-group">
				<label>Whether CUET qualified?</label>
				<select id="cuet_qualified" name="cuet_qualified">
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
				<small>If yes, mention CUET score in academic qualification</small>
			</div>


			<div class="form-group">
				<label>Academic Qualification</label>
				<table>
					<thead>
						<tr>
							<th>Exam Passed</th>
							<th>Board/University</th>
							<th>Year of Passing</th>
							<th>Branch/Subjects of Study</th>
							<th>CGPA/Score</th>
							<th>Overall %/Rank</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Madhyamik or Equivalent</td>
							<td><input type="text" name="madhyamik_board_university"></td>
							<td><input type="number" name="madhyamik_year_of_passing"></td>
							<td><input type="text" name="madhyamik_branch_subjects"></td>
							<td><input type="text" name="madhyamik_cgpa_score"></td>
							<td><input type="text" name="madhyamik_overall_percent_rank"></td>
						</tr>
						<tr>
							<td>H.S.(+2) stage/Diploma</td>
							<td><input type="text" name="hs_diploma_board_university"></td>
							<td><input type="number" name="hs_diploma_year_of_passing"></td>
							<td><input type="text" name="hs_diploma_branch_subjects"></td>
							<td><input type="text" name="hs_diploma_cgpa_score"></td>
							<td><input type="text" name="hs_diploma_overall_percent_rank"></td>
						</tr>
						<tr>
							<td>B.E./B.Tech.</td>
							<td><input type="text" name="be_btech_board_university"></td>
							<td><input type="number" name="be_btech_year_of_passing"></td>
							<td><input type="text" name="be_btech_branch_subjects"></td>
							<td><input type="text" name="be_btech_cgpa_score"></td>
							<td><input type="text" name="be_btech_overall_percent_rank"></td>
						</tr>
						<tr>
							<td>CUET/GATE</td>
							<td><input type="text" name="cuet_gate_board_university"></td>
							<td><input type="number" name="cuet_gate_year_of_passing"></td>
							<td><input type="text" name="cuet_gate_branch_subjects"></td>
							<td><input type="text" name="cuet_gate_cgpa_score"></td>
							<td><input type="text" name="cuet_gate_overall_percent_rank"></td>
						</tr>
					</tbody>
				</table>
			</div>


			<div class="form-group">
				<label>GATE/CUET Details</label>
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Year of Appearal</th>
							<th>GATE/CUET Score</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Valid GATE score</td>
							<td><input type="number" name="gate_year_of_appearal"></td>
							<td><input type="text" name="gate_score"></td>
						</tr>
						<tr>
							<td>Valid CUET score</td>
							<td><input type="number" name="cuet_year_of_appearal"></td>
							<td><input type="text" name="cuet_score"></td>
						</tr>
					</tbody>
				</table>
			</div>


			<div class="form-group">
				<label for="local_guardian_name">Name of Local Guardian</label>
				<input type="text" id="local_guardian_name" name="local_guardian_name">
			</div>


			<div class="form-group">
				<label for="local_guardian_relationship">Relationship with Guardian</label>
				<input type="text" id="local_guardian_relationship" name="local_guardian_relationship">
			</div>


			<div class="form-group">
				<label for="local_guardian_mobile">Mobile No. </label>
				<input type="tel" id="local_guardian_mobile" name="local_guardian_mobile">
			</div>


			<button type="submit">Submit</button>
		</form>
	</div>


	<script src="../assets/js/scripts.js"></script>
	<script>
		// Basic form validation
		document.getElementById('mtechForm').addEventListener('submit', function(event) {
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


			// Email Validation
			const emailValue = document.getElementById('email').value.trim();
			if (emailValue === '') {
				document.getElementById('emailError').textContent = 'Email is required';
				isValid = false;
			} else if (!emailValue.includes('@')) {
				document.getElementById('emailError').textContent = 'Invalid email format';
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