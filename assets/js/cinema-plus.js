window.onload = function () {
  $(document).ready(function () {
    $("#cp_contact_form").on("submit", function (e) {
      e.preventDefault();

      var form = $(this),
        first_name = form.find("#grid-first-name").val(),
        last_name = form.find("#grid-last-name").val(),
        email = form.find("#grid-email").val(),
        message = form.find("#grid-message").val(),
        ajaxurl = form.data("url");

      console.log(form.find("#grid-message").val());

      if (
        first_name === "" ||
        last_name == "" ||
        email == "" ||
        message == ""
      ) {
        console.log("Required inputs are empty");
        return;
      }
      var name = `${first_name} ${last_name}`;
      $.ajax({
        url: ajaxurl,
        type: "post",
        data: {
          name: name,
          email: email,
          message: message,
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
