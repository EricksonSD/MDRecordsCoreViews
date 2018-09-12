   <?php echo TogglerNonRadio() ?>

    <?php echo TogglerRadio('Former smoker', 'SmokerType', 'div_FormerSmoker') ?>
    <?php echo TogglerRadio('Current everyday smoker', 'SmokerType', 'div_CurrentEverydaySmoker') ?>
    <?php echo TogglerRadio('Current someday smoker', 'SmokerType', 'div_CurrentSomedaySmoker') ?>
 
    <?php echo TogglerRadio('Former alcohol user', 'AlcoholUserType', 'div_FormerAlcoholUser') ?>
    <?php echo TogglerRadio('Current everyday alcohol user', 'AlcoholUserType', 'div_CurrentEverydayAlcoholUser') ?>
    <?php echo TogglerRadio('Current someday alcohol user', 'AlcoholUserType', 'div_CurrentSomedayAlcoholUser') ?>

   <?php echo TogglerRadio('Former drug user', 'DrugUserType', 'div_FormerDrugUser') ?>
    <?php echo TogglerRadio('Current everyday drug user', 'DrugUserType', 'div_CurrentEverydayDrugUser') ?>
    <?php echo TogglerRadio('Current someday drug user', 'DrugUserType', 'div_CurrentSomedayDrugUser') ?>

<!--Smoking script-->

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
        } 
    }
</script>

<!--Alcohol use script-->


<script type="text/javascript">
    function AddToAlcoholUseStatus() {
        var myTable = document.getElementById("tbl_AlcoholUseStatus");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(currentIndex);

        var firstColumn = document.createElement("i");
        firstColumn.setAttribute("id", "lbl_AlcoholType" + currentIndex);
        firstColumn.innerHTML = document.getElementById("tbx_AlcoholType").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(firstColumn);

        var secondColumn = document.createElement("i");
        secondColumn.setAttribute("id", "lbl_AlcoholUserType" + currentIndex);
        secondColumn.innerHTML = $('input[name="AlcoholUserType"]:checked').val();

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(secondColumn);

        var thirdColumn = document.createElement("i");
        thirdColumn.setAttribute("id", "lbl_Frequency" + currentIndex);
  
                thirdColumn.innerHTML = document.getElementById("tbx_AlcoholUseFrequencyNumber").value + " " + $('#sel_AlcoholUseUnit').find(":selected").text()
                        + " " + document.getElementById("tbx_AlcoholUsePeriod").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(thirdColumn);

        var fourthColumn = document.createElement("i");
        fourthColumn.setAttribute("id", "lbl_AlcoholUseNotes" + currentIndex);
                  fourthColumn.innerHTML = $('textarea#tbx_AlcoholUseNotes').val();

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
        } 
    }
</script>


<!--Drug use script-->

<script type="text/javascript">
    function AddToDrugUseStatus() {
        var myTable = document.getElementById("tbl_DrugUseStatus");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(currentIndex);

        var firstColumn = document.createElement("i");
        firstColumn.setAttribute("id", "lbl_DrugType" + currentIndex);
        firstColumn.innerHTML = document.getElementById("tbx_DrugType").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(firstColumn);

        var secondColumn = document.createElement("i");
        secondColumn.setAttribute("id", "lbl_DrugUserType" + currentIndex);
        secondColumn.innerHTML = $('input[name="DrugUserType"]:checked').val();

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(secondColumn);

        var thirdColumn = document.createElement("i");
        thirdColumn.setAttribute("id", "lbl_Frequency" + currentIndex);
  
                thirdColumn.innerHTML = document.getElementById("tbx_DrugUseFrequencyNumber").value + " " + $('#sel_DrugUseUnit').find(":selected").text()
                        + " " + document.getElementById("tbx_DrugUsePeriod").value;

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(thirdColumn);

        var fourthColumn = document.createElement("i");
        fourthColumn.setAttribute("id", "lbl_DrugUseNotes" + currentIndex);
                  fourthColumn.innerHTML = $('textarea#tbx_DrugUseNotes').val();

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
        } 
    }
</script>




