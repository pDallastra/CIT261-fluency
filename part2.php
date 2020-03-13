<?php include 'header.php';?>

<body>
    <?php include 'navbar.php';?>
    <div class="main flex col">
        <div class="content flex col">
            <h2 style="color: white">Paulo Dallastra: Topics 2,5 Basic Fluency</h2>
            <div class="part1-part1 flex row">
                <div class="box5 flex col">
                    <h2></h2>
                    <form action="">
                        <h2>Storing in Local Storage API by using Object Creation Functions, Inheritance, Properties, Methods, Instantiation</h2>
                        Name: <input type="text" id="name" oninput="checkCompletion()"><br>
                        Age: <input type="text" id="age" oninput="checkCompletion()"><br>
                        Favorite Color: <input type="text" id="color" oninput="checkCompletion()"><br>
                        <button type="submit" id="submit-button" disabled
                            style="width: 100px; height: 20px;">Save</button>
                    </form>
                </div>
                <div class="box6 flex col">
                    <div class="flex col" id="topic6">
                        <h2>Retrieving from Local Storage API </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'navbar.php';?>
    <script src="app.js"></script>
    <script>
        function input(){
            let Info = {
            saveLocal: function(obj) {
                localStorage.setItem(`${obj.name}`, JSON.stringify(obj));
            }
        };

        let myObj = {
            name: document.querySelector('#name').value,
            age: document.querySelector('#age').value,
            color: document.querySelector('#color').value
        } 

        let saveLocal = Object.create(Info).saveLocal(myObj);
        }

        let btn = document.getElementById('submit-button');

        btn.addEventListener('click', input);

        for (let index = 0; index < localStorage.length; index++) {
            let storedValue = localStorage.key(index);
            let parsedObj = JSON.parse(localStorage.getItem(storedValue));
            const add = document.getElementById('topic6');
            let newName = document.createElement('p');
            newName.setAttribute('id', 'p');
            newName.textContent = 'Name: ' + parsedObj.name;
            add.appendChild(newName);
            let newAge = document.createElement('p');
            newAge.setAttribute('id', 'p');
            newAge.textContent = 'Age: ' + parsedObj.age;
            add.appendChild(newAge);
            let newColor = document.createElement('p');
            newColor.setAttribute('id', 'p');
            newColor.textContent = 'Color: ' + parsedObj.color;
            add.appendChild(newColor);
        }
    </script>
</body>

</html>