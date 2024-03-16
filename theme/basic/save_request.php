<?php
include_once("./_common.php");
include_once(G5_LIB_PATH . '/mailer.lib.php');

// Post에서 데이터 가져오기
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$content = $_POST['user_content'];
$formip = $_POST['cotact_ip'];

// 현재 시간
$in_time = date("Y-m-d H:i:s");



// 관리자 이메일
$admin_email = '';

/*
// DB에 저장하기
$sql = "INSERT INTO g5_write_inquery (wr_name, wr_1, wr_email, wr_time) VALUES ('$wr_name', '$wr_1', '$wr_email', '$in_time')";
$result = sql_query($sql);
*/

// 게시글 1 증가 (예시)
// sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = 'g5_write_inquery'");

// 메일 내용 만들기
$mail_content = "

<div style='margin:30px auto;width:700px;border:10px solid #f7f7f7'>
    <div style='border:1px solid #dedede'>
        <h1 style='padding:30px 30px 0;background:#f7f7f7;color:#555;font-size:1.4em'>
            문의드립니다.
        </h1>
        <span style='display:block;padding:10px 30px 30px;background:#f7f7f7;text-align:right'>
            이름 : {$name}
        </span>
        <ul>
            <li style='list-style: none; margin-bottom:10px;'><strong style='font-size: 16px;'>이름</strong> :  {$name}</li>
            <li style='list-style: none; margin-bottom:10px;'><strong style='font-size: 16px;'>이메일</strong> :  {$email}</li>
            <li style='list-style: none; margin-bottom:10px;'><strong style='font-size: 16px;'>이메일</strong> :  {$content}</li>
            <li style='list-style: none; margin-bottom:10px;'><strong style='font-size: 16px;'>접수시간</strong> :  {$in_time}</li>
            <li style='list-style: none; margin-bottom:10px;'><strong style='font-size: 16px;'>아이피</strong> :  {$formip}</li>
        </ul>
    </div>
</div>
";

// 메일 보내기
mailer($name, $email, $admin_email, "문의가 접수되었습니다.", $mail_content, 1);


echo "<script>alert('신청 되었습니다.');location.href='/';</script>";
exit;

