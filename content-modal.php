<div style="font-size: 18px; color: #8c989e; text-align: center;width:100%;margin-bottom: 20px;"><?php the_field('modal_headline') ?></div>

<form action='//chrisluck.activehosted.com/proc.php' method='post' id='_form_<?php the_field('active_cfm') ?>' accept-charset='utf-8' enctype='multipart/form-data'>
  <input type='hidden' name='f' value='<?php the_field('active_cfm') ?>'>
  <input type='hidden' name='s' value=''>
  <input type='hidden' name='c' value='0'>
  <input type='hidden' name='m' value='0'>
  <input type='hidden' name='act' value='sub'>
  <input type='hidden' name='nlbox[]' value='<?php the_field('active_id') ?>'>
 <input id="inf_field_FirstName" class="infusion-field-input-container" name="fullname" type="text" placeholder="First Name" />
<input id="inf_field_Email" class="infusion-field-input-container" name="email" type="text" placeholder="E-Mail Address" />
<input type="submit" value="<?php the_field('modal_button_text') ?>" style="width:100%;font-size:25px;font-weight: normal;" />
</form>
<div style="font-size: 15px; color: #8c989e;text-align:center;width:100%;margin-top:30px"><img style="padding-right: 8px;
vertical-align: top;" src="<?php echo get_stylesheet_directory_uri() . '/images/modal-lock.png' ?>" alt="">I respect your privacy and have ZERO TOLERANCE for spam.</div>