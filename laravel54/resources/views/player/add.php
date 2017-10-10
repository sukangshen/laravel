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
<form action="<?=url('new/add_do')?>" method="post" enctype="multipart/form-data">
  <div class="reg_div">
    <p>主播的添加</p>
    <ul class="reg_ul">
      <li>
          <span>主播的名字</span>
          <input type="text" name="name" value="" class="reg_user">
          <span class="tip user_hint"></span>
      </li>


      <li>
          <span>头像</span>
          <input type="file" name="file_name" value="" class="reg_password">
          <span class="tip password_hint"></span>
      </li>
     
      <li>
          <span>性别</span>
          <input type="text" name="sex" value="" class="reg_email">
          <span class="tip email_hint"></span>
      </li>
      <input type="hidden" name="_token" value="<?=csrf_token()?>">
      <li>
          <span>年龄</span>
          <input type="text" name="age" value="" class="reg_mobile">
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

