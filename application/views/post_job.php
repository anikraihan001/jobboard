

<?php include_once('header.php'); ?>
  
 
      <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Post A Job</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  
         <div class="job_details_area">
        <div class="container">
          <div class="apply_job_form white-bg">
                        <h4>Apply for the job</h4>
                        <form action="<?php echo site_url('post_job/submit_form');?>" method="post">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'category' ,'name'=>'category','placeholder'=>'Category','size'=>50));?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'post','name'=>'post','placeholder'=>'Post','size'=>50));?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'type' ,'name'=>'type','placeholder'=>'Type','size'=>20));?>
                                    </div>
                                </div>
                                 <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'total_post' ,'name'=>'total_post','placeholder'=>'Total Post','size'=>11));?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'job_detail' ,'name'=>'job_detail','placeholder'=>'Job details','size'=>255));?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'salary' ,'name'=>'salary','placeholder'=>'Salary','size'=>10));?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'deadline' ,'name'=>'deadline','placeholder'=>'Deadline','size'=>11));?>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'company_name' ,'name'=>'company_name','placeholder'=>'Company','size'=>50));?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'company_addr','name'=>'company_addr','placeholder'=>'Company addess','size'=>255));?>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'company_email' ,'name'=>'company_email','placeholder'=>'Company email','size'=>50));?>
                                    </div>
                                </div>
                                 <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'company_url' ,'name'=>'company_url','placeholder'=>'Company url','size'=>50));?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input_field">
                                        <?php echo form_input(array('id'=>'company_phone' ,'name'=>'company_phone','placeholder'=>'Company phone','size'=>50));?>
                                    </div>
                                </div> -->



                                <div class="col-md-12">
                                   <div class="input-group">
                                       <div class="input-group-prepend">
                                         <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                         </button>
                                       </div>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                         <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                       </div>
                                     </div>
                               </div> 
                                  


                                <div class="col-md-12">
                                    <div class="input_field">
                                        <textarea name="#" id="" cols="30" rows="10" placeholder="Coverletter"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn2 w-100" type="submit">Save Job</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>




          <!-- <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
          
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
          
              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>
          
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div> -->
        </div>
      </div>
    </div>

   
<?php include_once('footer.php'); ?>

    
  </body>
</html>