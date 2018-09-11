<?php
function head($title)
{
   $html = "<!DOCTYPE html><html>
<head><meta charset=\"UTF-8\"><title>MDRecords - " . htmlspecialchars($title) . "</title>
     <script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>\">
        <link href=\"../CSS/MDRecords.css\" rel=\"stylesheet\" type=\"text/css\" />
     
        
 ";
   return $html;
}

function body($userLoggedIn, $jobTitle, $userImageUrl)
{
$html ="    </head>
    <body style=\"background-color: #ebebeb\" id=\"mainbody\">
 <a href=\"#\" class=\"back-to-top\"></a>

<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->

<div id=\"mySidenav\" class=\"sidenav\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">CLOSE</a>
  <a href=\"#1\">Inpatient EMR</a>
  <a href=\"#2\">Outpatient EMR</a>
  <a href=\"#3\">Emergency EMR</a>
  <a href=\"#4\">HR system</a>
</div>
        <div style=\"width: 100%; background-color: ghostwhite; position: fixed; z-index: 3; top: 0px; left: 0px;min-wdith:1024px;\">
            <div style=\" min-width: 90px; text-align: center; display:table-cell; vertical-align:middle;\">
                <input type=\"image\" Style=\"width: 66px; height: 42px\" src=\"../Images/MDR_icon.png\" onclick=\"toggleNav()\"/> 
                             </div>
            <div style=\"width: 100%; text-align: center; display:table-cell; vertical-align:middle;\">
                <div class=\"navbar\" >
                    <a href=\"#home\">Home</a>
                    <div class=\"dropdown\">
                        <button class=\"dropbtn\">Patient Care
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <div class=\"dropdown-content\">
                            <a href=\"#\">Registration</a>
                            <a href=\"#\">Appointment</a>
                            <a href=\"#\">Office Visit</a>
                            <a href=\"#\">Visit History</a>
                            <a href=\"#\">Medical History</a>
                        </div>

                    </div> 
                    <a href=\"#home\">Waiting Room</a>
                    <div class=\"dropdown\">
                        <button class=\"dropbtn\">Finances 
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <div class=\"dropdown-content\">
                            <a href=\"#\">Billing</a>
                            <a href=\"#\">Financial reports</a>
                        </div>
                    </div> 
                    <div class=\"dropdown\">
                        <button class=\"dropbtn\">Facility 
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <div class=\"dropdown-content\">
                            <a href=\"#\">Employees</a>
                            <a href=\"#\">Facilities</a>
                            <a href=\"#\">Insurance</a>
                        </div>
                    </div> 
                </div>
            </div>
            <div style=\"text-align: center; display:table-cell; vertical-align:middle;\">
                <table style=\"width:100%; white-space:nowrap;\">
                    <tr>
                        <td rowspan=\"2\"><img src=\"". htmlspecialchars($userImageUrl)."\" width=\"40px\" height=\"40px\" /></td>
                        <td>&emsp;<label style=\"color:#0996c1; font-weight: 700\">". htmlspecialchars($userLoggedIn)."</label>&emsp;</td>
                    </tr>
                    <tr>
                        <td> &emsp;" . htmlspecialchars($jobTitle). "&emsp;</td>
                    </tr>
                </table>
            </div>
            <div class=\"navbar\"  style=\"text-align: center; display:table-cell; vertical-align:middle;\">
                <div class=\"dropdown\" style=\"float:right;\">
                  <button class=\"dropbtn\" style=\"padding: 14px 20px;\"><span style=\"font-size:15px;cursor:pointer\">&#9776;</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <div class=\"dropdown-content\" style=\"right: 0\">
                        <a href=\"#\">My Profile</a>
                        <a href=\"#\">Activity Log</a>
                        <a href=\"#\">Log out</a>
                    </div>
                </div>

            </div>

            <div style=\"width: 100%; background: -webkit-linear-gradient(left, #0fceca , #0996c1); background: -o-linear-gradient(right, #0fceca, #0996c1); background: -moz-linear-gradient(right, #0fceca, #0996c1); background: linear-gradient(to right, #0fceca , #0996c1); height: 5px\">
            </div>
        </div>
        <div style=\"min-width: 100%; padding-top: 50px; min-height: 100%; text-align: center;\">";
return $html;
}

function foot()
{
   $html = "</div>
            
 <script type=\"text/javascript\">
        // create the back to top button
        $('body').prepend('<a href=\"#\" class=\"back-to-top\"></a>');

        var amountScrolled = 300;

        $(window).scroll(function () {
            if ($(window).scrollTop() > amountScrolled) {
                $('a.back-to-top').fadeIn('slow');
            } else {
                $('a.back-to-top').fadeOut('slow');
            }
        });


        $('a.back-to-top').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 700);
            return false;
        });
    </script>
       

<script type=\"text/javascript\">
function toggleNav() {
var x = document.getElementById(\"mainbody\");
    if (x.style.marginLeft === \"250px\") {
            document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"mainbody\").style.marginLeft= \"0\";
    } else {
        document.getElementById(\"mySidenav\").style.width = \"250px\";
    document.getElementById(\"mainbody\").style.marginLeft = \"250px\";
    }
  }
  
 function closeNav() {
             document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"mainbody\").style.marginLeft= \"0\";}
    
// Get the elements with class=\"column\"
var elements = document.getElementsByClassName(\"column\");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = \"97.9%\";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = \"47.84%\";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById(\"btnContainer\");
var btns = container.getElementsByClassName(\"btn\");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener(\"click\", function(){
    var current = document.getElementsByClassName(\"active\");
    current[0].className = current[0].className.replace(\" active\", \"\");
    this.className += \" active\";
  });
}</script>

<script>

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName(\"tabcontent\");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = \"none\";
    }
    tablinks = document.getElementsByClassName(\"tablinks\");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
    }
    document.getElementById(tabName).style.display = \"block\";
    evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();
</script>

<script type=\"text/javascript\">
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

  <script type=\"text/javascript\">
function ToggleCheckAll(source, groupname) {
  checkboxes = document.getElementsByName(groupname);
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

<script>
    function goToLink(Link = \"#\", Message = \"You're about to leave the page. Unsaved changes will be lost. Continue?\"){
            if (confirm(Message))
        window.location= Link;
  }
</script>

    </body>
</html>
";
   return $html;
}