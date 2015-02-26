
<div class="row">
    <div class="form-group col-sms-6 col-sm-6">
        <?php print render($form['first_name']); ?>
    </div>
    <div class="form-group col-sms-6 col-sm-6">
        <?php print render($form['last_name']); ?>
    </div>
    <div class="form-group col-sms-6 col-sm-6">
        <?php print render($form['email_address']); ?>
    </div>
    <div class="form-group col-sms-6 col-sm-6">
        <?php print render($form['subject']); ?>
    </div>
</div>
<div class="form-group">
    <?php print render($form['message']); ?>
</div>
<div class="form-group">
    <?php print render($form['captcha']); ?>
</div>
<div class="form-group">
    <?php print render($form['submit']); ?>
</div>
<!-- Render any remaining elements, such as hidden inputs. -->
<?php print drupal_render_children($form); ?>

<script>
    jQuery("input[type=text]").attr('class', 'input-text full-width');
    jQuery("#edit-submit").attr('class', 'btn btn-md');
    
    jQuery('#contact-form').submit(function(){
        return validateForm();   
    });

function validateForm(){

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var error_msg = "";

    var fnames = jQuery('#edit-first-name').val();
    var lnames = jQuery('#edit-last-name').val();
    var email = jQuery('#edit-email-address').val();
    var subject = jQuery('#edit-subject').val();
    var message = jQuery('#edit-message').val();

    if (fnames == null || fnames == "") {
        error_msg += 'Please input first name';
    }
    if (email == null || email == "") {
        error_msg += '\nPlease input email';
    }
    if(!emailReg.test(email)) {
        error_msg += '\nPlease input valid email address';
    }
    if (subject == null || subject == "") {
        error_msg += '\nPlease input subject';
    }
    if (message == null || message == "") {
        error_msg += '\nPlease input message';
    }
    
    if (error_msg == null || error_msg == "") return true;
    else {
        alert(error_msg);
        return false;
    }  
}   

</script>
