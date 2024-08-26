var mapData=[];

var geocoder;

var lastPos=null;

function initMap()
{
    /*onSiteFullLoad(function()
    {*/
        _initMap();
    /*});*/
}

function _initMap() {
    geocoder=new google.maps.Geocoder();

    $("map,.map,#map").each(function()
    {
        var th=this;
        if(typeof $(this).attr("data-streetview") !== "undefined")
        {
            initStreetView(this);
            return;
        }
        var luogo=$(this).attr("data-luogo");
        var title=luogo;
        if(typeof $(this).attr("data-title")!== "undefined")
        {
            title=$(this).attr("data-title");
        }

        var zoom=3;
        if(typeof $(this).attr("data-zoom") !== "undefined")
        {
            zoom=parseInt($(this).attr("data-zoom"));
        }

        var icon="";
        if(typeof $(this).attr("data-icon") !== "undefined")
        {
            icon=$(this).attr("data-icon");
        }

        var options={
            zoom: zoom,
            center: {lat: -34.397, lng: 150.644},
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#c9c9c9"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                }
            ],
            disableDefaultUI: true
        };
        options = $.extend({
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }, options);


        var map = new google.maps.Map($(this).get(0), options);

        geocoder.geocode( {'address' : luogo}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                mapData.push({map:map,lastPos:results[0].geometry.location,contMap:$(th),checkScroll:false});

                var opts={
                    position: results[0].geometry.location,
                    map: map,
                    title: title
                };

                if(icon!="")
                {
                    opts.icon=icon;
                }

                var marker = new google.maps.Marker(opts);

            }
        });
    });

}

function initStreetView(pano){

    return;

    var luogo=$(pano).attr("data-streetview").split(",");

    var heading=165;
    if(luogo.length>2)
    {
        heading=parseFloat(luogo[2]);
    }

    var panorama = new google.maps.StreetViewPanorama(
        pano,
        {
            position: {lat: parseFloat(luogo[0]), lng: parseFloat(luogo[1])},
            pov: {heading: heading, pitch: 0},
            addressControl: false,
            linksControl: false,
            panControl: false,
            enableCloseButton: false,
            fullscreenControl: true,
            zoom:0,
            /*zoomControl: false,*/
            scrollwheel: false
     });
}

$(window).resize(function()
{

    setTimeout(function()
    {

        for(var i=0;i<mapData.length;i++)
        {
            mapData[i].map.setCenter(mapData[i].lastPos);
        }

    },500);
});
