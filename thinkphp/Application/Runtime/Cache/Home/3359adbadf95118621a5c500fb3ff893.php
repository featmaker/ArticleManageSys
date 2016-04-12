<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1, user-scalable=no">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/thinkphp/Public/css/index.css">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="header">
         <span><a href="#" title="">资料下载</a></span>
         <span><a href="#" title="">设为首页</a></span>
         <span><a href="#" title="">加入收藏</a></span>
    </div>
    <div class="top">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/thinkphp/">西华师大</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">推荐 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">排行榜</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">栏目列表 <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">动画</a></li>
                    <li><a href="#">电影</a></li>
                    <li><a href="#">番剧</a></li>
                    <li><a href="#">音乐</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">没有了</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">关于</a></li>
                <?php if($logined == 'true'): ?><li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ($userName); ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">我的主页</a></li>
                    <li><a href="#">我的等级</a></li>
                    <li><a href="#">个人设置</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href='/thinkphp/home/user/logout'>登出</a></li>
                  </ul>
                </li>
                <?php else: ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">游客请登录 </a>
                  </li><?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
    </div>
    <div id="content">
      <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>注册页面</title>
    <link rel="stylesheet" href="/thinkphp/Public/css/register.css">
    <script type="text/javascript" src="/thinkphp/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/thinkphp/Public/js/regcheck.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body style="height: auto;">
    <div id="container">
        <h1>注册信息</h1>
        <hr>
        <form action="register" method="post" accept-charset="utf-8">
        <table class="regtab">
            <tbody>
                <tr>
                    <th>用户昵称:</th>
                    <td><input type="text" id="userName" name="userName" value="" placeholder="2至20位非空字符串" autofocus="" maxlength="20" required=""></td>
                    <td>
                        <span id="warname" hidden="" style="color: red;">用户名已经存在</span>
                    </td>       
                </tr>
                <tr>
                    <th>账号密码:</th>
                    <td><input type="password" id="password" name="password" value="" placeholder="最少六位" minlength="6" maxlength="20" required=""></td>
                </tr>
                <tr>
                    <th>确认密码:</th>
                    <td><input type="password" id="rpassword" name="rpassword" value="" placeholder="" minlength="6" maxlength="20" required=""></td>
                </tr>
                <tr>
                    <th>邮箱地址:</th>
                    <td><input type="email" name="email" id="email" value="" placeholder="" required=""></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="submit" name="sendRegInfo" value="提交"></td>
                </tr>
                <tr>
                    <td colspan="2" class="back"><a  href="login.html" title="">已有账号？返回登录</a></td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</body>
</html>
    </div>
    <div class="footer">
        <h1 >这是一个<abbr title="如果细心的你看到这里,说明。。。。并没有什么暖用！！！" class="initialism">网站</abbr>的底部 <a href="#" title="">点我回顶部</a></h1>

        
    </div>

</body>
</html>