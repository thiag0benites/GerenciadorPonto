window.onload = function(){
    let txtStartHours = document.getElementById('txtStartHours');
    let txtEndHours = document.getElementById('txtEndHours');
    let txtDescription = document.getElementById('txtDescription');

    let btnStartHours = document.getElementById('btnStartHours');
    let btnEndHours = document.getElementById('btnEndHours');
    let btnClear = document.getElementById('btnClear');
    let btnSave = document.getElementById('btnSave');

    btnStartHours.onclick = function() {
        txtStartHours.value = getHous();
    }

    btnEndHours.onclick = function() {
        txtEndHours.value = getHous();
    }

    btnClear.onclick = function(){
        txtClear(txtStartHours);
        txtClear(txtEndHours);
        txtClear(txtDescription);
    }

}