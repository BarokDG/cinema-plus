window.onload = function () {
  $(document).ready(function () {
    $("#cp_contact_form").on("submit", function (e) {
      e.preventDefault();

      // Remove All Classes Initially
      $("#grid-first-name").removeClass("has-error-border");
      $("#grid-first-name-error").removeClass("has-error-text");

      $("#grid-last-name").removeClass("has-error-border");
      $("#grid-last-name-error").removeClass("has-error-text");

      $("#grid-email").removeClass("has-error-border");
      $("#grid-email-error").removeClass("has-error-text");

      $("#grid-message").removeClass("has-error-border");
      $("#grid-message-error").removeClass("has-error-text");

      $("#submitting-button").removeClass("show");
      $("#submit-button").removeClass("hide");

      var form = $(this),
        first_name = form.find("#grid-first-name").val(),
        last_name = form.find("#grid-last-name").val(),
        email = form.find("#grid-email").val(),
        message = form.find("#grid-message").val(),
        ajaxurl = form.data("url");

      console.log(form.find("#grid-message").val());

      if (
        first_name === "" ||
        last_name === "" ||
        email === "" ||
        message === ""
      ) {
        if (first_name === "") {
          $("#grid-first-name").addClass("has-error-border");
          $("#grid-first-name-error").addClass("has-error-text");
        } else if (last_name === "") {
          $("#grid-last-name").addClass("has-error-border");
          $("#grid-last-name-error").addClass("has-error-text");
        } else if (email === "") {
          $("#grid-email").addClass("has-error-border");
          $("#grid-email-error").addClass("has-error-text");
        } else if (message === "") {
          $("#grid-message").addClass("has-error-border");
          $("#grid-message-error").addClass("has-error-text");
        }

        return;
      }

      var name = `${first_name} ${last_name}`;
      form.find("input, button, textarea").attr("disabled", "disabled");

      $("#submitting-button").addClass("show");
      $("#submit-button").addClass("hide");
      $("#error-alert-message").removeClass("show");

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
          $("#error-alert-message").addClass("show");

          // Deal with Buttons
          $("#submitting-button").removeClass("show");
          $("#submit-button").removeClass("hide");
        },
        success: function (response) {
          if (response == 0) {
            $("#error-alert-message").addClass("show");
          } else {
            $("#success-alert-message").addClass("show");

            $("#cp_contact_form")[0].reset();
          }

          $("#submitting-button").removeClass("show");
          $("#submit-button").removeClass("hide");
        },
      });
    });
  });

  // To remove errors on type
  $(document).ready(function () {
    $("#cp_contact_form").on("input", function (e) {
      var form = $(this),
        first_name = form.find("#grid-first-name").val(),
        last_name = form.find("#grid-last-name").val(),
        email = form.find("#grid-email").val(),
        message = form.find("#grid-message").val();

      if (first_name !== "") {
        $("#grid-first-name").removeClass("has-error-border");
        $("#grid-first-name-error").removeClass("has-error-text");
      } else if (last_name !== "") {
        $("#grid-last-name").removeClass("has-error-border");
        $("#grid-last-name-error").removeClass("has-error-text");
      } else if (email !== "") {
        $("#grid-email").removeClass("has-error-border");
        $("#grid-email-error").removeClass("has-error-text");
      } else if (message !== "") {
        $("#grid-message").removeClass("has-error-border");
        $("#grid-message-error").removeClass("has-error-text");
      }
    });
  });
};
