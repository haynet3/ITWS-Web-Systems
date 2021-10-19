$(document).ready(function () {

    fetch('https://api.frankfurter.app/currencies').then((data) => data.json())
        .then((data) => {
            //display(data);
            console.log(data)
        });

    
    $("#one").click(function (event) {
        $.getJSON('latest.json', function (jd) {
            const host = 'api.frankfurter.app';
            fetch(`https://${host}/latest?amount=10&from=GBP&to=USD`)
                .then(resp => resp.json())
                .then((data) => {
                    alert(`10 GBP = ${data.rates.USD} USD`);
                });
        });
    });

    $("#two").click(function (event) {
        $.getJSON('latest.json', function (jd) {
            const host = 'api.frankfurter.app';
            fetch(`https://${host}/latest?amount=20&from=USD&to=AUD`)
                .then(resp => resp.json())
                .then((data) => {
                    alert(`20 USD = ${data.rates.AUD} AUD`);
                });
        });
    });

    $("#three").click(function (event) {
        $.getJSON('latest.json', function (jd) {
            const host = 'api.frankfurter.app';
            fetch(`https://${host}/latest?amount=30&from=CAD&to=HKD`)
                .then(resp => resp.json())
                .then((data) => {
                    alert(`30 CAD = ${data.rates.HKD} HKD`);
                });
        });
    });

    $("#four").click(function (event) {
        $.getJSON('latest.json', function (jd) {
            const host = 'api.frankfurter.app';
            fetch(`https://${host}/latest?amount=40&from=CHF&to=CNY`)
                .then(resp => resp.json())
                .then((data) => {
                    alert(`40 CHF = ${data.rates.CNY} CNY`);
                });
        });
    });

    $("#five").click(function (event) {
        $.getJSON('latest.json', function (jd) {
            const host = 'api.frankfurter.app';
            fetch(`https://${host}/latest?amount=50&from=USD&to=BRL`)
                .then(resp => resp.json())
                .then((data) => {
                    alert(`50 USD = ${data.rates.BRL} BRL`);
                });
        });
    });
});