Enrolment in Moodle using Bitcoin payment gateway for paid courses

This plugin helps admins and webmasters use Bitcoin as the payment gateway. Bitcoin is one of the populer payment gateways and offers considerable number of features unsupported by other payment gateways like Paypal. This plugin has all the settings for development as well as for production usage. Its easy to install, set up and effective.

Creating Merchant Account :

1) Create account at https://coinbase.com, for test mode create account at https://sandbox.coinbase.com.
2)  Complete your merchant profile details from https://coinbase.com/merchant_profiles, for test mode https://sandbox.coinbase.com/merchant_profiles.
3) Now set up API and user authentication credentials at https://coinbase.com/settings/api, for test mode https://sandbox.coinbase.com/settings/api.
4) Create OAuth2 application for user account authentication, note that if you enter a wrong redirect URI the system will not work. Set up your  redirect URI with http://<your domain name>/enrol/bitcoin/oauth.php
5) Create a new API with all account & permission.

Now you are done with merchant account set up.

Installation Guidence : 

Login to your moodle site as an “admin user” and follow the steps.

1) Upload the zip package from Site administration > Plugins > Install plugins. Choose Plugin type 'Enrolment method (enrol)'. Upload the ZIP package, check the acknowledgement and install.

2) Go to Enrolments > Manage enrol plugins > Enable 'Bitcoin' from list

3) Click 'Settings' which will lead to the settings page of the plugin

4) Provide merchant credentials for Bitcoin. Note that, you will get all the details from your merchant account. Now select the checkbox as per requirement. Save the settings.

5) Select any course from course listing page.

6) Go to Course administration > Users > Enrolment methods > Add method 'Bitcoin' from the dropdown. Set 'Custom instance name', 'Enrol cost' etc and add the method.

This completes all the steps from the administrator end. Now registered users can login to the Moodle site and view the course after a successful payment.
