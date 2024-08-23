<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css\style1.css">
    <title>About</title>
</head>
<body>
    <div class="main">
    <div class="info">
        <div class="overlay">
        </div>
        <img src="https://images.pexels.com/photos/1131406/pexels-photo-1131406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="cam" class="mobi">
        <div id="circle">
            <div class="feature one">
                <div>
                    <h1>Awards</h1>
                    <p>1.Best corperate award<br>2.14th Golbal Event Award</p>
                </div>
            </div>
            <div class="feature two">
                <div>
                    <h1>Trust</h1>
                    <p>More than 1M satissfied custumers</p>
                </div>
            </div>
            <div class="feature thre">
                <div>
                    <h1>Ambition</h1>
                    <p>To show Uniquenessin every things</p>
                </div>
            </div>
            <div class="feature for">
                <div>
                    <h1>Achievement</h1>
                    <p>Whole world knows</p>
                </div>
            </div>
        </div>
    </div>
    <div class="control">
        <img src="https://cdn1.iconfinder.com/data/icons/basic-arrow/512/Artboard_24-512.png" alt="up" id="upbt">
        <h3>Scroll</h3>
        <img src="https://cdn1.iconfinder.com/data/icons/basic-arrow/512/Artboard_24-512.png" alt="dn" id="dnbt">
    </div>
    </div>
    <script>
        var circle=document.getElementById("circle")
        var upbt=document.getElementById("upbt");
        var dnbt=document.getElementById("dnbt");
        var rotateval=circle.style.transform;
        var rotatesum;
        upbt.onclick=function(){
            rotatesum=rotateval+"rotate(-90deg)";
            circle.style.transform=rotatesum;
            rotateval=rotatesum;
        }
        dnbt.onclick=function(){
            rotatesum=rotateval+"rotate(90deg)";
            circle.style.transform=rotatesum;
            rotateval=rotatesum;
        }

    </script>
</body>
</html>