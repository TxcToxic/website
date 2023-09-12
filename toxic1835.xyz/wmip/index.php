<?php
    header('Content-Type: application/json');

    $ipData = array();

    // IP durch Cloudflare (original)
    if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $ipData['comment'] = "Please keep in mind 'ip_org' is the ip that php got directly (the cloudflare server)!";
        $userIPCloudflare = $_SERVER['HTTP_CF_CONNECTING_IP'];
        $countryCodeCF = $_SERVER['HTTP_CF_IPCOUNTRY'];
        $ipData['ip_cf'] = $userIPCloudflare;
        $ipData['cc'] = $countryCodeCF;
    }

    // IP ohne Cloudflare (Original)
    $userIPOriginal = $_SERVER['REMOTE_ADDR'];
    $ipData['ip_org'] = $userIPOriginal;

    echo json_encode($ipData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
