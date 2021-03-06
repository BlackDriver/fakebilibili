<!DOCTYPE html>
<html>
<?php

    require_once 'connect.php';
    require_once 'session.php';
    $str = $_SERVER['REQUEST_URI'];
    // echo $_SERVER['REQUEST_URI'];
    $arr= explode("=",$str);
    // print_r($arr[1]);
    $sql = "SELECT * FROM videos WHERE video_id = '$arr[1]'";
    mysqli_set_charset($mysqli,"utf8");
    $res = mysqli_query($mysqli,$sql);
    if (!mysqli_query($mysqli,"SET @a=':error'")) {
        printf("错误信息:%s\n",mysqli_error($mysqli));
    }
    $row = mysqli_fetch_array($res);
    $haha = mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM users"));
    // print_r($row);
?>
<head>
    <title>
    <?php echo $row['title']; ?>
        <!--这里放视频名字-->
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/top.css">
    <link rel="stylesheet" type="text/css" href="css/bottom.css">
    <link rel="stylesheet" type="text/css" href="./css/videoplay.css">
</head>
<body>
    <div class="top">
        <div class="blur-container">
            <div class="top-blur tops"></div>
            <div class="top-bg tops"></div>     
        </div>

        <div class="top-nav ">
            <div class="nav-l">
                <ul>
                    <li class="home">
                        <a href="index.php"><span>主站</span></a>
                    </li>
                    <li class="huayou">
                        <a href="#"><span>画友</span></a>
                    </li>
                    <li class="gcter">
                        <a href="#"><span>游戏中心</span></a>
                    </li>
                    <li class="live">
                        <a href="#"><span>直播</span></a>
                    </li>
                    <li class="zb">
                        <a href="#"><span>周边</span></a>
                    </li>
                    <li class="bnj">
                        <a href="#"><span>拜年祭</span><em></em></a>
                    </li>
                </ul>
            </div>
            <div class="nav-r">
                <ul class="nav-r-wrapper beforelogin" style="display: block;">
                    <li class="login nav-r-m">
                        <a href="login.html"><span>登陆</span></a>
                    </li>
                    <li class="register nav-r-m">
                        <a href="register.html"><span>注册</span></a>
                    </li>
                    <li class="tougao nav-r-m">
                        <a href="#"><span style="color: white;">投稿</span></a>
                        <ul class="tougao-menu">
                            <li>
                                <a  href="##">
                                    <i class="tougao-v"></i>
                                    <em>投稿视频</em>
                                </a>
                            </li>
                            <li>
                                <a  href="##">
                                    <i class="tougao-m"></i>
                                    <em>投稿管理</em>
                                </a>
                            </li>
                            <li>
                                <a  href="##">
                                    <i class="tougao-center"></i>
                                    <em>个人中心</em>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--隐藏的登陆后显示界面-->            
                <ul class="nav-r-wrapper afterlogin" style="display: none;">
                    <li class="i-user">
                        <img src="./image/tianyi.jpg" class="i-head"></img>
                        <div class="i-user-menu">
                            <div class="menu-info">
                                <div class="info-uname">
                                    <b><?php echo $haha['username']; ?></b>
                                    <!--此处存放用户名-->
                                    <!-- <b>江泽民</b> -->
                                </div>
                                <i class="coin">999</i>
                                <i class="i-email"></i>
                                <i class="i-phone"></i>
                            </div>
                            <div class="menu-lv">等级：续命师 99998/99999s</div>
                            <div class="menu-member-wrp">
                                <ul class="menu-member">
                                    <li>
                                        <i></i>
                                        个人中心
                                    </li>
                                    <li>
                                        <i></i>
                                        投稿管理
                                    </li>
                                    <li>
                                        <i></i>
                                        B币钱包
                                    </li>
                                    <li>
                                        <i></i>
                                        直播中心
                                    </li>
                                </ul>
                            </div>
                            <form class="member-bottom" action="logout.php">
                                <button class="logout">退出</button>
                            </form>
                        </div>
                    </li>
                    <li class="nav-r-log nav-r-m">
                        <a href="#"><span>消息</span></a>
                    </li>
                    <li class="nav-r-log nav-r-m">
                        <a href="##"><span>动态</span></a>
                    </li>
                    <li style="width: 60px;" class="nav-r-log nav-r-m">
                        <a href="##"><span>收藏夹</span></a>
                    </li>
                    <li class="nav-r-log nav-r-m">
                        <a href="##"><span>历史</span></a>
                    </li>
                    <li class="tougao ">
                        <a href="#"><span style="color: white;">投稿</span></a>
                        <ul class="tougao-menu">
                            <li>
                                <a  href="##">
                                    <i class="tougao-v"></i>
                                    <em>投稿视频</em>
                                </a>
                            </li>
                            <li>
                                <a  href="##">
                                    <i class="tougao-m"></i>
                                    <em>投稿管理</em>
                                </a>
                            </li>
                            <li>
                                <a  href="##">
                                    <i class="tougao-center"></i>
                                    <em>个人中心</em>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--Ah♂-->
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-container">
            <div id="bilibili">
                <img src="image/bilibili.png">
            </div>
            <div class="banner-title">迎新年，看拜年祭（´∀｀*)</div>
        </div>
        <div class="nav-container">
            <div class="menu-wrapper">
                <ul class="nav-menu">
                    <li class="n-li shouye">
                        <a class="n-link " href="##">
                            <em>首页</em>
                        </a>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>动画</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            MAD·AMV
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            MMD·3D
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            短片·手书·配音
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            综合
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>番剧</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            连载动画
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            完结动画
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            国产动画
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            资讯
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            官方延伸
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            新番时间表
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            番剧索引
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>音乐</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            原创音乐
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            翻唱
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            VOCALOID·UTAU
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            演奏
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            三次元音乐
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            OP/ED/OST
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            音乐选集
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>舞蹈</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            宅舞
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            三次元舞蹈
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            舞蹈教程
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>游戏</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            单机联机
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            网游·电竞
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            音游
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            Mugen
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            GMV
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>科技</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            纪录片
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            趣味科普人文
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            野生技术协会
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            演讲·公开课
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            星海
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            数码
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            机械
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>生活</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            搞笑
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            日常
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            美食圈
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            动物圈
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            手工
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            绘画
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            运动
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>鬼畜</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            鬼畜调教
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            音MAD
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            人力VOCALOID
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            教程演示
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>时尚</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            美妆
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            服饰
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            健身
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            资讯
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>广告</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>娱乐</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            综艺
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            明星
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            Korea相关
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-li">
                        <a class="n-link" href="##">
                            <em>影视</em>
                            <div class="new-num">
                                <span>999</span>
                            </div>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            电影
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            电视剧
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="n-r">
                        <a class="n-square">
                            <em>
                                广场
                            </em>
                        </a>
                    </li>
                    <li class="n-r">
                        <a class="n-live">
                            <em>
                                直播
                            </em>
                        </a>
                        <ul class="n-num">
                                <li>
                                    <a href="##">
                                        <b>
                                            推荐主播
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            手机直播
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            绘画专区
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            唱见舞见
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            御宅文化
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            单机联机
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            网络游戏
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            电子竞技
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            手游直播
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <b>
                                            放映厅
                                            <em></em>
                                        </b>
                                    </a>
                                </li>
                        </ul>
                    </li>

                </ul>
                <div class="menu-r">
                    <div class="random-gif">
                        <img src="./image/bainian.gif">
                    </div>
                    <div class="mobile-p">
                         <div class="mobile-p-box">
                                <div class="mobile-2Dcode"></div>
                         </div>
                    </div>
                </div>
                <div class="search">
                     <a class="l-rank">
                         <span>排行榜</span>
                     </a>
                    <!--这也有个搜索框喔-->
                    <form autocomplete="off" action="searchout.php" id="search-form">
                            <input type="text" name="search-keyword" id="search-keyword">
                            <button id="search-submit" type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="index-container">
        <div class="main-container" style="margin-top: 65px;">
            <div class="viewbox">
                <div class="videoinfo">
                    <div class="v-title">
                        <!--视频title放这里-->
                        <h1><?php echo $row['title']; ?></h1>
                    </div>
                    <div class="tminfo">
                        <a href="##">2017-02-25 09:00 </a>
                        <a href="##">稿件投诉</a>
                    </div>
                    <div class="v-title-info">
                        <div class="v-title-info-msg">
                            <i></i>
                            <span>9999</span>
                        </div>
                        <div class="v-title-info-msg">
                            <i></i>
                            <span>9999</span>
                        </div>
                        <div class="v-title-info-msg">
                            <i></i>
                            <span>硬币：9999</span>
                        </div>
                        <div class="v-title-info-msg">
                            <i></i>
                            <span>收藏：9999</span>
                        </div>
                    </div>
                </div>
                <div class="upinfo">
                    <div class="up-face">
                        <img src="./image/tianyi.jpg">
                    </div>
                    <div class="up-msg">
                        <div class="up-name">
                            <!--这里放上传者名字-->
                            <a href="##"><?php echo $row['contributor']; ?></a>
                        </div>
                        <div class="sign">
                            <span>I am Billy Harrington,乖乖♂站好！</span>
                        </div>
                        <div class="up-video-msg">
                            <span>投稿：999</span>
                            <span>粉丝：9999</span>
                        </div>
                        <div class="focus">+关注</div>
                        <div class="charge">充电</div>
                    </div>
                </div>
            </div>
            <div class="ad-page">
                <img src="./image/videopage/videoad1.jpg@.webp">
                <img src="./image/videopage/videoad2.jpg@.webp" style="display: block;float: right;">
            </div>
        </div>
    </div>
    <div class="player-wrp">
        <div class="video-container">
            <video src="videos/<?php echo $row['video_id']?>.mp4" controls="controls" type="video/mp4" width="800px" height="600px"></video>
            <!--弹幕姬-->
            <div class="danmu-container">
                
            </div>
            
            <div class="danmusender">
                <select id="danmustyle">
                    <option value="normalstyle">滚动</option>
                    <option value="topstyle">顶端</option>
                    <option value="bottomstyle">底部</option>
                </select>
                <select id="danmuspeed">
                    <option value="normalspeed">1倍速</option>
                    <option value="lowspeed">0.5倍速</option>
                    <option value="highspeed">3倍速</option>
                </select>
                <select id="danmusize">
                    <option value="midsize">中</option>
                    <option value="littlesize">小</option>
                    <option value="largesize">大</option>
                </select>
                <select id="danmucolor">
                    <option value="white">白色</option>
                    <option value="#66ccff">天依蓝</option>
                    <option value="red">红色</option>
                    <option value="green">绿色</option>
                    <option value="black">黑色</option>
                </select>
                <input type="text" id="sender">
                <button onclick="send()">发送</button>
            </div>
            <!--弹幕姬-->
        </div>
    </div>
    <div class="comment-container">
        <div class="introdution">
            <!--蛇皮介绍-->
            <span><?php echo $row['description']; ?></span>
        </div>
        <div class="allcomment">
            <b>评论</b>
        </div>
        <div class="comment-committer">
            <div class="user-face">
                <img src="./image/tianyi.jpg">
            </div>
            <div class="comment-send">
                <!--评论提交-->
                <form action="videoplay.php?video_id=<?php echo $arr[1]; ?>" method="post">
                    <input type="text" class="comment-info" name="content" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。">
                    <input type="submit" class="comment-sub" value="发表评论">
                </form>
            </div>
            <?php

                $sql2 = "SELECT * FROM lzl LEFT JOIN comments ON lzl.post_id = comments.post_id INNER JOIN videos ON comments.video_id = videos.video_id INNER JOIN users ON users.username = comments.name ORDER BY comments.video_id DESC";
                mysqli_query($mysqli,"set names 'utf8'");
                $res2 = mysqli_query($mysqli,$sql2);
                if (!mysqli_query($mysqli,"SET @a=':error'")) {
                    printf("错误信息:%s\n",mysqli_error($mysqli));
                }
                $row2 = mysqli_fetch_array($res2);
                // print_r($row2);
                // echo "</br>";
                // print_r($row2['post_id']);
            ?>
        </div>
        <div class="comment-list">
            <div class="list-item">
        <?php
            while ($row2 = mysqli_fetch_array($res2)) {
        ?>
                <!--示例评论-->
                <div class="commentter-face">
                    <img src="./image/tianyi.jpg">
                </div>
                <div class="comments">
                    <div class="comment-name">
                        <!--评论者名字-->
                        <a href="##"><?php echo $haha['username']; ?></a>
                    </div>
                    <p class="comment-text">
                        <!--评论内容-->
                        <span>
                            <?php echo $row2['content']; ?>
                        </span>
                    </p>
                    <div class="comment-msg">
                        <span>来自蛇皮客户端</span>
                        <span><?php echo $row2['date']; ?></span>
                        <span>没有点赞按钮，下一个</span>
  <!--加了一个按钮-->   <a href="##" onclick="displayit()">回复</a>
                    </div>
                    <!--楼中楼-->
                    <form class="reply">
                        <div class="reply-items">
                            <img src="./image/tianyi.jpg">
                            <div class="reply-on">
                                <div class="reply-info">
                                    <!--评论人-->
                                    <b><?php echo $haha['username']; ?></b>
                                    <!--评论信息-->
                                    <span><?php echo $row2['contents'];?></span>
                                </div>
                                <div class="comment-msg">
                                    <span>来自蛇皮客户端</span>
                                    <!--钦点日期-->
                                    <span><?php echo $row2['dates']; ?></span>
                                    <span>没有点赞按钮，下一个</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--回复框-->
                    <div class="replybox">
                        <form action="videoplay.php?video_id=<?php echo $arr[1]; ?>" method="post">
                            <input type="text" class="comment-info replybox-info" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。" name="reply">
                            <input type="submit" class="reply-sub" value="发表评论" onclick="hideit()">
                        </form>
                    </div>
                </div>
        <?php }
                $name = $haha['username'];
                @$cont = trim($_POST['content']);
                if (!empty($cont)){
                    $insert = "INSERT INTO comments(name,content,video_id,date) VALUES ('$name','$cont','$arr[1]',current_timestamp())";
                    mysqli_set_charset($mysqli,"utf8");
                    mysqli_query($mysqli,$insert);
                    if (!mysqli_query($mysqli,"SET @a=':error'")) {
                        printf("错误信息:%s\n",mysqli_error($mysqli));
                    }
                }
                @$reply = trim($_POST['reply']);
                if(!empty($reply)) {
                    $id233 = $row2['post_id'];
                    $insert2 = "INSERT INTO lzl(contents,dates,reply_name) VALUES ('$reply',current_timestamp(),'$name')";
                    $insert3 = "UPDATE comments SET post_id = '$id233' WHERE post_id = ''";
                    mysqli_set_charset($mysqli,"utf8");
                    mysqli_query($mysqli,$insert2);
                    mysqli_query($mysqli,$insert3);
                    if (!mysqli_query($mysqli,"SET @a=':error'")) {
                        printf("错误信息:%s\n",mysqli_error($mysqli));
                    }
                }
        ?>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="foot-wrapper">
            <div class="foot-a">
                <ul class="postcards">
                    <li>
                        <div class="post-tips">Bilibili</div>
                        <div class="cards">关于我们</div>
                        <div class="cards">友情链接</div>
                        <div class="cards">哔哩哔哩周边</div>
                        <div class="cards">联系我们</div>
                        <div class="cards">加入我们</div>
                        <div class="cards">官方认证</div>
                    </li>
                    <li>
                        <div class="post-tips">传送门</div>
                        <div class="cards">帮助中心</div>
                        <div class="cards">高级弹幕</div>
                        <div class="cards">活动专题页</div>
                        <div class="cards">侵权申诉</div>
                        <div class="cards">分院帽计划</div>
                        <div class="cards">活动中心</div>
                        <div class="cards">用户反馈论坛</div>
                        <div class="cards">壁纸站</div>
                        <div class="cards">名人堂</div>
                    </li>
                    <li>
                        <div class="post-r">
                            <div class="shoujiduan">
                                <div class="post-pic"></div>
                                <em>手机端下载</em>
                                <div class="qrcode-wrapper">
                                    <div class="qrcode-box qrcode-app">
                                        <div class="qrcode-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="weibo">
                                <div class="post-pic"></div>
                                <em>新浪微博</em>
                                <div class="qrcode-wrapper">
                                    <div class="qrcode-box qrcode-weibo">
                                        <div class="qrcode-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wechat">
                                <div class="post-pic"></div>
                                <em>官方微信</em>
                                <div class="qrcode-wrapper big-qrcode">
                                    <div class="qrcode-box qrcode-wechat">
                                        <div class="qrcode-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot-bottom">
                
            </div>
        </div>
</body>
</html>

<script type="text/javascript" src="js/loginlogout.js"></script>
<script type="text/javascript" src="js/danmu.js"></script>