/**
 * Get best sellers Images
 * @param {type} id
 * @returns {undefined}
 */
function view_best_sellers_images(id =
   null)
{
   if (id)
   {
      // fetch the mem data
      $.ajax(
      {
         url: 'http://localhost/JEP/index.php/best_sellers_controller/get_selected_best_seller/' +
            id,
         type: 'post',
         dataType: 'json',
         success: function(
            response)
         {
            var image =
               response.image;
            var product_id = response.id;
            $(
               '#productImage'
            ).html(
               '<img   src="' +
               base_url +
               '/featured_images/best_seller/' +
               image +
               '" />');
            $(
               '#earings_title'
            ).html(
               '<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">' +
               response.title +
               '</h4>');
            $(
               '#product_description'
            ).html(
               '<p>' +
               response.description +
               '</p>');
            //$('#').value = product_id;
            document.getElementById("product_id").value = product_id;
            document.getElementById("product_name").value =  response.title;
            document.getElementById("product_price").value =  response.price;
         }
      }); // /fetch selected member info  
   }
   else
   {
      alert(
         "Error Please Refresh the page !!"
      );
   }
}

$(document).ready(function(){
    $('#make_order').click(function(){
        var product_id = $('#product_id').val();
        var product_name = $('#product_name').val();
        var product_price = $('#product_price').val();
        var quantity = $('#quantity').val();
       
        
        if(quantity != '' && quantity > 0){
             //alert(product_id + " " + product_name + " " + product_price + "" +quantity  );
            var order_data =  {'product_id':product_id,'product_name':product_name,'product_price':product_price,
                  'quantity':quantity };
            alert(order_data);
             $.ajax({
                   url : 'http://localhost/JEP/index.php/shopping_cart/add_to_cart',
                   method : 'GET',
                   data : order_data,
                  success : function(data){
                      //alert('Product Added Into Cart');
                      //$('#cart_details').html(data);
                       alert(data);
                     
                  }
             });
        }
        else {
            alert("Please Enter quantity");
        }
    });
    
});

/**
 * Function To Show Confirmation Message
 * @returns {Boolean}
 */
// To conform clear all data in cart.
function clear_cart() {
var result = confirm('Are you sure want to clear all bookings?');

if (result) {
    window.location = "http://localhost/JEP/index.php/shopping_cart/destroy_cart";
   } 
   else {
      return false; // cancel button
    }
}


function view_earing_image(id = null){
    if(id){
        
            // fetch the mem data
      $.ajax(
      {
         url: 'http://localhost/JEP/index.php/jep_controller/get_selected_earing/' +
            id,
         type: 'post',
         dataType: 'json',
         success: function(
            response)
         {
            var image =
               response.image;
            var product_id = response.id;
            $(
               '#product_earing_image'
            ).html(
               '<img   src="' +
               base_url +
               '/featured_images/earings/' +
               image +
               '" />');
            $(
               '#earings_title2'
            ).html(
               '<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">' +
               response.title +
               '</h4>');
            $(
               '#product_description2'
            ).html(
               '<p>' +
               response.description +
               '</p>');
            //$('#').value = product_id;
            document.getElementById("product_id2").value = product_id;
            document.getElementById("product_name2").value =  response.title;
            document.getElementById("product_price2").value =  response.price;
         }
      }); // /fetch selected member info  
        
    }else{
        alert("Error Please Refresh the page");
    }
}


function view_bag_image(id=null){
    if(id){
                    // fetch the mem data
      $.ajax(
      {
         url: 'http://localhost/JEP/index.php/jep_controller/get_selected_bag/' +
            id,
         type: 'post',
         dataType: 'json',
         success: function(
            response)
         {
            var image =
               response.image;
            var product_id = response.id;
            $(
               '#product_bag_image'
            ).html(
               '<img   src="' +
               base_url +
               '/featured_images/bags/' +
               image +
               '" />');
            $(
               '#bag_title'
            ).html(
               '<h4 align="center" style="color:#EA5B77;" class="modal-title" id="myModalLabel">' +
               response.title +
               '</h4>');
            $(
               '#product_bag_description'
            ).html(
               '<p>' +
               response.description +
               '</p>');
            //$('#').value = product_id;
            document.getElementById("product_id3").value = product_id;
            document.getElementById("product_name3").value =  response.title;
            document.getElementById("product_price3").value =  response.price;
         }
      }); // /fetch selected member info  
    }
    else{
        alert("Error please refresh page!!!")
    }
}
