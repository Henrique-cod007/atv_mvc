<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="titulo" placeholder="titulo" required>
        <input type="text" name="descricao" placeholder="descricao" required>
        <select name="prioridade" id="">
            <option value="Baixa">Baixa</option>
            <option value="Media">Média</option>
            <option value="Alta">Alta</option>
        </select>
        <button type="submit">enviar</button>
    </form>
        
</body>
</html>