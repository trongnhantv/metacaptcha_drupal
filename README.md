metacaptcha_drupal
==================
STEP 1: EMBEDING METACAPTCHA INTO THE FORM
1. Install newer version of JQuery (there is a module for that)
2. Add the file Validate.js which content the form submission handler
3. Add a hidden field named metacaptchaField into the form and set it ID to metacaptchaField
4. Porting initialize_captcha in metacaptcha_lib.php to javascript
  a. load the script from this URL<script src="//rabbit.cs.pdx.edu/headwinds_new/application/js/metacaptcha.js"
	b. Call initialize_metacaptcha('$processPath','$formID') in Javasript( we need to pass these arguments from PHP to Javascript)
STEP 2 : VALIDATION
...
