<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div id = 'heading'>
    <h1>Enter your details</h1>
    </div>
    <h3>This was made using form class</h3>
    
    
    <?php
        include 'form.php';
        include 'button.php';
        $user = new Input('uname','text','uname','username',"required");
        $pass = new Input('pass','password','pass','password',"required");
        $buttons = new Button(null,'loginbtn','submit',null,"<i class='bi bi-box-arrow-in-right'></i>");
        $buttonr = new Button(null,'resetbtn','reset',null,"<i class='bi bi-trash'></i>");
        $formelements = array(
            $user->inputbar,$pass->inputbar,
            $buttons->deploy.$buttonr->deploy 
        );
        $form = new form('login','post',null);
        $form->create($formelements);
        echo $form->display();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            echo "<p>Your username is $username<br>password is $password</p>";
        }
    ?>
</body>
</html>
