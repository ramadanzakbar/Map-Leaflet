<!DOCTYPE html>
<html lang="en">

<head>
    <base target="_top">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leaflet <Map></Map></title>

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 100%;
            width: 100%;
            max-width: 100%;
            max-height: 100%;
        }
    </style>


</head>

<body>



    <div id="map" style="leaflet-container"></div>

    <script>
        let blitar = [-8.128789, 112.213551]
        let map = L.map('map').setView(blitar, 15);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // let kankab = [
        //           [
        // 			  -8.12824993045875,
        //             112.21271137762801
        //           ],
        //           [
        // 			  -8.130246856866393,
        //             112.21205945011593
        //           ],
        //           [
        // 			  -8.13107461969841,
        //             112.21434119640816
        //           ],
        //           [
        // 			  -8.129073428838467,
        //             112.215085933441
        //           ],
        //           [
        // 			  -8.12824293980735,
        //             112.21271613537817
        //           ]
        //         ];


        // let polygon = L.polygon(kankab, {color: 'red'}).addTo(map);
        // // map.fitBounds(polygon.getBounds());
        // polygon.setStyle({fillColor: 'green'});
        // polygon.bindPopup('Kantor Kabupaten Kanigoro');
        // polygon.on('click', function (e) {
        // 	this.openPopup();
        // });


        // Ambil data JSON menggunakan Fetch API
        fetch("/json")
            .then(response => response.json())
            .then(data => {
                // console.log(data)
                // Iterasi melalui setiap fitur dalam data JSON
                data.forEach(function(feature) {
                    // Tambahkan marker ke peta
                    L.marker([feature.latitude, feature.longitude]).bindPopup(feature.nama + "<br>" + feature.latitude).addTo(map);
                    
                });
            });
    </script>

</body>

</html>
