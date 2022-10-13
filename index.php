<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift-1</title>
    <style>
        /*
        *  html5resetcss
        */
        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}
        body{line-height:1}
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
        nav ul{list-style:none}
        blockquote,q{quotes:none}
        blockquote:before,blockquote:after,q:before,q:after{content:none}
        a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}
        ins{background-color:#ff9;color:#000;text-decoration:none}
        mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}
        del{text-decoration:line-through}
        abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}
        table{border-collapse:collapse;border-spacing:0}
        hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}
        input,select{vertical-align:middle}
    </style>
    <style>
        body {
            font-family: "arial", arial, helvetica, sans-serif;
        }
        table {
            border: 1px solid black;
            margin: auto;
            font-size: 20px;
            width: 40vw;
        }
        .header {
            fontweight: bold;
            color:white;
            background-color:black;
        }
        tr {
            margin: 0; 
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr class="header"><th>Land</th><th>Huvudstad</th></tr>
        <?php 
            $huvudstader = array(
                "Sverige"=>"Stockholm", 
                "Finland"=>"Helsingfors", 
                "Danmark"=> "Köpenhamn", 
                "Norge"=>"Oslo", 
                "Island"=>"Reykjavik", 
                "Estland"=>"Tallinn", 
                "Lettland"=>"Riga", 
                "Litauen"=>"Vilnius"
            );
            foreach ($huvudstader as $land => $huvudstad){
                echo "<tr><td>$land</td><td>$huvudstad</td><tr>";
            }
        ?>
    </table>
</body>
</html>