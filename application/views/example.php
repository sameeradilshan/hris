<table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NIC No</th>
                                        <th>Employee Name</th>
                                        <th>Type</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody >

								<?php 

									foreach($allUserData as $ud){
										echo '
											<tr>
												<td>'.$ud->fullName.'</td>
												<td>'.$ud->address1.'</td>
												<td>'.$ud->empEmail.'</td>
												<td>'.$ud->gender.'</td>
                                       
                                    		</tr>
										
										';
									}
								
								?>
                                    
                                   
                                </tbody>
                                
                            </table>




							<br><br>

							Name :- <?php echo $userData->fullName;?> <br>
							address1 :- <?php echo $userData->address1;?> <br>
							Email :- <?php echo $userData->empEmail;?> <br>
