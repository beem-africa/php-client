<?php

namespace Beem\SDK\Tests;

class Fixture
{
    public static $api_key = '';
    public static $secret_key = 'sandbox';

    public static $smsPostData = array(
        'source_addr' => 'INFO',
        'encoding' => 0,
        'schedule_time' => '',
        'message' => 'Hello World',
        'recipients' => [
            array('recipient_id' => '1', 'dest_addr' => '255700000001'),
            array('recipient_id' => '2', 'dest_addr' => '255700000011')
        ]
    );


}
