<?php

// DPS PxPay service should redirect here on failure.

require dirname(dirname(dirname(__FILE__))) . "/config.php";
require_once "{$CFG->dirroot}/lib/enrollib.php";

require_login();

// fetch the response XML from DPS
$result = required_param('result', PARAM_CLEAN);
$dpsenrol = enrol_get_plugin('dps');
$dpsenrol->abort_transaction($result);

