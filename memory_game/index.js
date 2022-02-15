var score = 0;
var timesUp = false;
gameTime = 15;

form.addEventListener('submit', function(e) {

    e.preventDefault();

    const sobject = new SkyObject(otype.innerHTML, code.value, oname.innerHTML, false);

    if (code.value === '' || code.value <= 0) {} else {
        let items = Storage.getSkyObjects(code.value);
        if (items.lenght != 0) {
            items.forEach(item => {
                if (item.name == oname.innerHTML) {
                    sobject.reserve = true;
                }
            });
        }

        if (sobject.reserve) score += 2;
        else score -= 1;
        console.log(score);

        Ui.addSkyObjectToList(sobject);
        Ui.clearFields();
        Ui.setNewSkyObject(Storage.newRandom());
        Ui.setScore(score);
    }


});

setInterval(() => {
    if (timesUp)
        return;
    gameTime--;
    Ui.setTimer(gameTime);
    if (gameTime <= 0) {
        timesUp = true;
        Ui.addSubmitResultForm(score);
    }
}, 1000);