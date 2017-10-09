<!DOCTYPE html>  
    <html lang="en">  
    <head>  
        <meta charset="UTF-8">  
        <title>Document</title>  
    </head>  
    <body>  
        <form action="<?=url('types/add_upd')?>" method="post" >  
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
            <input type="hidden" name="clas_id" value="<?php echo $re->clas_id ?>">  
            <table>  
                <tr>  
                    <td>分类名称：</td>  
                    <td><input type="text" name="class_name" value="<?php echo $re->class_name ?>"></td>  
                </tr>  
                <tr>  
                    <td>分类添加时间</td>  
                    <td><input type="text" name="class_addtime" value="<?php echo $re->class_addtime ?>"></td>  
                </tr>  
                <tr>  
                    <td><input type="submit" value="修改"></td>  
                    <td></td>  
                </tr>  
            </table>  
        </form>  
    </body>  
    </html>  
