(function ($) {
  "use strict";
  $("#install-activate-button").on("click", function (e) {
    e.preventDefault();
    var button = $(this);
    button.attr("disabled", "disabled");
    button.text("Installing & Activating required plugins").addClass("processing-spinner");

    var activationData = {
      action: "fotawp_install_and_activate_plugins",
    };
    $.post(fotawp_localize.ajax_url, activationData, function (response) {
      var checkJSON = /{.*}/; // Regular expression to match the JSON portion
      var match = checkJSON.exec(response);
      if (match) {
        var jsonResponse = match[0]; // Extracted JSON portion
        try {
          var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

          if (responseObj.success === true) {
            window.location.href = fotawp_localize.redirect_url;
          } else {
            console.log("Error!");
          }
        } catch (error) {
          console.log("Error parsing JSON!");
        }
      } else {
        //alert(response);
        if (response.success === true) {
          window.location.href = fotawp_localize.redirect_url;
        } else {
          button.text(response.data.message);
        }
      }
    });
  });

  // Ajax for trigger individual activation of all recommended plugins
  $(".frp_plugin_action").click(function (e) {
    e.preventDefault();
    //alert("button clicked");
    // Get the additional parameters from the button's data attributes
    var plugin_slug = $(this).data("rpslug");
    var pluign_filename = $(this).data("filename");
    $.ajax({
      url: fotawp_localize.ajax_url,
      type: "POST",
      dataType: "json", // Expecting JSON response
      data: {
        action: "fotawp_rplugin_activation",
        get_slug: plugin_slug,
        get_filename: pluign_filename,
        // additional data if needed
      },
      success: function (response) {
        // Handle the response from the server
        if (response.success) {
          //$("#response-container").text(response.data);
          window.location.href = fotawp_localize.redirect_url;
        } else {
          $("#response-container").text(response.data);
        }
      },
      error: function (xhr, status, error) {
        // Handle error
        $("#response-container").text("An error occurred.");
        console.log(xhr.responseText);
      },
    });
  });
  $("#fotawp-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: "fotawp_dismissble_notice",
      },
    });
  });
})(jQuery);
