function upBtnDewasa () {
  let value = parseInt (document.getElementById ('jlhDewasa').value, 10);
  value = isNaN (value) ? 0 : value;
  value++;
  document.getElementById ('jlhDewasa').value = value;
}

function upBtnAnak () {
  let value = parseInt (document.getElementById ('jlhAnak').value, 10);
  value = isNaN (value) ? 0 : value;
  value++;
  document.getElementById ('jlhAnak').value = value;
}

function downBtnDewasa () {
  let value = parseInt (document.getElementById ('jlhDewasa').value, 10);
  value = isNaN (value) ? 0 : value;
  value--;
  document.getElementById ('jlhDewasa').value = value;
}

function downBtnAnak () {
  let value = parseInt (document.getElementById ('jlhAnak').value, 10);
  value = isNaN (value) ? 0 : value;
  value--;
  document.getElementById ('jlhAnak').value = value;
}
