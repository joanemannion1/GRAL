
<?php
  include 'session.php'
?>
<head>
	<title>Ver Usuario</title>
	<?php include '../html/Head.html'?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

	<link href="../css/style.css" rel="stylesheet" type="text/css"/>

		
</head>

<body id="viewUserBody">
<div class="wrapper">
	
 <nav id="sidebar">
 	
 	 <div class="sidebar-header">
 	 	<h3>Filtrar</h3>
 	 </div>

 	 <ul id="viewUserUl" class="list-unstyled components">
 	 	<form id="filtroForm">

 	 	<!-- Nacionalidad -->
 	 	<li>
 	 		<div class="form-group col-md-11">
 	 			<div class="form-check">
			      <h5>Nacionalidad</h5>
			      <?php
                  	include 'db_connect.php';
					$result = mysqli_query($conn,"SELECT DISTINCT nacionalidad FROM usuarios");
					while($row = mysqli_fetch_array($result))
					{
					echo "<input class='form-check-input' name='nacionalidad' type='checkbox' value=" .$row['nacionalidad']. " id='nacionalidad'><label class='form-check-label' for='nacionalidad'>" . $row['nacionalidad']. "</label><br>";
					}
					?>
			      </select>
			    </div>
			</div>
 	 	</li>

		<!-- País -->
 	 	<li>
 	 		<div class="form-group col-md-11">
 	 			<div class="form-check">
			      <h5>País</h5>
			      <?php
                  	include 'db_connect.php';
					$result = mysqli_query($conn,"SELECT DISTINCT pais FROM usuarios");
					while($row = mysqli_fetch_array($result))
					{
					echo "<input class='form-check-input' name='pais' type='checkbox' value=" .$row['pais']. " ><label class='form-check-label'>" . $row['pais']. "</label><br>";
					}
					?>
			      </select>
			    </div>
			</div>
 	 	</li>

 	 	<li >
 	 		<div class="form-group col-md-11">
 	 			<div class="form-check">
			      <h5>Género</h5>
			      <?php
                  	include 'db_connect.php';
					$result = mysqli_query($conn,"SELECT DISTINCT genero FROM usuarios");
					while($row = mysqli_fetch_array($result))
					{
					echo "<input class='form-check-input' name='genero' type='checkbox' value=" .$row['genero']. " ><label class='form-check-label'>" . $row['genero']. "</label><br>";
					}
					?>
			      </select>
			    </div>
			</div>
 	 	</li>
 	 </ul>
 	</form>
 </nav>


<div id="content">
	
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">
  		<button type="button" id="sidebarCollapse" class="btn  btn-info">
  			<i class="fas fa-align-left"></i>
  			<span>Filtros</span>
  		</button>
  		<form class="form-inline">
		    <input class="form-control mr-sm-2 search-box" id="searchBox" type="search" placeholder="DNI / TLF / Nombre" aria-label="Search">
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		 </form>
  	</div>
  	  </nav>

<br><br>
	<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Usuarios</h5>
            </div>

            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Nombre</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Editar</th>
                    </tr>
                  </thead>
                  <tbody id="result">
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

</div>


</div>

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userModalLabel">Username</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
      	 <div class="col-md-6 "><label for="modal-email" class="font-weight-bold">Email: </label><p id="modal-email"></p></div>
      	 <div class="col-md-6"><label for="modal-telefono" class="font-weight-bold">Telefono: </label><p id="modal-telefono"></p></div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
// Activar boton del menú
document.getElementById("NavUsuarios").classList.add('active');

// Esconder o mostrar menu lateral
$("#sidebarCollapse").on('click', function() {
	$("#sidebar").toggleClass('active');
})

//Filtros


// Searchbox
var textBox = document.getElementById('searchBox');
var resultContainer = document.getElementById('result');

var ajax = null;
var loadedUsers = 0;

searchForData("nousers");

function get_filter(class_name) {
	selectedCboxes = [];
	checkboxes = [];
	checkboxes = document.getElementsByName(class_name);
	selectedCboxes = Array.prototype.slice.call(checkboxes).filter(ch => ch.checked==true).map(e => e.value);
	if (selectedCboxes.length > 0){
		selectedCboxes = selectedCboxes.join(',');
	}
	else {
		selectedCboxes = "";
	}
	return selectedCboxes;
}

$('.form-check-input').click(function() {
	searchForData("nousers");
});

textBox.onkeyup = function() {
	var val = this.value;
	val = val.replace(/^\s|\s $/, "");

	if (val !== "") {
		searchForData(val);
	} else {
		clearResult();
		searchForData("nousers");
	}
}

function searchForData(value, isLoadMoreMode) {
	resultContainer.innerHTML = "<div class='spinner-border' role='status'><span class='sr-only'>Loading...</span></div>";
	var nacionalidad = get_filter('nacionalidad');
	var pais = get_filter('pais');
	var genero = get_filter('genero');

	if (ajax && typeof ajax.abort === 'function') {
		ajax.abort(); // abort previous requests
	}

	if (isLoadMoreMode !== true) {
		clearResult();
	}

	ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if (this.readyState === 4 && this.status === 200) {
			try {
				var json = JSON.parse(this.responseText);
			} catch (e) {
				noUsers();
				return;
			}

			if (json.length === 0) {
				if (isLoadMoreMode) {
					alert('No more to load');
				} else {
					noUsers();
				}
			} else {
				showUsers(json);
			}
		}
	}

	$.ajax({
		url:"buscarUsuario.php",
		method:"POST",
		dataType: "json",		
		data:{'username':value, 'startFrom':loadedUsers,'nacionalidad': nacionalidad, 'pais':pais, 'genero': genero},
		success:function(data){
			showUsers(data);
		}
	});
}

function showUsers(data) {
	function createRow(rowData,i) {
		var tr = document.createElement("tr");
		var num = document.createElement("td");
		num.className="pl-4";
		num.innerHTML = i+1;

		var td2 = document.createElement("td");
		var nombre = document.createElement("h5");
		nombre.className="font-medium mb-0";
		nombre.innerHTML = rowData.nombre_completo;
		
		var ndoc = document.createElement("span");
		ndoc.className="text-muted";
		ndoc.innerHTML = rowData.n_documentacion;
		td2.appendChild(nombre);
		td2.appendChild(ndoc);


		var td3 = document.createElement("td");
		var email = document.createElement("span");
		email.className="text-muted";
		email.innerHTML = rowData.email;

		var telefono = document.createElement("span");
		telefono.className="text-muted";
		telefono.innerHTML = rowData.telefono;
		td3.appendChild(email);
		td3.innerHTML += "<br>"
		td3.appendChild(telefono);

		tr.appendChild(num);
		tr.appendChild(td2);
		tr.appendChild(td3);
		tr.innerHTML += "<td><button type='button' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='bi bi-plus-circle'></i> </button><button type='button' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2' onclick='goToEdit(&apos;" + rowData.n_documentacion  + "&apos;);'><i class='fa fa-edit'></i> </button></td>";

		resultContainer.appendChild(tr);
	}	
	for (var i = 0, len = data.length; i < len; i++ ) {
		var userData = data[i];
		createRow(userData,i);
	}

	loadedUsers  = len;
}

function goToEdit(n_documentacion) {
	 window.location = 'añadirUsuario.php?n_documentacion=' + n_documentacion;

}

function clearResult() {
	resultContainer.innerHTML = "";
	loadedUsers = 0;
}

function noUsers() {
	resultContainer.innerHTML = "No se ha encontrado ningun usuario con ese DNI o Telefono";
}

</script>