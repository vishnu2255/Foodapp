
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
  
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    

</body>


{{-- <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDlvh5ZOItKn1VTpdTWmndVObMtyi8WyS8",
    authDomain: "ihearttakeout-578aa.firebaseapp.com",
    databaseURL: "https://ihearttakeout-578aa.firebaseio.com",
    projectId: "ihearttakeout-578aa",
    storageBucket: "ihearttakeout-578aa.appspot.com",
    messagingSenderId: "1026709201120"
  };
  firebase.initializeApp(config);
</script> --}}




<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDlvh5ZOItKn1VTpdTWmndVObMtyi8WyS8",
    authDomain: "ihearttakeout-578aa.firebaseapp.com",
    databaseURL: "https://ihearttakeout-578aa.firebaseio.com",
    projectId: "ihearttakeout-578aa",
    storageBucket: "ihearttakeout-578aa.appspot.com",
    messagingSenderId: "1026709201120"
  };
  firebase.initializeApp(config);
</script>

<script>
    // window.alert("OKAY");

    // var fb = firebase.database().ref('orders');
    // fb.child("orderid").set("12");
    // fb.child("chefid").set("1");
    // fb.child("custid").set("22");
    // fb.child("state").set("pending");


    //writeUserData('1','1','1','pending');

    function writeUserData(userId, orid, chid , sta) {
  firebase.database().ref('orders/' + userId).set({
    orderid: orid,
    chefid: chid,
    status: sta
  });
}
  var sts = firebase.database().ref('/orders');

  sts.on('value',function(snapshot){
      console.log(snapshot.val());
  });

</script>

</html>