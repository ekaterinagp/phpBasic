$(".agentUp").blur(function() {
  var sAgentID = $(this)
    .parent()
    .attr("id");
  var sUpdateKey = $(this).attr("data-update");
  var sNewValue = $(this).val();
  console.log("sNewValue", sNewValue);
  $.ajax({
    url: "api-update-agent.php",
    method: "POST",
    data: {
      id: sAgentID,
      key: sUpdateKey,
      value: sNewValue
    }
  })
    .done(function() {
      console.log("agent has been updated");
    })
    .fail(function() {
      console.log("not updated");
    });
});
