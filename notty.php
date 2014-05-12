<!DOCTYPE html>
<html>
  <head>
    <title>CarPool</title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="js/noty/packaged/jquery.noty.packaged.min.js"></script>
    <style>
      .success {
        margin: 15px;
        font-size: 20px;
      }
    </style>
</head>
  <body>
    <script>
      var n = noty({
        layout: 'topCenter',
        text: '<span class = "success">Welcome Aboard!</span>',
        type: 'success',
        timeout: 5000,
        closeWith: ['hover'],
      });
    </script>
  </body>
</html>
