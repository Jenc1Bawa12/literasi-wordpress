(($) => {
  "use strict";

  $(document).ready(function () {
    const { ajaxURL, welcomeNonce, redirectURL } = ajaxObj;

    const $dashboard = $("#saaslauncher-dashboard");
    const $tabItems = $("#saaslauncher-admin-header .nav-menu-item");
    const $tabContents = $dashboard.find(".tab-content");

    $tabItems.each(function () {
      const $this = $(this);
      const slug = $this.attr("data-tab");

      $this.click(function () {
        $tabItems.removeClass("is-active");
        $tabContents.removeClass("is-active");

        $this.addClass("is-active");
        $dashboard.find(`#${slug}.tab-content`).addClass("is-active");
      });
    });

    /* Welcome notice script */
    $("#saaslauncher-welcome-notice").on(
      "click",
      ".notice-dismiss",
      function () {
        $.ajax({
          url: ajaxURL,
          method: "POST",
          data: {
            action: "saaslauncher_dismissble_notice",
            nonce: welcomeNonce,
          },
          success: function (response) {
            if (response.success) {
              console.log("Notice dismissed successfully.");
              $("#saaslauncher-welcome-notice").fadeOut(); // Hide the notice
            } else {
              console.log("Failed to dismiss notice!");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log("Error:", textStatus, errorThrown);
          },
        });
      },
    );

    // FAQ Accordion
    $dashboard.find(".accordion-header").on("click", function () {
      var $item = $(this).closest(".accordion-item");
      var isActive = $item.hasClass("active");

      // close all others (remove this block if you want multiple open at once)
      $(".accordion-item").not($item).removeClass("active");

      $item.toggleClass("active", !isActive);
    });

    /* Plugin Installation */
    $(".saaslauncher-install-plugin").click(function () {
      const $this = $(this);
      const $spinner = $this.find(".spinner");
      const pluginSlug = $this.attr("data-plugin-slug");

      $spinner.removeClass("saaslauncher-display-none");
      $this.addClass("saaslauncher-disabled");

      $.post(
        ajaxURL,
        {
          action: "saaslauncher_install_and_activate_plugins",
          plugins: JSON.stringify([pluginSlug]),
          nonce: welcomeNonce,
        },
        function (response) {
          // alert(response);
          var checkJSON = /{.*}/; // Regular expression to match the JSON portion
          var match = checkJSON.exec(response);

          if (match) {
            var jsonResponse = match[0]; // Extracted JSON portion
            try {
              var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

              if (responseObj.success === true) {
                // window.location.href = response.data.redirect_url;
                console.log("Plugin installed");
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          }

          window.location.href = redirectURL;

          $spinner.addClass("saaslauncher-display-none");
          $this.removeClass("saaslauncher-disabled");
        },
      );
    });

    // Install Cozy Essential Addons/Advanced Import
    $(".saaslauncher-install-required-plugins").click(function () {
      const $this = $(this);
      const $spinner = $this.find("#saaslauncher-admin-spinner");

      $spinner.removeClass("saaslauncher-display-none");
      $this.addClass("saaslauncher-disabled");

      $.post(
        ajaxURL,
        {
          action: "saaslauncher_install_and_activate_plugins",
          plugins: JSON.stringify([
            "cozy-addons",
            "cozy-essential-addons",
            "advanced-import",
          ]),
          nonce: welcomeNonce,
        },
        function (response) {
          // alert(response);
          var checkJSON = /{.*}/; // Regular expression to match the JSON portion
          var match = checkJSON.exec(response);

          if (match) {
            var jsonResponse = match[0]; // Extracted JSON portion
            try {
              var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

              if (responseObj.success === true) {
                // window.location.href = response.data.redirect_url;
                console.log("Plugin installed");
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          }

          window.location.href = redirectURL;

          $spinner.addClass("saaslauncher-display-none");
          $this.removeClass("saaslauncher-disabled");
        },
      );
    });
  });
})(jQuery);
