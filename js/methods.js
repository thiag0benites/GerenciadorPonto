function getHous() {
    let today = new Date();
    let date = time = today.getHours() + ":" + today.getMinutes();
    return date;
}

function txtClear(element){
    element.value = '';
}

function getDayWeek() {
    let semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
    let today = new Date();
    return semana[today.getDay()];
}