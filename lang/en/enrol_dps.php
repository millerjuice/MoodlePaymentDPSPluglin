<?php

$string['pluginname'] = 'DPS Payment Gateway';
$string['pluginname_desc'] = 'This plugin lets you configure courses to be paid for using the DPS credit card payment gateway.';

$string['key'] = 'DPS Key';
$string['key_desc'] = 'This is the DPS private key that was issued with the user id.';
$string['userid'] = 'DPS User ID';
$string['userid_desc'] = 'The DPS User ID to use for credit card authorisation.';
$string['unavailabletoguest'] = 'This course requires payment and is unavailable to the guest user.';
$string['status'] = 'Allow DPS enrolments';
$string['status_desc'] = 'Allow users to use DPS to enrol into a course by default.';
$string['cost'] = 'Cost';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during DPS enrolments';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['assignrole'] = 'Assign role';
$string['enrolstartdate'] = 'Start date';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['dps:config'] = 'Configure DPS enrol instances';
$string['dps:manage'] = 'Manage enrolled users';
$string['dps:unenrol'] = 'Unenrol users from course';
$string['dps:unenrolself'] = 'Unenrol self from the course';
$string['coursenotfound'] = 'Course not found';


// Error messages
$string['error_curlrequired'] = 'The PHP Curl extension is required for the DPS enrolment plugin.';
$string['error_dpscurrency'] = 'The course fee is not in a currency recognised by DPS.';
$string['error_dpsinitiate'] = 'could not initiate a transaction with the DPS payment server - please try again later.';
$string['error_enrolmentkey'] = 'That enrolment key was incorrect, please try again.';
$string['error_paymentfailure'] = 'Your payment was not successful. DPS Payment Express returned the following error: $a';
$string['error_paymentunsucessful'] = 'Payment was not successful, please try again later.';
$string['error_txalreadyprocessed'] = 'DPS Payment Express: This transaction has already been processed.';
$string['error_txdatabase'] = 'Fatal: could not create the DPS transaction in the Moodle database.';
$string['error_txinvalid'] = 'DPS Payment Express: invalid transaction, please try again.';
$string['error_txnotfound'] = 'DPS Payment Express: corresponding Moodle transaction record not found.';
$string['error_usercourseempty'] = 'user or course empty';

