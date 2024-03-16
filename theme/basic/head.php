<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- header start -->
<header>
    <nav class="navbar navbar-expand">
        <div class="container-fluid justify-content-center">
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <a class="navbar-brand" href="<?php echo G5_URL ?>">Yesols Portfolio</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#archiving">Archiving</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- header end -->


<!-- wrapper start (닫히는 div는 tail.php에서 닫히고 있습니다.) -->
    <div id="wrapper">
    <div id="container_wr">

    <div id="container">
<?php if (!defined("_INDEX_")) { ?>

<?php } ?>