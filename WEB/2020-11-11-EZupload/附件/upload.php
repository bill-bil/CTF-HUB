<?php
//定义字符
header('Content-type:text/html;charset=utf-8');
$a=0;
if (is_uploaded_file(@$_FILES['upfile']['tmp_name'])) {
    $upfile = $_FILES["upfile"];
    $name = $upfile['name'];
    $tmp_name = $upfile["tmp_name"];//上传文件的临时存放路径
    move_uploaded_file($upfile['tmp_name'], 'img\\' . $upfile['name']);
    echo "上传成功";
    $a=1;
} else {
    echo "您还没有上传文件";
}
?>

    <div id="upload_panel" >
                <form enctype="multipart/form-data" method="post">
                        <input class="input_file" type="file" name="upfile"/>
                        <input class="button" type="submit" name="btn" value="上传"/>

                </form>
        </div>
<div id="img">
                    <?php
                    if($a == 1){
                        echo '<img src="img\\'.$upfile['name'].'" width="350px" />';
                        echo '<br/>','';
                    } ?>
</div>
    </div>
