<section class="content">

    <div class="row">

        <section class="col-lg-12 connectedSortable">

            <!--Start of Patient Visited-->
            <div class="box box-primary" id="loading-example">
                <div class="box-header">
                    <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                    </div>
                    <i class="fa fa-male"></i>
                    <h3 class="box-title">Member's Details</h3>
                </div>
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Member No.</th>
                                    <th>Member Name</th>
                                    <th>Entry Date</th>
                                    <th>Consultant Doctor</th>
                                    <th>Room Type</th>
                                    <th>Floor</th>
                                    <th>Allocated Room</th>
                                    <th>Allocated Bed</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($getTodayAppointment)){ foreach($getTodayAppointment as $getTodayAppointment){?>
                                    <tr>
                                     <td><?php if (($getTodayAppointment->patient_no) == null){
                                         echo "NA";}else{?>
                                             <a class="view-data" title="View"  href="<?php echo base_url(); ?>app/dashboard/view_details/<?php echo $getTodayAppointment->patient_no; ?>/<?php echo $getTodayAppointment->IO_ID; ?>"><?php echo $getTodayAppointment->patient_no; ?></a>
                                             <?php
                                         }?></td>
                                         <td><?php if (($getTodayAppointment->middlename ) == null) {
                                             echo "NA";}else
                                             { echo $getTodayAppointment->middlename ; } ?></td>
                                             <td><?php if (($getTodayAppointment->date_entry) == null){
                                                 echo "NA";}else{
                                                     echo $getTodayAppointment->date_entry; }?></td>
                                                     <td><?php if (($getTodayAppointment->firstname && $getTodayAppointment->lastname) == null) {
                                                         echo "NA";}else
                                                         { echo $getTodayAppointment->cValue. " " .$getTodayAppointment->firstname . " " . $getTodayAppointment->lastname; } ?></td>
                                                         <td><?php if (($getTodayAppointment->category_name) == null){
                                                             echo "NA";}else{
                                                                 echo $getTodayAppointment->category_name;}?></td>
                                                                 <td><?php if (($getTodayAppointment->floor) == null){
                                                                     echo "NA";}else{
                                                                         echo $getTodayAppointment->floor;}?></td>
                                                                         <td><?php if (($getTodayAppointment->room_name) == null){
                                                                             echo "NA";}else{
                                                                                 echo $getTodayAppointment->room_name;}?></td>
                                                                                 <td><?php if(($getTodayAppointment->bed_name) == null){
                                                                                     echo "NA";}else{
                                                                                         echo $getTodayAppointment->bed_name;}?></td>
                                                                                         <td><?php echo $getTodayAppointment->nStatus ?></td>
                                                                                     </tr>
                                                                                 <?php }}?>
                                                                             </tbody>
                                                                         </table>
                                                                     </div>
                                                                 </div>
                                                                 <div class="box-footer">
                                                                 </div>
                                                             </div>
                                                             <!--End of Patient Visited-->
                                                         </section>
                                                     </div>
                                                 </section>

                                                 <!-- Main content -->

                                                 <div class="row">
                                                  <section class="col-lg-6 connectedSortable">

                                                   <!--Start of New Member-->
                                                   <div class="box box-primary" id="loading-example">
                                                       <div class="box-header">
                                                           <div class="pull-right box-tools">
                                                            <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                                        </div>
                                                        <i class="fa fa-male"></i>
                                                        <h3 class="box-title">New Member</h3>
                                                    </div>
                                                    <div class="box-body no-padding">
                                                       <div class="table-responsive">
                                                           <table class="table table-hover">
                                                            <thead>
                                                               <tr>
                                                                   <th>Member No.</th>
                                                                   <th>Member Name</th>
                                                                   <th>Date</th>
                                                                   <th>Age</th>
                                                               </tr>
                                                           </thead>
                                                           <tbody>
                                                               <?php foreach($latest_patient as $latest_patient){?>
                                                                <tr>
                                                                   <td><?php echo $latest_patient->patient_no?></td>
                                                                   <td><?php echo $latest_patient->patient?></td>
                                                                   <td><?php echo date("M d, Y", strtotime($latest_patient->date_entry2));?></td>
                                                                   <td><?php echo $latest_patient->age?></td>
                                                               </tr>
                                                           <?php }?>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                           <div class="box-footer">
                                           </div>
                                       </div>
                                       <!--End of New Member-->

                                   </section>

                                   <section class="col-lg-6 connectedSortable">

                                       <!--Start of Patient Visited-->
                                       <div class="box box-primary" id="loading-example">
                                           <div class="box-header">
                                               <div class="pull-right box-tools">
                                                <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                            </div>
                                            <i class="fa fa-male"></i>
                                            <h3 class="box-title">Rooms Status</h3>
                                        </div>
                                        <div class="box-body no-padding">
                                           <div class="table-responsive">
                                               <table class="table table-hover">
                                                <thead>
                                                   <tr>
                                                       <th>Bed No.</th>
                                                       <th>Room Type</th>
                                                       <th>Floor</th>
                                                       <th>Status</th>
                                                       <th>Rate</th>
                                                   </tr>
                                               </thead>
                                               <tbody>

                                                   <?php if (isset($latest_visited_patient)) { foreach($latest_visited_patient as $latest_visited_patient){?>
                                                    <tr>
                                                       <td><?php echo $latest_visited_patient->bed_name?></td>
                                                       <td><?php echo $latest_visited_patient->category_name?></td>
                                                       <td><?php echo $latest_visited_patient->floor?></td>
                                                       <td><?php echo $latest_visited_patient->nStatus?></td>
                                                       <td><?php echo $latest_visited_patient->room_rates?></td>
                                                   </tr>
                                               <?php }}?>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                               <div class="box-footer">
                               </div>
                           </div>
                           <!--End of Patient Visited-->

                       </section>
                   </div>






                   <!-- Main content -->
                   <?php if($hasAccesstoDoctorAvail){?>   
                       <div class="row">
                        <section class="col-lg-6 connectedSortable">

                            <!--Start of New Member-->
                            <div class="box box-primary" id="loading-example">
                                <div class="box-header">
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                    </div>
                                    <i class="fa fa-user-md"></i>

                                    <h3 class="box-title">Doctor's IN</h3>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                        <div id="doctorIN"></div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                            <!--End of New Member-->

                        </section>

                        <section class="col-lg-6 connectedSortable">

                            <!--Start of Patient Visited-->
                            <div class="box box-primary" id="loading-example">
                                <div class="box-header">
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                    </div>
                                    <i class="fa fa-user-md"></i>
                                    <h3 class="box-title">Doctor's OUT</h3>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                        <div id="doctorOUT"></div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                            <!--End of Patient Visited-->

                        </section>
                    </div>
                <?php }?>