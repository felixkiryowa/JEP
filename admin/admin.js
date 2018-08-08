// global variable
var EarRings;
var Bags;
//earings
$(document).ready(function() {
	EarRings = $("#EarRings").DataTable({
		'ajax': 'http://localhost/JEP/index.php/save_earings/fetchMemberEarings',
		'orders': []
	});	
});

//bags
$(document).ready(function() {
	Bags = $("#Bags").DataTable({
		'ajax': 'http://localhost/JEP/index.php/save_bags/fetch_bags',
		'orders': []
	});	
});

//bags
$(document).ready(function() {
	Bags = $("#BestSellers").DataTable({
		'ajax': 'http://localhost/JEP/index.php/best_sellers_controller/fetch_best_sellers',
		'orders': []
	});	
});


/*
 * function to display images in the model
 */
function ViewEarings(id=null){
    if(id){
       // fetch the member data
                $.ajax({
                   url: 'http://localhost/JEP/index.php/save_earings/getSelectedPair/'+id,
                    type: 'post',
                    dataType: 'json',
                    success:function(response){
                      var image = response.image;
                      $('#productImage').html('<img   src="'+base_url+'/featured_images/earings/'+image+'" />');
                      $('#earings_title').html('<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">'+ response.title +'</h4>');
                    }
                }); // /fetch selected member info 
    }else{
        alert("Error Has Occured Retry....!!!");
    }
}

/*
 * function to display images in the model
 */
function ViewBags(id=null){
    if(id){
       // fetch the member data
                $.ajax({
                   url: 'http://localhost/JEP/index.php/save_bags/getSelectedBag/'+id,
                    type: 'post',
                    dataType: 'json',
                    success:function(response){
                      var image = response.image;
                      $('#productImage').html('<img   src="'+base_url+'/featured_images/bags/'+image+'" />');
                      $('#earings_title').html('<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">'+ response.title +'</h4>');
                    }
                }); // /fetch selected member info 
    }else{
        alert("Error Has Occured Retry....!!!");
    }
}

/*
 * function to display images in the model
 */
function ViewBestSellers(id=null){
    if(id){
       // fetch the member data
                $.ajax({
                   url: 'http://localhost/JEP/index.php/best_sellers_controller/get_selected_best_seller/'+id,
                    type: 'post',
                    dataType: 'json',
                    success:function(response){
                      var image = response.image;
                      $('#productImage').html('<img   src="'+base_url+'/featured_images/best_seller/'+image+'" />');
                      $('#earings_title').html('<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">'+ response.title +'</h4>');
                    }
                }); // /fetch selected member info 
    }else{
        alert("Error Has Occured Retry....!!!");
    }
}

//getting all the orders
$(document).ready(function() {
	Orders = $("#Orders").DataTable({
		'ajax': 'http://localhost/JEP/index.php/orders_controller/fetch_all_orders',
		'orders': []
	});	
});