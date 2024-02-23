<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAT-Int_Task-3</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/assets/style.css">
</head>
<body class="bg-danger-subtle">
<div class="card col-md-6 mx-auto mt-2">
    <div class="card-header text-center"><h1><b>Math Operation</b></h1></div>
    <div class="card-body">
            <div class="col-md-4">
                <label for="">Input 1 :</label>
                <input type="text" id="inputOne"  placeholder="Enter first number">
            </div>
            <div class="col-md-4">
                <label for="">Input 2 :</label>
                <input type="text" id="inputTwo" placeholder="Enter second number">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Result:</label>
                <input type="text" id="result" disabled>
            </div>
        <input type="button"id="activeButton" value="Add" onclick="add()">
        <input type="button"id="activeButton" value="Sub" onclick="sub()">
        <input type="button"id="activeButton" value="Mul" onclick="mul()">
        <input type="button"id="activeButton" value="Div" onclick="div()">
        <input type="button"id="deactiveButton" value="Reset" onclick="confirmReset()">
    </div>
</div>

<script src="assets/assets/button.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>