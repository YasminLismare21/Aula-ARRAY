<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Exemplo Select</h1>
        <select>
             <?php for ($i = 1994; $i < 2019; $i++) { ?>
            <option><?php echo $i; ?></option>
             <?php } ?>
        </select>
    </body>
</html>
