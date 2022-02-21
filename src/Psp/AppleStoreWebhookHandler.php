<?php

namespace Kilohealth\App\Psp;

class AppleStoreWebhookHandler extends PSP {

    public function parse(array $data) : bool {
        if($data['notification_type']){
            switch($data['notification_type']){
                case 'INITIAL_BUY':
                    $this->subscribe();
                    break;
                case 'DID_RENEW':
                    $this->subscribe();
                    break;
                case 'DID_FAIL_TO_RENEW':
                    break;
                case 'CANCEL':
                    $this->unsubscribe();
                    break;
                default:
                    http_response_code(500);
                    echo 'error';
                    return false;
            }
            http_response_code(200);
            echo 'success';
            return true;
        }
        http_response_code(500);
        echo 'error';
        return false;
    }

}