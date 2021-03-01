
<?php include '../html/Head.html'?>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <!-- Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>

    <link href='../css/style.css' rel='stylesheet' />

    <link href='../fullcalendar/main.css' rel='stylesheet' />
    <script src='../fullcalendar/main.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'es',
          themeSystem: 'bootstrap',
          customButtons: {
            añadirCita: {
              text: 'Añadir cita',
              click: function() {
                  $('#calendarModal').modal();
              }
            }
          },
          dateClick: function(info) {
            $('#calendarModal').modal();
            $('#fecha').val(info.dateStr);

            $('#submitButton').on('click',function(){
              calendar.addEvent({
                title:  $('#nombre').val(),
                start:  $('#fecha').val(),
                end:  $('#fecha').val(),
              });
              $('#submitButton').unbind('click');
              $('#createEventModal').modal('hide');
         });
          },
          eventRender: function(event, element) {
            $(element).tooltip({title: event.title});             
          },
          headerToolbar: {
            start: 'today prev,next añadirCita', 
            center: 'title',
            end: 'dayGridMonth,timeGridWeek,dayGridDay listWeek' ,
          },
          buttonText: {
              today:    'hoy',
              month:    'mes',
              week:     'semana',
              day:      'dia',
              list:     'lista'
          },
          firstDay: 1, //Primer día: lunes
          titleFormat:{ year: 'numeric', month: 'long' } ,
          slotMinTime: "09:00:00", //A que hora comienzan las citas
          allDaySlot: false,
          editable: true,

         initialView: 'dayGridMonth',

         navLinks:true, //Para que se puedan clickear los días
        });
        calendar.render();
      });


    </script>
  </head>
  <body>
    <div id='calendarbody'>    
        <div id='calendar'></div>
    </div>

    <div id="calendarModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 id="modalTitle" class="modal-title">Añadir cita</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div id="modalBody" class="modal-body">
                      <form action="calendar.addEvent()" method="POST">
                        <div class="form-group">
                          <label for="nombre" class="col-form-label">Nombre:</label>
                          <input type="text" class="form-control" id="nombre">
                        </div>
                    
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="mensajeConfirmacion"></label>
                            <p id="mensajeConfirmacion"></p>
                          </div>
                        </div> 
                         <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="fecha">Día</label>
                            <input type="date" class="form-control" id="fecha">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="hora_inicio">Desde</label>
                            <input type="time" class="form-control" id="hora_inicio">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="hora_final">Hasta</label>
                            <input type="time" class="form-control" id="hora_final">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="notas" class="col-form-label">Notas:</label>
                          <textarea class="form-control" id="notas"></textarea>
                        </div>
                      </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-dismiss="modal" id="submitButton">Confirmar</button>
            </div>
            </div>
    </div>
    </div>

  </body>
</html>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

$('document').ready(function(){
 var usuario_state = false;
 $('#usuario').on('blur', function(){
  var usuario = $('#usuario').val();
  if (usuario == '') {
    return;
  }
  $.ajax({
    url: 'comprobarUsuario.php',
    type: 'post',
    data: {
      'usuario' : usuario,
    },
    success: function(response){
      if (response == 'taken' ) {
        $('#mensajeConfirmacion').text('El usuario es correcto');
        $('#mensajeConfirmacion').css('color', '#556B2F');
      }else if (response == 'not_taken') {
       $('#mensajeConfirmacion').text('El usuario es incorrecto');
       $('#mensajeConfirmacion').css('color', '#8B0000');
      }
    }
  });
 });


 $('#reg_btn').on('click', function(){
  var usuario = $('#usuario').val();
  var email = $('#email').val();
  var password = $('#password').val();
  if (usuario_state == false || email_state == false) {
    $('#error_msg').text('Fix the errors in the form first');
  }else{
      // proceed with form submission
      $.ajax({
        url: 'register.php',
        type: 'post',
        data: {
          'save' : 1,
          'email' : email,
          'usuario' : usuario,
          'password' : password,
        },
        success: function(response){
          alert('user saved');
          $('#usuario').val('');
          $('#email').val('');
          $('#password').val('');
        }
      });
  }
 });
});
</script>