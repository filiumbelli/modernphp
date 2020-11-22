<?php
// sets the date
$datetime = new DateTime("2020-11-22 12:35:00");
// sets the interval according to given value P(int)(variable y-m-d)T(int)h(int)m with capital letters
$dateInterval = new DateInterval("P2DT3H35M");
// subs the interval from setted date above.
$datetime->sub($dateInterval);
echo $datetime->format("d-m-Y H:i:s");

// set the timezone
$timezone = new DateTimeZone("America/New_York");
$datetime = new DateTime("20-04-2003");
$datetime->setTimezone($timezone);

// Creates a period of time according to start end interval with a seperator integral
$period = new DatePeriod(new DateTime(),new DateInterval("P3Y"),3);


foreach($period as $date){
    echo $date->format("d-m-Y"),PHP_EOL;
}