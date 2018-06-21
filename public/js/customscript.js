
        $(document).ready(function(){

               
                       

            var drnksarray=[];



            $('.drnksleft').click(function(e){
                // console.log(e.target);
                e.preventDefault();
                var qty = parseInt($(this).parent().find("input").val());
                var id = $(this).parent().find("input").attr("id");                
                var obj = $(this).parent().find("input");

                if(qty==0)
                {

                }
                else{

                    obj.val(qty-1);
                    drnksarray[id] = qty-1;
                    console.log(drnksarray);
                    obj.trigger("change");
                }
               

            });
            $('.drnksryt').click(function(e){
                e.preventDefault();
                var qty = parseInt($(this).parent().find("input").val());
                var obj = $(this).parent().find("input"); 
                var id = $(this).parent().find("input").attr("id");

                 if(qty==10)
                {

                }
                else{
                obj.val(qty+1);
                obj.trigger("change");
                drnksarray[id] = qty+1;
                console.log(drnksarray);
                }

            });


            $("#savedrinks").click(
                function(){
                
                // alert(drnksarray);
                    // $.post('/cart',{'drnks' : drnksarray,'_token': $('input[name=_token]').val(),function(data)
                    // {
                    //     console.log(data);
                    // });
                        
                    $.post('/cart',{'ite' : drnksarray,'_token': $('input[name=_token]').val()},function(data)
	{	
       var cartdata = data.split('_');
        // $("#cartitems").text(cartdata[1]); 
         $("#tot_val").text(cartdata[0]);			        
		console.log(data);
	});
                    // for(var ke in drnksarray)
                    // {
                    //     console.log(ke);
                    //     console.log(drnksarray[ke]);

                    // }
                }
            );


            $('.quantity-right-plus').click(function(e)
            {
                e.preventDefault();
                // var qty = parseInt($("#quantity").val());
                var qty = parseInt($(this).parent().find("input").val());
                var obj = $(this).parent().find("input");               

                if(qty==10)
                {

                }
                else{
                obj.val(qty+1);
                obj.trigger("change");
                }

                // alert(qty);

               

            });


            $('.quantity-left-minus').click(function(e)
            {
                e.preventDefault();

                // var qty = parseInt($("#quantity").val());
                var qty = parseInt($(this).parent().find("input").val());
                // alert(qty);
                var obj = $(this).parent().find("input");

                if(qty==1)
                {

                }
                else{
                    // $("#quantity").val(qty-1);
                    // obj.attr("value",qty-1);
                    obj.val(qty-1);
                    obj.trigger("change");
                }
                
            });


            
            $('[data-toggle="tooltip"]').tooltip();

            $(".removebtn").click(function(e){
                // e.preventDefault();
                var id = $(this).attr("id").split("_")[1];
                $.post('/cart/'+id,{'_token': $('input[name=_token]').val()},function(data)
                {		
                    console.log(data);
                });

                 location.reload(true);
                // alert(id);
            });
//cart drinks section
           $(".showdrinks").click(function(){
               var cid = $(this).attr("id");
               var did = "#drinks_"+cid;

            //    alert(did);
               $(did).show();


           });


        //cart items section
        $(".btnquantitycart").change(
                function(){

                    // alert(2);
    var itemslist = [];
	var id = $(this).attr("id");
    var qty = $(this).val();

    var arr= id.split('_');
    var chefid  =  arr[1];
    var spanele = "#tot_val";
    // var cartele = "cartitems";


    if(arr.length == 2)
    {
        id = id + '_' + qty ; 

    }
    else if(arr.length == 3)
    {
        arr[2] = qty;
        id = arr.join("_");
    }
    $(this).attr("id",id);
	itemslist.push(id);
    // console.log(itemslist);
// alert(id);	
	$.post('/cart',{'items' : itemslist,'_token': $('input[name=_token]').val()},function(data)
	{	
        var cartdata = data.split('_');
        $("#cartitems").text(cartdata[1]); 
        $(spanele).text(cartdata[0]);	
		console.log(data);
	});
                    // alert(true);
                }
            );

        });
    