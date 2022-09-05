// $(function() {
//     // Initialize form validation on the registration form.
//     // It has the name attribute "registration"
//     $("form[name='registrasi']").validate({
//       // Specify validation rules
//       rules: {
//         // The key name on the left side is the name attribute
//         // of an input field. Validation rules are defined
//         // on the right side
//         nama: "required",
//         kodeRegistrasi: "required",
//         uangJaminan: "required",
//         selectBank: "required",
//         noRekening: "required"
//       },
//       // Specify validation error messages
//       messages: {
//         selectBank: "Pilih bank terlebih dahulu",
//         noRekening: "Masukkan nomor rekening",
//       },
//       // Make sure the form is submitted to the destination defined
//       // in the "action" attribute of the form when valid
//       submitHandler: function(form) {
//         form.submit();
//       }
//     });
//   });

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