mapboxgl.accessToken =
  "pk.eyJ1IjoiZWthdGVyaW5hZ3AiLCJhIjoiY2swYzVlZzN5MDRwejNlbXUwaWJjYnhzMSJ9.ad2I9a9Kg_1J78hh4WA9rA";
var map = new mapboxgl.Map({
  container: "map",
  // style: 'mapbox://styles/mapbox/streets-v11',
  center: [12.537561, 55.703865],
  style: "mapbox://styles/ekaterinagp/ck0c6kwbx02us1cqe0vcj6zti",
  zoom: 15 // starting zoom
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());

let properties = [
  {
    lat: 12.556166,
    lon: 55.705004,
    marker: "marker.png"
  }
];

let marker = {
  geometry: {
    coordinates: [12.556166, 55.705004],
    type: "Point"
  },
  properties: {
    iconSize: [60, 60],
    message: "Foo"
  },
  type: "Feature"
};

let el = document.createElement("div");
el.className = "marker";
el.style.width = "50px";
el.style.height = "50px";
el.style.backgroundImage = "url(marker.png)";

el.addEventListener("click", function() {
  window.alert(marker.properties.message);
});

new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).addTo(map);
