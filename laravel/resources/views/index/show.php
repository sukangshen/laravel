    <!DOCTYPE html>  
    <html lang="en">  
    <head>  
        <meta charset="UTF-8">  
        <title>Document</title>  
    </head>  
    <body>  
    <center>  
        <table>  
            <tr>  
                <td>姓名</td>  
                <td>密码</td>  
                <td>设置</td>  
            </tr>  
            <?php foreach ($users as $key => $val): ?>
            <tr>  
                <td><?php echo $val->name; ?></td>  
                <td><?php echo $val->pass; ?></td>  
      
                <td>  
                    <a href="add_del?id=<?php echo $val->id ?>">删除</a>  
                    <a href="add_update?id=<?php echo $val->id ?>">修改</a>  
                </td>  
            </tr>    
            <?php endforeach ?>     
        </table>  
        </center>  
    </body>  
    </html>  