<div class="">
    <div class="page-title">
        <div class="title_left"></div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Event List</h2>
					<a href="<?php echo base_url();?>admin/site/add_event" class="btn btn-info pull-right">Add Event</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php if ($this->session->flashdata('error_message')) { ?>
                        <div class="alert alert-warning">
                            <?php echo $this->session->flashdata('error_message'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success_message')) { ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success_message'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>Sl.No.</th>
                                    <th>Event Title in <?php echo ($selected_lang==1)?"English":"Vietnamese"; ?></th>
									<th>Event Date</th>
									<th>Event Time</th>
									<th>Event Place in <?php echo ($selected_lang==1)?"English":"Vietnamese"; ?></th>
                                    <th>Action</th>              
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($event_list)) { ?>
                                    <?php foreach ($event_list as $key => $con) { ?>
                                        <tr>
                                            <td><?php echo ($key + 1) . '.' ?></td>  
                                            <td><?php echo isset($con->title) ? $con->title : "---"; ?></td>
											<td><?php echo isset($con->event_date) ? $con->event_date : "---"; ?></td>
											<td><?php echo isset($con->event_time) ? $con->event_time : "---"; ?></td>
											<td><?php echo isset($con->event_place) ? $con->event_place : "---"; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/site/edit_event') . '/' . encode_url($con->id); ?>" class="btn btn-info btn-xs">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="4">No Data Found</td></tr>';
                                }
                                ?>                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /page content -->


</div>
</div>

</body>
