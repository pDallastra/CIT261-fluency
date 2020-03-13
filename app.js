function changeButtonColor(background, border){
    document.querySelector('#submit-button').style.background = background;
    document.querySelector('#submit-button').style.border = border;
}

function checkCompletion() {
    var name = document.querySelector('#name').value;
    var age = document.querySelector('#age').value;
    var color = document.querySelector('#color').value;
    var els = [];
    els[0] = name;
    els[1] = age;
    els[2] = color;
    var isDone = [];
    els.forEach(el => {
        if (el !== '' && el !== undefined) {
            isDone.push(true);
            changeButtonColor('#ff6900', 'none');
            document.getElementById('submit-button').disabled = false;
        } else {
            isDone.push(false);
        }
    })
    if (isDone.includes(false)) {
        changeButtonColor('transparent', 'solid 1px');
        document.getElementById('submit-button').disabled = true;

    }
}
