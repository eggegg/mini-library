<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>注册 - 数字图书馆</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' href='/css/style.css' type='text/css' />
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/register">注册</a></li>
                    <li><a href="/auth/login">登录</a></li>
            </ul>
        </div>
        <center><a href="/"><img src="/img/logo.png" alt="首页" class="logo"/>
            </a></center>
        @yield('content')
    </div>
</body>
</html>
