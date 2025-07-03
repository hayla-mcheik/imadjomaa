<template>
  <div>
    <div ref="mapContainer" class="google-map"></div>
  </div>
</template>

<script>
export default {
  name: 'GoogleMap',
  props: {
    apiKey: {
      type: String,
      required: true
    },
    location: {
      type: Object,
      default: () => ({
        lat: 40.7128,
        lng: -74.0060,
        title: "New York City",
        description: "This is a pink location marker in NYC!"
      })
    }
  },
  data() {
    return {
      map: null,
      marker: null,
      infoWindow: null
    };
  },
  mounted() {
    this.initMap();
  },
  methods: {
    initMap() {
      // Load Google Maps API
      const script = document.createElement('script');
      script.src = `https://maps.googleapis.com/maps/api/js?key=${this.apiKey}&callback=initMap`;
      script.async = true;
      window.initMap = this.createMap;
      document.head.appendChild(script);
    },
    
    createMap() {
      // Create map instance
      this.map = new google.maps.Map(this.$refs.mapContainer, {
        center: this.location,
        zoom: 14,
        styles: [
          {
            featureType: "poi",
            elementType: "labels",
            stylers: [{ visibility: "off" }]
          }
        ]
      });

      // Create pink marker
      this.createMarker();
    },
    
    createMarker() {
      // Custom pink marker SVG
      const pinkMarker = `
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
          <path fill="#FF69B4" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
          <circle cx="12" cy="9" r="3" fill="white"/>
        </svg>
      `;

      // Marker with custom icon
      this.marker = new google.maps.Marker({
        position: this.location,
        map: this.map,
        title: this.location.title,
        icon: {
          url: `data:image/svg+xml;base64,${btoa(pinkMarker)}`,
          scaledSize: new google.maps.Size(40, 40),
          anchor: new google.maps.Point(20, 40)
        },
        animation: google.maps.Animation.DROP
      });

      // Create info window
      this.infoWindow = new google.maps.InfoWindow({
        content: `
          <div class="info-window">
            <h3>${this.location.title}</h3>
            <p>${this.location.description}</p>
          </div>
        `
      });

      // Show info window on click
      this.marker.addListener('click', () => {
        this.infoWindow.open(this.map, this.marker);
      });

      // Open info window automatically
      setTimeout(() => {
        this.infoWindow.open(this.map, this.marker);
      }, 1500);
    }
  }
};
</script>

<style scoped>
.google-map {
  height: 500px;
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

::v-deep .info-window {
  color: #333;
  padding: 10px;
}
::v-deep .info-window h3 {
  margin: 0 0 5px 0;
  color: #FF69B4;
}
::v-deep .info-window p {
  margin: 0;
  font-size: 14px;
}
::v-deep .gm-style .gm-style-iw-c {
  border-radius: 8px;
  padding: 0;
}
</style>