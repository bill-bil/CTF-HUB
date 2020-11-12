<?php
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>SQLi CTF</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <style>
        #input {
            position: absolute;
            bottom: 10px;
            left: 50%;
            width: 8em;
            max-width: 80%;
            background: none;
            border: none;
            outline: none;
            border-bottom: 2px solid #fff;
            color: #fff;
            font-size: 3em;
            text-align: center;
            z-index: 999;
            opacity: .25;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            transition: opacity .3s;
        }
        #input:hover, #input:focus {
            opacity: 1;
        }

        body {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

        }
    </style>
</head>
<body>
<script src='./js/jquery.js'></script>
<div class="htmleaf-container">
    <div class="htmleaf-content" >
        <input  name="username" type="text" id="input" onkeydown="save();"  placeholder="注入点！" value=""  />
    </div>
</div>
<script type="text/javascript">
    function save(){
    var e=window.event||arguments.callee.caller.arguments[0];
    if(e.keyCode==13){
        $.ajax({ url: 'sql.php',type:'POST', data: $('#input').serialize()})
    }
}
</script>

<!--<div style="width: 100px;height: 100px" ></div>-->
<script src='./js/underscore.js'></script>
<script  src="./js/script.js"></script>

</body>

</html>
