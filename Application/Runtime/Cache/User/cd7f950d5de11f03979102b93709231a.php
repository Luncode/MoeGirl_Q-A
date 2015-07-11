<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>登录 | <?php echo C('SITE_TITLE');?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="/Public/css/pnotify.custom.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>

  <script src="/Public/assets/js/jquery.min.js"></script>
  <script src="/Public/assets/js/amazeui.min.js"></script>
  <script src="/Public/js/notify.js"></script>
  <script src="/Public/js/public.js"></script>

  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body style="background-color: #eee;">
<div class="header">
  <div class="am-g">
    <h1>萌娘问答</h1>
    <p>专注于ACGN的问答社区<br/>动画，漫画，轻小说，游戏</p>
  </div>
  <hr />
</div>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="login-model">
      <div class="am-modal-dialog">
        <div class="am-modal-hd">正在登录</div>
        <div class="am-modal-bd">
          <i class="am-icon-spinner am-icon-spin"></i>
        </div>
      </div>
    </div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
  <center><h2>暂时不能使用萌娘百科账号登录</h2></center>
    <form method="post" class="am-form">
      <label for="username">用户名:</label>
      <input type="text" name="" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="" id="password" value="">
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox" checked = "checked">
        记住密码
      </label>
      <br />
      <div class="am-cf">
        <input type="button" onclick="loading_notify();login('<?php echo $from;?>');" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <a type="button" class="am-btn am-btn-default am-btn-sm am-fr" href="/User/Login/register.html?from=<?php echo ($from); ?>">没有账号 ^_^?</a>
      </div>
    </form>
    <hr>
    <p>© 2015 MoeGirl.Wiki.</p>
  </div>
</div>
</body>
</html>