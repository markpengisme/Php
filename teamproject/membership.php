<html>

<head>
   <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>課後心得分享平台</title>
 
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<div class="container">

<div class="page-header">

    <h1 style="color:white"><img src="img/logo.png" width="125px" height="100px">TigerDuck剋星<small style="color:#d5d5d5">會員註冊</small></h1>
</div>

<!-- Sign Up Form - START -->
<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<div class="container" id="f1">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div id="panel1" class="panel panel-default">
            <h1>Sign Up</h1>
            <form action="/action.php" method="post">
                <fieldset>
                    <legend><span class="number">1</span>基本資料</legend>
                    <label for="name">名字:</label>
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Type your name here..." aria-describedby="sizing-addon1" name="name">
                    </div>
                </fieldset>
                <br />
                <fieldset>
                    <label for="job">科系:</label>
                    <select id="job" name="department">
                        <optgroup label="管院">
                            <option value="frontend_developer">資訊管理系</option>
                            <option value="php_developor">企業管理系</option>
                            <option value="python_developer">工業管理系</option>
                            <option value="rails_developer">管不分</option>
                            
                        </optgroup>
                    </select>
                </fieldset>
                </br>
                <fieldset>
                    <label>年級:</label>
                    <input type="radio" id="develop" value="one" name="grade"><label class="light" for="development">大一</label><br>
                    <input type="radio" id="design" value="two" name="grade"><label class="light" for="design">大二</label><br>
                    <input type="radio" id="business" value="three" name="grade"><label class="light" for="business">大三</label><br>
                    <input type="radio" id="business" value="four" name="grade"><label class="light" for="business">大四</label>
                </fieldset>
                </br>
                <fieldset>
                    <label for="mail">台科信箱:</label>
                    <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="email" class="form-control" placeholder="Type your e-mail here..." aria-describedby="sizing-addon2" name="email">
                    </div>
                    <br />
                    <label for="account">帳號:</label>
                    <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-cog"></span></span>
                            <input type="text" class="form-control" placeholder="Account" aria-describedby="sizing-addon3" id="pass" name="account">
                    </div>
                    <br />
                    <label for="password">密碼:</label>
                    <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-cog"></span></span>
                            <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon3" id="password" name="password">
                    </div>
                    <br />
                    <label for="pass_confirm">確認密碼:</label>
                    <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon4"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="password" class="form-control" placeholder="Confirm password" aria-describedby="sizing-addon4" id="pass_confirm" name="pass_confirm">
                    </div>
                    <p id="passwordMatch"></p>
                    <br />
                    <div class="input-group input-group-md">
                            <label>性別:</label>
                            <select name="gender">
                                <option value="0">男</option>
                                <option value="1">女</option>
                            </select>
                    </div>
                        <br />
                    <div class="input-group input-group-md">
                            <label>生日:</label>
                            <div id="dateTimePicker"></div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><span class="number">2</span>自我介紹</legend>
                    <label for="bio">關於你:</label>
                    <textarea id="bio" name="user_bio"></textarea>
                </fieldset>
                <button  id="b1" type="submit" name="action" value="sign_up">Sign Up</button>
            </form>
            
            
            <footer>
                <p id="footer">Desing provided by <a href="https://www.shieldui.com/">第二組組員</a></p>
            </footer>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

<style>
    #f1
    {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    #panel1
    {
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1
    {
        color: black;
        margin: 0 0 30px 0;
        text-align: center;
    }

    #f1 input[type="text"],
    #f1 input[type="password"],
    #f1 input[type="date"],
    #f1 input[type="datetime"],
    #f1 input[type="email"],
    #f1 input[type="number"],
    #f1 input[type="search"],
    #f1 input[type="tel"],
    #f1 input[type="time"],
    #f1 input[type="url"],
    #f1 textarea,
    #f1 select
    {
        background: rgba(255,255,255,0.1);
        
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #fff;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    }

    #f1 textarea,
    #f1 select
    {
        border: 1px solid #ccc;
    }

    #f1 input[type="radio"],
    #f1 input[type="checkbox"]
    {
        margin: 0 4px 8px 0;
    }

    #f1 .sui-sprite.sui-calendar-icon
    {
        margin-top: 14px;
    }

    #b1
    {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
    }

    fieldset
    {
        margin-bottom: 30px;
        border: none;
    }

    legend
    {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label
    {
        display: block;
        margin-bottom: 8px;
    }

        label.light
        {
            font-weight: 300;
            display: inline;
        }

    .number
    {
        background-color: #5fcf80;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 100%;
    }

    #footer
    {
        font-size: 10px;
        text-align: center;
        font-weight: bold;
    }

    #passwordMatch
    {
        text-align: center;
    }

    .input-group-addon
    {
        background-color: #e8eeef;
    }

    #or
    {
        text-align: center;
        font-weight: bold;
    }

    .social
    {
        list-style-type: none;
        background: #29AFBB;
        height: 52px;
        border: 2px solid#218C95;
    }

        .social li
        {
            padding-right: 20px;
            display: inline-block;
            font-size: 27px;
            border-bottom: 5px solid#29AFBB;
            cursor: pointer;
            margin-top: 5px;
        }

            .social li a
            {
                color: #fff;
                vertical-align: -webkit-baseline-middle;
            }
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $(function () {
            $("#dateTimePicker").shieldDatePicker();

            $('#confirmPass').on('keyup', function () {
                if ($('#confirmPass').val() == $('#pass').val()) {
                    $('#passwordMatch').html('Passwords match!').css('color', 'green');
                }
                else {
                    $('#passwordMatch').html('Passwords do not match!').css('color', 'red');
                }
            });
        });
    });
</script>

<!-- Sign Up Form - END -->

</div>

</body>

</html>