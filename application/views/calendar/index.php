<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png"      href="<?php echo base_url('assets/images/logo.png');?>"/>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo  base_url('admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar.min.css" />
            
</head>

<body>
 <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h1>Calendar</h1>
          <div id="calendar">
          </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>

        <div class="form-group">
              
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8" >
                    <input type="text" class="form-control" name="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<!--edit event -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/edit_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<!--edit event modal -->

</body>
<!-- jQuery -->
     <script src="<?php echo base_url('admin/js/jquery-3.1.1.min.js');?>"></script>
     <script src="<?php echo base_url() ?>scripts/moment.min.js"></script>
     <script src="<?php echo base_url() ?>scripts/fullcalendar.min.js"></script>
     <script src="<?php echo base_url() ?>scripts/gcal.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    
   
	<!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url ('admin/admin.js');?>"></script>

    <script type="text/javascript">
        var date_last_clicked = null;

        $(document).ready(function() {
            $('#calendar').fullCalendar({
               eventSources: [
                    {
                        events: function(start, end, timezone, callback) {
                            $.ajax({
                            url: '<?php echo base_url() ?>index.php/calendar/get_events',
                            dataType: 'json',
                            data: {
                            // our hypothetical feed requires UNIX timestamps
                            start: start.unix(),
                            end: end.unix()
                            },
                            success: function(msg) {
                                var events = msg.events;
                                callback(events);
                            }
                            });
                        }
                    },
                ],
                 dayClick: function(date, jsEvent, view) {
                    date_last_clicked = $(this);
                    $(this).css('background-color', '#bed7f3');
                    $('#addModal').modal();
                },
                eventClick: function(event, jsEvent, view) {
                        $('#name').val(event.title);
                        $('#description').val(event.description);
                        $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                        if(event.end) {
                            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
                        } else {
                            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                        }
                        $('#event_id').val(event.id);
                        $('#editModal').modal();
                },

            });
        });
    </script>

</html>


