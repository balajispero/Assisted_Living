													<div class="alt2" dir="ltr" style="
														margin: 0px;
														padding: 0px;
														border: 0px solid #919b9c;
														width: 100%;
														height: 300px;
														text-align: left;
														overflow: auto">
                                                        <table class="table table-hover table-striped" id="myTable" width="100%" cellpadding="2" cellspacing="2">
                                                      <thead>
                                                      	<tr style="border-bottom:1px #999 solid; border-collapse:collapse">
                                                        	<th>Admit Here</th>
                                                            <th>Bed No.</th>
                                                            <th>Member No.</th>
                                                            <th>IOP No.</th>
                                                            <th>Member Name</th>
                                                            <th>Date Admit</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                      	<?php 
														foreach($getBeds as $getBeds){
														if($getBeds->patient_no == ""){ $patientNo = "-"; }else{ $patientNo = $getBeds->patient_no;}
														if($getBeds->IO_ID == ""){ $IO_ID = "-";}else{ $IO_ID = $getBeds->IO_ID;}
														if($getBeds->patient == ""){ $patient = "-";}else{ $patient = $getBeds->patient;}
														if(date("M d, Y",strtotime($getBeds->date_visit)) == "Jan 01, 1970"){ $date_visit = "-";}else{ $date_visit = date("M d, Y",strtotime($getBeds->date_visit))." ".$getBeds->time_visit;}
														?>
                                                      	<tr>
                                                        	<td>
                                                            <?php if($getBeds->patient_no == ""){?>
                                                            <a href="#" onClick="getBedID('<?php echo $getBeds->room_bed_id?>','<?php echo $getBeds->bed_name?>')">Admit here</a>
                                                            <?php }else{?>
                                                            Occupied
                                                            <?php }?>
                                                            </td>
                                                            <td><?php echo $getBeds->bed_name?></td>
                                                            <td><?php echo $patientNo?></td>
                                                            <td><?php echo $IO_ID?></td>
                                                            <td><?php echo $patient?></td>
                                                            <td><?php echo $date_visit;?></td>
                                                        </tr>
                                                        <?php }?>
                                                      </tbody>
                                                      </table>  
                                                      </div>