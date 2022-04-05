<?php

$date = new DateTime('now', new DateTimeZone('UTC' ) );

// timestamp
echo $date->getTimestamp();

// format
//echo $date->format('Y-m-d H:i:s');