(function() {
    /* Variables y objects */
    /* 
  
      app = id form
      num-characters = id numbers of the characters
  
    */
    var app = document.getElementById('app');
    var inputCharacters = document.getElementById('num-characters');

    /* 
      objects.
      we add the list of allowed charactes
      symbols, numbres, upper case, lower case.
    */

    var config = {
        charactersPass: parseInt(inputCharacters.value),
        symbolsPass: true,
        numbersPass: true,
        uppercasePass: true,
        lowcasePass: true
    }

    var charactersPass = {
        numbersPass: '0 1 2 3 4 5 6 7 8 9',
        //symbolsPass: '! @ # $ % ^ & * ( ) _ - + = { [ } ] ; : < , > . ? /',
        symbolsPass: '! @ # $ % & * _ .',
        uppercasePass: 'A B C D E F G H I J K L M N O P Q R S T U V W X Y Z',
        lowcasePass: 'a b c d e f g h i j k l m n o p q r s t u v w x y z'
    }

    /* Event to avoid sending data and update the site */
    app.addEventListener('submit', function(e) {
        e.preventDefault();
    });

    /* Event add character */

    app.elements.namedItem('btn-plus-one').addEventListener('click', function() {
        config.charactersPass++;
        inputCharacters.value = config.charactersPass;

        //console.log('numero de caracteres: ' + config.charactersPass);
    });

    app.elements.namedItem('btn-less-one').addEventListener('click', function() {
        if (config.charactersPass > 1) {
            config.charactersPass--;
            inputCharacters.value = config.charactersPass;

            //console.log('numero de caracteres: ' + config.charactersPass);
        }
    });

    app.elements.namedItem('btn-symbols').addEventListener('click', function() {
        btnToggle(this);
        config.symbolsPass = !config.symbolsPass;
    });

    app.elements.namedItem('btn-numbers').addEventListener('click', function() {
        btnToggle(this);
        config.numbersPass = !config.numbersPass;
    });

    app.elements.namedItem('btn-uppercase').addEventListener('click', function() {
        btnToggle(this);
        config.uppercasePass = !config.uppercasePass;
    });

    app.elements.namedItem('btn-generate').addEventListener('click', function() {
        generatePass();
    });

    app.elements.namedItem('input-password').addEventListener('click', function() {
        copyPass();
    });

    /* Functions - btnToggle, generatePass, copyPass */

    function btnToggle(elemento) {
        elemento.classList.toggle('false');
        elemento.childNodes[0].classList.toggle('fa-check');
        elemento.childNodes[0].classList.toggle('fa-times');
    }

    function generatePass() {
        var charactersEnd = '';
        var password = '';
        for (property in config) {
            if (config[property] == true) {
                charactersEnd += charactersPass[property] + ' ';
            }
        }

        charactersEnd = charactersEnd.trim();
        charactersEnd = charactersEnd.split(' ');

        for (var i = 0; i < config.charactersPass; i++) {
            password += charactersEnd[Math.floor(Math.random() * charactersEnd.length)];
        }

        app.elements.namedItem('input-password').value = password;
    }

    function copyPass() {
        app.elements.namedItem('input-password').select();
        document.execCommand("copy");
        document.getElementById('alert-copy').classList.add('active');

        setTimeout(function() {
            document.getElementById('alert-copy').classList.remove('active');
        }, 2000);


    }

    generatePass();


}());