<?php

namespace Beem\SDK\Services;

use GuzzleHttp\Client;

/**
 * @package Beem\SDK
 * @see {@link https://docs.beem.africa/index.html}
 *
 * @version 0.1.0
 * @author Alpha Olomi
 */
class SMS
{
    /**
     * root
     */
    private $ROOT_URL = 'https://apisms.beem.africa/v1/';

    /**
     * HTTP client
     */
    private $client;

    /**
     * @param mixed options
     * @param Client|null client
     * @return void
     */
    public function __constructor($options, $client= null)
    {
        $key = base64_encode("{$options['api_key']}:{$options['secret_key']}");
        $this->client = ($client instanceof Client) ? $client : new Client([
            'base_uri' => $this->ROOT_URL,
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => `Basic {$key}`,
                'Content-Type' => 'application/json'
            ]
        ]);

    }

    /**
     *
     * Send Sms to Single destination
     *
     * array(
     *    'source_addr' => 'INFO',
     *    'encoding'=>0,
     *    'schedule_time' => '',
     *    'message' => 'Hello World',
     *    'recipients' => [array('recipient_id' => '1','dest_addr'=>'255700000001'),array('recipient_id' => '2','dest_addr'=>'255700000011')]
     * );
     *
     * @see {@link https://docs.beem.africa/index.html#api--SENDING_SMS}
     * @param $data
     * @return mixed
     */
    public function single_destination($data)
    {
        $response = $this->client->post("send", [
            'json' => $data,
        ]);
        return json_decode($response->getBody(), true);
    }


}
