<?php include '../html/Head.html'?>

<!DOCTYPE html>
<html>
<head>
    <title>Ver Calendario</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset='utf-8' />
    <script src="../js/calendario.js"></script>
    <link href='../css/fullcalendar.min.css' rel='stylesheet' />
    <link href='../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='../lib/moment.min.js'></script>
    <script src='../lib/jquery.min.js'></script>
    <script src='../js/fullcalendar.min.js'></script>
</head>
<body id='bodycalendar'>
  
  <div class="response"></div>
  <div id='calendar'></div>

<button onclick="showModalCita()">apa</button>
  <!-- Modal -->
<div class="modal fade" id="addCitaModal" tabindex="-1" role="dialog" aria-labelledby="addCitaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCitaModalLabel">Añadir Cita </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="addCitaModalBody">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>
<script>
    function showModalCita() {
    $('#addCitaModal').modal('show');
    }
</script>
</html>
