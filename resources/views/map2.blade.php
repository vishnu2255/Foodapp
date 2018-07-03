{{-- @extends('layouts.app') --}}




{{csrf_field()}}
<div id="map-canvas" class="container" style="width:100%;height: 100%; margin-left: 10px;text-align: center" >

</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

{{-- <div id="map-canvas" style="width:600px;height: 500px;" >

</div> --}}

{{-- <script src="{{ asset('js/mapscript.js') }}" defer></script> --}}

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_WSJDMq65r3I68pWo_qBhs4kOov7ab4k&libraries=places"  async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    var map;
    var mylatlng;
    var lat;
    var lon ,frm,tolat,tolon ;


  $.post('/maps',{id:1,'_token': $('input[name=_token]').val()},function(data){
     console.log(data);
    geocode(data);
  });


//    var t = geocode();


    function geocode(data)
    {
        var location = data ; 
       var t = axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
            address : location,
            key     : 'AIzaSyC_WSJDMq65r3I68pWo_qBhs4kOov7ab4k'
        }
    
        })
        .then(function(response){
            // console.log(response);

            console.log(response.data.results[0].formatted_address);

            var lat = response.data.results[0].geometry.location.lat;
            var lng = response.data.results[0].geometry.location.lng;

            console.log(lat+','+lng);
            tmp = lat+'_'+lng;
            main(tmp);
            // return tmp;
            

        })
        .catch(function(error){
            console.log(error);

        })

        // return t;
    }


 function main(data) {

var tmp = data.split('_');
    tolat = tmp[0];
    tolon = tmp[1];

console.log(tolat+', ' + tolon);
if(navigator.geolocation)
{
  frm =  navigator.geolocation.getCurrentPosition(a,b);
  console.log(frm);
}
else{
    alert("User denied access");
}
function a(pos){
console.log(pos);
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

    var dirDis = new google.maps.DirectionsRenderer();
    var dirSer = new google.maps.DirectionsService();

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
        // calc();

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

</script>

