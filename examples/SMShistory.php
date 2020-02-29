<?php


// Get SMS History
// --------------------


require_once('../autoload.php');

$apiClient = new SirverSMSGateway(AUTH_KEY, SERVER);


try {
    
    $history = $apiClient->getHistory(array('filterby_device' => 'ARS-L22', 'filterby_from' => '2020-01-29 12:00:00', 'filterby_to' => '2020-02-29 23:59:00'));
    print_r($history);
} catch (Exception $e) {
    
    echo $e->getMessage();
}



/*
Output
---------
Array
(
    [status] => Success
    [data] => Array
        (
            [0] => Array
                (
                    [id] => 1
                    [status] => delivered
                    [device] => ARS-L22
                    [sim] => 2
                    [mobile_no] => 23767608981
                    [message] => This SMS from SirverSMSGateway at localhost
                    [username] => user@email.com
                    [created_by] => 1
                    [created_at] => 2020-01-29 13:15:51
                )
		)
)
*/
