<?php
echo "this is new file from view!!";
?>

<html>
<head>
</head>
<body>
    <ul>
        @foreach($niz as $clan)
            <li>
                {{ $clan}}
            </li>
        @endforeach
    </ul>
</body>
</html>