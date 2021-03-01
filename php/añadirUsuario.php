<?php include '../html/Head.html'?>
<?php
  include 'session.php'
?>
<head>
	<title>Añadir Usuario</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
 $nombre = "";
 $apellido1 = "";
 $apellido2 = "";
 $t_documentacion = "";
 $n_documentacion = "";
 $email = "";
 $telefono = "";
 include 'db_connect.php';
 if(isset($_GET['n_documentacion'])) {
 	$usuario = $_GET['n_documentacion'];
  	$sql = "SELECT * FROM usuarios WHERE n_documentacion='$usuario'";
  	$result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $nombre = $row['nombre'];
    $apellido1 = $row['apellido1'];
    $apellido2 = $row['apellido2'];
    $t_documentacion = $row['tipo_documentacion'];
    $n_documentacion = $row['n_documentacion'];
    $email = $row['email'];
    $telefono = $row['telefono'];
 }

?>


<body>
<div class="container padding25">
	<form action="add_user.php" method="post">
	<div class="card mb-3">

		<!-- Información personal -->

		<div class="card-header text-white bg-secondary">Información personal</div>
			<div class="card-body">
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputName">Nombre</label>
			      <input type="text" class="form-control" id="inputName" name="nombre" placeholder='Nombre'>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputSurname">Apellido</label>
			      <input type="text" class="form-control" id="inputSurname" name="apellido1" placeholder='Apellido'>
			    </div>
			     <div class="form-group col-md-4">
			      <label for="inputSurname2">Apellido 2</label>
			      <input type="text" class="form-control" id="inputSurname2" name="apellido2" placeholder='Apellido2'>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputDocumentationType">Tipo Documentación</label>
			      <select id="inputDocumentationType" class="form-control" name="tipodoc">
			        <option selected>DNI</option>
			        <option>NIE</option>
			        <option>Pasaporte</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputDocumentation">Nº Documentación</label>
			      <input type="text" class="form-control" id="inputDocumentation" name="ndoc" placeholder='11223344J'>	
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputGender">Género</label>
			      <select id="inputGender" class="form-control" name="genero">
			        <option selected>Mujer</option>
			        <option>Hombre</option>
			        <option>Otro</option>
			      </select>
			    </div>
			  </div>
			</div>
		</div>

		<!-- Datos de contacto -->

		<div class="card mb-3">
			<div class="card-header text-white bg-secondary">Datos de contacto</div>
			<div class="card-body">
			  <div class="form-row">
			  	<div class="form-group col-md-8">
			      <label for="inputEmail">Email</label>
			      <input type="email" class="form-control" id="inputEmail" name="email" placeholder='example@example.com'>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputTelephone">Teléfono</label>
			      <input type="tel" class="form-control" id="inputTelephone" name="telefono" placeholder='666111222'>
			    </div>
			  </div>
			</div>
		</div>

		<!-- Dirección -->

		<div class="card mb-3">
			<div class="card-header text-white bg-secondary">Dirección</div>
			<div class="card-body">
			  <div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inputDirecction">Dirección</label>
			      <input type="text" class="form-control" id="inputDirecction" name="direccion">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="InputCP">CP</label>
			      <input type="postal-code" class="form-control" id="InputCP" name="cp">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="InputMunicipio">Municipio</label>
			      <input type="text" class="form-control" id="InputMunicipio" name="municipio">
			    </div>
			  </div>

			  <div class="form-row">
			  	 <div class="form-group col-md-4">
			      <label for="inputProvincia">Provincia</label>
			      <select id="inputProvincia"class="form-control" name="provincia">
			      	<option value='alava'>Álava</option>
				    <option value='albacete'>Albacete</option>
				    <option value='alicante'>Alicante/Alacant</option>
				    <option value='almeria'>Almería</option>
				    <option value='asturias'>Asturias</option>
				    <option value='avila'>Ávila</option>
				    <option value='badajoz'>Badajoz</option>
				    <option value='barcelona'>Barcelona</option>
				    <option value='burgos'>Burgos</option>
				    <option value='caceres'>Cáceres</option>
				    <option value='cadiz'>Cádiz</option>
				    <option value='cantabria'>Cantabria</option>
				    <option value='castellon'>Castellón/Castelló</option>
				    <option value='ceuta'>Ceuta</option>
				    <option value='ciudadreal'>Ciudad Real</option>
				    <option value='cordoba'>Córdoba</option>
				    <option value='cuenca'>Cuenca</option>
				    <option value='girona'>Girona</option>
				    <option value='laspalmas'>Las Palmas</option>
				    <option value='granada'>Granada</option>
				    <option value='guadalajara'>Guadalajara</option>
				    <option value='guipuzcoa' selected>Guipúzcoa</option>
				    <option value='huelva'>Huelva</option>
				    <option value='huesca'>Huesca</option>
				    <option value='illesbalears'>Illes Balears</option>
				    <option value='jaen'>Jaén</option>
				    <option value='acoruña'>A Coruña</option>
				    <option value='larioja'>La Rioja</option>
				    <option value='leon'>León</option>
				    <option value='lleida'>Lleida</option>
				    <option value='lugo'>Lugo</option>
				    <option value='madrid'>Madrid</option>
				    <option value='malaga'>Málaga</option>
				    <option value='melilla'>Melilla</option>
				    <option value='murcia'>Murcia</option>
				    <option value='navarra'>Navarra</option>
				    <option value='ourense'>Ourense</option>
				    <option value='palencia'>Palencia</option>
				    <option value='pontevedra'>Pontevedra</option>
				    <option value='salamanca'>Salamanca</option>
				    <option value='segovia'>Segovia</option>
				    <option value='sevilla'>Sevilla</option>
				    <option value='soria'>Soria</option>
				    <option value='tarragona'>Tarragona</option>
				    <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
				    <option value='teruel'>Teruel</option>
				    <option value='toledo'>Toledo</option>
				    <option value='valencia'>Valencia/Valéncia</option>
				    <option value='valladolid'>Valladolid</option>
				    <option value='vizcaya'>Vizcaya</option>
				    <option value='zamora'>Zamora</option>
				    <option value='zaragoza'>Zaragoza</option>
				</select>
			    </div>

			  	<div class="form-group col-md-4">
			      <label for="inputCountry">País</label>
			      <select id="inputCountry" class="form-control" name="pais">
			      		<option>OTRO</option>
			         	<option value="AF">Afganistán</option>
						<option value="AL">Albania</option>
						<option value="DE">Alemania</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antártida</option>
						<option value="AG">Antigua y Barbuda</option>
						<option value="AN">Antillas Holandesas</option>
						<option value="SA">Arabia Saudí</option>
						<option value="DZ">Argelia</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaiyán</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrein</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BE">Bélgica</option>
						<option value="BZ">Belice</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermudas</option>
						<option value="BY">Bielorrusia</option>
						<option value="MM">Birmania</option>
						<option value="BO">Bolivia</option>
						<option value="BA">Bosnia y Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BR">Brasil</option>
						<option value="BN">Brunei</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="BT">Bután</option>
						<option value="CV">Cabo Verde</option>
						<option value="KH">Camboya</option>
						<option value="CM">Camerún</option>
						<option value="CA">Canadá</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CY">Chipre</option>
						<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comores</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, República Democrática del</option>
						<option value="KR">Corea</option>
						<option value="KP">Corea del Norte</option>
						<option value="CI">Costa de Marfíl</option>
						<option value="CR">Costa Rica</option>
						<option value="HR">Croacia (Hrvatska)</option>
						<option value="CU">Cuba</option>
						<option value="DK">Dinamarca</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egipto</option>
						<option value="SV">El Salvador</option>
						<option value="AE">Emiratos Árabes Unidos</option>
						<option value="ER">Eritrea</option>
						<option value="SI">Eslovenia</option>
						<option value="ES" selected>España</option>
						<option value="US">Estados Unidos</option>
						<option value="EE">Estonia</option>
						<option value="ET">Etiopía</option>
						<option value="FJ">Fiji</option>
						<option value="PH">Filipinas</option>
						<option value="FI">Finlandia</option>
						<option value="FR">Francia</option>
						<option value="GA">Gabón</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GD">Granada</option>
						<option value="GR">Grecia</option>
						<option value="GL">Groenlandia</option>
						<option value="GP">Guadalupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GY">Guayana</option>
						<option value="GF">Guayana Francesa</option>
						<option value="GN">Guinea</option>
						<option value="GQ">Guinea Ecuatorial</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="HT">Haití</option>
						<option value="HN">Honduras</option>
						<option value="HU">Hungría</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IQ">Irak</option>
						<option value="IR">Irán</option>
						<option value="IE">Irlanda</option>
						<option value="BV">Isla Bouvet</option>
						<option value="CX">Isla de Christmas</option>
						<option value="IS">Islandia</option>
						<option value="KY">Islas Caimán</option>
						<option value="CK">Islas Cook</option>
						<option value="CC">Islas de Cocos o Keeling</option>
						<option value="FO">Islas Faroe</option>
						<option value="HM">Islas Heard y McDonald</option>
						<option value="FK">Islas Malvinas</option>
						<option value="MP">Islas Marianas del Norte</option>
						<option value="MH">Islas Marshall</option>
						<option value="UM">Islas menores de Estados Unidos</option>
						<option value="PW">Islas Palau</option>
						<option value="SB">Islas Salomón</option>
						<option value="SJ">Islas Svalbard y Jan Mayen</option>
						<option value="TK">Islas Tokelau</option>
						<option value="TC">Islas Turks y Caicos</option>
						<option value="VI">Islas Vírgenes (EEUU)</option>
						<option value="VG">Islas Vírgenes (Reino Unido)</option>
						<option value="WF">Islas Wallis y Futuna</option>
						<option value="IL">Israel</option>
						<option value="IT">Italia</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japón</option>
						<option value="JO">Jordania</option>
						<option value="KZ">Kazajistán</option>
						<option value="KE">Kenia</option>
						<option value="KG">Kirguizistán</option>
						<option value="KI">Kiribati</option>
						<option value="KW">Kuwait</option>
						<option value="LA">Laos</option>
						<option value="LS">Lesotho</option>
						<option value="LV">Letonia</option>
						<option value="LB">Líbano</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libia</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lituania</option>
						<option value="LU">Luxemburgo</option>
						<option value="MK">Macedonia, Ex-República Yugoslava de</option>
						<option value="MG">Madagascar</option>
						<option value="MY">Malasia</option>
						<option value="MW">Malawi</option>
						<option value="MV">Maldivas</option>
						<option value="ML">Malí</option>
						<option value="MT">Malta</option>
						<option value="MA">Marruecos</option>
						<option value="MQ">Martinica</option>
						<option value="MU">Mauricio</option>
						<option value="MR">Mauritania</option>
						<option value="YT">Mayotte</option>
						<option value="MX">México</option>
						<option value="FM">Micronesia</option>
						<option value="MD">Moldavia</option>
						<option value="MC">Mónaco</option>
						<option value="MN">Mongolia</option>
						<option value="MS">Montserrat</option>
						<option value="MZ">Mozambique</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Níger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk</option>
						<option value="NO">Noruega</option>
						<option value="NC">Nueva Caledonia</option>
						<option value="NZ">Nueva Zelanda</option>
						<option value="OM">Omán</option>
						<option value="NL">Países Bajos</option>
						<option value="PA">Panamá</option>
						<option value="PG">Papúa Nueva Guinea</option>
						<option value="PK">Paquistán</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Perú</option>
						<option value="PN">Pitcairn</option>
						<option value="PF">Polinesia Francesa</option>
						<option value="PL">Polonia</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="UK">Reino Unido</option>
						<option value="CF">República Centroafricana</option>
						<option value="CZ">República Checa</option>
						<option value="ZA">República de Sudáfrica</option>
						<option value="DO">República Dominicana</option>
						<option value="SK">República Eslovaca</option>
						<option value="RE">Reunión</option>
						<option value="RW">Ruanda</option>
						<option value="RO">Rumania</option>
						<option value="RU">Rusia</option>
						<option value="EH">Sahara Occidental</option>
						<option value="KN">Saint Kitts y Nevis</option>
						<option value="WS">Samoa</option>
						<option value="AS">Samoa Americana</option>
						<option value="SM">San Marino</option>
						<option value="VC">San Vicente y Granadinas</option>
						<option value="SH">Santa Helena</option>
						<option value="LC">Santa Lucía</option>
						<option value="ST">Santo Tomé y Príncipe</option>
						<option value="SN">Senegal</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leona</option>
						<option value="SG">Singapur</option>
						<option value="SY">Siria</option>
						<option value="SO">Somalia</option>
						<option value="LK">Sri Lanka</option>
						<option value="PM">St Pierre y Miquelon</option>
						<option value="SZ">Suazilandia</option>
						<option value="SD">Sudán</option>
						<option value="SE">Suecia</option>
						<option value="CH">Suiza</option>
						<option value="SR">Surinam</option>
						<option value="TH">Tailandia</option>
						<option value="TW">Taiwán</option>
						<option value="TZ">Tanzania</option>
						<option value="TJ">Tayikistán</option>
						<option value="TF">Territorios franceses del Sur</option>
						<option value="TP">Timor Oriental</option>
						<option value="TG">Togo</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad y Tobago</option>
						<option value="TN">Túnez</option>
						<option value="TM">Turkmenistán</option>
						<option value="TR">Turquía</option>
						<option value="TV">Tuvalu</option>
						<option value="UA">Ucrania</option>
						<option value="UG">Uganda</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistán</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela</option>
						<option value="VN">Vietnam</option>
						<option value="YE">Yemen</option>
						<option value="YU">Yugoslavia</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabue</option>
			      </select>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="inputNationality">Nacionalidad</label>
			      <select id="inputNationality" class="form-control" name="nacionalidad">
			      		<option>OTRO</option>
			         	<option value="AF">Afganistán</option>
						<option value="AL">Albania</option>
						<option value="DE">Alemania</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antártida</option>
						<option value="AG">Antigua y Barbuda</option>
						<option value="AN">Antillas Holandesas</option>
						<option value="SA">Arabia Saudí</option>
						<option value="DZ">Argelia</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaiyán</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrein</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BE">Bélgica</option>
						<option value="BZ">Belice</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermudas</option>
						<option value="BY">Bielorrusia</option>
						<option value="MM">Birmania</option>
						<option value="BO">Bolivia</option>
						<option value="BA">Bosnia y Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BR">Brasil</option>
						<option value="BN">Brunei</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="BT">Bután</option>
						<option value="CV">Cabo Verde</option>
						<option value="KH">Camboya</option>
						<option value="CM">Camerún</option>
						<option value="CA">Canadá</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CY">Chipre</option>
						<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comores</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, República Democrática del</option>
						<option value="KR">Corea</option>
						<option value="KP">Corea del Norte</option>
						<option value="CI">Costa de Marfíl</option>
						<option value="CR">Costa Rica</option>
						<option value="HR">Croacia (Hrvatska)</option>
						<option value="CU">Cuba</option>
						<option value="DK">Dinamarca</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egipto</option>
						<option value="SV">El Salvador</option>
						<option value="AE">Emiratos Árabes Unidos</option>
						<option value="ER">Eritrea</option>
						<option value="SI">Eslovenia</option>
						<option value="ES" selected>España</option>
						<option value="US">Estados Unidos</option>
						<option value="EE">Estonia</option>
						<option value="ET">Etiopía</option>
						<option value="FJ">Fiji</option>
						<option value="PH">Filipinas</option>
						<option value="FI">Finlandia</option>
						<option value="FR">Francia</option>
						<option value="GA">Gabón</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GD">Granada</option>
						<option value="GR">Grecia</option>
						<option value="GL">Groenlandia</option>
						<option value="GP">Guadalupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GY">Guayana</option>
						<option value="GF">Guayana Francesa</option>
						<option value="GN">Guinea</option>
						<option value="GQ">Guinea Ecuatorial</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="HT">Haití</option>
						<option value="HN">Honduras</option>
						<option value="HU">Hungría</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IQ">Irak</option>
						<option value="IR">Irán</option>
						<option value="IE">Irlanda</option>
						<option value="BV">Isla Bouvet</option>
						<option value="CX">Isla de Christmas</option>
						<option value="IS">Islandia</option>
						<option value="KY">Islas Caimán</option>
						<option value="CK">Islas Cook</option>
						<option value="CC">Islas de Cocos o Keeling</option>
						<option value="FO">Islas Faroe</option>
						<option value="HM">Islas Heard y McDonald</option>
						<option value="FK">Islas Malvinas</option>
						<option value="MP">Islas Marianas del Norte</option>
						<option value="MH">Islas Marshall</option>
						<option value="UM">Islas menores de Estados Unidos</option>
						<option value="PW">Islas Palau</option>
						<option value="SB">Islas Salomón</option>
						<option value="SJ">Islas Svalbard y Jan Mayen</option>
						<option value="TK">Islas Tokelau</option>
						<option value="TC">Islas Turks y Caicos</option>
						<option value="VI">Islas Vírgenes (EEUU)</option>
						<option value="VG">Islas Vírgenes (Reino Unido)</option>
						<option value="WF">Islas Wallis y Futuna</option>
						<option value="IL">Israel</option>
						<option value="IT">Italia</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japón</option>
						<option value="JO">Jordania</option>
						<option value="KZ">Kazajistán</option>
						<option value="KE">Kenia</option>
						<option value="KG">Kirguizistán</option>
						<option value="KI">Kiribati</option>
						<option value="KW">Kuwait</option>
						<option value="LA">Laos</option>
						<option value="LS">Lesotho</option>
						<option value="LV">Letonia</option>
						<option value="LB">Líbano</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libia</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lituania</option>
						<option value="LU">Luxemburgo</option>
						<option value="MK">Macedonia, Ex-República Yugoslava de</option>
						<option value="MG">Madagascar</option>
						<option value="MY">Malasia</option>
						<option value="MW">Malawi</option>
						<option value="MV">Maldivas</option>
						<option value="ML">Malí</option>
						<option value="MT">Malta</option>
						<option value="MA">Marruecos</option>
						<option value="MQ">Martinica</option>
						<option value="MU">Mauricio</option>
						<option value="MR">Mauritania</option>
						<option value="YT">Mayotte</option>
						<option value="MX">México</option>
						<option value="FM">Micronesia</option>
						<option value="MD">Moldavia</option>
						<option value="MC">Mónaco</option>
						<option value="MN">Mongolia</option>
						<option value="MS">Montserrat</option>
						<option value="MZ">Mozambique</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Níger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk</option>
						<option value="NO">Noruega</option>
						<option value="NC">Nueva Caledonia</option>
						<option value="NZ">Nueva Zelanda</option>
						<option value="OM">Omán</option>
						<option value="NL">Países Bajos</option>
						<option value="PA">Panamá</option>
						<option value="PG">Papúa Nueva Guinea</option>
						<option value="PK">Paquistán</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Perú</option>
						<option value="PN">Pitcairn</option>
						<option value="PF">Polinesia Francesa</option>
						<option value="PL">Polonia</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="UK">Reino Unido</option>
						<option value="CF">República Centroafricana</option>
						<option value="CZ">República Checa</option>
						<option value="ZA">República de Sudáfrica</option>
						<option value="DO">República Dominicana</option>
						<option value="SK">República Eslovaca</option>
						<option value="RE">Reunión</option>
						<option value="RW">Ruanda</option>
						<option value="RO">Rumania</option>
						<option value="RU">Rusia</option>
						<option value="EH">Sahara Occidental</option>
						<option value="KN">Saint Kitts y Nevis</option>
						<option value="WS">Samoa</option>
						<option value="AS">Samoa Americana</option>
						<option value="SM">San Marino</option>
						<option value="VC">San Vicente y Granadinas</option>
						<option value="SH">Santa Helena</option>
						<option value="LC">Santa Lucía</option>
						<option value="ST">Santo Tomé y Príncipe</option>
						<option value="SN">Senegal</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leona</option>
						<option value="SG">Singapur</option>
						<option value="SY">Siria</option>
						<option value="SO">Somalia</option>
						<option value="LK">Sri Lanka</option>
						<option value="PM">St Pierre y Miquelon</option>
						<option value="SZ">Suazilandia</option>
						<option value="SD">Sudán</option>
						<option value="SE">Suecia</option>
						<option value="CH">Suiza</option>
						<option value="SR">Surinam</option>
						<option value="TH">Tailandia</option>
						<option value="TW">Taiwán</option>
						<option value="TZ">Tanzania</option>
						<option value="TJ">Tayikistán</option>
						<option value="TF">Territorios franceses del Sur</option>
						<option value="TP">Timor Oriental</option>
						<option value="TG">Togo</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad y Tobago</option>
						<option value="TN">Túnez</option>
						<option value="TM">Turkmenistán</option>
						<option value="TR">Turquía</option>
						<option value="TV">Tuvalu</option>
						<option value="UA">Ucrania</option>
						<option value="UG">Uganda</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistán</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela</option>
						<option value="VN">Vietnam</option>
						<option value="YE">Yemen</option>
						<option value="YU">Yugoslavia</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabue</option>
			      </select>
			    </div>
			  </div>
			</div>
		</div>

		<!-- Trabajadora del hogar -->

		<div class="card mb-3">
			<div class="card-header text-white bg-secondary" onclick="showDiv('TrabajadoraDelHogar')">Datos Trabajadora del Hogar</div>
			<div class="card-body" id="TrabajadoraDelHogar">
			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label for="inputInternaMotiv">Motivo consulta</label>
			      <select id="inputInternaMotiv" class="form-control">
			        <option selected>Otro</option>
			        <option>Información</option>
			        <option>Despido/Desistimiento</option>
			        <option>Despido Maternidad</option>
			        <option>Muerte</option>
			        <option>Ingreso Residencia</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputInternaHouseNum">Nº Casas</label>
			      <input type="number" class="form-control" id="inputInternaHouseNum">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputInternaRegularizada">Regularizada</label>
			      <select id="inputInternaRegularizada" class="form-control">
			        <option selected>Si</option>
			        <option>No</option>
			      </select>
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputInternaComienzo">Fecha Comienzo Trabajo</label>
			      <input type="date" class="form-control" id="inputInternaComienzo">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputInternaFinal">Fecha Final Trabajo</label>
			      <input type="date" class="form-control" id="inputInternaFinal">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputInternaDespido">Fecha Despido</label>
			      <input type="date" class="form-control" id="inputInternaDespido">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputInternaForma">Forma Conseguir Empleo</label>
			    <input type="text" class="form-control" id="inputInternaForma">
			  </div>
			

			<div class="form-row">
			  	<div class="form-group col-md-4">
			      <label for="inputContratador">¿Quién te contrato?</label>
			      <select id="inputContratador" class="form-control">
			        <option selected>Persona atendida</option>
			        <option>Pariente mujer</option>
			        <option>Pariente hombre</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputInternaSoloFines">Solo fines de semana</label>
			      <select id="inputInternaSoloFines" class="form-control">
			        <option selected>Si</option>
			        <option>No</option>
			      </select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputInternaHorario">Horario</label>
			    <textarea class="form-control" id="inputInternaHorario" rows="3"></textarea>
			  </div>
			

			<div class="form-row">
				<div class="form-group col-md-4">
			      <label for="inputInternaTotalHoras">Total horas semana</label>
			      <input type="number" class="form-control" id="inputInternaTotalHoras">
			    </div>
			  	<div class="form-group col-md-4">
			      <label for="inputLibraFestivos">Libra festivos</label>
			      <select id="inputLibraFestivos" class="form-control">
			        <option selected>Si</option>
			        <option>No</option>
			        <option>F</option>
			      </select>
			    </div>
			   <div class="form-check form-check-inline">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    No los libra pero los cobra
				  </label>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-3">
			      <label for="inputInternaSalario">Salario</label>
			      <input type="number" class="form-control" id="inputInternaSalario">
			    </div>
				  <div class="form-group col-md-3">
				      <label for="inputInternaPagas">Pagas</label>
				      <input type="number" class="form-control" id="inputInternaPagas">
				    </div>
			   <div class="form-group col-md-3">
			      <label for="inputInternaMetodoPago">Te pagan</label>
			      <select id="inputInternaMetodoPago" class="form-control">
			        <option selected>En mano</option>
			        <option>Banco</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputInternaNomina">Nomina</label>
			      <select id="inputInternaNomina" class="form-control">
			        <option selected>Si</option>
			        <option>No</option>
			      </select>
			    </div>
			</div>

			<div class="form-row">
			   <div class="form-group col-md-6">
			      <label for="inputInternaVacaciones">Vacaciones</label>
			      <select id="inputInternaVacaciones" class="form-control">
			        <option selected>Si (descansa un mes) </option>
			        <option>No y no las cobra aparte</option>
			        <option>No y las cobra aparte</option>
			      </select>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputInternaNomina">Tipo de trabajo</label>
			      <select id="inputInternaNomina" class="form-control">
			        <option selected>Cuidado de adultos como actividad principal</option>
			        <option>Tareas domésticas sin cuidado</option>
			        <option>Cuidado de adultos NO actividad principal</option>
			        <option>Cuidado y número de criaturas</option>
			      </select>
			    </div>
			</div>
			</div>
		</div>

		<!-- Discriminación -->

		<div class="card mb-3">
			<div class="card-header text-white bg-secondary" onclick="showDiv('Discriminacion')">Discriminación</div>
			<div class="card-body" id="Discriminacion">
			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label for="inputDSituacionDocumental">Situación Documental</label>
			      <select id="inputDSituacionDocumental" class="form-control">
			        <option selected>Nacionalidad Española </option>
			        <option>NIE</option>
			        <option>Irregular</option>
			        <option>Nacional UE</option>
			        <option>Demandante de asilo</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputDSituacionResidencial">Situación Residencial</label>
			      <select id="inputDSituacionResidencial" class="form-control">
			        <option selected>Con domicilio</option>
			        <option>Sin domicilio</option>
			        <option>En acogida</option>
			        <option>Otros</option>
			      </select>
			    </div>
			     <div class="form-group col-md-4">
			      <label for="inputDEstudios">Nivel de estudios</label>
			      <select id="inputDEstudios" class="form-control">
			        <option selected>Sin estudios</option>
			        <option>Primaria</option>
			        <option>Secunadria</option>
			        <option>Bachiller</option>
			        <option>Formación Profesional</option>
			        <option>Universitarios</option>
			        <option>Tercer Grado</option>
			      </select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputDRasgosFenotipicos">Color de piel / Etnia / Rasgos fenotípicos</label>
			    <textarea class="form-control" id="inputInternaHorario" rows="2"></textarea>
			  </div>

			  <div class="form-row">
			  	<div class="form-group col-md-12">
			      <label for="inputDSituacionDocumental">Tipo</label>
			      <select id="inputDSituacionDocumental" class="form-control" onchange="showTipo(this);">
			        <option value="Conflicto" selected>Conflictos y agresiones racistas</option>
			        <option value="DenegacionPrivada" >Denegación de acceso a prestaciones y servicios privados</option>
			        <option value="DenegacionPublica" >Denegación de acceso a prestaciones y servicios públicos</option>
			        <option value="Laboral" >Dicriminación laboral</option>
			        <option value="ExtremaDerecha" >Extrema derecha y discurso del odio</option>
			        <option value="Racismo">Racismo institucional</option>
			        <option value="SeguridadPrivada" >Seguridad privada</option>
			        <option value="SeguridadPublica" >Seguridad pública</option>
			      </select>
			    </div>
			  </div>

			  <!-- Conflictos y agresiones -->
			  <div class="form-row" id="Conflictos">
			  	<div class="form-group col-md-12">
			  		<label for="inputDConflicto">Conflicto y Agresiones</label>
			      <select id="inputDConflicto" class="form-control"  onchange="showConflictosOtros(this);">
			        <option value="espacioPublico" selected>En el espacio público</option>
			        <option value="vecinal">Conflictos vecinales</option>
			        <option value="otro">Otros: indicar</option>
			      </select>
			    </div>
			  </div>

			  <div class="form-group" id="ConflictosOtro" style="display:none;">
			    <label for="inputDConlictoOtros">Indicar Otros:</label>
			    <textarea class="form-control" id="inputDConlictoOtros" rows="1"></textarea>
			  </div>

			  <!-- Denegación de acceso a prestaciones y servicios privados -->
			  <div class="form-row" id="DenegacionPrivada" style="display:none;">
			  	<div class="form-group col-md-12">
			  		<label for="inputDDenegacionPrivada">Denegación de acceso a prestaciones y servicios privados</label>
			      <select id="inputDDenegacionPrivada" class="form-control">
			        <option selected>Bancos</option>
			        <option>Locales de ocio y restuarantes</option>
			        <option >Vivienda</option>
			        <option>Otros</option>
			      </select>
			    </div>
			  </div>


 			<!-- Denegación de acceso a prestaciones y servicios publicos -->
			  <div class="form-row" id="DenegacionPublica" style="display:none;">
			  	<div class="form-group col-md-12">
			  		<label for="inputDDenegacionPublica">Denegación de acceso a prestaciones y servicios públicos</label>
			      <select id="inputDDenegacionPublica" class="form-control">
			        <option selected>Empleo</option>
			        <option>Asistencia sanitaria</option>
			        <option >Otras administraciones</option>
			        <option>Empadronamiento</option>
			        <option>Servicios sociales</option>
			      </select>
			    </div>
			  </div>

			  <!-- Racismo institucional -->
			  <div class="form-row" id="RacismoInstitucional" style="display:none;">
			  	<div class="form-group col-md-12">
			  		<label for="inputDRacismoInstitucional">Racismo institucional</label>
			      <select id="inputDRacismoInstitucional" class="form-control" onchange="showRacismoOtros(this);">
			        <option value="cies" selected>CIES</option>
			        <option value="nacionalidad">Nacionalidad</option>
			        <option value="tramitesExtranjeria">Tramites extranjeria</option>
			        <option value="otro">Otros: indicar después</option>
			     </select>
			    </div>
			  </div>

			  <div class="form-group" id="RacismoOtro" style="display:none;">
			    <label for="inputDRacismoOtros">Indicar Otros:</label>
			    <textarea class="form-control" id="inputDRacismoOtros" rows="1"></textarea>
			  </div>

			  <!--Agente discriminador-->

			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label for="inputDSituacionDocumental">Agente discriminador</label>
			      <select id="inputDSituacionDocumental" class="form-control">
			        <option selected>Entidad pública</option>
			        <option>Entidad privada</option>
			        <option>Particular</option>
			        <option>Otros</option>
			        
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputInternaComienzo">Fecha de los hechos</label>
			      <input type="date" class="form-control" id="inputInternaComienzo">
			    </div>
			    
			    <div class="form-group col-md-4">
			      <label for="inputName">Municipio</label>
			      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
			    </div>
			  </div>

			   <div class="form-group">
			    <label for="inputDRasgosFenotipicos">Relato de los hechos</label>
			    <textarea class="form-control" id="inputInternaHorario" rows="3"></textarea>
			  </div>

			  <div class="form-row">
			  	 <div class="form-group col-md-4">
			      <label for="inputName">Identificación del agente discriminador</label>
			      <input type="text" class="form-control" id="inputName">
			    </div>

			     <div class="form-group col-md-4">
			      <label for="inputName">Personas que pueden testificar</label>
			      <input type="text" class="form-control" id="inputName">
			    </div>
			  	<div class="form-group col-md-4">
			      <label for="inputDEstrategia">Estrategia a seguir</label>
			      <select id="inputDEstrategia" class="form-control" onchange="showEstrategia(this);">
			      	<option value="Asumir" selected>Asumimos</option>
			        <option value="Derivar" >Derivamos</option>		        
			      </select>
			    </div>
			  </div>

			  <div class="form-row">
			  <div class="form-group col-md-12" id="AsumimosCaso" >
			      <label for="inputDAsumir">Asumimos caso</label>
			      <select id="inputDAsumir" class="form-control">
			        <option value="ViaPenal" selected >Via Penal</option>
			        <option value="DefensorPueblo">Defensor del pueblo</option>	
			        <option value="Denuncia">Denuncia pública</option>	
			        <option value="NoDenuncia">No desea inponer denuncia</option>	
			        <option value="Institucion">Institución causante</option>	
			        <option value="Otras">Otras</option>			        
			      </select>
			    </div>
			</div>

			    <div class="form-group" id="DerivamosCaso" style="display:none;">
			    <label for="inputDDerivar">Derivamos caso</label>
			    <textarea class="form-control" id="inputDDerivar" rows="2"></textarea>
			  </div>

			   <div class="form-group">
			    <label for="inputDRasgosFenotipicos">Otros elementos probatorios</label>
			    <textarea class="form-control" id="inputInternaHorario" rows="2"></textarea>
			  </div>


			</div>

		</div>

		<!-- Extranjería -->
		<div class="card mb-3">
			<div class="card-header text-white bg-secondary" onclick="showDiv('extranjeria')">Datos Extranjería</div>
			<div class="card-body" id="extranjeria">
			
			<div class="form-group">
			<label for="proyectosDeIntervención">Proyectos de la intervención</label>
			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="aholkuSarea" name="Checkbox[]">
				    	<label class="form-check-label">Aholku-sarea</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="convenioAnual" name="Checkbox[]">
				    	<label class="form-check-label">Convenio anual diputación Guipúzcoa</label>
				  </div>
				</div>
			  </div>

			   <div class="form-row">
				  <div class="col-sm-6">
 					<div class="form-check">
					  	<input class="form-check-input" type="checkbox" value="servicioHabitual" name="Checkbox[]">
				    	<label class="form-check-label">Servicio habitual de Sos Racismo</label>
				  </div>
				  </div>
				  <div class="col-sm-6">
				    <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="berdin" name="Checkbox[]">
				    	<label class="form-check-label">Berdin</label>
				  </div>
				  </div>
			  </div>

			    <div class="form-row">
				  <div class="col-sm-6">
				  	<div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="primeraAtencion" name="Checkbox[]">
				    	<label class="form-check-label">
				    Primera atención y derivación de población inmigrante - DGM (MEYSS)</label>
				  </div>
				  </div>
				  <div class="col-sm-6">
				  	<div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="trabajadoraHogar" name="Checkbox[]">
				    	<label class="form-check-label">Trabajadoras de hogar</label>
				  </div>
				  </div>
			  </div>

			  <div class="form-row">
				  <div class="col-sm-6">
				  	<div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="harrera" name="Checkbox[]">
				    	<label class="form-check-label">Harrera</label>
				  </div>
				  </div>
			</div>
			</div>

			<div class="form-group">
			<label for="necesidadesDeMiEntidad">Necesidades de mi entidad</label>
			</div>

			<!-- Ayudas sociales -->
			<div class="form-group">
			<div class="p-2 mb-2 bg-secondary text-white" onclick="showDiv('ayudasSociales')">Ayudas Sociales</div>
				<div id="ayudasSociales">
				<div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ayudasSociales" name="Checkbox[]">
				    	<label class="form-check-label">Ayudas sociales</label>
				  </div>
				</div>
			  </div>
			  </div>			
			</div>

			<!-- Extranjeria -->
			<div class="p-2 mb-2 bg-secondary text-white" onclick="showDiv('extranjeriaIntervencion')">Extranjería</div>
			<div id="extranjeriaIntervencion">
				<div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="extranjeria" name="Checkbox[]">
				    	<label class="form-check-label">Extranjería</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEsocialContrato" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo social con contrato</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCElaboral" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo laboral</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEfamiliarAscendente" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo familiar por ascendiente</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="familiarComunitario" name="Checkbox[]">
				    	<label class="form-check-label">Familiar de comunitario</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARTTinicialReagrupacion" name="Checkbox[]">
				    	<label class="form-check-label">ARTT inicial reagrupación familiar</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="renovacionc_a" name="Checkbox[]">
				    	<label class="form-check-label">Renovación c/a</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEsocialSinContrato" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo social sin contrato</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEfamiliarDescendiente" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo social por descendiente</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEotras" name="Checkbox[]">
				    	<label class="form-check-label">ARCE otras</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEhumanitarias" name="Checkbox[]">
				    	<label class="form-check-label">ARCE razones humanitarias</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCEviolenciaGenero" name="Checkbox[]">
				    	<label class="form-check-label">ARCE violencia de género</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARTTindependiente" name="Checkbox[]">
				    	<label class="form-check-label">ARTT independiente familiares reagrupados</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARTTinicialExencion" name="Checkbox[]">
				    	<label class="form-check-label">ARTT inicial exención situación nacional empleo</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARTTinicialOtras" name="Checkbox[]">
				    	<label class="form-check-label">ARTT inicial otras</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="CancelacionAntecedentes" name="Checkbox[]">
				    	<label class="form-check-label">Cancelación antecedentes penales</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="cedulaInscripcion" name="Checkbox[]">
				    	<label class="form-check-label">Cedula de inscripción</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="entradaOtros" name="Checkbox[]">
				    	<label class="form-check-label">Entrada OTROS</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="EstanciaEstudiosInicial" name="Checkbox[]">
				    	<label class="form-check-label">Estancia por estudios inicial</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="EstanciaEstudiosProrroga" name="Checkbox[]">
				    	<label class="form-check-label">Estancia por estudios prorroga</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="EstanciaCartaInvitacion" name="Checkbox[]">
				    	<label class="form-check-label">Estancia-Carta de invitación</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="informacionInformesVivienda" name="Checkbox[]">
				    	<label class="form-check-label">Información sobre informes de arraigo-vivienda</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="MatrimonioPoderes" name="Checkbox[]">
				    	<label class="form-check-label">Matrimonio por poderes</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="MENAARmayoriaEdad" name="Checkbox[]">
				    	<label class="form-check-label">MENA AR paso mayoría de edad</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="MENAARreconocimientoExtemporaneo" name="Checkbox[]">
				    	<label class="form-check-label">MENA AR reconocimiento extemporaneo</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="menoresEspaña" name="Checkbox[]">
				    	<label class="form-check-label">MENORES nacidos en España</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="MenoresNoEspaña" name="Checkbox[]">
				    	<label class="form-check-label">MENORES no nacidos en España</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="MenoresOtros" name="Checkbox[]">
				    	<label class="form-check-label">MENORES otros</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="modificacionARCEaARTT" name="Checkbox[]">
				    	<label class="form-check-label">Modificación ARCE a ARTT</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="modificacionEstanciaEstudiosARTT" name="Checkbox[]">
				    	<label class="form-check-label">Modificación estancia por estudios a ARTT</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="modificacionTarjetaFamiliar" name="Checkbox[]">
				    	<label class="form-check-label">Modificación Tarjeta Familiar Residente UE a ARTT</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="modificacionTodas" name="Checkbox[]">
				    	<label class="form-check-label">Modificación TODAS</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="nacionalidadDoble" name="Checkbox[]">
				    	<label class="form-check-label">Nacionalidad doble</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="nacionalidadOtros" name="Checkbox[]">
				    	<label class="form-check-label">Nacionalidad OTROS</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="nacionalidadResidencia" name="Checkbox[]">
				    	<label class="form-check-label">Nacionalidad por residencia</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="otros" name="Checkbox[]">
				    	<label class="form-check-label">OTROS</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="renovacionARTnoLucrativa" name="Checkbox[]">
				    	<label class="form-check-label">Renovacíon ART no lucrativa</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="renovacionARTreagrupacionFamiliar" name="Checkbox[]">
				    	<label class="form-check-label">Renovacion ART por reagrupación familiar</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="renovacionARTTc_a" name="Checkbox[]">
				    	<label class="form-check-label">Renovación ARTT c/a</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="renovacionARTTc_p" name="Checkbox[]">
				    	<label class="form-check-label">Renovación ARTT c_p</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="residenciaLargaDuracion" name="Checkbox[]">
				    	<label class="form-check-label">Residencia de larga duración</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="residenciaLargaDuracionUE" name="Checkbox[]">
				    	<label class="form-check-label">Residencia de larga duración UE</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="SalidaAutorizacionRegreso" name="Checkbox[]">
				    	<label class="form-check-label">Salida con autorización de regreso</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="SalidaRetornoVoluntario" name="Checkbox[]">
				    	<label class="form-check-label">Salida con retorno voluntario</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="ARCElaboral" name="Checkbox[]">
				    	<label class="form-check-label">ARCE arraigo laboral</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="salidaOtros" name="Checkbox[]">
				    	<label class="form-check-label">Salida OTROS</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="UEfamiliares" name="Checkbox[]">
				    	<label class="form-check-label">UE familiares</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="UEresidentes" name="Checkbox[]">
				    	<label class="form-check-label">UE residentes</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="UErumanos" name="Checkbox[]">
				    	<label class="form-check-label">UE rumanos</label>
				  </div>
				</div>
				<div class="col-sm-6"></div>
			  </div>
			</div>

			<!-- Discriminación -->
			<div class="form-group">
			<div class="p-2 mb-2 bg-secondary text-white" onclick="showDiv('discriminacionIntervencion')">Discriminación</div>
				<div id="discriminacionIntervencion">
				<div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="discriminacion" name="Checkbox[]">
				    	<label class="form-check-label">Dicriminación</label>
				  </div>
				</div>
			  </div>
			  </div>			
			</div>

			<!-- Asistencia laboral -->
			<div class="form-group">
			<div class="p-2 mb-2 bg-secondary text-white" onclick="showDiv('asistenciaLaboral')">Asistencia laboral</div>
				<div id="asistenciaLaboral">
				<div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="asistenciaLaboral" name="Checkbox[]">
				    	<label class="form-check-label">Asistencia Laboral</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="finiquitos" name="Checkbox[]">
				    	<label class="form-check-label">Finiquitos</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="informacionDerechosLaborales" name="Checkbox[]">
				    	<label class="form-check-label">Información derechos laborales</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="actoConciliacion" name="Checkbox[]">
				    	<label class="form-check-label">Acto de conciliacion</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="seguimientoDemandaLaboral" name="Checkbox[]">
				    	<label class="form-check-label">Seguimiento demanda laboral</label>
				  </div>
				</div>
				<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="agresionLaboral" name="Checkbox[]">
				    	<label class="form-check-label">Agresión/Discriminación entorno laboral</label>
				  </div>
				</div>
			  </div>

			  <div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="cajaResistencia" name="Checkbox[]">
				    	<label class="form-check-label">Caja resistencia / Apoyo economico</label>
				  </div>
				</div>
			  </div>

			  </div>			
			</div>

			<!-- Asesoramiento ( orientación) -->
			<div class="form-group">
			<div class="p-2 mb-2 bg-secondary text-white"  onclick="showDiv('asesoramiento')">Asesoramiento / Orientación</div>
				<div id="asesoramiento">
				<div class="form-row">
			  	<div class="col-sm-6">
				   <div class="form-check">
				  		<input class="form-check-input" type="checkbox" value="asesoramiento" name="Checkbox[]">
				    	<label class="form-check-label">Asesoramiento / Orientación</label>
				  </div>
				</div>
			  </div>
			  </div>			
			</div>

			</div>
		</div>

			
	<button type="button" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">Añadir Usuario</button>
	

<!-- Modal : confirmación -->
<div class="modal" tabindex="-1" role="dialog" id="confirmationModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Estas seguro de que quieres añadir un usuario?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-secondary" name="guardar">Guradar y salir</button>
        <button type="submit" class="btn btn-secondary" name="intervencion">Guardar y añadir intervención</button>
      </div>
    </div>
  </div>

</form>
</div>
</body>
<script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const user = urlParams.get('n_documentacion');
var x = 'APA';

	document.getElementById("inputName").value = '<?php echo $nombre ?>';
	document.getElementById("inputSurname").value = '<?php echo $apellido1 ?>';
	document.getElementById("inputSurname2").value = '<?php echo $apellido2 ?>';
	document.getElementById("inputDocumentationType").value = '<?php echo $t_documentacion ?>';
	document.getElementById("inputDocumentation").value = '<?php echo $n_documentacion ?>';
	document.getElementById("inputEmail").value = '<?php echo $email ?>';
	document.getElementById("inputTelephone").value = '<?php echo $telefono ?>';

document.getElementById("NavUsuarios").classList.add('active');
document.getElementById("TrabajadoraDelHogar").style.display="none";
document.getElementById("Discriminacion").style.display="none";
document.getElementById("extranjeria").style.display="none";
document.getElementById("ayudasSociales").style.display="none";
document.getElementById("extranjeriaIntervencion").style.display="none";
document.getElementById("discriminacionIntervencion").style.display="none";
document.getElementById("asesoramiento").style.display="none";
document.getElementById("asistenciaLaboral").style.display="none";

function showDiv(class_name) {
  var x = document.getElementById(class_name);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
function showEstrategia(t) {
    if (t.value == "Asumir") {
        document.getElementById("AsumimosCaso").style.display = "block";
    } else {
        document.getElementById("AsumimosCaso").style.display = "none";
    }
    if (t.value == "Derivar") {
        document.getElementById("DerivamosCaso").style.display = "block";
    } else {
        document.getElementById("DerivamosCaso").style.display = "none";
    }
}


function showTipo(t) {
    if (t.value == "Conflicto") {
        document.getElementById("Conflictos").style.display = "block";
    } else {
        document.getElementById("Conflictos").style.display = "none";
    }
    if (t.value == "DenegacionPrivada") {
        document.getElementById("DenegacionPrivada").style.display = "block";
    } else {
        document.getElementById("DenegacionPrivada").style.display = "none";
    }
    if (t.value == "DenegacionPublica") {
        document.getElementById("DenegacionPublica").style.display = "block";
    } else {
        document.getElementById("DenegacionPublica").style.display = "none";
    }
    if (t.value == "Racismo") {
        document.getElementById("RacismoInstitucional").style.display = "block";
    } else {
        document.getElementById("RacismoInstitucional").style.display = "none";
    }
}

function showConflictosOtros(t) {
	if (t.value == "otro") {
		document.getElementById("ConflictosOtro").style.display = "block";
    } else {
        document.getElementById("ConflictosOtro").style.display = "none";
	}
}

function showRacismoOtros(t) {
	if (t.value == "otro") {
		document.getElementById("RacismoOtro").style.display = "block";
    } else {
        document.getElementById("RacismoOtro").style.display = "none";
	}
}

</script>

<?php


?>