function getHous() {
    let today = new Date();
    let date = time = today.getHours() + ":" + today.getMinutes();
    return date;
}

function txtClear(element){
    element.value = '';
}