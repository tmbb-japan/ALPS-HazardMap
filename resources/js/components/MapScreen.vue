<template>
    <div id="map" style="height:500px"></div>
</template>

<script>
    export default {
        props: {
            apiKey: String
        },
        mounted() {
            this.initMap();
        },
        methods: {
            initMap() {
                    const script = document.createElement('script');
                    script.src = `https://maps.googleapis.com/maps/api/js?language=kr&region=JP&key=${this.apiKey}&callback=initMap`;
                    script.onload = this.loadMap.bind(this);
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
    };
</script>