// global the manage memeber table
var actionMovieTable;

$(document).ready(function() {
    actionMovieTable = $("#actionMovieTable").DataTable();


    $("#addActionMovieBtn").on('click', function() {
        // reset the form
        $("#createActionForm")[0].reset();

        // remove the error
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $(".text-danger").remove();
        // empty the message div
        $(".messages").html("");

        // submit form
        $("#createActionForm").unbind('submit').bind('submit', function() {

            $(".text-danger").remove();

            var form = $(this);

            // validation
            var title = $("#title").val();
            var actors = $("#actors").val();
            var rating = $("#rating").val();


            if(title == "") {
                $("#title").closest('.form-group').addClass('has-error');
                $("#title").after('The title field is required');
            } else {
                $("#title").closest('.form-group').removeClass('has-error');
                $("#title").closest('.form-group').addClass('has-success');
            }

            if(actors == "") {
                $("#actors").closest('.form-group').addClass('has-error');
                $("#actors").after('The actors field is required');
            } else {
                $("#actors").closest('.form-group').removeClass('has-error');
                $("#actors").closest('.form-group').addClass('has-success');
            }

            if(rating == "") {
                $("#rating").closest('.form-group').addClass('has-error');
                $("#rating").after('The rating field is required');
            } else {
                $("#rating").closest('.form-group').removeClass('has-error');
                $("#rating").closest('.form-group').addClass('has-success');
            }



            if(title && actors && rating) {
                //submi the form to server
                $.ajax({
                    url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType : 'json',
                    success:function(response) {

                        // remove the error
                        $(".form-group").removeClass('has-error').removeClass('has-success');

                        if(response.success == true) {
                            $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');

                            // reset the form
                            $("#createMemberForm")[0].reset();

                            // reload the datatables
                            actionMovieTable.ajax.reload(null, false);
                            // this function is built in function of datatables;

                          
                        } else {
                            $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
                        } // /else
                    } // success
                }); // ajax subit
            } /// if


            return false;
        }); // /submit form for create member
    }); // /add modal
});
//for retrieving from the database
actionMovieTable = $("#actionMovieTable").DataTable({
"ajax": "php_action/retrieve.php",
"order": []
});

//removing a record
function removeMovie(id) {
    if(id) {
        // click on remove button
        $("#removeBtn").unbind('click').bind('click', function() {
            $.ajax({
                url: 'php_action/remove.php',
                type: 'post',
                data: {movie_id : id},
                dataType: 'json',
                success:function(response) {
                    if(response.success == true) {
                        $(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');

                        // refresh the table
                        actionMovieTable.ajax.reload(null, false);

                        // close the modal
                        $("#removeMovieModal").modal('hide');

                    } else {
                        $(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
                    }
                }
            });
        }); // click remove btn
    } else {
        alert('Error: Refresh the page again');
    }
}

//edit movie_id
function editMovie(id) {
    if(id) {

      // remove the error
      $(".form-group").removeClass('has-error').removeClass('has-success');
      $(".text-danger").remove();
      // empty the message div
      $(".edit-messages").html("");
 

      // remove the id
      $("#movie_id").remove();
        // fetch the member data
        $.ajax({
            url: 'php_action/getSelectedMovie.php',
            type: 'post',
            data: {movie_id : id},
            dataType: 'json',
            success:function(response) {
			
                $("#editTitle").val(response.Title);

                $("#editActors").val(response.Actors);

                $("#editRating").val(response.Rating);

                ///movie id
                $(".editMovieModal").append('<input type="text" name="id" id="id" value="'+ response.id +'"/>');


                // here update the member data
                $("#updateMovieForm").unbind('submit').bind('submit', function() {
                  // remove error messages
                  $(".text-danger").remove();

                   var form = $(this);
                   // validation
                   var editTitle = $("#editTitle").val();
                   var editActors = $("#editActors").val();
                   var editRating = $("#editRating").val();


                   if(editTitle == "") {
                       $("#editTitle").closest('.form-group').addClass('has-error');
                       $("#editTitle").after('<p class="text-danger">The Name field is required</p>');
                   } else {
                       $("#editTitle").closest('.form-group').removeClass('has-error');
                       $("#editTitle").closest('.form-group').addClass('has-success');
                   }

                   if(editActors == "") {
                       $("#editActors").closest('.form-group').addClass('has-error');
                       $("#editActors").after('<p class="text-danger">The Address field is required</p>');
                   } else {
                       $("#editActors").closest('.form-group').removeClass('has-error');
                       $("#editActors").closest('.form-group').addClass('has-success');
                   }

                   if(editRating == "") {
                       $("#editRating").closest('.form-group').addClass('has-error');
                       $("#editRating").after('<p class="text-danger">The Contact field is required</p>');
                   } else {
                       $("#editRating").closest('.form-group').removeClass('has-error');
                       $("#editRating").closest('.form-group').addClass('has-success');
                   }

                 if(editTitle && editActors && editRating) {
                   $.ajax({
                       url: form.attr('action'),
                       type: form.attr('method'),
                       data: form.serialize(),
                       dataType: 'json',
                       success:function(response) {
                           if(response.success == true) {
                               $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                               '</div>');

                               // reload the datatables
                               actionMovieTable.ajax.reload(null, false);
                               // this function is built in function of datatables;

                               // remove the error
                               $(".form-group").removeClass('has-success').removeClass('has-error');
                               $(".text-danger").remove();
                           } else {
                               $(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                               '</div>')
                           }
                       } // /success
                   }); // /ajax
                 }
                   return false;
                });

              }
          });

    } else {
        alert("Error : Refresh the page again");
    }
}
