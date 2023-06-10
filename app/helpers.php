<?php
function getUrlExtension($url) {
    $path = parse_url($url, PHP_URL_PATH);
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    return $ext;
}

function getYouTubeVideoId($url) {
    $pattern = '#^https?://(?:www\.)?youtube\.com/embed/([\w\-]+)#';
    preg_match($pattern, $url, $matches);
    return $matches[1] ?? null;
}

function getVideoIdFromUrl($url)
{
    $video_id = false;
    $url_components = parse_url($url);
    if (isset($url_components['query'])) {
        parse_str($url_components['query'], $query_params);
        if (isset($query_params['v'])) {
            $video_id = $query_params['v'];
        }
    } else if (preg_match('/\/embed\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/v\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/watch\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/watch\?([^\/]+)/', $url, $matches)) {
        parse_str($matches[1], $query_params);
        if (isset($query_params['v'])) {
            $video_id = $query_params['v'];
        }
    }
    return $video_id;
}

?>