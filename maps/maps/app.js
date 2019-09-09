// init();

mapboxgl.accessToken =
  "pk.eyJ1IjoiZWthdGVyaW5hZ3AiLCJhIjoiY2swYzVlZzN5MDRwejNlbXUwaWJjYnhzMSJ9.ad2I9a9Kg_1J78hh4WA9rA";
var map = new mapboxgl.Map({
  container: "map",
  center: [12.55505, 55.704001], // starting position
  zoom: 12, // starting zoom
  style: "mapbox://styles/ekaterinagp/ck0c6kwbx02us1cqe0vcj6zti"
});
map.addControl(new mapboxgl.NavigationControl());

// let properties = [{ lat: 12.556166, lon: 55.705004, marker: "marker.png" }];

// var el = document.createElement("div");
// el.className = "marker";
// el.style.backgroundImage = "url(marker.png)";
// el.style.width = "60px";
// el.style.height = "60px";
// el.id = marker.id;

// var el1 = document.createElement("div");
// el1.className = "marker";
// el1.style.backgroundImage = "url(marker.png)";
// el1.style.width = "60px";
// el1.style.height = "60px";
// el1.id = marker1.id;

function removeActive() {
  document.querySelectorAll(".activeP").forEach(name => {
    name.classList.remove("activeP");
  });
  // document.querySelectorAll("className").forEach(marker => {
  //   marker.classList.remove("activeP");
  // });
}
// el.addEventListener("click", function() {
//   // window.alert(marker.properties.message)
//   if (document.querySelector("#" + marker.id)) {
//     document.querySelector("#" + marker.id).classList.toggle("activeP");
//   }
// });

//other option
// el.addEventListener("click", function() {
//   console.log(`Highlight property with ID ${this.id} `);
//   // if (document.querySelector(".activeP")) {
//   //   document.querySelector(".property").classList.remove("activeP");
//   // }
//   removeActive();
//   document.getElementById(this.id).classList.add("activeP");
//   document.getElementById("V-" + this.id).classList.add("activeP");
// });

// el1.addEventListener("click", function() {
//   console.log(`Highlight property with ID ${this.id} `);
//   // if (document.querySelector(".activeP")) {
//   //   document.querySelector(".property").classList.remove("activeP");
//   // }

//   // document.querySelectorAll(".property").forEach(property => {
//   //   property.classList.remove("activeP");
//   //   marker.classList.remove("activeP");
//   // });
//   removeActive();
//   document.getElementById(this.id).classList.add("activeP");
//   document.getElementById("V-" + this.id).classList.add("activeP");
// });

// add marker to map
// new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).addTo(map);
// new mapboxgl.Marker(el1).setLngLat(marker1.geometry.coordinates).addTo(map);

// let img = document.querySelector("#imgProperty");
// let address = document.querySelector("#addressProperty");
// img.setAttribute("src", marker.address.img);
// address.textContent = marker.address.address;
function fetchData() {
  fetch("data.json")
    .then(function(response) {
      return response.json();
    })
    .then(function(properties) {
      console.log(JSON.stringify(properties));
      let propertiesArray = Object.keys(properties).map(function(key) {
        return [Number(key), properties[key]];
      });
      console.log({ propertiesArray });
      fillInMarkers(propertiesArray);
    });
}

fetchData();

function fillInMarkers(propertiesArray) {
  for (let i = 0; i < propertiesArray.length; i++) {
    console.log(propertiesArray[i]);
    var el = document.createElement("div");
    el.className = "marker";
    el.style.backgroundImage = "url(marker.png)";
    el.style.width = "60px";
    el.style.height = "60px";
    el.id = propertiesArray[i][1].id;
    // console.log(property);
    new mapboxgl.Marker(el)
      .setLngLat(propertiesArray[i][1].geometry.coordinates)
      .addTo(map);

    el.addEventListener("click", function() {
      console.log(`Highlight property with ID ${this.id} `);
      // if (document.querySelector(".activeP")) {
      //   document.querySelector(".property").classList.remove("activeP");
      // }
      removeActive();
      document.getElementById(this.id).classList.add("activeP");
      document.getElementById("V-" + this.id).classList.add("activeP");
    });
  }
}
