// file simpleajax.js
var xhr = createRequest();
function getData(dataSource, divID, aName, aPwd)  {
    if(xhr) {
	    var place = document.getElementById(divID);
	    var url = dataSource+"?name="+aName+"&pwd="+aPwd;
	    xhr.open("POST", url, true);
	    xhr.onreadystatechange = function() {
		    alert(xhr.readyState);
			if (xhr.readyState == 4 && xhr.status == 200) {
			place.innerHTML = xhr.responseText;
		    } // end if
	    } // end anonymous call-back function
	    xhr.send(null);
	} // end if
} // end function getData()