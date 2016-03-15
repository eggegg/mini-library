
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title> 智能战争 -  数字图书馆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' href='/css/style.css' type='text/css' />
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/notify-combined.min.js"></script>
    <script src="/js/vue.min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="/"><img src="/img/logo.png" alt="首页" class="logo"/></a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="row">
                                    <span class="accountBar">
                                                  <a href="/auth/register">注册</a>&nbsp;&nbsp;&nbsp;
                                                  <a href="/auth/login">登录</a>
                    </span>
                </div>

                <div class="row">
                  <div class="col-xs-6 col-md-5 col-sm-6 pull-right search">
                      <form action="/search" method="get">
                            <input type="text" class="form-control" placeholder="搜索书名..." name="keywords" value="">
                      </form>
                  </div>
                </div>

            </div>

        </div>
    </div>

    <nav class="navbar navbar-default">
          <div class="container">
            <div id="navbar">
              <ul class="nav navbar-nav">
                <li ><a href="/">首页</a></li>
                <li ><a href="/book">实体书</a></li>
                <li ><a href="/ebook">电子书</a></li>
                <li ><a href="/buy">购书申请</a></li>
                <li ><a href="/my">我的</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li ><a href="/add">共享图书</a></li>
              </ul>
            </div>
          </div>
    </nav>


<div class="container">
    <div class="row break">
    <div class="col-md-9 col-sm-9 col-xs-12">
        
   @yield('content')
    </div>
    </div>
</div>

<script type="text/javascript" src="/js/jquery.form.min.js"></script>

<footer>
  <hr/>
  <span class="copyright">Copyright © 2016 Mini-library.</span>
</footer>
</body>
</html>
