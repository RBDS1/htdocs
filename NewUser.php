<!DOCTYPE html>
<html>
<head>
<title>
Регистрация на конференцию
</title>
<meta charset="UTF-8">
<meta name="description" content="Описание содержимого страницы">
<meta name="keywords" content="ключевые слова через запятую">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
    <header>
        <!--<h1>ПТИ</h1>-->
        <img src="images/image1.png" width="1250">
        <nav>
            <table id="Tnav">
                <tbody>
                    <tr>
                        <td id="Pnav" onclick="window.location.href='index.html'">
                            <a href="index.html">Главная</a>
                        </td>
                        <td id="Pnav" onclick="window.location.href='registration.html'">
                            <a href="registration.html">Регистрация</a>
                        </td>   
                    </tr>
                </tbody>
            </table>            
        </nav> 
    </header>    
    <main>
        <h1>Участник зарегистрирован</h1>     
        <?php 
            $surname=$_POST["Surname"];   
            $firstname=$_POST["firstname"];   
            $Secondname=$_POST["Secondname"];   
            $NX2;
            $Gender=$_POST["gender"];
            $TelN=$_POST["TelN"];
            $EM=$_POST["EM"];
            $Sub=$_POST["subject"];

            if(!empty($_POST["NX"]))
            {
                $NX=$_POST["NX"];
                $NX2="Участие с докладом. Тема доклада: $NX";
            }
            else
            {
                $NX2="Участие без доклада";
            }
            if(!empty($_POST["Birthdate"]))
            {
                $BD=$_POST["Birthdate"];
                $Birthdate=$BD;
            }
            else
            {
                $Birthdate="не указана";
            }
            if(!empty($_POST["Cont"]))
            {
                $Cont=$_POST["Cont"];
                $CN=$Cont;
            }
            else
            {
                $CN="не указаны";
            }               
        ?>
        
        
        <table align="center">
            <tbody>                
                <tr>  
                    <td id="first_form">
                        <h1><i><b>Личные данные</b></i></h1>
                        <h2><b>Фамилия: </b><i><?=$surname?></i></h2>
                        <h2><b>Имя: </b><i><?=$firstname?></i></h2>
                        <h2><b>Отчество: </b><i><?=$Secondname?></i></h2>
                        <h2><b>Дата рождения: </b><i><?=$Birthdate?></i></h2>
                        <h2><b>Пол: </b><i><?=$Gender?></i></h2>
                    </td>
                    <td id="first_form">
                        <h1><i><b>Контактные данные</b></i></h1><br>
                        <h2><b>Тел: </b><i><?=$TelN?></i></h2>
                        <h2><b>Email: </b><i><?=$EM?></i></h2>
                        <h2><b>Дополнительные контакты: </b><i><?=$CN?></i></h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="second"> 
                        <h1><i><b>Информация об участии</b></i></h1>
                        <h2><b>Направление: </b><i><?=$Sub?></i></h2>                       
                        <h2><?=$NX2?></h2> 
                     </td>
                </tr>
                <tr>
                    <td colspan="2" id="third"> 
                        <button id="ButF" onclick= "window.location.href='index.html'">Вернуться на главную</button>
                     </td>
                </tr>
            </tbody>
        </table>

    </main>    
    <footer>
        <h3>Университет Дубна</h3>
        <h3>2022 год</h3>
    </footer>
</body>
</html>