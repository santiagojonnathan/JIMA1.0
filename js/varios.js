function evaluaD(oNombre, oApePat, oEail, oTel){
	var sErr="";
	var bRet = false;
	
		if (oNombre.value=="")
			sErr= sErr + "\n Falta nombre";
	
		if (oApePat.value=="")
			sErr= sErr + "\n Falta apellido paterno";
	
		if (oEail,value=="")
			sErr= sErr + "\n Falta email";
	
		if (oTel.value=="")
			sErr= sErr + "\n Falta telefono de contacto";
		
		if (sErr == "")
			bRet = true;
		else
			alert(sErr);
		
		return bRet;
	}