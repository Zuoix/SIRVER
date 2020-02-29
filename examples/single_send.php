<?php


// Send Single SMS
// --------------------


require_once('autoload.php');

$apiClient = new SirverSMSGateway(AUTH_KEY, SERVER);

try {

    $response = $apiClient->sendSMS('237676089081', 'This SMS from API at localhost', 'ARS-L22', 2);
    print_r($response);

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
                    [response] => Array
                        (
                            [multicast_id] => 9.1266008746554E+17
                            [success] => 1
                            [failure] => 0
                            [canonical_ids] => 0
                            [results] => Array
                                (
                                    [0] => Array
                                        (
                                            [message_id] => 0:1575039780719480%26645a09f9fd7ecd
                                        )
                                )
                        )
                    [payload] => Array
                        (
                            [username] => your_username@domain.com
                            [firebase_access_key] => 
                            [device_model] => ARS-L22
                            [device_token] => 
                            [sim_id] => 2
                            [created_by] => 1
                            [bulk] => yes
                            [message] => This SMS is from SirVer SMS Gateway API
                            [created_at] => 2020-02-28 21:03:00
                            [mobile_no] => 237676089081
                            [msgID] => 23
                        )
                )
        )
)
*/
?>
