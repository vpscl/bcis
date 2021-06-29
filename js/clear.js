$(document).ready(function () {
  $(".clear-btn").click(function () {
    $('.cert-info input[type="text"]').val("");
    $(".cert-info #address").val("");
    $('.cert-info input[type="date"]').val("");
    $(".cert-info select").val("");
  });
});
