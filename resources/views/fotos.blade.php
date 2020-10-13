<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    
    <!--  se esta retornando el valor que
     se mando desde la routa y se esta integrando con php -->

    <H1>Bienvenidos a la vista de Fotos <?= $numero?> </H1> 

    <!--  se esta retornando el valor que
     se mando desde la routa y se esta atrabes de los parametros de  blade
     el cual encierra la variable en {{}} -->
    
     <H1>Bienvenidos a la vista de Fotos {{$numero}} </H1> 
    


</body>
</html>