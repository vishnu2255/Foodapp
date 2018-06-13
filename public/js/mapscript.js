
$(document).ready(function()
{


    var map;
    var mylatlng;
    var lat;
    var lon ,frm,tolat,tolon ;

    var dirDis = new google.maps.DirectionsRenderer();
    var dirSer = new google.maps.DirectionsService();

    $.post('/maps',{id:1,'_token': $('input[name=_token]').val()},function(data){

        var tmp = data.split('_');
        tolat = tmp[0];
        tolon = tmp[1];

        console.log(tolat+', ' + tolon);

        main();

    });
    //main();

 function main() {

    if(navigator.geolocation)
    {
      frm =  navigator.geolocation.getCurrentPosition(a,b);
    //   console.log(frm);
    }
    else{
        alert("User denied access");
    }
    function a(pos){
// console.log(pos);
lat = pos.coords.latitude;
lon = pos.coords.longitude;

route();
    }

    function b(){

        alert(fail);
    }
 }
  
 function route()
    {
        var ma;

        frm = new google.maps.LatLng(lat, lon);
        // var frm = geoLocation();
        to = new google.maps.LatLng(tolat, tolon);

        var options = {
            zoom:12,
            center: frm
        }

        ma = new google.maps.Map(document.getElementById('map-canvas'),options);
        dirDis.setMap(ma);
        // geoLocation();
        calc();

    }

    function calc()
    {
        var request = {
            origin : frm,
            destination: to,
            travelMode: 'DRIVING'
        };
        
        dirSer.route(request,function(result,status){

            if(status=='OK')
            {
                dirDis.setDirections(result);

            }
console.log(status);
        });

    }
    //geoLocation();
    

});



function geoLocation()
    {
        if(navigator.geolocation)
        {
          frm =  navigator.geolocation.getCurrentPosition(success,fail);
        }
            else
            {
                alert("browser not supported");
            }    
        return frm;
    }

    function success(pos)
    {
        // console.log(pos);
         lat = pos.coords.latitude;
         lon = pos.coords.longitude;

       // mylatlng = new google.maps.LatLng(lat,lon);
        // return mylatlng;
        //createMap(mylatlng);

    }

    function fail()
    {
        alert("failed");
    }

    function createMap(mylatlng)
    {
        map = new google.maps.Map(document.getElementById('map'),{
        center : mylatlng,
        zoom : 12
    });

    var marker = new google.maps.Marker(
    {
    position:mylatlng,
    map:map,    
    });

    }