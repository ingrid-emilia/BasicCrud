<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-&">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>

<body>

    <form action="{{ route('recorder_product)}" method="POST">
        <label for="">Name</label> <br/>
        <input type="text" name="name"> <br/>
        <label for="">Outgoing</label> <br/>
        <input type="text" name="outgoing"> <br/>
        <label for="">Price</label> <br/>
        <input type="text" name="price"> <br/>
        <label for="">Amount</label> <br/>
        <input type="text" name="amount"> <br/>

    <button>Salvar</button>
    </form>
</body>

</html>