<?php include 'header.php';?>
<body ontouchstart="touched()" ontouchend="untouched()">
    <?php include 'navbar.php';?>
    <div class="main flex col">
        <div class="content flex col">
            <h2 style="color: white">Paulo Dallastra: Topics 9,10 Basic Fluency</h2>
            <h3 style="color: white">Topic 9 - Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.) and Animation and Transition Events</h3>
            <div class="box9 flex col">
                <p id="touched">Change when you touch the screen</p>
            </div>
            <div class="box10 flex col">
                <p id="untouched">Change when you remove your finger from the touch screen</p>
            </div>
        </div>
        <div class="content flex col">
            <h3 style="color: white">Topic 10 - HTML5 Tags - Video, Audio, and Canvas</h3>
            <div class="box11 flex col">
            <h2 style="color: white; margin: auto;">My Favorite Song - RHCP - Wet Sand(Live)</h2>
                <video width="40%" height="250px" controls style='margin: auto'>
                <source src="rhcp.mp4" type="video/mp4">
                </video>
            </div>
            <div class="box12 flex col">
            <h2 style="color: white; margin: auto;">My Favorite Song - RHCP - Wet Sand</h2>
                <audio controls style='margin: auto'>
                    <source src="rhcp.mp3" type="audio/mpeg">
                </audio>
            </div>
            <h2 style="color: white; margin: auto;">My - Canvas</h2>
            <div class="box13 flex col">
                    <canvas id="canvas" width="200px" height="100px">
                    Your browser does not support the HTML5 canvas tag.</canvas>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="app.js"></script>
    <script>
    function touched() {
        let color1 = Math.floor(Math.random() * 10000);
        document.querySelector('.box9').style.background = `#${color1}`;
        document.querySelector('#touched').style.color = 'white';
    }
    function untouched(){
        let color1 = Math.floor(Math.random() * 10000);
        document.querySelector('.box10').style.background = `#${color1}`;
        document.querySelector('#untouched').style.color = 'white';
    }

    var c = document.getElementById("canvas");
    var ctx = c.getContext("2d");
    ctx.font = "25px Arial";
    ctx.fillText("Paulo Dallastra",15,60);
    </script>
</body>
</html>