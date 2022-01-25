// (function (api) {
//   api.bind("ready", function () {
//     console.log("API IS READY");

//     wp.customize.bind("change", function (setting) {
//       /*
//         ========================================
//         Background Color
//         ========================================
//     */
//       if (setting.id == "header_values_background_transparency_setting") {
//         console.log("Check");
//         var transparency_value = wp.customize
//           .instance("header_values_background_transparency_setting")
//           .get();
//         var transparency_control_exists = wp.customize.control(
//           "header_value_background_color_control"
//         );

//         // If Transparent BG
//         if (transparency_value == "No" && !transparency_control_exists) {
//           wp.customize
//             .control("header_value_background_color_control")
//             .activate();
//         } else if (transparency_value == "Yes" && transparency_control_exists) {
//           wp.customize
//             .control("header_value_background_color_control")
//             .deactivate({ duration: 0 });
//         }
//       }
//     });
//   });
// })(wp.customize);

(function () {
  /**
   * Run function when customizer is ready.
   */
  wp.customize.bind("ready", function () {
    wp.customize.bind("change", function (setting) {
      if (setting.id == "header_values_background_transparency_setting") {
        console.log(
          wp.customize
            .instance("header_values_background_transparency_setting")
            .get()
        );
        wp.customize.control(
          "header_value_background_color_control",
          function (control) {
            /**
             * Run function on setting change of control.
             */
            control.setting.bind(function (value) {
              if (
                wp.customize
                  .instance("header_values_background_transparency_setting")
                  .get() == "Yes"
              ) {
                console.log("Hiding");
                wp.customize
                  .control("header_value_background_color_control")
                  .deactivate();
              } else {
                console.log("Showing");
                wp.customize
                  .control("header_value_background_color_control")
                  .activate();
              }
            });
          }
        );
      }
    });
  });
})();
