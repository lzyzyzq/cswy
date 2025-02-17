<?php

function getNetworkTime() {
    $url = 'http://worldtimeapi.org/api/ip';

    $response = file_get_contents($url);

    if ($response) {
        $data = json_decode($response, true);
        if ($data && isset($data['datetime'])) {
            return $data['datetime'];
        }
    }

    return null;
}

$networkTime = getNetworkTime();
if ($networkTime) {
    echo "Network Time: " . $networkTime;
} else {
    echo "Failed to retrieve network time.";
}

?>
