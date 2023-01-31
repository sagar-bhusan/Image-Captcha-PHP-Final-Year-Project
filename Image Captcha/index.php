<!DOCTYPE html>
<html>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
        </script>
        <script type="text/javascript">
            function fun(a)
            {
                $(".i").click(function()
                {
                    $(this).css({"opacity":".5"});
                    
                });
                $(".text").append(a+" ")
                $("button").click(function(){
                    var d=$(".text").text();
                $.post("verify.php",{data:d},function(res){
                   
                    alert(res);
                });
                });
            }
        </script>
    </head>
    <body>
        <?php include 'include.php';?>
        <div class="grad"></div>
        <div class="body">
            <div class="head">
                    <img class="head_ico" src="files/<?php echo $folder."/".$i;?>.png">
                    <div class="head_text">
                        <h4>Image Captcha</h4>
                        <h5>Hint:- <span><?php echo $hint;?></span></h5>
                    </div>
            </div>
            <div class="main_body">
                <img class="i" src="files/<?php echo $folder."/".$one;?>.png" onclick="fun(1)">
                <img class="i" src="files/<?php echo $folder."/".$two;?>.png" onclick="fun(2)">
                <img class="i" src="files/<?php echo $folder."/".$three;?>.png" onclick="fun(3)">
                <img class="i" src="files/<?php echo $folder."/".$four;?>.png" onclick="fun(4)">
                <img class="i" src="files/<?php echo $folder."/".$five;?>.png" onclick="fun(5)">
                <img class="i" src="files/<?php echo $folder."/".$six;?>.png" onclick="fun(6)">
                <img class="i" src="files/<?php echo $folder."/".$seven;?>.png" onclick="fun(7)">
                <img class="i" src="files/<?php echo $folder."/".$eight;?>.png" onclick="fun(8)">
                <img class="i" src="files/<?php echo $folder."/".$nine;?>.png" onclick="fun(9)">
            </div>
            <div class="btm">
                <div class="text" ></div>
                <div class="result">

                </div>
                <button>Verify</button>

            </div>
        </div>    
    </body>
</html>