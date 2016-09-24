<?php
##############################################################
####### NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO
##############################################################
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO
$CONFACTRONICA["ALMACENLOCAL"]="almacen_local";
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO
$CONFACTRONICA["ALMACENREMOTO"]="almacen_remoto";
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO
$CONFACTRONICA["ARCHIVOPLANO"]="cargar_datos.txt";
# NOMBRE DEL ARCHIVO XML A CEDER (SOLO EL DTE FIRMADO SIN SOBRE)
$CONFACTRONICA["DTEFIRMADO"]="FOLIO12TIPO33_FIRMADO.xml"; 
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)
$CONFACTRONICA["TRACKID"]="TRACKID_RUT77777777-2_TIPO52_FOLIO185.xml";
#
$CONFACTRONICA["DTECEDIDOPORFIRMAR"]="DTECEDIDOPORFIRMAR.xml";
#
$CONFACTRONICA["DTECEDIDOFIRMADO"]="DTECEDIDOFIRMADO.xml";
#
$CONFACTRONICA["CESIONPORFIRMAR"]="CESIONPORFIRMAR.xml";
#
$CONFACTRONICA["CESIONFIRMADA"]="CESIONFIRMADA.xml";
#
$CONFACTRONICA["DOCUMENTOAECPORFIRMAR"]="DOCUMENTOAECPORFIRMAR.xml";
#
$CONFACTRONICA["DOCUMENTOAECFIRMADO"]="DOCUMENTOAECFIRMADO.xml";

##############################################################
####### CONFIGURACIÓN DEL SERVIDOR DE FACTURACIÓN
##############################################################		 
# URL DEL WEBSERVICE SERVIDOR 
$CONFACTRONICA["URLHOST"]="http://www.factronica.cl/factronica_webservice_servidor_beta";
# SCRIPT DEL WEBSERVICE SERVIDOR  
$CONFACTRONICA["URLFILE"]="ws_cesion.php";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="80";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]=1;
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]=1;
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]=30;
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]=0; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]=true; 

##############################################################
# DATOS DE CARATULA
##############################################################
$DocumentoAEC["ID"]="ID_AEC_FOLIO_12_TIPO33";
$Caratula["RutCedente"]="344-8";
$Caratula["RutCesionario"]="234-8";
$Caratula["NmbContacto"]="NN REYES";
$Caratula["FonoContacto"]="223274037";
$Caratula["MailContacto"]="NN@FFACTORING.CL";

##############################################################
# DATOS DEL CESION
##############################################################
$DocumentoCesion["ID"]="ID_DOC_FOLIO12_TIPO33";
$DocumentoCesion["SeqCesion"]="1";

##############################################################
# DATOS DEL DTE
##############################################################
$IdDTE["TipoDTE"]="33"; // Tipo de Factura Cedida
$IdDTE["RUTEmisor"]="23523-8"; // Rut del Emisor de la Factura Cedida
$IdDTE["RUTReceptor"]="235235-3"; // Rut del Receptor (Cliente) de la Factura Cedida
$IdDTE["Folio"]="12"; // Folio de la Factura Cedida
$IdDTE["FchEmis"]="2016-06-20"; // Fecha de la factura cedida formato aaaa-mm-dd
$IdDTE["MntTotal"]="164220"; // Monto total bruto de la factura cedida

##############################################################
# DATOS DEL CEDENTE
##############################################################
$Cedente["RUT"]="234234-8";
$Cedente["RazonSocial"]="EMPRESA LIMITADA";
$Cedente["Direccion"]="AV. 5 CASA 3";
$Cedente["eMail"]="NN@gmail.com";
$Cedente["RUTAutorizado"]="3223434-8";
$Cedente["Nombre"]="JUAN FRNNANCISCO GG FF";
$Cedente["DeclaracionJurada"]="Yo NN FRANCISCO FFF DD, Rut XXXX-3,en representación de EMISOR LIMITADA, RUT XXXXX-8 declaro bajo juramento que he puesto a disposición del cesionario EURO  S.A., RUT 44444-8, el (los) documento(s) donde constan los recibos de la recepción de las mercaderías entregadas o servicios prestados, entregados por parte del deudor de la factura Inversiones FFF Ltda. , Rut 5235235-3, de acuerdo a lo establecido en la Ley N° 19.983";

##############################################################
# DATOS DEL CESIONARIO
##############################################################
$Cesionario["RUT"]="3332223-8";
$Cesionario["RazonSocial"]="EURO FACTOR";
$Cesionario["Direccion"]="APOQUINDO 876 LAS CONDES";
$Cesionario["eMail"]="jj@EUROCAPITAL.CL";

##############################################################
# DATOS DEL DOCUMENTO CEDIDO
##############################################################
$DocumentoCesion["MontoCesion"]="164220";
$DocumentoCesion["UltimoVencimiento"]="2016-07-20";
$DocumentoCesion["eMailDeudor"]="nn@gmail.com";//-------------------- falta mail cliente

##############################################################
# CONFIGURACION DE NOMBRES DE CARPETAS Y ARCHIVOS
##############################################################
$DocumentoDTECedido["ID"]="DTEURI20";


##############################################################
# CARGAR CERTIFICADO DIGITAL
############################################################## 
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="wxuHCf5GSLXFxvbjDv1tD9MYN82cZx7O
W8V+Zy3dVFox8DudGNqIb5USY8Z5GK7mclScen0lwIk="; 
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGdjCCBV6gAwIBAgIKG+P1lAAAAAOwPDANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
mJD4+t+ZU4V2g0nyct5aTel6LzV/npHZesSgxHJL/se9ZZlickGn2ED3r5bWbeyi
6CK2pj+ToL9yaWqQekMEj/T/OP2exyonAKpArkJ5BqTBbTyihxJ4xauSIy6zbcWL
NpF1Nad2MzbjBPrvuhSq/3zZiJsjb5ER+E4=";
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDDG4cJ/kZIte5xN5JI1oHl5gybQm/6clBSTg7J2bZd5jY7IIjw
9Wkn7MyiA1GmJcmOo/+nyPkk4QMQrgNONkMsJJ2BMy4qCoLaq7GdhXGY2cyhgiT0
HD3HQ11i7gdyQsiYv2ECQGSivsm1w8x89hC2jLdUyKT+9vMT3wpj1dS9kkQxOn/O
GfdQMFmj+6ex9xWji+D/BYt7uoJMQRGHT8n7VzI8uls=
-----END RSA PRIVATE KEY-----"; 
?>
