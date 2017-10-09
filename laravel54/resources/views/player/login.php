<!doctype html>
<html lang="zh">
<head>
<base href="<?=URL::ASSET('');?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS3扁平风格浮动标签用户登录特效</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<body><script src="/demos/googlegg.js"></script>

<div class="panel-lite">
  <div class="thumbur">
	<div class="icon-lock"></div>

  </div>
  <h4>用户登录</h4>
  <form action="<?=url('show/login_do')?>" method="post">
  <div class="form-group">
	<input required="required" class="form-control" name="username" />
	<label class="form-label">用户名    </label>
  </div>
  <div class="form-group">
  <input type="hidden" name="_token" value="<?=csrf_token()?>">
	<input type="password" required="required" class="form-control" name="password" />
	<label class="form-label">密　码</label>
  </div><a href="#">忘记密码 ? </a> <a href="http://www.laravel.com/show/region">点击注册   </a>

<!--  < button class="floating-btn"><i class="icon-arrow"></i></button> -->
  <input type="submit" value="登录">
</form>
</div>

<!-- <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
<p>来源：<a href="http://www.lanrenzhijia.com/" target="_blank">懒人素材</a></p>
</div>
 -->

</body>
</html>