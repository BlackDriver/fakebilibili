<!DOCTYPE html>
<html>
<head>
    <title>搜索结果</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/top.css">
    <link rel="stylesheet" type="text/css" href="css/bottom.css">
    <link rel="stylesheet" type="text/css" href="css/searchout.css">
    
</head>
<body>
<?php require_once 'session.php'; ?>
    <div class="top">
        <div class="blur-container">
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
                <ul class="nav-r-wrapper">
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
            </div>
        </div>
    </div>
     <!--搜索框div-->
    <div class="search-wrp">
        <div class="header-search">
            <a href="##"></a>
            <div class="search-block">
                <!-- 搜索框-->
                <form action="searchout.php" style="height: 100%" method="get">
                    <input type="text" name="search-keyword" id="search-keyword">
                    <input type="submit" name="search-submit" id="search-submit2" value="搜索">
                </form>
            </div>
        </div>
    </div>
    <div class="list-wrp">
        <ul>
            <li>
                <a href="##">综合</a>
            </li>
            <li>
                <a href="##">视频</a>
            </li>
            <li>
                <a href="##">番剧</a>
            </li>
            <li>
                <a href="##">影视</a>
            </li>
            <li>
                <a href="##">直播</a>
            </li>
            <li>
                <a href="##">专题</a>
            </li>
            <li>
                <a href="##">话题</a>
            </li>
            <li>
                <a href="##">UP主</a>
            </li>
            <li>
                <a href="##">画友</a>
            </li>
        </ul>
    </div>
    <div class="so-wrp">
        <ul class="searchout-container">
            <!--示例用li元素，整个元素作为内容-->
            <?php
                $mysqli = new mysqli('localhost', 'root', '1234', 'mysql');
                if ($mysqli->connect_error) {
                    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
                }

                @$keyword = trim($_GET['search-keyword']);
                if (empty($keyword))
                {
                    echo '<script>alert("请输入内容进行搜索");</script>';
                }
                if (!empty($keyword)) {
                    $sql = "SELECT * FROM videos WHERE title LIKE '%{$keyword}%' LIMIT 2";
                    mysqli_set_charset($mysqli,"utf8");
                    $res = mysqli_query($mysqli,$sql);
                    if (!mysqli_query($mysqli,"SET @a=':error'")) {
                        printf("错误信息:%s\n",mysqli_error($mysqli));
                    }
                    $row = mysqli_fetch_array($res);
                    // print_r($row);
                    if (!$row) {
                        echo "找不到您查询的信息";
                    } else {
                    while ($row) {
                    ?>
                <li class="videoout">
                    <div class="video-img">
                    <?php
                        echo '<img src="./image/searchout/'.$row['video_id'].'.jpg">';
                    ?>
                    </div>
                    <div class="info">
                    <?php
                        echo '<a href="videoplay.php?video_id=';
                        echo $row['video_id'].'">';
                        echo $row['title'];
                    ?>
                    </a>
                    </div>
                    <div class="tags">
                        <span class="so-icons watch-num"><i class="icon-playtime"></i>1111</span>
                        <span class="so-icons up-time"><i class="icon-uptime"></i>1970-1-1</span>
                        <span class="so-icons up"><i class="icon-up"></i><?php 
                        echo $row['contributor'];
                        ?></span>
                    </div>
                </li>
                   <?php
                        break;
                    }
                    mysqli_free_result($res);
                    mysqli_close($mysqli);
                }
            }
                ?>
            <!--示例结束-->
        </ul>
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