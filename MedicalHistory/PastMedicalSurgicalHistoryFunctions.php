      <?php echo TogglerNonRadio() ?>



<script type="text/javascript">
    function AddToPastSurgicalHistory() {
        var myTable = document.getElementById("tbl_PastSurgicalHistory");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(currentIndex);

        var firstColumn = document.createElement("i");
        firstColumn.setAttribute("id", "lbl_SurgeryType" + currentIndex);
        firstColumn.innerHTML = document.getElementById("tbx_SurgeryType").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(firstColumn);
        
             var secondColumn = document.createElement("i");
        secondColumn.setAttribute("id", "lbl_SurgeryDate" + currentIndex);
        secondColumn.innerHTML = document.getElementById("tbx_SurgeryDate").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(secondColumn);
        
        
         var thirdColumn = document.createElement("i");
        thirdColumn.setAttribute("id", "lbl_SurgeryNotes" + currentIndex);
                       thirdColumn.innerHTML = $('textarea#tbx_SurgeryNotes').val();

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(thirdColumn);
   
    }
    </script>