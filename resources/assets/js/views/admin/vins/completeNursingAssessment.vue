<template>
  <div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Complete Nursing Assessment</h1>
				</div>
			</div>
		</div>
  		<form action="" method="post" >

        <div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label class="control-label col-md-4" for="unit">Unit:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="unit" v-validate="'required|numeric'" v-model="completeNursingAssessmentData.unit" value="15">
              <span class="help is-danger" v-show="errors.has('unit')">
                Please enter numeric value.
              </span>
  					</div>
  				</div>
          <div class="col-md-6">
            <div class="text-right">
              <addressograph></addressograph>
            </div>
  				</div>
  			</div>

        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
  						<label class="control-label col-md-4" for="date">Date:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control ls-datepicker" id = "date" name="date" v-model="completeNursingAssessmentData.date" v-validate="'required'" value=""> -->
              <date-picker :date.sync="completeNursingAssessmentData.nurDate"  :option="option"></date-picker>

              <span class="help is-danger" v-show="errors.has('date')">
                Field is required
              </span>
  					</div>
          </div>
        </div>



  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label class="control-label col-md-6" for="time">Time:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control ls-timepicker" id = "nur_time" name="nur_time" v-model="completeNursingAssessmentData.nur_time" v-validate="'required'" value="">
              <span class="help is-danger" v-show="errors.has('nur_time')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label class="control-label col-md-6" for="ipd_id">IPD No.:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="ipd_id" v-model="ipd_id" v-validate="'required|numeric'"  value="" />
              <span class="help is-danger" v-show="errors.has('ipd_id')">
                Numeric Field is required
              </span>
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6" >
  					<div class="col-md-6">
  						<label class="control-label" for="call_bell">Call Bell in Reach:</label>
  					</div>
  					<div class="col-md-6">
  						<input class="form-control" type="text" name="call_bell" v-model="completeNursingAssessmentData.call_bell" v-validate="'required'" value="" />
              <span class="help is-danger" v-show="errors.has('call_bell')">
                Field is required
              </span>
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6">
  						<label class="control-label col-md-6" for="height">Height:</label>
  						<div class="col-md-6">
  							<input type="text" class="form-control" name="height" v-model="completeNursingAssessmentData.height" v-validate="'required'"  placeholder="Height(in cms)" value="">
                <span class="help is-danger" v-show="errors.has('height')">
                	Field is required
                </span>
  						</div>
  						<br><br>
  						<label class="control-label col-md-6" for="weight">Weight:</label>
  						<div class="col-md-6">
  							<input type="text" class="form-control" name="weight" v-model="completeNursingAssessmentData.weight" v-validate="'required'" id="weight" placeholder="Weight(in KGs)" value="">
                <span class="help is-danger" v-show="errors.has('weight')">
                	Field is required
                </span>
  						</div>
  				</div>
  			</div>
  		  <hr>
  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Allergies:</label>
  					</div>
  					<div class="col-md-6">
  						<select class="form-control ls-select2" name="allergies" v-model="completeNursingAssessmentData.allergies" >
  							<option value="no" >NO</option>
  							<option value="yes" >YES</option>
  							<option value="other" >Other</option>
  						</select>
              <span class="help is-danger" v-show="errors.has('allergies')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>If other:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" name="allergies_other" v-model="completeNursingAssessmentData.allergies_other" id="allergies_other" class="form-control" value="">
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>History Informant:</label>
  					</div>
  					<div class="col-md-6">
  						<select class="form-control ls-select2" name="history_informant" v-model="completeNursingAssessmentData.history_informant" >
  							<option value="patient" >Patient</option>
  							<option value="other" >Other</option>
  						</select>
              <span class="help is-danger" v-show="errors.has('history_informant')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>If other:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" name="history_informant_other" v-model="completeNursingAssessmentData.history_informant_other" id ="history_informant_other" class="form-control">
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Patient Arrived:</label>
  					</div>
  					<div class="col-md-6">
  						<select class="form-control ls-select2" name="patient_arrived" v-model="completeNursingAssessmentData.patient_arrived"  >
  							<option value="ambulatory" >Ambulatory</option>
  							<option value="wheelchair" >Wheelchair</option>
  							<option value="stretcher" >Stretcher</option>
  							<option value="other" >Other</option>
  						</select>
              <span class="help is-danger" v-show="errors.has('patient_arrived')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>If other:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" name="patient_arrived_other" v-model="completeNursingAssessmentData.patient_arrived_other" id ="patient_arrived_other" class="form-control">
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Patient Arrived From:</label>
  					</div>
  					<div class="col-md-6">
  						<select class="form-control ls-select2" name="patient_arrived_from" v-model="completeNursingAssessmentData.patient_arrived_from" >
  							<option value="home" >Home</option>
  							<option value="opd" >OPD</option>
  							<option value="other_hospital" >Other Hospital</option>
  							<option value="other" >Other</option>
  						</select>
              <span class="help is-danger" v-show="errors.has('patient_arrived_from')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>If other:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" name="patient_arrived_from_other" v-model="completeNursingAssessmentData.patient_arrived_from_other" class="form-control"/>
  					</div>
  				</div>
  			</div>

  		  <hr />

  			<div class="row">
  					<h3>Vital Signs:</h3>
  			</div>

        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label>Temperature:</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="temperature" v-model="completeNursingAssessmentData.temperature" v-validate="'required'" value="" class="form-control">
              <span class="help is-danger" v-show="errors.has('temperature')">
                Field is required
              </span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              <label>Pain:</label>
            </div>
            <div class="col-md-6">
              <select class="form-control ls-select2" name="pain" v-model="completeNursingAssessmentData.pain"  >
  							<option value="opd" >OPD</option>
  							<option value="home" >Home</option>
  						</select>
              <span class="help is-danger" v-show="errors.has('pain')">
                Field is required
              </span>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label>Temperature type:</label>
            </div>
            <div class="col-md-6">
              <select class="form-control ls-select2" id="temperature_type" name="temperature_type" v-model="completeNursingAssessmentData.temperature_type" >
                <option value="oral" > Oral </option>
                <option value="rectal" > Rectal </option>
                <option value="auxillary" > Auxillary </option>
                <option value="tympanic" > Tympanic </option>
              </select>
            </div>
          </div>
        </div>

  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Pulse:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="pulse" v-model="completeNursingAssessmentData.pulse" v-validate="'required'" placeholder="(per minute)" value="">
              <span class="help is-danger" v-show="errors.has('pulse')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>RR : </label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="rr" v-model="completeNursingAssessmentData.rr" v-validate="'required'" value="" placeholder="(per minute)">
              <span class="help is-danger" v-show="errors.has('rr')">
                Field is required
              </span>
  					</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Blood Pressure:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="blood_pressure" v-model="completeNursingAssessmentData.blood_pressure" v-validate="'required'" value="" placeholder="(in mm Hg)">
              <span class="help is-danger" v-show="errors.has('blood_pressure')">
                Field is required
              </span>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>SpO<sub>2</sub> :</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="spo2" v-model="completeNursingAssessmentData.spo2" v-validate="'required'" value="">
              <span class="help is-danger" v-show="errors.has('spo2')">
                Field is required
              </span>
  					</div>
  				</div>
  			</div>
        <hr>


				<div class="row">
					<h3>Activities of Daily Living:</h3>
				</div>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>Usual Level</th>
							<th>Level on Admission</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Feeding</th>
							<td>
								<select class="form-control ls-select2" name="feeding_usual" v-model="completeNursingAssessmentData.feeding_usual" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control ls-select2" name="feeding_admission" v-model="completeNursingAssessmentData.feeding_admission" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td rowspan="5">
								Level 0 - Independent, requires no Supervision, Assistance or teaching <br><br><br>
								Level 1 - Requires supervision and / or teaching <br><br><br>
								Level 2 - Requires at least minimum assistance from another person <br><br><br>
								Level 3 - Is dependent and does not participate
							</td>
						</tr>
						<tr>
							<th>Bathing</th>
							<td>
								<select class="form-control ls-select2" name="bathing_usual" v-model="completeNursingAssessmentData.bathing_usual" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control ls-select2" name="bathing_admission" v-model="completeNursingAssessmentData.bathing_admission" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Toileting</th>
							<td>
								<select class="form-control ls-select2" name="toileting_usual" v-model="completeNursingAssessmentData.toileting_usual" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control ls-select2" name="toileting_admission" v-model="completeNursingAssessmentData.toileting_admission" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>General Mobility / Gait</th>
							<td>
								<select class="form-control ls-select2" name="mobility_usual" v-model="completeNursingAssessmentData.mobility_usual" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control ls-select2" name="mobility_admission" v-model="completeNursingAssessmentData.mobility_admission" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Dressing / Grooming</th>
							<td>
								<select class="form-control ls-select2" name="dressing_usual" v-model="completeNursingAssessmentData.dressing_usual"  >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control ls-select2" name="dressing_admission" v-model="completeNursingAssessmentData.dressing_admission" >
									<option value="0" >Level 0</option>
									<option value="1" >Level 1</option>
									<option value="2" >Level 2</option>
									<option value="3" >Level 3</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="row">
					<h3>Patient Safety:</h3>
				</div>

				<div class="row form-group">
          <table class="table table-bordered">
  					<thead>
  						<tr>
  							<th colspan="6" class="text-center">Fall Risk Assessment Scale</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
                <td><input type="checkbox" name="hallucinating" v-model="completeNursingAssessmentData.hallucinating" id="hallucinating" true-value="20" false-value=""></td>
  							<th>Confused-disoriented / Hallucinating</th>
                <td><input type="checkbox" name="post_op_condition" v-model="completeNursingAssessmentData.post_op_condition" id="post_op_condition"  true-value="10" false-value=""></td>
  							<th>Post-op Condition - Sedated</th>
                <td><input type="checkbox" name="narcotics" v-model="completeNursingAssessmentData.narcotics" id="narcotics"  true-value="10" false-value=""></td>
  							<th>Narcotics / Diuretics</th>
  						</tr>
  						<tr>
                <td><input type="checkbox" name="weakness" v-model="completeNursingAssessmentData.weakness" id="weakness"  true-value="20" false-value=""></td>
  							<th>Unstable Gait / Weakness</th>
                <td><input type="checkbox" name="drug_or_alcohol_withdrawal" v-model="completeNursingAssessmentData.drug_or_alcohol_withdrawal" id="drug_or_alcohol_withdrawal"  true-value="10" false-value=""></td>
  							<th>Drug or Alcohol Withdrawal</th>
                <td><input type="checkbox" name="bowel_bladder" v-model="completeNursingAssessmentData.bowel_bladder" id="bowel_bladder"  true-value="10" false-value=""></td>
  							<th>Bowel, bladder urgency, incontinence</th>
  						</tr>
  						<tr>
                <td><input type="checkbox" name="seizures" v-model="completeNursingAssessmentData.seizures" id="seizures"  true-value="15" false-value=""></td>
  							<th>History of Syncope or Seizures</th>
                <td><input type="checkbox" name="walker" v-model="completeNursingAssessmentData.walker" id="walker"  true-value="15" false-value=""></td>
  							<th>Use of Walker, Cane Crutches etc</th>
                <td><input type="checkbox" name="age_60" v-model="completeNursingAssessmentData.age_60" id="age_60"  true-value="5" false-value=""></td>
  							<th>Age 60 more</th>
  						</tr>
  						<tr>
                <td><input type="checkbox" name="recent_hx_falls" v-model="completeNursingAssessmentData.recent_hx_falls" id="recent_hx_falls"  true-value="15" false-value=""></td>
  							<th>Recent Hx of falls</th>
                <td><input type="checkbox" name="postural_hypo_tension" v-model="completeNursingAssessmentData.postural_hypo_tension" id="postural_hypo_tension"  true-value="10" false-value=""></td>
  							<th>Postural hypo tension</th>
                <td><input type="checkbox" name="uncooperative" v-model="completeNursingAssessmentData.uncooperative" id="uncooperative"  true-value="5" false-value=""></td>
  							<th>Uncooperative, impaired judgement</th>
  						</tr>
  						<tr>
                <td><input type="checkbox" name="age_12" v-model="completeNursingAssessmentData.age_12" id="age_12"  true-value="15" false-value=""></td>
  							<th>Age 12 or younger</th>
                <td><input type="checkbox" name="poor_eyesight" v-model="completeNursingAssessmentData.poor_eyesight" id="poor_eyesight"  true-value="10" false-value=""></td>
  							<th>Poor eyesight</th>
                <td><input type="checkbox" name="language_barrier" v-model="completeNursingAssessmentData.language_barrier" id="language_barrier"  true-value="5" false-value=""></td>
  							<th>Language barrier</th>
  						</tr>
  						<tr>
                <td><input type="checkbox" name="paralysis_stroke" v-model="completeNursingAssessmentData.paralysis_stroke" id="paralysis_stroke"  true-value="15" false-value=""></td>
  							<th>Paralysis, hemiplegia, Stroke</th>
                <td><input type="checkbox" name="new_medications" v-model="completeNursingAssessmentData.new_medications" id="new_medications"  true-value="15" false-value=""></td>
  							<th>New medications (i.e Sedative antihypertensive)</th>
                <td><input type="checkbox" name="poor_hearing" v-model="completeNursingAssessmentData.poor_hearing" id="poor_hearing"  true-value="5" false-value=""></td>
  							<th>Poor Hearing</th>
  						</tr>
  					</tbody>
  				</table>
        </div>

				<div class="row form-group">
					<div class="col-md-6">
						If the score > 25, fall prevention to be initiated.
					</div>
					<div class="col-md-6">
            <div class="col-md-6">
              <label>Total Score:</label>
            </div>
						<div class="col-md-6">
              <span>{{
                  Number(completeNursingAssessmentData.hallucinating) +
                  Number(completeNursingAssessmentData.post_op_condition) +
                  Number(completeNursingAssessmentData.narcotics) +
                  Number(completeNursingAssessmentData.weakness) +
                  Number(completeNursingAssessmentData.drug_or_alcohol_withdrawal) +
                  Number(completeNursingAssessmentData.bowel_bladder) +
                  Number(completeNursingAssessmentData.seizures) +
                  Number(completeNursingAssessmentData.walker) +
                  Number(completeNursingAssessmentData.age_60) +
                  Number(completeNursingAssessmentData.recent_hx_falls) +
                  Number(completeNursingAssessmentData.postural_hypo_tension) +
                  Number(completeNursingAssessmentData.uncooperative) +
                  Number(completeNursingAssessmentData.age_12) +
                  Number(completeNursingAssessmentData.poor_eyesight) +
                  Number(completeNursingAssessmentData.language_barrier) +
                  Number(completeNursingAssessmentData.paralysis_stroke) +
                  Number(completeNursingAssessmentData.new_medications) +
                  Number(completeNursingAssessmentData.poor_hearing)
                   }}
              </span>
            </div>
					</div>
				</div>
				<hr />
				<div class="form-group row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Relative Name:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="relative_name" v-model="completeNursingAssessmentData.relative_name" v-validate="'required'" value="" class="form-control"  />
              <span class="help is-danger" v-show="errors.has('relative_name')">
                Field is required
              </span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Relation:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="relation" v-model="completeNursingAssessmentData.relation" v-validate="'required'" value="" class="form-control" />
              <span class="help is-danger" v-show="errors.has('relation')">
                Field is required
              </span>
						</div>
					</div>
				</div>

        <div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label  for="type_of_diet">Type of Diet:</label>
            </div>

						<div class="col-md-6">
							<select class="form-control ls-select2" name="type_of_diet" v-model="completeNursingAssessmentData.type_of_diet" id="type_of_diet">
								<option value="veg">Veg</option>
								<option value="non_veg">Non-veg</option>
								<option value="jain">Jain</option>
							</select>
							<span class="help is-danger" v-show="errors.has('type_of_diet')">
  		        	Type of diet is required
  		        </span>
					  </div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label class="col control-label" for="date_of_screening">Date of Screening:</label>
            </div>
						<div class="col-md-6">
                <date-picker :date.sync="completeNursingAssessmentData.date_of_screening" :option="option"></date-picker>

							<span class="help is-danger" v-show="errors.has('date_of_screening')">
  		        	Date of screening is required
  		        </span>
						</div>
  				</div>
  			</div>

  			<div class="row form-group">
  				<table name="" class="table table-bordered">
  					<thead>
  						<tr>
  							<th>Sr.No.</th>
  							<th>Questions</th>
  							<th>Remarks</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<th>1</th>
  							<th>Has there been any unintentional weight loss in the last three months?</th>
  							<td>
  								<select class="form-control ls-select2" name="weight_loss" v-model="completeNursingAssessmentData.weight_loss" id="weight_loss">
  									<option value="3">>6 Kgs</option>
  									<option value="2">3-6 Kgs</option>
  									<option value="1">0-3 Kgs (Don't Know)</option>
  									<option value="0">No weight loss</option>
  								</select>
  								<span class="help is-danger" v-show="errors.has('weight_loss')">
  	  		        	Weight loss is required
  	  		        </span>
  							</td>
  						</tr>
  						<tr>
  							<th>2</th>
  							<th>Does the patient appear emaciated?</th>
  							<td>
  								<select class="form-control ls-select2" name="emaciated" v-model="completeNursingAssessmentData.emaciated" id="emaciated">
  									<option value="2">Yes</option>
  									<option value="1">No</option>
  								</select>
  								<span class="help is-danger" v-show="errors.has('emaciated')">
  	  		        	emaciated is required
  	  		        </span>
  							</td>
  						</tr>
  						<tr>
  							<th>3</th>
  							<th>Is the patient mentally well oriented?</th>
  							<td>
  								<select class="form-control ls-select2" name="mental_orientation" v-model="completeNursingAssessmentData.mental_orientation"  id="mental_orientation">
  									<option value="2">Yes</option>
  									<option value="1">No</option>
  								</select>
  								<span class="help is-danger" v-show="errors.has('mental_orientation')">
  	  		        	Mental orientation is required
  	  		        </span>
  							</td>
  						</tr>
  						<tr>
  							<th>4</th>
  							<th>Patient mode of feeding :</th>
  							<td>
  								<select class="form-control ls-select2" name="mode_of_feeding" v-model="completeNursingAssessmentData.mode_of_feeding"  id="mode_of_feeding">
  									<option value="3">Parental Nutritional / NBM</option>
  									<option value="2">External Tube Feeding</option>
  									<option value="1">Oral Feeding - Liquids</option>
  									<option value="0">Diet</option>
  								</select>
  								<span class="help is-danger" v-show="errors.has('mode_of_feeding')">
  	  		        	Mode of feeding is required
  	  		        </span>
  							</td>
  						</tr>
  						<tr>
  							<th>5</th>
  							<th>Foods to be avoided :</th>
  							<td>
  								<input type="text" class="form-control radio-inline" name="food_to_be_avoided" v-model="completeNursingAssessmentData.food_to_be_avoided" v-validate="'required'" placeholder="Sour / Spicy / Milk / Others">
  								<span class="help is-danger" v-show="errors.has('food_to_be_avoided')">
  	  		        	Food to be avoided is required
  	  		        </span>
  							</td>
  						</tr>
  						<tr>
  							<th colspan="2">Score</th>
  							<th></th>
  						</tr>
  					</tbody>
  				</table>
  			</div>
  			<div class="row form-group">
  				<div class="col">
  					<div class="row">
  						<div class="col">
  							<label class="control-label" for="nursing_care_plan">Nursing Care Plan:</label>
  						</div>
  						<div class="col">
  							<textarea class="form-control" name="nursing_care_plan" v-model="completeNursingAssessmentData.nursing_care_plan" v-validate="'required'" id="nursing_care_plan" rows="3"></textarea>
  							<span class="help is-danger" v-show="errors.has('nursing_care_plan')">
    		        	Nursing care plan is required
    		        </span>
  						</div>
  					</div>
  				</div>
  				<div class="col">
  					<div class="row">
  						<div class="col">
  							<label class="control-label" for="assessment_done_by">Assessment done by:</label>
  						</div>
  						<div class="col">
  							<input type="text" class="form-control" name="assessment_done_by" v-model="completeNursingAssessmentData.assessment_done_by" v-validate="'required'" id="assessment_done_by">
  							<span class="help is-danger" v-show="errors.has('assessment_done_by')">
    		        	Assessment done by is required
    		        </span>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="row form-group">
  			  <div class="col">
  			    <div class="row">
  			      <div class="col">
  			        <label class="control-label" for="date_nursing">Date:</label>
  			      </div>
  			      <div class="col">

                <date-picker :date.sync="completeNursingAssessmentData.date_nursing" :option="option"></date-picker>
  			        <input type="date" class="form-control ls-datepicker"  id = "date_nursing" name="date_nursing" v-model="completeNursingAssessmentData.date_nursing" v-validate="'required'" >   							<span class="help is-danger" v-show="errors.has('date_nursing')">
    		        	Date of nursing is required
    		        </span>
  			      </div>
  			    </div>
  			  </div>
  			  <div class="col">
  			    <div class="row">
  			      <div class="col">
  			        <label class="control-label" for="time_nursing">Time:</label>
  			      </div>
  			      <div class="col">

  			        <input type="text" class="form-control ls-timepicker" name="time_nursing" v-model="completeNursingAssessmentData.time_nursing"  id ="time_nursing" >

  							<span class="help is-danger" v-show="errors.has('time_nursing')">
    		        	Time of nursing is required
    		        </span>
  			      </div>
  			    </div>
  			  </div>
  			</div>

				<div class="text-center form-group">
					<button class="btn btn-success" type="button" @click="saveCompleteNursingAssessment">Submit</button>
				</div>
  		</form>
        <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
  	</div>
  </div>
</template>
<script >
	import User from '../../../api/users.js';
  import addressograph from './addressograph.vue';
  import SelectPatientModal from '../../../components/SelectPatientModal.vue';
  import myDatepicker from 'vue-datepicker';
  
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type': 'completeNursingAssessment',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'option': {
                    type: 'day',
                    week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
                    month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    format: 'DD-MM-YYYY',
                    placeholder: 'Select Date',
                    inputStyle: {
                        'display': 'inline-block',
                        'padding': '6px',
                        'line-height': '22px',
                        'font-size': '16px',
                        'border': '2px solid #fff',
                        'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
                        'border-radius': '2px',
                        'color': '#5F5F5F'
                    },
                    
                  },
                'completeNursingAssessmentData' : {
                  'unit': '',
                  'date': '',
                  'time': '',
                  'call_bell': '',
                  'height': '',
                  'weight': '',
                  'allergies': '',
                  'allergies_other': '',
                  'history_informant': '',
                  'history_informant_other': '',
                  'patient_arrived': '',
                  'patient_arrived_other': '',
                  'patient_arrived_from': '',
                  'patient_arrived_from_other': '',
                  'temperature': '',
                  'temperature_type': '',
                  'pain': '',
                  'pulse': '',
                  'rr': '',
                  'blood_pressure': '',
                  'spo2': '',
                  'feeding_usual': '',
                  'feeding_admission': '',
                  'bathing_usual': '',
                  'bathing_admission': '',
                  'toileting_usual': '',
                  'toileting_admission': '',
                  'mobility_usual': '',
                  'mobility_admission': '',
                  'dressing_usual': '',
                  'dressing_admission': '',
                  'hallucinating': '',
                  'post_op_condition': '',
                  'narcotics': '',
                  'weakness': '',
                  'drug_or_alcohol_withdrawal': '',
                  'bowel_bladder': '',
                  'seizures': '',
                  'walker': '',
                  'age_60': '',
                  'recent_hx_falls': '',
                  'postural_hypo_tension': '',
                  'uncooperative': '',
                  'age_12': '',
                  'poor_eyesight': '',
                  'language_barrier': '',
                  'paralysis_stroke': '',
                  'new_medications': '',
                  'poor_hearing': '',
                  'relative_name': '',
                  'relation': '',
                  'type_of_diet':'',
									'date_of_screening': {
                    'time':'',
                  },
									'weight_loss':'',
									'emaciated':'',
									'mental_orientation':'',
									'mode_of_feeding':'',
									'food_to_be_avoided':'',
									'nursing_care_plan':'',
									'assessment_done_by':'',
									// 'date_nursing':'',
                  'nurDate': {
                    'time':'',
                  },
                  'date_nursing': {
                    'time':'',
                  },

									'time_nursing':'',
                }
            }
        },

        components: {
           addressograph,
           SelectPatientModal,

           'date-picker': myDatepicker,

       },
       mounted() {
       
                var vm =this;
                 $('.ls-select2').select2({
                    placeholder: "Select",
                 });

                  // if(this.ipd_id == 0){
                     $('#delete_modal').modal('show');

                  // }

                 $('.ls-datepicker').datepicker({
				            format: 'dd/mm/yyyy',
				            'autoclose': true
					       })
                 if(this.$store.state.Patient.ipdId == '') {
                      $('#delete_modal').modal('show');
                }


              // var datepicker = $.fn.datepicker.noConflict(); // return $.fn.datepicker to previously assigned value
              // $.fn.bootstrapDP = datepicker;  

              $('.ls-timepicker').timepicker({
                format: 'hh-mm',
                'autoclose': true
              })
              // $('.ls-datepicker').datepicker().on('changeDate',function(){
              //   if(this.id ==  'date'){
              //       vm.completeNursingAssessmentData.date = this.value;
              //   }
              //   if(this.id ==  'date_nursing'){
              //       vm.completeNursingAssessmentData.date_nursing = this.value;
              //   }
              //   if(this.id ==  'date_of_screening'){
              //       vm.completeNursingAssessmentData.date_of_screening = this.value;
              //   }
              // })


              $('.ls-timepicker').timepicker().on('change',function(){
                console.log('test')
                if(this.id == 'nur_time'){
                    vm.completeNursingAssessmentData.nur_time = this.value;
                }
                if(this.id == 'time_nursing'){
                    vm.completeNursingAssessmentData.time_nursing = this.value;

                }
              });

                

				},
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveCompleteNursingAssessment() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var completeNursingAssessmentDataAll = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.completeNursingAssessmentData};
				    	User.saveCompleteNursingAssessment(completeNursingAssessmentDataAll).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Complete Nursing Assessment has been saved', 'Complete Nursing Assessment', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');

		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
		                )
			    	}
			    },
                (error) => {
                }
                )

			}
		  },

    }
   
</script>
