

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeptagonTech - CMS</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
</head>
<body>
    <div class = 'container_main'>

    <!-- Import Header-->
    <?php include('header_guest.php');?>
        <center>
        <div id = 'container_welcome'>
           <!--Image logo--> 
           <img src = './img/img_cmsicon.png' style = 'width: 10%; margin-top: 2vh; margin-bottom:1vh; ' ><br/>
           <h1>Class Management System</h1>
           <sh1>Powered by <b>heptagonOS</b></sh1>

           <br/><br/>

           <form action = '' method = 'post' id = 'form_welcome_signin'>
                <input type = 'text' name = 'tb_email' placeholder = 'Email' autocomplete = 'off' required/>
           </form>

        </div>
        </center>
    </div>
</body>
</html>