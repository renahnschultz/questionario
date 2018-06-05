function submitForm(formID) {
  var url = $(formID).attr("action");
  var formData = $(formID).serializeArray();
  console.log(formData);
  $.post(url, formData).done(function(data) {
        console.log(data); //resultado do envio para o servidor
      });
}

function logout(){
  $.post("logout.php", "").done(function(data) {
    location.reload();
  })
  location.reload();
}