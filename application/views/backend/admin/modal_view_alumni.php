<?php  

    $this->db->select("*");
    $this->db->from('alumni');
    $this->db->join('courses','alumni.alumni_degree = courses.course_ID');
    $this->db->where('alumni_student_ID',$param1);

    $query = $this->db->get()->result_array();
    foreach ($query as $row):
?>
	          <div class="content bg-light" >
	            <div class="container-fluid">
	              <div class="row">
	                <div class="col-md-12">
	                  <div class="profile-img my-2">
	                  	<?php 
	                  		if($row['alumni_profile_picture'] == 'empty'){
	                  			echo "<img src='".base_url()."/assets/img/profile_picture/blank.png' alt=/>";
	                  		}else{
	                  			echo "<img src='".base_url()."/assets/img/profile_picture/".$row['alumni_profile_picture']."' alt=/>";
	                  		} 
	                  	?>
	                    
	                  </div>
	                  <div class="text-center">
	                    <h3>
	                      <?php echo $row['alumni_fname']." ".$row['alumni_mname']." ".$row['alumni_lname']?> <a href="#" class="text-danger"><i class="material-icons">edit</i></a>
	                    </h3>
	                    <h4>
	                      <?php echo $row['course_description'] ?> Major in Network Administration
	                    </h4>
	                  </div>
	                  <div class="card">
	                      <div class="card-header card-header-danger">
	                        <h4 class="card-title"><i class="fa fa-info-circle"></i> About</h4>
	                      </div>
	                      <div class="card-body">
	                        <div class="row">
	                          <div class="col-md-12">
	                              <div>
	                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	                                              <div class="row">
	                                                  	<div class="col-md-4">
	                                                      <label>Student No.</label>
	                                                  	</div>
	                                                  	<div class="col-md-8">
	                                                    	<p><?php echo $row['alumni_student_ID'] ?></p>
	                                                  	</div>
	                                              </div>
	                                              <div class="row">
	                                                  	<div class="col-md-4">
	                                                      <label>Gender</label>
	                                                  	</div>
	                                                  	<div class="col-md-8">
	                                                    	<p><?php echo $row['alumni_gender'] ?></p>
	                                                  	</div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Mobile No.</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <p><?php echo $row['alumni_cno'] ?></p>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Landline No.</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <p><?php echo $row['alumni_lno'] ?></p>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                              		<div class="col-md-4">
	                                              			<label>Address</label>
	                                              		</div>
	                                              		<div class="col-md-8">
	                                              			<p><?php echo $row['alumni_address'] ?></p>
	                                              		</div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Email</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <p><?php echo $row['alumni_email'] ?></p>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Year Graduated</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <p><?php echo $row['alumni_grad_year'] ?></p>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Facebook</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <a href="#" class="text-danger">www.facebook.com/<?php echo $row['alumni_facebook'] ?></a>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>LinkedIn</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <a href="#" class="text-danger">www.linkedin.com/<?php echo $row['alumni_linkedin'] ?></a>
	                                                  </div>
	                                              </div>
	                                              <div class="row">
	                                                  <div class="col-md-4">
	                                                      <label>Website</label>
	                                                  </div>
	                                                  <div class="col-md-8">
	                                                      <a href="#" class="text-danger">www.<?php echo $row['alumni_website']?>.com</a>
	                                                  </div>
	                                              </div>
	                                  </div>
	                              </div>
	                          </div>
	                        </div>
	                      </div>
	                  </div>
	                  <div class="card"><!-- CURRENTLY WORKS AT -->
	                      <div class="card-header card-header-danger">
	                        <h4 class="card-title"><i class="fa fa-briefcase"></i>Work Experience</h4>
	                      </div>
	                      <div class="card-body">
	                        <div class="table-responsive">
	                          <table class="table text-center">
	                            <thead class="text-danger">
	                              <th>Position</th>
	                              <th>Company</th>
	                              <th>Company Address</th>
	                              <th>Salary Range</th>
	                              <th>Date</th>
	                            </thead>
	                            <tbody>
	                              <?php  
	                              	$this->db->select("*");
								    $this->db->from('work');
								    $this->db->join('alumni','alumni.alumni_student_ID = work.work_alumni_student_ID');
								    $this->db->join('salary','work.work_alumni_salary_range = salary.salary_ID');
								    $this->db->where('alumni_student_ID',$param1);
								    $this->db->order_by('work_alumni_status', 'ASC');

								    $query2 = $this->db->get()->result_array();
   									foreach ($query2 as $row2):
	                              ?>
	                              <tr>
	                              	<td><?php echo $row2['work_alumni_position'] ?></td>
	                                <td><?php echo $row2['work_company_name'] ?></td>
	                                <td><?php echo $row2['work_company_address'] ?></td>
	                                <td><?php echo $row2['salary_range'] ?></td>
	                                <td>
	                                	<?php 
	                                		echo $row2['work_alumni_start'].' to ';
	                                		if($row2['work_alumni_status'] == 'Employed'){
	                                			echo '<b>Present</b>';
	                                		}else if($row2['work_alumni_end'] != NULL){
	                                			echo $row2['work_alumni_end'];
	                                		}?>	                                			
	                                </td>
	                              </tr>
	                              <?php  
	                              	endforeach;
	                              ?>
	                            </tbody>
	                          </table>
	                        </div>
	                      </div>
	                  </div><!-- END -->
	                </div>

	              </div>
	               
	            </div>
	          </div>
<?php  
    endforeach;
?>