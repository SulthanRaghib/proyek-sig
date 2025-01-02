@extends('main')
@section('content')
    <div>
        <h1 class="text-center my-3">Informasi Gempa terkini</h1>
        <h5 class="text-center my-3">Sumber: BMKG</h5>
        <div id="map" style="height: 500px;"></div>


        <script>
            // Inisialisasi peta
            var map = L.map("map").setView([-0.9419648, 115.528919], 5.4);
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);


            // memanggil API BMKG dari controller
            let files = {!! file_get_contents($gempa) !!};
            console.log(files);

            let gempa = files.Infogempa.gempa;
            gempa.forEach(data => {
                let kordinat = data.Coordinates.split(",");
                let lat = kordinat[0];
                let long = kordinat[1];

                let marker = L.marker([lat, long]).addTo(map);

                marker.bindPopup(`
                Tanggal : ${data.Tanggal}<br>
                Jam : ${data.Jam}<br>
                Skala Richter : ${data.Magnitude}<br>
                Wilayahh : ${data.Wilayah}<br>
                Potensi : ${data.Potensi}<br>
                `)
            });
        </script>
    </div>
@endsection
