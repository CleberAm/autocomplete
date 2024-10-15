<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box-busca{
        width: 400px;
        margin: auto;
    }

    .box-busca input{
        width: 100%;
        height: 40px
    }

    .recebe-busca{
        width: 420px;
        border: 1px solid #ccc;
        margin: auto;
        margin-top: 10px;
        min-height: 40px;
    }

    .box-element{
        width: 400px;
        background: #f1f1f1;
        color: #000;
        padding: 5px;
        margin-top: 5px !important;
        margin: auto;
    }

    .box{
        width: 400px;
        height: 35px;
        padding: 5px;
        margin-top: 5px;
        background: #ccc;
    }

    .selected{
        border: 1px solid #000;
    }
</style>
<body>
    <div class="container">
        <div class="box-busca">
            <h1>Digite o termo</h1>
            <input type="text" name="termo" class="termo" />
        </div>
        <div id="recebe-busca"></div>
        <div id="receive-content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>