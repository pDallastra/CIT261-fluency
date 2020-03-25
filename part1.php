<?php include 'header.php';?>

<body>
    <?php include 'navbar.php';?>
    <div class="main flex col">
        <div class="content flex col">
            <h2 style="color: white">Paulo Dallastra: Topics 1,3,4,6 Basic Fluency</h2>
            <div class="part1-part1 flex row">
                <div class="box5 flex col">
                    <form>
                        <h2>This Form will trigger all topics on this page</h2>
                        Name: <input type="text" id="name" oninput="checkCompletion()"><br>
                        Age: <input type="text" id="age" oninput="checkCompletion()"><br>
                        Favorite Color: <input type="text" id="color" oninput="checkCompletion()"><br>
                        <button type="submit" id="submit-button" disabled
                            style="width: 100px; height: 20px;">Save</button>
                    </form><br>
                    <h2>Topic 1 - Working with/ Loop, Condition Statements, Functions, Variables, Parameters,
                        Arrays, Associative Arrays</h2>
                    <p>- Using variables to get the user input;</p>
                    <p>- Using array to receive true and false depending on input;</p>
                    <p>- Using associative array to set it equal to the variables and run the forEach;</p>
                    <p>- Using a 'forEach' loop to change the button color and background in case the two fields are
                        filled out;</p>
                    <p>- Using if state to check if there's any input to send true or false to the array;</p>
                    <p>- Using a function with parameters to change the submit button depending on the values.</p>
                    <div class="flex col">
                        <h2>Topic 3 - Working with JSON Striginfy and Parse</h2>
                        <p id="topic1"></p>
                        <p id="topic2"></p>
                        <p id="topic3"></p>
                    </div>
                </div>
                <div class="box6 flex col" id="box2">
                    <div class="flex col" id="topic4">
                        <h2>Topic 4 - Consuming a JSON Web Service using XMLHTTPRequest</h2>
                        <h3>API for Phrases about Chuck Norris - For new ones, just load the page again</h3>
                    </div>
                    <h2>Topic 6 - DOM</h2>
                    <div class="flex col" id="topic5">
                    </div>
                    <button type="submit" id="remove" style="display: none; width: 100px; height: 20px;">Delete First
                        Line</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'navbar.php';?>
    <script src="app.js"></script>
    <script>
        let arrayInfo = [];
        const getUser = (ev) => {
            changeButtonColor('transparent', 'solid 1px');
            document.getElementById('submit-button').disabled = true;
            ev.preventDefault();
            let user = {
                "person": [{
                    "name": document.querySelector('#name').value,
                    "age": document.querySelector('#age').value,
                    "color": document.querySelector('#color').value
                }]
            }
            var myJSON = JSON.stringify(user);
            var parsedUser = JSON.parse(myJSON);
            document.getElementById('topic1').innerHTML = `Result of JSON Stringify ${myJSON}`;
            document.getElementById('topic2').innerHTML = `Result of JSON Parse ${parsedUser}`;
            document.getElementById('topic3').innerHTML =
            `Result of strigifying back ${JSON.stringify(parsedUser)}`;


            let info = {
                name: document.querySelector('#name').value,
                age: document.querySelector('#age').value,
                color: document.querySelector('#color').value
            }
            arrayInfo.push(info);
            document.forms[0].reset();
            let myInfo = JSON.stringify(info);

            const add = document.getElementById('topic5');
            let newName = document.createElement('p');
            newName.setAttribute('id', 'p');
            newName.textContent = 'Name: ' + info.name;
            add.appendChild(newName);
            let newAge = document.createElement('p');
            newAge.setAttribute('id', 'p');
            newAge.textContent = 'Age: ' + info.age;
            add.appendChild(newAge);
            let newColor = document.createElement('p');
            newColor.setAttribute('id', 'p');
            newColor.textContent = 'Color: ' + info.color;
            add.appendChild(newColor);
            document.getElementById('remove').style.display = 'flex';
        }

        const remove = (ev) => {
            ev.preventDefault();
            const add = document.getElementById('topic5');
            let para = document.getElementById('p');
            add.removeChild(para);

            const div = document.getElementById('box2');
            let addTopic5 = document.createElement(div);
            addTopic5.setAttribute('id', 'topic5');
            addTopic5.setAttribute('class', 'flex col');
            div.appendChild(addTopic5);
            document.getElementById('remove').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('submit-button').addEventListener('click', getUser);
        })

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('remove').addEventListener('click', remove);
        })

        var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
        var response = JSON.parse(this.responseText);
        console.log(response.value);
        const add = document.getElementById('topic4');
            let newPara = document.createElement('p');
            newPara.textContent = response.value;
            add.appendChild(newPara);
	}
});

xhr.open("GET", "https://matchilling-chuck-norris-jokes-v1.p.rapidapi.com/jokes/random");
xhr.setRequestHeader("x-rapidapi-host", "matchilling-chuck-norris-jokes-v1.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "724e1901a5mshdd731b38d81adeep13b42djsneb82489803b3");
xhr.setRequestHeader("accept", "application/json");

xhr.send(data);
    </script>
</body>

</html>