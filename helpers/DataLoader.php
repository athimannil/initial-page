<?php


function getData()
{
    $dataUrl = 'https://www.mypostcard.com/mobile/store/content.php?json=1&lang=en&position=3';

    $data = json_decode(getJson($dataUrl), true);
    $data = $data['content'][0];

    return [
        'title'     => $data['title'],
        'url'       => $data['big_url'],
        'alt_tag'   => $data['alt_tag']

    ];
}


function getJson($url)
{

    $request = curl_init();
    curl_setopt($request, CURLOPT_URL, $url);
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($request);
    curl_close($request);

    return $data;
}