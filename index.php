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
        include 'select.php';
        //input and button can be created by using the respective class
        //the parameter are name, type,  placeholder, class,id, extra(like required, min, max etc)
        //any non necessary values can be put to null
        $user = new Input('uname','text','username','username',extra:"required");
        $pass = new Input('pass','password','password','password',extra:"required");

        //button parameter are their displayname, id, type, onclick, bootstrap icon
        $buttons = new Button("Login",type:'submit',icon:"<i class='bi bi-box-arrow-in-right'></i>");
        $buttonr = new Button("Clear",type:'reset',icon:"<i class='bi bi-trash'></i>");

        //submit, reset, hidden type input can created by using their class which are all subclasses of the input class
        //they all have parameter value, id, class 

        //the value in submit and reset is their shown name
        $submitinputbar = new Submit('submitbtn');
        $resetinputbar = new Submit('resetbtn');

        //the value in hidden wont be shown but will be sent to the server
        $hiddeninputbar = new Hidden('hiddenbtn','hiddenvalue');

        //labels can be create by the static method label in the form class
        //creating a select and multiple option objects;
        $op1 = new Option('option1','option1');
        $op2 = new Option('option2','option2');
        $oparr = array(
            $op1->optiontag,$op2->optiontag
        );
        //or
        $opparr2[]=(new Option('option1','option1'))->optiontag;
        $opparr2[]=(new Option('option2','option2'))->optiontag;
        $opparr2[]=(new Option('option3','option3'))->optiontag;
        $opparr2[]=(new Option('option4','option4'))->optiontag;

        $select = new Select('selector',$oparr);

        $select2 = new Select('selector2',$opparr2);

        //create an array to store the elements that are to be passed into the form class
        //in tabulate method, the data to be displayed in the the same row should be seperated by a period(.)
        //and the data to display in different row should be seperated by comma(,)
        /*
        in the below example we can see that inorder for the labels and input bar to appear in the row, a period(.)
        has been used and for different input bars to be displayed on different lines, they are seperated by a comma(,)
        */
        $formelements = array(
            $user->inputbar,
            $pass->inputbar,
            $select->selectbar,
            $select2->selectbar,
            $buttons->deploy,$buttonr->deploy 
        );

        

        //creating a form object with name,method and action
        $form = new Form('login','post');

        //creating a form without tabular format. create method does not return anything
        $form->create($formelements);

        echo "<h2>This is form created by the create method and displayed using the display method</h2>";
        //We can display a form created by create method using the display method of the form class
        echo $form->display();

        echo "<h2>This is a form which sends hidden data that is disguised as a button</h2>";
        //hidden form that can send data to server
        $hiddenvalue = 123456;
        $hiddenform = new Form('senddata','post');
        $hiddenform->create(
            [
                (new Hidden('hiddenvalue',$hiddenvalue))->inputbar,
                (new Button(type:'submit',icon:"<i class = 'bi bi-box-arrow-in-right'></i>"))->deploy
            ]
        );
        echo $hiddenform->display();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['uname'])){
                $username = $_POST['uname'];
                $password = $_POST['pass'];
                $s = $_POST['selector'];
                $s1 = $_POST['selector2'];
                echo "<p>Your username is $username and password is $password</p>";
                echo "<p>selection1 => $s selection2 => $s1 </p>";    
            }
            if(isset($_POST['hiddenvalue'])){
                $val = $_POST['hiddenvalue'];
                echo "<p>$val is your hidden value</p>";
            }
        }
    ?>
</body>
</html>
