$(function () {
    enable_cb();
    $("#ac").click(enable_cb);
  });

  function enable_cb() {
      $("input.tv").prop("disabled", !this.checked);
  }