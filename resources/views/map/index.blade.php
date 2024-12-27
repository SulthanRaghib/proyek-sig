<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta kampus="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    {{-- Bootstrap CSS 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Bootstrap JS 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        #map #map {
            height: 400px;
        }
    </style>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('map.index') }}">Lokasi Kampus</a>
        </div>
    </nav> --}}
    <div>
        <h1 class="text-center my-3">Provinsi Indonesia</h1>
        <div id="map" style="height: 500px;"></div>

        <script>
            // Inisialisasi peta
            var map = L.map("map").setView([-0.9419648, 115.528919], 5.4);
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);

            // Ambil data dari controller yang sudah diubah ke JSON
            var provinsiData = @json($provinsi);
            console.log(provinsiData);

            // Tambahkan setiap provinsi ke dalam peta
            provinsiData.forEach(function(item) {
                var aoi = {
                    type: "Feature",
                    properties: {
                        Nama: item.name,
                        AltName: item.alt_name,
                    },
                    geometry: {
                        coordinates: [item.longitude, item.latitude],
                        type: "Point",
                    },
                };

                L.geoJSON(aoi, {
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup(
                            `<b>${feature.properties.Nama}</b>
                    <br>${feature.properties.AltName}`
                        );
                    },
                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    },
                }).addTo(map);
            });
        </script>
</body>

</html>
