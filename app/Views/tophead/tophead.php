<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    @media screen and (min-width: 601px) {
        div.mycolumns {
            font-size: 16px;
        }
    }

    @media screen and (max-width: 777px) {
        div.mycolumns {
            font-size: 13px;
        }
    }

    /* Create three equal columns that floats next to each other */
    .mycolumns {
        float: left;
        width: 33.33%;
        height: (10px 0);
    }

    .mycolumnsAdmin {
        float: left;
        width: 25%;
        height: (10px 0);
    }

    /* Clear floats after the columns */
    .myrows:after {
        content: "";
        display: table;
        clear: both;
    }

    .button {
        float: left;
        position: relative;
        bottom: 4px;
        justify-content: center;
        align-self: center;
        border-radius: 4px;
        background-color: #FBB015;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 20px;
        transition: all 0.5s;
        cursor: pointer;
        */
    }
    .button1 {
        float: right;
        position: relative;
        bottom: 4px;
        justify-content: center;
        align-self: center;
        border-radius: 4px;
        background-color: #FBB015;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 20px;
        transition: all 0.5s;
        cursor: pointer;
        */
    }

    .button:hover {
        background-color: #D9AA00;

    }
    </style>
</head>


<body>
    <?php $session = \Config\Services::session(); ?>
    <?php 
             if ($session){
               if($session->get('user_admin')==TRUE){
                    $yourstatus= "You are Admin"; }
                else{ $yourstatus= "Welcome to our site"; } 
                }
                else {$yourstatus= "Welcome to our site";
                        echo $yourstatus;
                } ?>
    <div class="top-header">
        <div class="container">
            <div class="social-icons">
                <div class="myrows">

                    <?php if ($yourstatus =="You are Admin")
                        {  echo "<div class='mycolumnsAdmin'>";
                           echo "<button class='button'><i class='fa fa-user'
                                aria-hidden='true'>".$yourstatus."</i></button>";
                           echo "</div>";}
                         else 
                        {  echo "<div class='mycolumns'>";
                           echo "<span class='admin' style='10px;'><i class='fa fa-user'   aria-hidden='true'></i>".$yourstatus."</span>";
                           echo "</div>";}?>
                    <?php if ($yourstatus =="You are Admin")
                        {  echo "<div class='mycolumnsAdmin'>";
                           echo   "<span class='email'><i class='fa fa-envelope'
                                aria-hidden='true'></i>rahulg@devigntech.com</span>";
                           echo "</div>";}
                         else
                        { echo "<div class='mycolumns'>";
                          echo   "<span class='email'><i class='fa fa-envelope'
                                       aria-hidden='true'></i>rahulg@devigntech.com</span>";
                           echo "</div>";}?>
                    <?php if ($yourstatus =="You are Admin")    
                        { echo "<div class='mycolumnsAdmin'>";
                          echo "<span class='phone-call'><i class='fa fa-phone' aria-hidden='true'></i>+91 75078 35565</span>";
                          echo "</div>";}
                         else
                         {echo "<div class='mycolumns'>";
                          echo "<span class='phone-call'><i class='fa fa-phone' aria-hidden='true'></i>+91 75078 35565</span>";
                          echo "</div>";}?>
                    <?php if ($yourstatus =="You are Admin")
                        {echo "<div class='mycolumnsAdmin' style='float: right;'>" ; 
                         echo "<button class='button1' onclick='triggerlogout()'><i class='fa fa-sign-out'
                                aria-hidden='true'>Logout</i></button>";
                         echo "</div>" ;} ?>

                </div>
            </div>
        </div>
    </div>

</body>
<script>
function triggerlogout() {
    window.location = '<?php echo base_url()."/login/logout" ?>';
}
</script>

</html>