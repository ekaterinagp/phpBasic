function getNewAgent() {
  event.preventDefault();
  console.log("click");
  let inputForName = document.querySelector("#nameAgent");
  let inputForEmail = document.querySelector("#emailAgent");
  let newAgentName = inputForName.value;
  let newAgentEmail = inputForEmail.value;
  console.log("newAgentName", newAgentName);
  console.log({ newAgentEmail });

  $.ajax({
    url: "api-add-agent.php",
    method: "POST",
    data: {
      // id: div.id,
      name: newAgentName,
      email: newAgentEmail
    }
  }).done(function(jData) {
    console.log({ jData });
    let id = jData;
    createDivwithAgent(id, newAgentEmail, newAgentName);
  });
  inputForEmail.value = "";
  inputForName.value = "";
}

function createDivwithAgent(id, newAgentEmail, newAgentName) {
  let div = document.createElement("div");
  div.setAttribute("class", "agent");
  div.id = id;
  let inputName = document.createElement("input");
  inputName.setAttribute("type", "text");
  inputName.setAttribute("data-update", "name");
  inputName.setAttribute("class", "agentUp");
  let inputEmail = document.createElement("input");
  inputEmail.setAttribute("class", "agentUp");
  inputEmail.setAttribute("type", "text");
  inputEmail.setAttribute("data-update", "email");
  let img = document.createElement("img");
  img.setAttribute("src", "default.png");
  inputName.setAttribute("value", newAgentName);
  inputEmail.setAttribute("value", newAgentEmail);

  div.append(img, inputName, inputEmail);
  document.querySelector("#agents").prepend(div);
}

$(document).on("blur", ".agentUp", function() {
  event.preventDefault();
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

// function fetchData() {
//   $.ajax({
//     url: "data.json",
//     dataType: "JSON"
//   })
//     .done(function(jData) {
//       fillInHTML(jData);
//     })
//     .fail();
// }

{
  /* <img src="a.png">
<input data-update="name" type="text" name="" id="" value="A">
<input data-update="email" type="text" name="" id="" value="a@a.com"> */
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
