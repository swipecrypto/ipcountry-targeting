<?php

	$remote_ip = $_SERVER['REMOTE_ADDR'] ;
	$country_code = '';

	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $remote_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
    }

    echo 'You are accessing on IP: '.$remote_ip;
    if (!empty($country_code)) {
    	echo ', from: '.$country_code;

    }

?>