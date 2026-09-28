<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <pre>
            <label for="">numero 1</label>
            <input type="text" name="numero1" id="">
            
            <label for="">numero 2</label>
            <input type="text" name="numero2" id="">
            
            <select name="operacao" id="">
                <option value="0">Selecione</option>
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="/">Disão</option>
                <option value="*">Multiplicação</option>
</select>
            <input type="button" value="Resultado">

        </pre>
    </form>
</body>
</html>