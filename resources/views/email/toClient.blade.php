<!DOCTYPE html>
<head>

</head>
<body>
    <div class="jumbotron">
          <p class="bg-info">
              Dear {{$user->name}} , This message is created automatically as a response of your Email to me. Which was send from{{$user->email}}
              at the time of <?php
              
              $time=time();
                 $formatedTime=getdate($time);
                echo "$formatedTime[weekday] $formatedTime[month]-$formatedTime[mday],$formatedTime[year]"."<br>";
              ?>
              <h2 class="text-success">Your public IP address is {{$user->ip}}</h2>
              <h3 class="text-danger">If that was not you please ignore this message</h3>
          </p>
    </div>
    

    <div>
        {{$user->name}} your message was :
        <p>
            {{$user->mgsbody}}
        </p>
       <p>
           Dear {{$user->name}} firstly take a very warm greetings from me.<br>
           I think it would be a pleasure to me to have a friend like you. I am looking forward to build up our friendship by mutual
           co-operation. As may you know somethink about me by seeing my site, so I'm thinking it could be waste of time by reapting 
           those again. I think we may start productive conversation to make ourself better.Let me know if I could have any opportunaty 
           to help you . 
           Best regards ..

       </p>

    </div>
</body>