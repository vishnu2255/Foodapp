
$(document).ready(function()
{
alert("test");

    var map;
    var mylatlng;
    var lat;
    var lon ,frm,tolat,tolon ;

    var dirDis = new google.maps.DirectionsRenderer();
    var dirSer = new google.maps.DirectionsService();

    $.post('/maps',{id:1,'_token': $('input[name=_token]').val()},function(data){

        

        main(data);

    });
    //main();

    // geocode();


 function main(data) {

    var tmp = data.split('_');
        tolat = tmp[0];
        tolon = tmp[1];

    console.log(tolat+', ' + tolon);
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

        alert("User denied access");
    }
 }
  
 function route()
    {
        var ma;

        frm = new google.maps.LatLng(lat, lon);
        // var frm = geoLocation();
        to = new google.maps.LatLng(tolat, tolon);

        var options = {
            zoom:8,
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



    //getting lat lng from location

    function geocode()
    {
        var location ='2020 pharmacy Toronto ';
        axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
            address : location,
            key     : 'AIzaSyC_WSJDMq65r3I68pWo_qBhs4kOov7ab4k'
        }
    
        })
        .then(function(response){
            console.log(response);

            console.log(response.data.results[0].formatted_address);

            var lat = response.data.results[0].geometry.location.lat;
            var lng = response.data.results[0].geometry.location.lng;

            console.log(lat+','+lng);

            var tmp = lat+'_'+lng;

            main(tmp);
            // return tmp;

            

        })
        .catch(function(error){
            console.log(error);

        })
    }
    

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



    