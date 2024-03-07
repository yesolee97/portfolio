<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// allowed_path이라는 변수를 array (1개의 변수에 여러개의 값을 순차적으로 저장할때 쓰입니다. array) 에 담습니다.
// 그누보드 페이지다 보니, 악의적으로 게시판에 들어올수 있으니, 들어올수 있는 url을 담습니다.
$allowed_paths = array(
    '/bbs/register',
    '/bbs/register_form',
    '/bbs/register_result',
    '/bbs/register.php',
    '/bbs/register_form.php',
    '/bbs/register_result.php',
    '/bbs',
    '/theme/basic/'
);


// current_path 라는 변수에 $_SERVER['REQUEST_URI']; (현재 접속한 url 경로를 감지하는 php 코드입니다.)
$current_path = $_SERVER['REQUEST_URI'];


// 값이 존재하면, alert 후 메인페이지로 가게 합니다.
// in_array (변수에서 해당 값이 존재하는지 확인하는 php 코드입니다.)
if (in_array($current_path, $allowed_paths)) {
    echo '<script type="text/javascript">';
    echo 'alert("잘못된 접근이에요 포트폴리오 페이지만 봐주세요!");';
    echo 'window.location.href = "/";';
    echo '</script>';
    exit;
}

// 즉 , 종합해보면 $allowed_paths 라는 변수에 순차적인 값을 저장하고, $current_path는 현재 url 정보를 저장합니다.
// 그래서 해당 변수 $allowed_paths, $current_path 에 해당 url 값이 있다면 alert으로 메세지를 띄운 후 메인페이지로 가게 하는 겁니다.