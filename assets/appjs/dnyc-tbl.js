

  //add new
  function addNewRow() {
    var akun = document.getElementById("kode").value;
    var akun1 = akun.split('.');
    var IdAkun = akun1[0];
    var NamaAkun  = akun1[1];

    var in_kode =  IdAkun;//document.getElementById("kode").value;
    var in_akun = NamaAkun;//document.getElementById("kode").name;
    var in_debet = document.getElementById("debet").value;
    var in_kredit = document.getElementById("kredit").value;

	 var tbl = document.getElementById("example1");

   var rowLen = tbl.rows.length - 1;


   for (var idx = 1; idx < rowLen; idx++) {
    var tb_kode = document.getElementById("r_kode["+idx+"]").value;
    if (tb_kode == in_kode) {
      alert("Nama Valas yang diinputkan sama !");
      return;
    }
  }

  var row = tbl.insertRow(tbl.rows.length);

	 var td0 = document.createElement("td");
	 var td1 = document.createElement("td");
	 var td2 = document.createElement("td");
	 var td3 = document.createElement("td");
    var td4 = document.createElement("td");
	
   //hidden rows
   var td5 = document.createElement("td"); td5.style.display = 'none';
   var td6 = document.createElement("td"); td6.style.display = 'none';
   var td7 = document.createElement("td"); td7.style.display = 'none';
   var td8 = document.createElement("td"); td8.style.display = 'none';
   var td9 = document.createElement("td"); td9.style.display = 'none';
   

	 td0.appendChild(document.createTextNode(in_kode));
	 td1.appendChild(document.createTextNode(in_akun));
	 td2.appendChild(document.createTextNode(in_debet));
	 td3.appendChild(document.createTextNode(in_kredit));
	 td4.appendChild(generateButton(row.rowIndex));
   //hidden rows
   td5.appendChild(generateTextBox(row.rowIndex,"r_kode",in_kode));
   td6.appendChild(generateTextBox(row.rowIndex,"r_akun",in_akun));
   td7.appendChild(generateTextBox(row.rowIndex,"r_debet",in_debet));
   td8.appendChild(generateTextBox(row.rowIndex,"r_kredit",in_kredit));
  
   td9.appendChild(generateTextBox(row.rowIndex,"index",row.rowIndex));

   row.id = row.rowIndex;
	 row.appendChild(td0);
	 row.appendChild(td1);
	 row.appendChild(td2);
	 row.appendChild(td3);
	 row.appendChild(td4);
   row.appendChild(td5);
	 row.appendChild(td6);
	 row.appendChild(td7);
	 row.appendChild(td8);
	 row.appendChild(td9);
	


   document.getElementById("kode").value = "";
   document.getElementById("akun").value = "";
   document.getElementById("debet").value = "";
   document.getElementById("kredit").value = "";
  



	}

	function generateTextBox(index,name,val) {
	 var idx = document.createElement("input");
	 idx.type = "text";
	 idx.name = name+"["+index+"]";
	 idx.id = name+"["+index+"]";
	 idx.value = val;

	 return idx;
	}

  function generateButton(index) {
   var idx = document.createElement("input");
   idx.type = "button";
   idx.name = "r_button["+index+"]";
   idx.id = "r_button["+index+"]";
   idx.setAttribute("onclick","deleteRow("+index+")");
   idx.setAttribute("class","btn btn-default");
   idx.setAttribute = "deleteRow(this)";
   idx.value = "Hapus";

   return idx;
  }

	//delete
  function deleteRow(index) {
    
    var row=document.getElementById(index);
    row.parentNode.removeChild(row);

  }
