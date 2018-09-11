
<script type="text/javascript">
    function AddToSmokingStatus() {
        var myTable = document.getElementById("tbl_SmokingStatus");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(currentIndex);

        var firstColumn = document.createElement("i");
        firstColumn.setAttribute("id", "lbl_SmokingType" + currentIndex);
        firstColumn.innerHTML = document.getElementById("tbx_SmokingType").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(firstColumn);

        var secondColumn = document.createElement("i");
        secondColumn.setAttribute("id", "lbl_SmokerType" + currentIndex);
        secondColumn.innerHTML = $('input[name="SmokerType"]:checked').val();

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(secondColumn);

        var thirdColumn = document.createElement("i");
        thirdColumn.setAttribute("id", "lbl_Frequency" + currentIndex);
  
                thirdColumn.innerHTML = document.getElementById("tbx_SmokingFrequencyNumber").value + " " + $('#sel_SmokingUnit').find(":selected").text() + " per day";

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(thirdColumn);

        var fourthColumn = document.createElement("i");
        fourthColumn.setAttribute("id", "lbl_SmokingNotes" + currentIndex);
                  fourthColumn.innerHTML = $('textarea#tbx_SmokingNotes').val();

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(fourthColumn);

        var fifthColumn = document.createElement("i");
        var sixthColumn = document.createElement("i");
        var seventhColumn = document.createElement("i");

        if ($('input[name="SmokerType"]:checked').val() === "Former smoker") {
            fifthColumn.setAttribute("id", "lbl_FormerSmokerStartDate" + currentIndex);
            fifthColumn.innerHTML = document.getElementById("tbx_FormerSmokerStartDate").value;
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(fifthColumn);
            sixthColumn.setAttribute("id", "lbl_FormerSmokerEndDate" + currentIndex);
            sixthColumn.innerHTML = document.getElementById("tbx_FormerSmokerEndDate").value;
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(sixthColumn);
            seventhColumn.setAttribute("id", "lbl_FormerSmokerTotalYearsSmoked" + currentIndex);
            seventhColumn.innerHTML = calculateTimeDiff(document.getElementById("tbx_FormerSmokerStartDate").value, document.getElementById("tbx_FormerSmokerEndDate").value);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(seventhColumn);
        } else {
            alert('OMG!');
        }
    }
</script>