metacaptcha_drupal
==================

STEP 1: EMBEDING METACAPTCHA INTO THE FORM

1. Install newer version of JQuery (there is a module for that)
2. Add the file Validate.js which contents the form submission handler
3. Add a hidden field named metacaptchaField into the form and set its ID to metacaptchaField
4. Porting the PHP function "initialize_captcha" in metacaptcha_lib.php to Javascript

  	a. load the script from this URL "//rabbit.cs.pdx.edu/headwinds_new/application/js/metacaptcha_drupal.js
	
	b. Call initialize_metacaptcha('$processPath','$formID') in Javasript( we need to pass these arguments from PHP to Javascript)
	 this function should be placed inside jQuery(document).ready() so that it will be called only after all HTML elements has been loaded( To be more precise, the DOM hiearachy has been constructed).

STEP 2 : VALIDATION
...

TIPS:
	Install the "devel" module for better debugging.
