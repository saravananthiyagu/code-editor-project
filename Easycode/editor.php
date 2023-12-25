<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy-Code</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/57b4039f6f.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navigation">
    <h1>EASY-CODE</h1>
    <button id="home" title="Home" onclick="home()"><i class="fa-solid fa-house"></i></button>
    <!--<button id="download" title="Save" onclick="save()"><i class="fa-solid fa-floppy-disk"></i></button>-->
    </nav>
    <br><br>
    <div class="container">
        <div class="left">
            <i class="fa-brands fa-html5"></i>
            <label >HTML</label><button id="index.html" title="Save" onclick='doDL(document.getElementById("html-code").value)'><i class="fa-solid fa-download"></i></button>
            <textarea id="html-code" onkeyup="run()" spellcheck="false" placeholder="write your html code here..."></textarea>
            <i class="fa-brands fa-css3-alt"></i>
            <label >CSS</label><button id="download" title="Save" onclick='doDL(document.getElementById("css-code").value)'><i class="fa-solid fa-download"></i></button>
            <textarea id="css-code" onkeyup="run()" spellcheck="false" placeholder="write your css code here..."></textarea>
            <i class="fa-brands fa-square-js"></i>
            <label >JavaScript</label><button id="download" title="Save" onclick='doDL(document.getElementById("js-code").value)'><i class="fa-solid fa-download"></i></button>
            <textarea  id="js-code" onkeyup="run()" spellcheck="false" placeholder="write your JavaScript code here..."></textarea>
        </div>
        <div class="right">
            <i class="fa-solid fa-play"></i>
            <label >output</label>
            <iframe id="output"></iframe>
        </div>
    </div>
    <script>
        function run(){
            let htmlcode = document.getElementById("html-code").value;
            let csscode = document.getElementById("css-code").value;
            let jscode = document.getElementById("js-code").value;
            let output = document.getElementById("output");

            output.contentDocument.body.innerHTML = htmlcode+"<style>"+csscode+"</style>";
            output.contentWindow.eval(jscode);
        }

        //savefile function
        function doDL(s){
                function dataUrl(data) {return "data:x-application/text," + escape(data);}
                window.open(dataUrl(s));
        }
        
        function home(){
            alert('If you leave the editor you have to again login. Do you want to exit');
            document.location.href="index.php";
        }
    </script>
</body>
</html>