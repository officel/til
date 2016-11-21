<?php

function getWeather()
{
    // weather_hacks
    $url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    $result_array = json_decode($json, true);

    $weather = [];
    foreach ($result_array['forecasts'] as $list) {
        $weather[] = $list['dateLabel'] . '（' . $list['telop'] . '）';
    }

    $ret = implode('/ ', $weather) . PHP_EOL;
    curl_close($ch); //終了

    return $ret;
}

function getWikiRandom()
{
    // wikipedia api
    $url = "https://ja.wikipedia.org/w/api.php?format=json&action=query&list=random&rnnamespace=0&rnlimit=3";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    $result_array = json_decode($json, true);

    $random = [];
    foreach ($result_array['query']['random'] as $list) {
        $random[] = '* [' . $list['title'] . '](https://ja.wikipedia.org/wiki/' . urlencode($list['title']) . ')';
    }

    $ret = implode(PHP_EOL, $random) . PHP_EOL;
    curl_close($ch); //終了

    return $ret;
}


// main start
echo '# ', date('Y/m/d'), PHP_EOL, PHP_EOL;

echo '## 天気予報', PHP_EOL, getWeather(), PHP_EOL;

echo '## 今日のWikiRandom', PHP_EOL, getWikiRandom(), PHP_EOL;
