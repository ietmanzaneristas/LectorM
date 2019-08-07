$(function () {

  console.log("ready...");

  jQuery("#formAdminLogin").validate({
    rules: {
      user: "required",
      pass: {
        required: true,
        minlength: 8
      }
    }
  });

});