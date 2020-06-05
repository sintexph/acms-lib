<?php

namespace AccountManagement;

use GuzzleHttp\Exception\RequestException;

class ACMSHelper
{
    public static function getUser($username)
    {
        try {
            
            $client = new \GuzzleHttp\Client(['base_uri' => config('acms.url')]);
            
            $headers = [
                'Authorization' => 'Bearer ' . config('acms.token'),        
                'Accept'        => 'application/json',
            ];
            $response = $client->request('POST', 'user', [
                'headers' => $headers,
                'form_params'=>[
                    'app_key'=>config('acms.key'),
                    'username'=>$username,
                ]
            ]);
            
            return json_decode($response->getBody()->getContents());
        }
        catch (RequestException $th) {

            return null;

        }
    }
}
