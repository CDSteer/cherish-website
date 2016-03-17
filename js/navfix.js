$( document ).ready(function() {

  document.getElementById("apply").onclick = function () {
      location.href = "apply.html";
  };
  document.getElementById("crucible").onclick = function () {
      location.href = "crucible.html";
  };
  document.getElementById("blog").onclick = function () {
      location.href = "blog.html";
  };
  document.getElementById("contact").onclick = function () {
      location.href = "contact.html";
  };
  document.getElementById("partners").onclick = function () {
      location.href = "partners.html";
  };
  document.getElementById("contactpage").onclick = function () {
      location.href = "contactform.html";
  };
  document.getElementById("vision").onclick = function () {
      location.href = "vision.html";
  };
  document.getElementById("themes").onclick = function () {
      location.href = "themes.html";
  };
  document.getElementById("governance").onclick = function () {
      location.href = "gov.html";
  };
  document.getElementById("themes").onclick = function () {
      location.href = "themes.html";
  };
  document.getElementById("de_network").onclick = function () {
      location.href = "de_network.html";
  };
  document.getElementById("theme_healthSocial").onclick = function () {
      location.href = "theme_healthSocial.html";
  };
  document.getElementById("theme_resourceConstrained").onclick = function () {
      location.href = "theme_resourceConstrained.html";
  };
  document.getElementById("theme_safetyAndSecurity").onclick = function () {
      location.href = "theme_safetyAndSecurity.html";
  };


  // document.getElementById("projects").onclick = function () {
  //     location.href = "projects.html";
  // };
  // document.getElementById("partners").onclick = function () {
  //     location.href = "partners.html";
  // };

  $("#slideshow > div:first").hide();
    setInterval(function() {
    $('#slideshow > div:first')
       .fadeOut(2000)
         .next()
         .fadeIn(2000)
         .end()
      .appendTo('#slideshow');
    },  7500);
});
