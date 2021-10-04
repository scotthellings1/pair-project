var mymap = L.map('mapid').setView([52.57864848760729, 1.108750080730542], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiaGV4YWdvbnN1bjcwIiwiYSI6ImNrdThpMWFscDBpamEyd256NDVxajhlOHkifQ.IGt9FonVdy7GbCejH8YXKw'
}).addTo(mymap);

var marker = L.marker([52.57864848760729, 1.108750080730542]).addTo(mymap);

marker.bindPopup("<b>Find Us Here!</b><br>38a Barnham Broom Rd,<br> Wymondham<br>NR18 0DF.").openPopup();
