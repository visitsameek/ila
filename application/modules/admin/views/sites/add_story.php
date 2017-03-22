<script src="<?php echo base_url(); ?>assets/js/nicEdit.js" type="text/javascript"></script>
<div class="">
    <div class="page-title">
        <div class="title_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Story</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
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

                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page_name">Story <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="story" name="story" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Title">Story Title in <?php echo ($selected_lang==1)?"English":"Vietnamese"; ?><span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>  
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city_id">User Type <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="story_type" name="story_type" class="form-control col-md-7 col-xs-12">
                                    <option value="">Select Type</option>
                                    <option value="1">Parent</option>
									<option value="2">Student</option>
                                </select>                               
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city_id">Course <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="course_id" name="course_id" class="form-control col-md-7 col-xs-12">
                                    <option value="0">General</option>
                                    <?php 
                                    if(!empty($course_list)){
                                        foreach ($course_list as $course){ ?>
                                            <option value="<?php echo $course->id; ?>"><?php echo $course->course_title; ?></option>
                                       <?php  }
                                    }
                                    ?>
                                </select>                               
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Content">Short Description in <?php echo ($selected_lang==1)?"English":"Vietnamese"; ?> <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="short_desc" id="short_desc" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Content">Long Description in <?php echo ($selected_lang==1)?"English":"Vietnamese"; ?>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea rows="10" name="long_desc" id="long_desc" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Content">Video Link
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="video_link" id="video_link" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="media_id">Image </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="pv" id="preview">
                                <?php load_medias("", $input_media_id = '#input-media', true); ?>
                            </div>
                                <input id="input-media" type="hidden" value="" name="media_id" class="form-control" />
								<!-- Large modal -->
								<button type="button" class="btn btn-primary media-button" data-input-field="#input-media"  data-preview="#preview" >Media</button>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" class="btn btn-primary" onclick="window.history.back()">Cancel</button>
                                <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
</div>
</div>
<script>
    $(document).ready(function(){

		bkLib.onDomLoaded(function() {
			new nicEditor({uploadURI : '<?php echo base_url(); ?>nicupload/do_upload', fullPanel : true, iconsPath:'<?php echo base_url(); ?>assets/js/nicEditorIcons.gif'}).panelInstance('long_desc');
			//nicEditors.allTextAreas({uploadURI : '<?php echo base_url(); ?>nicupload/do_upload', fullPanel : true, iconsPath:'<?php echo base_url(); ?>assets/js/nicEditorIcons.gif'});
		});
        
        $('.form-control').focus(function(){
            $('.validation').remove('.validation');
        });              
        $('#submit').click(function(e){        
           if($('#story').val()==""){         
               $("#story").parent().append("<div class='validation'>Please enter story</div>");
                return false;
           }else if($('#title').val()==""){         
               $("#title").parent().append("<div class='validation'>Please enter story title </div>");
                return false;
           }else if($('#story_type').val()==""){         
               $("#story_type").parent().append("<div class='validation'>Please select user type </div>");
                return false;
           }else if($('#short_desc').val()==""){         
               $("#short_desc").parent().append("<div class='validation'>Please enter short description </div>");
                return false;
           }else{
               return true;                 
           }
        });
    });
</script>
