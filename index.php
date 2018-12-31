<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <title>Primeiro Projeto</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--JS-->
    <script type="application/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="application/javascript" src="js/popper.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>
    <!--End Bootstrap-->
    <script type="application/javascript" src="js/script.js"></script>

</head>
<body>

    <div class="container h-25">
        <form>
            <select  class="form-control" name="users" onchange="showUser(this.value)">
                <option value="">Selecione um Nome: </option>
                <option value="1">Miguel Santisteban</option>
                <option value="2">Nancy Ramos</option>
                <option value="3">Elena Santisteban</option>
                <option value="4">Estefany Santisteban</option>
            </select>
        </form>
        <br>

    </div>
    <div id="txtHint"><b>O nome será listado aquí</b></div>


</body>
</html>