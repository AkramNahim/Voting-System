<?php
    require './db/connection.php';
    

    $query_select = "select * from votes";
    $run_select_query= mysqli_query($con,$query_select);
    $row_votes = mysqli_fetch_array($run_select_query);

        $stark = $row_votes['voteStark'];
        $lanister = $row_votes['voteLanister'];
        $targaryen = $row_votes['voteTargaryen'];

    $count = $stark + $lanister + $targaryen;
    $per_stark = ($stark*100/$count) ."%";
    $per_lanister = round($lanister*100/$count) ."%";
    $per_targaryen = round($targaryen*100/$count) ."%";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vote Resutlts</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="src/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container-table">
        <blockquote>
                    <h1 class="background">Votes Summary</h1>
        </blockquote>
        <table class="centered highlight">
            <thead>
            <tr>
                <th>House</th>
                <th>Count votes</th>
                <th>% votes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Stark</td>
                <td><?php echo $stark;?></td>
                <td><?php echo $per_stark;?></td>
            </tr>
            <tr>
                <td>Lanister</td>
                <td><?php echo $lanister;?></td>
                <td><?php echo $per_lanister;?></td>
            </tr>
            <tr>
                <td>Targaryen</td>
                <td><?php echo $targaryen?></td>
                <td><?php echo $per_targaryen?></td>
            </tr>
            </tbody>
        </table>
        <br/>
        <a class="waves-effect waves-light btn-large" href="index.php"><i class="material-icons">
        arrow_back
        </i></a>
        </div>
    </body>
</html>

