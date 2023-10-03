<template>
    <div id="map" style="height:500px"></div>
</template>

<script>
    export default {
        props: {
            mapData: Object // mapData를 props로 받음
        },
        mounted() {
            this.initMap();
        },
        methods: {
            initMap() {
                const script = document.createElement('script');
                script.src = this.mapData;
                script.async = true;
                script.defer = true;
                script.onload = () => {
                    this.loadMap();
                };
                document.head.appendChild(script);
            },
            loadMap() {
                const myLatLng = { lat: 37.4219999, lng: 141.0329822 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 8,
                    center: myLatLng,
                });
            }            
        }
    }
</script>