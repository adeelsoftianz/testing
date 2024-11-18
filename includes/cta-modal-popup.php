    <div class="modal fade" id="modalContactForm" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Please fill in the information below</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><b>X</b></button>
                </div>
                <div class="modal-body">
                    <div class="appointment-area-wrapp">
                        <form action="#" method="POST" class="appointment-form3 get_a_quote_form input-smoke" id="get_a_quote_form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Full Name*</label>
                                    <input type="text" class="form-control" name="name" id="full_name" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Address*</label>
                                    <input type="email" class="form-control" name="email" id="email_address" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Contact Number*</label>
                                    <input type="tel" class="form-control" name="number" id="contact_number" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Company Website</label>
                                    <input type="text" class="form-control" name="website" id="company_website" autocomplete="off">
                                </div>
                                <input type="hidden" name="form_type" value="get_a_quote_form">
                                <input type="hidden" name="form_submit_url" value="<?php echo $current_url; ?>">
                                <div class="form-group col-12">
                                    <label for="name">About Company / Organization</label>
                                    <input type="text" class="form-control" name="about_company" id="about_company" autocomplete="off">
                                </div>
                                <div class="form-group col-12">
                                    <label for="name">Describe Your Project*</label>
                                    <textarea name="message" id="project_details" cols="30" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button type="submit" class="th-btn btn-fw">Submit Now</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>-->
            </div>
        </div>
           
    </div>