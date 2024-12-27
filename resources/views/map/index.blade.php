@extends('main')
@section('content')
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
    </div>
@endsection
