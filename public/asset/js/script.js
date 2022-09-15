// Navbar 
var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 50) {
            nav.classList.add('shadow');
        } else {
            nav.classList.remove('shadow');
        }
    })

// Open modal payment
window.onload = function() {
  OpenBootstrapPopup();
};

function OpenBootstrapPopup() {
  $("#modalSuccesseRegist").modal('show');
}

// Validation form
function ValidationForm() {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
      .forEach(function(form) {
          form.addEventListener('submit', function(event) {
              if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
              }
              
              form.classList.add('was-validated')
              
          }, false)
      })
}
    
// Dropify
$(document).ready(function(){
  $('.dropify').dropify({
    messages: {
                  'default': 'Drag and drop file disini atau klik',
                  'replace': 'Drag and drop atau klik untuk mengganti',
                  'remove': 'Hapus',
                  'error': 'Ooops, gambar tidak terunggah'
              }
  });
})