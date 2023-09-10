<?php include 'ini/config.php';?>
<?php include 'ini/top.php';?>

<style>
    #map {
        height: 650px;
        width: 100%;
    }
</style>

<div class="content-page">
	<div class="content">
		<div class="container">
            <div class="row">
				<div class="col-sm-12">
					<h4 class="page-title">Mapa</h4>
					<ol class="breadcrumb">
                        <li>
                            <a href="index.php">Panel</a>
                        </li>
                        <li class="active">
                            Mapa
                        </li>
					</ol>
				</div>
			</div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                    <div id="map"></div>

                    <script>
    
        function initMap() {
            var central = {lat: 14.9899858, lng: -89.7179174};
            var ubicacion1 = {lat: 14.989209, lng: -89.716622};
            var ubicacion2 = {lat: 14.992508, lng: -89.710665};
            var ubicacion3 = {lat: 14.994207, lng: -89.715935};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16, 
                center: central,
                mapTypeId: 'satellite'
            });

            var marker1 = new google.maps.Marker({
                position: ubicacion1,
                map: map,
                title: 'Tecu'
            });

            var marker2 = new google.maps.Marker({
                position: ubicacion2,
                map: map,
                title: 'Tecu'
            });

            var marker3 = new google.maps.Marker({
                position: ubicacion3,
                map: map,
                title: 'Tecu'
            });
        }
    </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'ini/foot.php';?>