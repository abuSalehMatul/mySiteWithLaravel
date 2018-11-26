<!DOCTYPE html>
<head>

</head>
<body>
    <table>
        <tr class="col-md-3">
            <td><a href="http://salehmatul.com/" class="navbar-brand"><span class="pirana-p">M</span>tech</a></td>
        </tr>
        <tr class="col-md-3">
            <td>This message was sent by {{$user->name}} <br>
            <{{$user->email}}>
            </td>
        </tr>
        <tr class="col-md-6">
            <?php
            $time=time();
            $formatedTime=getdate($time);
            echo "$formatedTime[weekday] $formatedTime[month]-$formatedTime[mday],$formatedTime[year]"."<br>";
            echo(date("h:i:s A",$time));


            ?>
        </tr>
    </table>

    <div>
       <h3>
        {{$user->mgsbody}}
       </h3>

    </div>
</body>