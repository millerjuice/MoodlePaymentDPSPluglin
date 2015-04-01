DPS Enrolment Plugin
====================

Simple enrolment plugin for Moodle 2.x using the DPS "Payment Express" credit
card payment gateway.

- © Copyright 2011 Eugene Venter <eugene@catalyst.net.nz>,
  Jonathan Harker <jonathan@catalyst.net.nz>

- License: GNU GPL v3 or later - http://www.gnu.org/copyleft/gpl.html

DESCRIPTION
-----------

This plugin handles credit card payments by conducting PxPay transactions
through the DPS Payment Express gateway. A successful payment results in the
enrolment of the user. We use PxPay because it does not require handling the
credit card details in Moodle. A truncated form of the credit card number is
returned in the PxPay response and is stored for reference only.

Details of the DPS PxPay API are online:
http://www.paymentexpress.com/technical_resources/ecommerce_hosted/pxpay.html

INSTALLATION
------------

Download the latest enrol_dps.zip from the Moodle Plugins Directory and unzip
the contents into the enrol/dps directory.

- http://moodle.org/plugins/

SUPPORT
-------

Please visit the Moodle forums at http://moodle.org/forums/ and search for DPS
to see if any relevant help has already been posted, or post a new question.

