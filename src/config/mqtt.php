<?php

return [
	'MQTT_SERVER_HOST' => env('MQTT_SERVER_HOST', '192.168.28.48'),
	'MQTT_SERVER_POST' => env('MQTT_SERVER_POST', '1883'),
	'SAM_MQTT_CLEANSTART' => env('SAM_MQTT_CLEANSTART', 'SAM_MQTT_CLEANSTART'),
	'SAM_MQTT_QOS' => env('SAM_MQTT_QOS', 2),
	'SAM_MQTT_SUB_SEPARATOR' => env('SAM_MQTT_SUB_SEPARATOR', '#-#'),
];
?>