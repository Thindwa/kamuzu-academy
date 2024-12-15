import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import Swal from 'sweetalert2';



document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    headerToolbar: {
      left: 'prev,next today',
      right: 'dayGridMonth,dayGridWeek,list',
      center: 'title'
    },
    selectable: true,
    themeSystem: 'bootstrap',
    events: events,
    
    eventClick: function(info) {
      var _details = $('#event-details-modal')
      var id = info.event.id

      // Find the event in the events array based on the clicked ID
      var targetEvent = events.find(function(event) {
        return parseInt(event.id) === parseInt(id);
      });

      console.log('Clicked event ID:', info.event.id);
      console.log('All events:', events);
      console.log('single event:', targetEvent);

      if (targetEvent) {
        _details.find('#title').text(targetEvent.title);
        _details.find('#start').text(targetEvent.start);
        _details.find('#end').text(targetEvent.end);
        _details.find('#edit,#delete').attr('data-id', id);
        _details.modal('show');
      } else {
          alert("Event is undefined");
      }
    },
    eventDrop: function(info) {
      // Do Something after events mounted
      var id = info.event.id
      var start_datetime = moment(info.event.start).format('YYYY-MM-DD HH:mm:ss');
      var end_datetime = moment(info.event.end).format('YYYY-MM-DD HH:mm:ss');


      if (id) {

        console.log('EventID:',id);
  
          // Send an AJAX request to the delete route
          var url = updateURL + '/' + id;
          
          console.log('PassedID:',id);
          console.log("URL: ", url);

          // Get the CSRF token value from the page
         var csrfToken = $('meta[name="csrf-token"]').attr('content');
  
          $.ajax({
            url: url,
            type: 'PATCH',
            dataType: 'json',
            data:{start_datetime, end_datetime},
            headers: {
              'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            success: function(response) {
              // Handle the success response
              console.log(response);    
          },
            error: function(xhr) {
              // Handle the error response
              console.log(response);
              // Handle the error, show an alert, or perform any other necessary action
            }
          });
            
      } else {
        alert("Event is undefined");
      }
    },

    editable: true
  });

  calendar.render();

  // Form reset listener
  $('#schedule-form').on('reset', function() {
    $(this).find('input:hidden').val('');
    $(this).find('input:visible').first().focus();
  });


 

    // Delete Button / Deleting an Event
    $('#delete').click(function() {
      var id = $(this).attr('data-id');
    
    if (id) {
      Swal.fire({
        text: 'Are you sure to delete this scheduled event?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel'
      })
      .then((result) => {
        if (result.isConfirmed) {

        // Get the CSRF token value from the page
         var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Send an AJAX request to the delete route
        var url = deleteURL + '/' + id;
        
        console.log('PassedID:',id);
        console.log("URL: ", url);

        

        $.ajax({
          url: url,
          type: 'DELETE',
          dataType: 'json',
          headers: {
            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
          },
          success: function(response) {
            // Handle the success response 
            location.reload();   
        },
          error: function(xhr) {
            // Handle the error response
            console.log(response);
            // Handle the error, show an alert, or perform any other necessary action
          }
        });
        
      }
    });
      
    } else {
      alert("Event is undefined");
    }
  });
  
});
