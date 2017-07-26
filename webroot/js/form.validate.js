$(document).ready(function () {
    $("#booking_form_advanced").validate({
        rules: {
            name: "required",
            country_id: "required",
            state_id: {
                required: true,
                minlength: 2
            },
            city_id: {
                required: true,
                minlength: 5
            },
            pincode: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            name: "Please enter your firstname",
            country_id: "Please enter your lastname",
            state_id: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            city_id: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            pincode: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            }
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
        }
    });
});

$('#modal-open').on('click', function(){
    initialize();
    $('#myModal').modal('show');    
        
});


function initialize() {
        var markers = [];
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(28.00000, 77.0000),new google.maps.LatLng(28.1000, 77.1000));
        map.fitBounds(defaultBounds);
        var input = document.getElementById('pac-input');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var searchBox = new google.maps.places.SearchBox(input);
        
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            var places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }
            for (var i = 0, marker; marker = markers[i]; i++) {
                marker.setMap(null);
            }
            markers = [];
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0, place; place = places[i]; i++) {
                var image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
                var marker = new google.maps.Marker({
                    draggable: true,
                    map: map,
                    icon: image,
                    title: place.name,
                    position: place.geometry.location
                });
                // drag response
                google.maps.event.addListener(marker, 'dragend', function (e) {
                    displayPosition(this.getPosition());
                });
                // click response
                google.maps.event.addListener(marker, 'click', function (e) {
                    displayPosition(this.getPosition());
                });
                markers.push(marker);
                bounds.extend(place.geometry.location);
            }
            map.fitBounds(bounds);
        });
        google.maps.event.addListener(map, 'bounds_changed', function () {
            var bounds = map.getBounds();
            searchBox.setBounds(bounds);
        });
        // displays a position on two <input> elements
        function displayPosition(pos) {
            document.getElementById('lat').value = pos.lat();
            document.getElementById('long').value = pos.lng();
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);