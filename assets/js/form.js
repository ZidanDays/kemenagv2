function nextForm() {
  // Copy input values from form 1 to form 2
  var form1Inputs = document.getElementById('form-surat-tugas').elements;
  var form2Inputs = document.getElementById('form-pernyataan').elements;
  for (var i = 0; i < form1Inputs.length; i++) {
    var input = form1Inputs[i];
    var form2Input = document.getElementById('form-pernyataan').elements[input.name];
    if (form2Input) {
      form2Input.value = input.value;
    }
  }
  // Hide form 1 and show form 2
  document.getElementById('form1').style.display = 'none';
  document.getElementById('form2').style.display = 'block';
}
