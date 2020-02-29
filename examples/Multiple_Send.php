<?php


// Send Multiple SMS
// ----------------------


require_once('../autoload.php');

$apiClient = new SirverSMSGateway(AUTH_KEY, SERVER);


try {

    $mobile_numbers = array(
        '237676089081',
        '237697329572',
    );

    $response = $apiClient->sendMultipleSMS($mobile_numbers, 'Hi Ayuk, This is a test messsage', 'ARS-L22', 2, 'now');

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
    [msg] => 2 SMS sent to queue for precessing
    [data] => Array
        (
            [0] => Array
                (
                    [schedule_at] => 2020-02-28 21:28:45
                    [queue_id] => 15750413253ec1
                    [device_model] => ARS-L22
                    [sim_id] => 2
                    [mobile_no] => 237676089081
                    [message] => Hi [contact_name] from  [site_name] at [common_date_time]
                    [created_at] => 2020-02-28 21:28:45
                )
            [1] => Array
                (
                    [schedule_at] => 2020-02-28 21:28:45
                    [queue_id] => 15750413250101
                    [device_model] => ARS-L22
                    [sim_id] => 2
                    [mobile_no] => 237697329572
                    [message] => Hi [contact_name] from  [site_name] at [common_date_time]
                    [created_at] => 2020-02-28 21:28:45
                )
        )
    [total] => 2
)
*/
