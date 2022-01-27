/**
 * File controls.js
 *
 * Access Theme Customizer Controls for a better user experience.
 */

function transparency_controls(api) {}

function sticky_control(api) {
  var sticky_value = wp.customize
    .instance("header_values_sticky_setting")
    .get();
  var sticky_control_exists = wp.customize.control(
    "header_value_sticky_control"
  );
  // Show the Sticky Color Controls
  if (sticky_value == "Yes" && !sticky_control_exists) {
    // Add the dynamic Color section
    add_new_setting(api, "header_values_sticky_background_setting", "#dd3333");

    api.control.add(
      new wp.customize.ColorControl("header_value_sticky_background_control", {
        section: "header_values_section",
        label: "Sticky Background Color",
        setting: "header_values_sticky_background_setting",
        priority: 7,
        // The order of this control in the section.
      })
    );
  } else if (sticky_value == "No") {
    if (wp.customize.control("header_value_sticky_background_control")) {
      wp.customize
        .control("header_value_sticky_background_control")
        .deactivate();
    }
  }
}

(function (api) {
  api.bind("ready", function () {
    // Detect Change
    wp.customize.bind("change", function (setting) {
      /*
        ============================================
        Transparency Controls
        ============================================
      */
      if (setting.id == "header_values_background_transparency_setting") {
        var transparency_value = wp.customize
          .instance("header_values_background_transparency_setting")
          .get();
        var transparency_control_exists = wp.customize.control(
          "header_values_background_color_control"
        );

        if (transparency_value == "No" && !transparency_control_exists) {
          // Add the dynamic Color section
          // add_new_setting(
          //   api,
          //   "header_values_background_color_setting",
          //   "#ffffff"
          // );

          api.add(
            new api.Setting(
              "header_values_background_color_setting",
              "#ffffff",
              {
                transport: "postMessage",
              }
            )
          );

          api.control.add(
            new wp.customize.ColorControl(
              "header_values_background_color_control",
              {
                section: "header_values_section",
                label: "Header Background",
                setting: "header_values_background_color_setting",
                priority: 4,
                // The order of this control in the section.
              }
            )
          );
        } else if (transparency_value == "Yes") {
          if (wp.customize.control("header_values_background_color_control")) {
            wp.customize
              .control("header_values_background_color_control")
              .deactivate();
          }
        }
      }
      /*
        ============================================
        Sticky Controls
        ============================================
      */
      if (setting.id == "header_values_sticky_setting") {
        sticky_control(api);
      }
    });
  });
})(wp.customize);

/*
  ========================================
  Helper Functions
  ========================================
*/

function add_new_panel(
  api,
  panel_name,
  panel_title,
  panel_description = "",
  panel_priority = ""
) {
  api.panel.add(
    new api.Panel(panel_name, {
      title: panel_title,
      description: panel_description,
      priority: panel_priority, // Optional default is 160.
    })
  );
}
function add_new_section(
  api,
  section_name,
  section_title,
  panel = "",
  section_action,
  section_priority
) {
  api.section.add(
    new api.Section(section_name, {
      title: section_title,
      panel: panel,
      customizeAction: section_action, // String above title's Section.
      priority: section_priority, // The order of this section in the panel.
    })
  );
}
function add_new_setting(
  api,
  setting_name,
  setting_default,
  setting_transport = "postMessage"
) {
  api.add(
    new api.Setting(setting_name, setting_default, {
      transport: setting_transport,
    })
  );
}
