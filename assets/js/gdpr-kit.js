"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/* GDPR-Kit */
var banner = document.getElementById('cookie_banner-wrapper');

function closeCookie() {
  document.cookie = 'cookie-note=1;path=/;max-age=864000';
  banner.style.display = 'none';
}

if (document.cookie.indexOf('cookie-note=1') !== -1) {
  banner.style.display = 'none';
}

window.dataLayer.push(_defineProperty({
  event: "wearecandyblue_gdpr-kit_consent-approved"
}, "event", "wearecandyblue_gdpr-kit_consent-rejected"));
/*

const hello = (name) => {
    return `hello ${name}`;
};

function closeCookie() {
    document.cookie = "cookie-note=1;path=/;max-age=864000", banner.style.display = "none"
}

var banner = document.getElementById("cookie_banner-wrapper");
-1 !== document.cookie.indexOf("cookie-note=1") && (banner.style.display = "none");

*/