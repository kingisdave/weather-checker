<?php

$conts=file_get_contents("http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest");

preg_match("/3 days (.*?) <\/span>/i", $conts, $matches);
// preg_match('/3 Day weather Forecast Summary:<\/b>
// 		<span class="phrase">(.*?)</s', $contents, $matches);
// preg_match('/3 days )<\/span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s', $contents, $matches);
print_r($matches);

?>