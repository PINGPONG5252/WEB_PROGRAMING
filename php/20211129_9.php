<?php
$user=$_POST["janagkenbo_1"];
$cpt=rand(0,2);
$userselc=$_POST["jkb_sentaku"];
$sen= rand(3,5);

if($userselc==7){
    echo $_POST["sibal"];
}


if($userselc==3){
    if($user==0){

        $user==$cpt;
        echo "<h2><font color='aquagreen'>USER</font></h2><br/>". "ROCK" . "&nbsp"."<h2><font color='pink'>AI</font></h2><br/>"."ROCK";
        echo "<h2>もう一回勝負しよう！</h2>";   
   }
   elseif($user==1){

        $user==$cpt;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
        echo "<h2>もう一回勝負しよう！</h2>";   
   }
   elseif($user==2){

        $user==$cpt;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
        echo "<h2>もう一回勝負しよう！</h2>";   
    }

}
elseif($userselc==4){
    if($user==0){
        $cpt==1;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."ROCK" ."&nbsp". "<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
        echo "<h2>人間の勝利</h2>";
        }   
    elseif($user==1){
        $cpt==2;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
        echo "<h2>人間の勝利</h2>";
        }

    elseif($user==2){
        $cpt==0;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."ROCK";
        echo "<h2>人間の勝利</h2>";
    }
}
elseif($userselc==5){
    if($user==0){
        $cpt==2;
        echo "<h2><font color='aquagreen'>USER</font></h2>:". "ROCK". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
        echo "<h2>機械の勝利WRYY!</h2>";  
    }
    elseif($user==1){
         $cpt==0;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."ROCK";
        echo "<h2>機械の勝利WRYY!</h2>";  
    }
    elseif($user==2){
        $cpt==1;
        echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
        echo "<h2>機械の勝利WRYY!</h2>";  
    }
}

elseif($userselc==6){

    if($user==0){
        if($cpt==1){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."ROCK" ."<br/>". "<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
            echo "<h2>人間の勝利</h2>";
        }elseif($cpt==2){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."ROCK". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
            echo "<h2>機械の勝利WRYY!</h2>";
        }
        elseif($user==$cpt){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."ROCK" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."ROCK";
            echo "<h2>もう一回勝負しよう！</h2>";
        }

    }
    elseif($user==1){
            if($cpt==2){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
            echo "<h2>人間の勝利</h2>";
        }
            elseif($cpt==0){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."ROCK";
             echo "<h2>機械の勝利WRYY!</h2>";
        }
            elseif($user==$cpt){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."SCISSORS" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
            echo "<h2>もう一回勝負しよう！</h2>";
        }
    }
    elseif($user==2){
        if($cpt==0){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."ROCK";
            echo "<h2>人間の勝利</h2>";

        }
        elseif($cpt==1){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER". "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."SCISSORS";
            echo "<h2>機械の勝利WRYY!</h2>";
        }
        elseif($user==$cpt){
            echo "<h2><font color='aquagreen'>USER</font></h2>:"."PAPER" . "&nbsp"."<h2><font color='pink'>AI</font></h2>:"."PAPER";
            echo "<h2>もう一回勝負しよう！</h2>";
        }
    }

}

?>
