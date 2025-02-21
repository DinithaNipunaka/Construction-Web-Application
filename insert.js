$(document).ready(function() {
    $("#btn_enter").on("click",function(e){
        // alert($('#i1').val());
          //     // Get form data
        e.preventDefault();
      var formData = {
        i1: $('#i1').val(),
        l1: $('#l1').val(),
        w1: $('#w1').val(),

        i2: $('#i2').val(),
        l2: $('#l2').val(),
        w2: $('#w2').val(),

        i3: $('#i3').val(),
        l3: $('#l3').val(),
        w3: $('#w3').val(),

        i4: $('#i1').val(),
        l4: $('#l4').val(),
        w4: $('#w4').val(),

        i5: $('#i5').val(),
        l5: $('#l5').val(),
        w5: $('#w5').val(),

        i6: $('#i6').val(),
        l6: $('#l6').val(),
        w6: $('#w6').val(),

        i7: $('#i7').val(),
        l7: $('#l7').val(),
        w7: $('#w7').val(),

        i8: $('#i8').val(),
        l8: $('#l8').val(),
        w8: $('#w8').val(),

        i9: $('#i9').val(),
        l9: $('#l9').val(),
        w9: $('#w9').val(),

        i10: $('#i10').val(),
        l10: $('#l10').val(),
        w10: $('#w10').val(),

        i11: $('#i11').val(),
        l11: $('#l11').val(),
        w11: $('#w11').val(),

        i12: $('#i12').val(),
        l12: $('#l12').val(),
        w12: $('#w12').val()
      };

      // Send form data using AJAX
      $.ajax({
        type: 'POST',
        url: 'insert.php', // PHP script that handles database insertion
        data: formData,
        success: function(response) {
          console.log(response); // Handle success response
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle error
        }
      });

    })
}
);