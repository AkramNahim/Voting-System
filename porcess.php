<?php
        if(isset($_POST['stark'])){
                                
            $stark_query = "update votes set voteStark = voteStark + 1" ;
            $run_stark_query = mysqli_query($con,$stark_query);

            if($run_stark_query){
                echo "<h2 align='center'> Your Vote has ben Cast for House Stark</h2>";
                echo "<h2 align ='center'><a href='result.php'>View Result Votes</a></h2>";
            }
        }

        if(isset($_POST['lanister'])){
            
            $lanister_query = "update votes set voteLanister = voteLanister + 1" ;
            $run_lanister_query = mysqli_query($con,$lanister_query);

            if($run_lanister_query){
                echo "<h2 align='center'> Your Vote has ben Cast for House Lanister</h2>";
                echo "<h2 align ='center'><a href='result.php'>View Result Votes</a></h2>";
            }
        }

        if(isset($_POST['targaryen'])){
            
            $targaryen_query = "update votes set voteTargaryen = voteTargaryen + 1" ;
            $run_targaryen_query = mysqli_query($con,$targaryen_query);

            if($run_targaryen_query){
                echo "<h2 align='center'> Your Vote has ben Cast for House Stark</h2>";
                echo "<h2 align ='center'><a href='result.php'>View Result Votes</a></h2>";
            }
        }



?>