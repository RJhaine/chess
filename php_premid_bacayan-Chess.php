<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    
</head>
<body><center>
<div class="chess-board">
    <style>
     .chess-board :nth-child(56n+1)::after {
                    content: "R";
                  }
                  
                  .chess-board :nth-child(40n+9)::after {
                    content: "K";
                  }
                  
                  .chess-board :nth-child(24n+17)::after {
                    content: "B";
                  }
                  
                  .chess-board :nth-child(25)::after {
                    content: "Q";
                  }
                  .chess-board :nth-child(33)::after {
                    content: "W";
                  }
                  
                  .chess-board :nth-child(8n+2)::after {
                    content: "P";
                  }
                  
                  .chess-board :nth-child(8n+7)::after {
                    content: "P";
                  }
                  
                  .chess-board :nth-child(56n+8)::after {
                    content: "\265C";
                  }
                  
                  .chess-board :nth-child(40n+16)::after {
                    content: "\265E";
                  }
                  
                  .chess-board :nth-child(24n)::after {
                    content: "\265D";
                  }
                  
                  .chess-board :nth-child(32)::after {
                    content: "\265A";
                  }
                  
                  .chess-board :nth-child(40)::after {
                    content: "\265B";
                  }
                  
                  /* .chess-board :nth-child(16n+1),
                  .chess-board :nth-child(16n+3),
                  .chess-board :nth-child(16n+5),
                  .chess-board :nth-child(16n+7),
                  .chess-board :nth-child(16n+10),
                  .chess-board :nth-child(16n+12),
                  .chess-board :nth-child(16n+14),
                  .chess-board :nth-child(16n+16) {
                    background-color: #FFF;
                  } */
    </style>
</div>
<table border="1px" width="80%">
            <?php
                //8x8 chessboard
                for($row=1;$row<=8;$row++){
                    echo "<tr>";
                    for($col=2;$col<=8;$col++) {
                        $total = $row+$col;
                        for($span=1;)
                        if($total%2==0) {
                            echo "<td height=80px width=80px bgcolor=black></td>";
                        } else {
                            echo "<td height=80px width=80px bgcolor=white></td>";
                        }
                    }
                    echo "</tr>";
                }              
                  ?>
</table>
<script>
        for (let i = 1; i <= 64; i++) {
        let span = document.createElement("span");
        document.getElementsByClassName("chess-board")[0].appendChild(span);
        }
        
</script>
</body>
</html>