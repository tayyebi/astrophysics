const form = document.querySelector('form'),
    code = document.getElementById('code'),
    play = document.querySelector('.play'),
    response = document.querySelector('#response'),
    otype = document.getElementById('otype'),
    oname = document.getElementById('oname'),
    t1ime = document.querySelector('.stress-board>p.t1me>b'),
    sc0re = document.querySelector('.stress-board>p.sc0re>b'),
    answersList = document.querySelector('.answers-list');

class SkyObject {
    constructor(type, code, name, reserve) {
        this.type = type;
        this.code = code;
        this.name = name;
        this.reserve = reserve;
    }
}

class Ui {
    static addSubmitResultForm(result = 0) {
        response.remove();

        var form = document.createElement('form');

        form.innerHTML = `
        <span>Push to leader board <3</span>
        <input type="hidden" name="score" value="${result}" />
        <input type="text" name="player" placeholder="Your name" />
        <input type="submit" value="I\'m in!" />
        `;

        form.setAttribute('method', 'POST');
        form.setAttribute('action', 'submit.php');

        play.appendChild(form);

    }

    static setTimer(seconds = 60) {
        t1ime.innerHTML = seconds;
    }

    static setScore(score = 0) {
        sc0re.innerHTML = score;
    }

    static addSkyObjectToList(skyObject) {

        const tr = document.createElement('tr');
        tr.innerHTML = `
<td>${skyObject.type}</td>
<td>${skyObject.name}</td>
<td>${skyObject.code}</td>
<td><i class="${skyObject.reserve?'✔':'✘'}"></i></td>
<!--<td><a href="#" class="delete">X</a></td>-->
`;

        answersList.prepend(tr);
    }

    static clearFields() {
        code.value = '';
        code.focus();
    }

    static setNewSkyObject(skyObject) {
        otype.innerHTML = skyObject.type;
        oname.innerHTML = skyObject.name;
    }
};

class Storage {
    static getSkyObjects(code = null) {
        let sobjects;
        if (localStorage.getItem('skyObjects') === null) {
            sobjects = [
                new SkyObject('planet', 1, 'Mercury', null),
                new SkyObject('planet', 2, 'Venus', null),
                new SkyObject('planet', 3, 'Earth', null),
                new SkyObject('planet', 4, 'Mars', null),
                new SkyObject('planet', 5, 'Jupiter', null),
                new SkyObject('planet', 6, 'Saturn', null),
                new SkyObject('planet', 7, 'Uranus', null),
                new SkyObject('planet', 8, 'Neptune', null),

                new SkyObject('planet', 1, 'عطارد', null),
                new SkyObject('planet', 1, 'تیر', null),
                new SkyObject('planet', 2, 'زهره', null),
                new SkyObject('planet', 2, 'ناهید', null),
                new SkyObject('planet', 3, 'زمین', null),
                new SkyObject('planet', 4, 'مریخ', null),
                new SkyObject('planet', 4, 'بهرام', null),
                new SkyObject('planet', 5, 'مشتری', null),
                new SkyObject('planet', 5, 'هرمز', null),
                new SkyObject('planet', 5, 'برجیس', null),
                new SkyObject('planet', 6, 'زحل', null),
                new SkyObject('planet', 6, 'کیوان', null),
                new SkyObject('planet', 7, 'اورانوس', null),
                new SkyObject('planet', 8, 'نپتون', null),
            ];
            // localStorage.setItem(JSON.encode(sobjects));
        } else {
            sobjects = JSON.parse(localStorage.getItem('skyObjects'));
        }

        if (code != null) {
            sobjects.forEach(function(sobject, index) {
                if (sobject.code != code) {
                    sobjects.splice(index, 1, null);
                }
            });

            sobjects = sobjects.filter(element => {
                return (element != null);
            });
        }

        return sobjects;
    };

    static newRandom() {
        let sobjects = this.getSkyObjects();
        let rand = Math.floor((Math.random() * 22));
        return sobjects[rand];
    }
}

Ui.setNewSkyObject(Storage.getSkyObjects(3)[0]);