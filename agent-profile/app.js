$("input").blur(function() {
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
    .fail();
});

function fetchData() {
  $.ajax({
    url: "data.json",
    dataType: "JSON"
  })
    .done(function(jData) {
      fillInHTML(jData);
    })
    .fail();
}

//make it work with js fetch first

// var jData = fetchData();

// function fillInHTML(jData) {
//   console.log(jData);
//   let allAgents = document.querySelector("section");
//   let nameAgent = document.querySelector("#nameAgent");
//   let emailAgent = document.querySelector("#emailAgent");
//   let template = document.querySelector("template");
//   // jData.forEach(function(oneAgent) {
//   let clone = template.cloneNode(true);
//   clone.nameAgent = jData.A1.name;
//   // console.log(oneAgent);
//   // });
// }
