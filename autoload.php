<?php
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/lib/SirverGatewayApi.php');

$apiClient = new SirverSMSGateway(AUTH_KEY, SERVER);
