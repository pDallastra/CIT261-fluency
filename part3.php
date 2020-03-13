<?php include 'header.php';?>
<body>
    <?php include 'navbar.php';?>
    <div class="main flex col" style="background-color: brown;">
        <div class="content flex col">
            <h2 style="color: white">Paulo Dallastra: Topics 7-8 Basic Fluency</h2>
            <div class="part1-part1 flex row">
                <div class="box5 flex col">
                <h2>Topic 7 - Manipulating CSS Class Properties Using JavaScript</h2>
                <section class="container-all flex col">
        <div class="container flex col">
            <div class="firstPart flex row" id="change">
                <p>Change Background Color
                    <input type="color" name="color" id="changeColor" oninput="simpleStyling()">
                </p>
            </div>
            <div class="secondPart flex col" id="change">
                <p>Change Background Color, Size, Border Radius, and Font Size<input type="button" value="Option 1" onclick="secondPart()"></p>
                <p>Change Background Color, Size, Border Radius, and Font Size<input type="button" value="Option 2" onclick="secondPart2()"></p>
                <p>Change Back<input type="button" value="Normal" onclick="getNormal()"></p>
            </div>
        </div>
    </section>
                </div>
                <div class="box6 flex col">
                    <div class="flex col" id="topic6">
                        <h2>Topic 8 - Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript</h2>
                        <button type="submit" onclick="changeBox1()">Click Me!</button>
                        <div class="box7 flex col">
                            <p id="onOff"></p>
                        </div>
                        <button type="submit" onclick="changeBox2()">Click Me!</button>
                        <div class="box8 flex">
                        <p id="onOff2"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'navbar.php';?>
    <script>
        function simpleStyling() {
            let background = document.getElementById('changeColor').value;
            document.querySelector('.box5').style.background = background;
        }

        function secondPart() {
            let change = "background-color: blue; width: 40%; height: 400px; border-radius: 10px; font-size: 20px;";
            document.querySelector('.box5').style = change;
        }

        function secondPart2() {
            let change = "background-color: green; width: 40%; height: 400px; border-radius: 20px; font-size: 15px";
            document.querySelector('.box5').style = change;
        }
        
        function getNormal() {
            let change = "width: 40%; height: 100%; min-height: auto; background-color: white; border-radius: 10px;";
            document.querySelector('.box5').style = change;
        }
         
        function changeBox1(){
            document.querySelector('.box7').style.transition = 'all 3s';
            document.getElementById('onOff').innerHTML = 'Ready';
        }

        function changeBox2(){
            document.querySelector('.box8').style.transition = 'all 3s';
            document.getElementById('onOff2').innerHTML = 'Ready';
        }
    </script>
</body>

</html>