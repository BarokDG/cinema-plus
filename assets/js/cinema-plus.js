window.onload = function () {
  $(document).ready(function () {
    $("#cp_contact_form").on("submit", function (e) {
      e.preventDefault();

      var form = $(this),
        name = form.find("#name").val(),
        email = form.find("#email").val(),
        // message = form.find("#message").val(),
        ajaxurl = form.data("url");

      if (
        name === "" ||
        email == ""
        // || message == ""
      ) {
        console.log("Required inputs are empty");
        return;
      }

      $.ajax({
        url: ajaxurl,
        type: "post",
        data: {
          name: name,
          email: email,
          //   message: message,
          action: "cp_save_user_contact_form",
        },
        error: function (response) {
          console.log(response);
        },
        success: function (response) {
          if (response == 0) {
            console.log("Unable to Save");
          } else {
            console.log("Done");
            console.log(response);
          }
        },
      });
    });
  });
};
