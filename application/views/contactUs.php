
<div class="container">
<h3>Contact Us</h3>

<h4>Our Location</h4>
<div class="row">
    <div class="col l6">
        <style type="text/css">
            #map{
                width: 100%;
                height:400px;
            }
        </style>
        <div id="map"></div>
            <script>
                function initMap() {
                    // The location of Uluru
                    var uluru = {lat: 6.727401, lng: 79.901018};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 10, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});
                }
            </script>
            <!--Load the API from the specified URL
            * The async attribute allows the browser to render the page while the API loads
            * The key parameter will contain your own API key (which is not needed for this tutorial)
            * The callback parameter executes the initMap() function
            -->
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIhU3IXA8pgNj9JAQviK8bd19wrdcyVrM&callback=initMap">
            </script>

        
    </div>
    <div class="col l6">
        <blockquote>
            <h5>
            Residence:<br>
            21A, Kulatunga Rd,<br>
            Udahamulla, Panadura<br>
            <i class=" material-icons">call</i>
            038 2243463
            </h5>
        </blockquote>
        <blockquote>
                <h5>
                231,<br>
                New Galle Road<br>
                Egodauyana<br>
                Moratuwa<br>
                <i class=" material-icons">call</i>
                071 4874450 / 011 2659659
                </h5>
            </blockquote>
    </div>
</div>
</div>