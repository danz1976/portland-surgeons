<?php include('header.php') ?>

<script src="http://www.google.com/jsapi?key=ABQIAAAAi6c_7OW7ItUt_CX0C6x-MRQ_dAQqo03RS56NMawtmNNQF2tmJBTyCifQa8WgpdGkUJi7qyn5K-tqlg" type="text/javascript"></script>
<script language="Javascript" type="text/javascript">
function initialize() {
    var latlng = new google.maps.LatLng(45.526926,-122.610854);

    var myOptions = {
      zoom: 11,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map
    });
  }

  google.load("maps", "3", {other_params: "sensor=false"});
  google.load("jquery", "1.4");
  google.setOnLoadCallback(initialize);
</script>

<h2>Directions</h2>

<div id="map_canvas"></div>

<p>
We're located at:
</p>

<p id="address">
5050 NE Hoyt, Suite 523<br/>
Portland, OR 97213<br/>
</p>

<p>
From Glisan, enter the hospital complex at 49th Avenue and park at the Plaza parking lot.  Cross the street either via the skybridge or street level to enter the Providence Plaza office building.  Take the elevator to the 5th floor, and look for the sign for 523.
</p>

<p>Download driving directions here:
  <ul>
    <li><a href="forms/Portland_Surgeons.pdf">Directions to Portland Surgeons.pdf</a>
  </ul>
</p>

<p>Or use Google Maps:</p>

<script src="http://www.gmodules.com/gadgets/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/114281111391296844949/driving-directions.xml&amp;up_fromLocation=&amp;up_myLocations=5050%20NE%20Hoyt%20Street%2C%20Suite%20523%2C%20Portland%2C%20OR%2097213&amp;up_defaultDirectionsType=&amp;synd=open&amp;w=500&amp;h=55&amp;brand=light&amp;lang=en&amp;country=US&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>

<?php include('footer.php') ?>
