<?php
/**
 * NXDNReflector-Dashboard2 Configuration - Example
 *
 * Copy this file to config.php and adjust the values for your
 * deployment. config.php itself is gitignored, so your real settings
 * are never committed.
 */

date_default_timezone_set('UTC');

define("DASHBOARD_NAME", "Your Reflector Name Dashboard");
define("DASHBOARD_TAGLINE", "Modern Dashboard for Amateur Radio");
define("LOGO", "");
define("NXDNREFLECTORLOGPATH", "/var/log/NXDNReflector/");
define("NXDNREFLECTORLOGPREFIX", "NXDNReflector");
define("NXDNREFLECTORINIPATH", "/etc/NXDNReflector/");
define("NXDNREFLECTORINIFILENAME", "NXDNReflector.ini");
define("NXDNREFLECTORPATH", "/usr/local/bin/");
define("TIMEZONE", "America/New_York");

// WebSocket URL of the MQTT broker used by the Gateway Status panel.
// Must match the listener configured for your MQTT broker (e.g.
// Mosquitto's websockets listener) on the NXDNGateway host.
define("MQTT_WS_URL", "ws://YOUR_GATEWAY_IP:9001");

define("REFRESHAFTER", "15");
define("SHOWOLDMHEARD", "7");
define("TEMPERATUREHIGHLEVEL", "60");
define("SHOWQRZ", true);
define("LAST_HEARD_FIRST", true);
define("SHOWPROGRESSBARS", false);
define("TEMPERATUREALERT", false);
define("GDPR", false);
define("SHOW_SYSTEM_INFO", true);
?>
