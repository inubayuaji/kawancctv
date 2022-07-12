require("./bootstrap");

function gtagReportConversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };

  gtag('event', 'conversion', {
      'send_to': 'AW-10944468836/VsP5CPmr1ssDEOSu3eIo',
      'event_callback': callback
  });
  return false;
}

Alpine.store("events", {
    contact() {
        fbq("track", "Contact");
        gtagReportConversion();
    },
});

Alpine.data("navbar", () => ({
    open: false,

    toggle() {
        this.open = !this.open;
    },
}));

Alpine.start();