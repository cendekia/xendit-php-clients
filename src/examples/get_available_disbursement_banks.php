<?php
    require('examples/include_autoload.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $response = $xenditPHPClient->getAvailableDisbursementBanks();
    print_r($response);
?>
