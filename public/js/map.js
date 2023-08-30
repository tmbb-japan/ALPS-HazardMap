function initMap() {
  const myLatLng = { lat: 37.4219999, lng: 141.0329822 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: myLatLng,
  });
}