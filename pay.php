<?php

// Set up a DPS transaction and redirect user to payment service.
require dirname(dirname(dirname(__FILE__))) . "/config.php";
require_once "{$CFG->dirroot}/lib/enrollib.php";

require_login();

$id = required_param('id', PARAM_INT);  // plugin instance id

// get plugin instance
if (!$plugin_instance = $DB->get_record("enrol", array("id"=>$id, "status"=>0))) {
    print_error('invalidinstance');
}

$plugin = enrol_get_plugin('dps');

$xmlreply = $plugin->begin_transaction($plugin_instance, $USER);
$response = $plugin->getdom($xmlreply);

// abort if DPS returns an invalid response
if ($response->attributes()->valid != '1') {
    print_error('error_dpsinitiate', 'enrol_dps');
}

// otherwise, redirect to the DPS provided URI
redirect($response->URI);

