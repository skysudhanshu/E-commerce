<script type = "text/javascript">

    var popUpObj;
function LoadModalDiv()

    {

        var bcgDiv = document.getElementById("divBackground");

        bcgDiv.style.display="block";

    }
	function HideModalDiv()

     {

        var bcgDiv = document.getElementById("divBackground");

        bcgDiv.style.display="none";

     }
    function loginpopup()

    {

    popUpObj=window.open("login.php",

    "ModalPopUp",

    "toolbar=no," +

    "scrollbars=no," +
    "titlebar=no"+
    "location=no," +

    "statusbar=no," +

    "menubar=no," +

    "resizable=0," +

    "width=500," +

    "height=400," +

    "left = 490," +

    "top=100"

    );
    
    popUpObj.focus();
    
    LoadModalDiv();
	

    }
 function signuppopup()

    {

    popUpObj=window.open("register.php",

    "ModalPopUp",

    "toolbar=no," +

    "scrollbars=no," +

    "location=no," +

    "statusbar=no," +

    "menubar=no," +

    "resizable=0," +

    "width=500," +

    "height=700," +

    "left = 490," +

    "top=300"

    );
   
    popUpObj.focus();
    
    LoadModalDiv();

    }
</script>
<div id = "divBackground" style="position: fixed; z-index: 999; height: 100%; width: 100%; top: 0; left:0; background-color: Black; filter: alpha(opacity=60); opacity: 0.6; -moz-opacity: 0.8;display:none">

</div>
<nav class = "navbar navbar-inverse  navContainer">
        <div class = "container-fluid">  
	    <div class = "navbar navbar-header">
                <div class = "navbar navbar-brand"><a href = "index.php" style = "text-decoration: none; color:white;">The Mobile Store</a></div>
			<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navLinks">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			</button>
	    </div>
            <?php
                if(!isset($_SESSION['id']))
                {
             ?>
	    <div class = "collapse navbar-collapse" id = "navLinks">
	    <ul class = "nav navbar-nav navbar-right">
		 <li onclick="signuppopup();"><a href = "#"><span class = "glyphicon glyphicon-user"></span> Sign up</a></li>
		 <li onclick="loginpopup();"><a href = "#"><span class = "glyphicon glyphicon-log-in"></span> Login</a></li>
                 <li><a href = "aboutUs.php"><span class = "glyphicon glyphicon-log-in"></span> About Us</a></li>
                 <li><a href = "contactUs.php"><span class = "glyphicon glyphicon-log-in"></span> Contact Us</a></li>
		</ul>
	    </div>
            <?php
                }
                else
                {
            
            ?>
            <div class = "collapse navbar-collapse" id = "navLinks">
	    <ul class = "nav navbar-nav navbar-right">
		 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		 <li><a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
		 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Log out</a></li>
		</ul>
	    </div>
            <?php
                }
            ?>
	    </div>   
	    </nav>
