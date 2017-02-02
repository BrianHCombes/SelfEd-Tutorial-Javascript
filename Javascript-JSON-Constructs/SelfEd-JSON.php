<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
    <body>
        
        
<!-- Passing a value from PHP to javascript
        The php and js block below demonstrate how to pass a value from php to
        js. The intent is to pass mySQL query results from php to javascript for
        display on an HTML document.
        This is the link that really helped: 
        http://stackoverflow.com/questions/7217054/pass-associative-array-from-php-to-javascript
-->
    <?php
        $testString = "This is a Test String from PHP to end up inside Javascript";
        $passTestString = json_encode($testString);
    ?>
    <script>
        var forReal = <?php echo $passTestString;?>;
        alert(forReal);
    </script>
    
    
    
    
    </body>
</html>
