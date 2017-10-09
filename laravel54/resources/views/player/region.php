<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?=URL::ASSET('');?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- 重置文件 -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>jQuery网页注册表单验证代码</title>
</head>
<body>
<script src="/demos/googlegg.js">
</script>
<form action="<?=url('show/region_do')?>" method="get">
  <div class="reg_div">
    <p>注册</p>
    <ul class="reg_ul">
      <li>
          <span>用户名：</span>
          <input type="text" name="username" value="" placeholder="4-8位用户名" class="reg_user">
          <span class="tip user_hint"></span>
      </li>


      <li>
          <span>密码：</span>
          <input type="password" name="password" value="" placeholder="6-16位密码" class="reg_password">
          <span class="tip password_hint"></span>
      </li>
     
      <li>
          <span>邮箱：</span>
          <input type="text" name="email" value="" placeholder="邮箱" class="reg_email">
          <span class="tip email_hint"></span>
      </li>
      <input type="hidden" name="_token" value="<?=csrf_token()?>">
      <li>
          <span>手机号码：</span>
          <input type="text" name="tel" value="" placeholder="手机号" class="reg_mobile">
          <span class="tip mobile_hint"></span>
      </li>
      
      <li>
        <center>
        <input type="submit" class="red_button" value="提交">
        </center>
      </li>
    </ul>
  </div>
  </form>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
 

</body>
</html>

