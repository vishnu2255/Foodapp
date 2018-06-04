<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Multiple Item Product Carousel</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body {
	background: #e2eaef;
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #7ac400;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
    text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 150px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}

.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}

.chef-content{
    margin-left: 30px;
}
.carousel .thumb-content .btn {
	color: #7ac400;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #7ac400;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .carousel-control {
	height: 44px;
	width: 40px;
	background: #7ac400;	
    margin: auto 0;
    border-radius: 4px;
	opacity: 0.8;
}
.carousel .carousel-control:hover {
	background: #78bf00;
	opacity: 1;
}
.carousel .carousel-control i {
    font-size: 36px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -19px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: #fff;
	text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel .carousel-control.left i {
	margin-left: -2px;
}
.carousel .carousel-control.right i {
	margin-right: -4px;
}
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}

.chefimage{
height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		

<script type="text/javascript">
	$(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		});
    $("#btnminus").click(function(){

	var $inps = $(this).parent().children().get(1);
    // alert(inps.getAttribute("value"));
	$inps.val(12);
	// alert($inps.innerText);

	});

	$("#btnplus").click(function(){
		var $inps = $(this).parent().children().get(1);
        // alert(inps.getAttribute("value"));
		alert($inps.text);
	
    });

   $(".textqty").change(
function()
{
	var qty =  $(this).val();
	var btn = $(this).next();
	// alert(btn.text());
	// alert(btn.attr("id"));
	var oldid=btn.attr("id");
	// "_"+qty; 
// alert(oldid);
	var arr = oldid.split("_");
    // alert(arr.length);
	if(arr.length === 2)
	 {
	 	// alert(oldid+"_"+qty);
		btn.attr("id",oldid+"_"+qty);
	 }
	else if(arr.length === 3)
	{
	arr[2] = qty;
    // alert(arr[2]); 
    var newid = arr.join("_");
	btn.attr("id",newid);
	// alert(arr.join("_"));

    }

	// alert(oldid);
	//  btn.attr("id",oldid);
}
   );

  
	var itemsobj ={
		
	};



//button click function --AddToCart
	$(".item-btn1").click(function(){

  var itemslist=[];
    // alert($(this).next());
	$(this).hide();
	$(this).next().show();
	var id = $(this).attr("id") + '_1';
	itemslist.push(id);
	
	$.post('/cart',{'items' : itemslist,'_token': $('input[name=_token]').val()},function(data)
	{		
		console.log(data);
	});

	});



	$(".item-btn").click(function(){
         
		// var inps = $(this).parent().children().get(3);
    // alert(inps.getAttribute("value"));
	// alert(inps.get);
	// inps.setAttribute("value",3);

	     var qtybefore   = $(this).prev().val();
		//  alert(qtybefore.val()); 

		 if(qtybefore == 0)
		 {
			 alert("Please select correct quantity ")

		 }
		 else
		 {

		 var inrtext = $(this).text();
		 if(inrtext ==='Add to Cart')
		 {
			// alert(inrtext);
			var oldid= $(this).attr("id");
			$(this).html("Remove from Cart");

    var arr = oldid.split("_");
    // alert(arr.length);
	       
		   for(i=0;i<itemslist.length;i++)
		   {
			   var eachitem = itemslist[i].split("_");

			   if(eachitem[0] === arr[0])
			   {
				   eachitem[2] == arr[2];
			   }

		   }

		 }
		 else{
			//var itmid= $(this).attr("id");
			var oldid= $(this).attr("id");
			

    var arr = oldid.split("_");
    // alert(arr.length);
	       
		   for(i=0;i<itemslist.length;i++)
		   {
			   var eachitem = itemslist[i].split("_");
                
			   if(eachitem[0] === arr[0])
			   {
				//    eachitem[2] == arr[2];
				itemslist.splice(i,1);
			   }

		   }


			
			$(this).html("Add to Cart");
			$(this).prev().val(0);


			// qtybefore.val(0);
			//  alert('Added to Cart');
		 }
			 
		}

		console.log(itemslist);

		// itemslist.fill($(this).attr("id"));
        
		// $(this).toggle(
		// 	function(){$(this).css({"color":"green"})},
		// 	function(){$(this).css({"color":"red"})}
		// );

		

    //     if(itemslist.indexOf(itmid) === -1)
	// {
	// 	itemslist.push(itmid);
	// }
		
		// alert($(this).attr("id"));
	});

	$("#check_out").click(function()
	{
		
	$.post('/checkout',{'items' : itemslist,'_token': $('input[name=_token]').val()},function(data)
	{
		console.log(data);
	});	
    // alert(itemslist);
	});


	});	
</script>

{{csrf_field()}}
</head>
<body>