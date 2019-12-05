<?php
/*
 * File Name: adminCreate.blade.php
 * Author   : Vaibhaw
 * Date     : 13-May-18
 * Time     : 01:40 PM
*/
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Create | Admin | Techfest</title>
    <style>
        html,body{
            width:100%;
            margin:0;
            padding:0;
        }
        form{
            width:400px;
            margin:auto;
            margin-top:50px;
        }
        input{
            display: block;
            width:100%;
            padding:10px;
            margin:10px;
            border:0;
            box-shadow: 0 2px 10px -5px black;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    @csrf
    <input required type="text" placeholder="Name" name="name">
    <input required type="password" placeholder="password" name="password">
    <input required type="text" placeholder="department" name="department">
    <input required type="number" placeholder="phone" name="phone" max="9999999999" min="1000000000" >
    <input required type="email" placeholder="email" name="email">
    <input type="submit" value="Submit">
</form>
</body>
</html>
