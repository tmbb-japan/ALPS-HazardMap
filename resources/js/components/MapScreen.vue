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
            async initMap() {
                const cachedMapData = await this.getCachedMapData();
                if (cachedMapData) {
                    this.loadMap(cachedMapData);
                } else {
                    const script = document.createElement('script');
                    script.src = `https://maps.googleapis.com/maps/api/js?language=kr&region=JP&key=${this.apiKey}&callback=initMap`;
                    script.async = true;
                    script.defer = true;
                    script.onload = () => {
                        this.loadMap();
                    };
                    document.head.appendChild(script);                
                }
            },
            async getCachedMapData() {
                const cacheKey = 'google_map_data';
                const cachedData = await axios.get(`/api/cache/${cacheKey}`)  .then(response => {
                    console.log(response.data);
                    return response.data;
                })
                .catch(error => {
                    console.error('에러 내용: ' + error.message);
                    return null;
                });
            },
            async cacheMapData(data) {
                const cacheKey = 'google_map_data';
                await axios.post(`/api/cache/${cacheKey}`, data);
            },
            loadMap() {
                const myLatLng = { lat: 37.4219999, lng: 141.0329822 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 8,
                    center: myLatLng,
                });
                this.cacheMapData(map);
            }            
        }
    }
</script>