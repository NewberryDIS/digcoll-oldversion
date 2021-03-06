
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/fc8f8385-7e78-4c4b-a85e-9fa8bb57a66a.css"/>
  <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="//digcoll.newberry.org/site/files/nl-dig.ico"/>
  <title>Digital Newberry</title>
  <style>
    body {
      margin: 0px;
      padding: 0px;
	  background-color:white;
    }
    .dropdown {
    display: inline;
    width: 100%;
  }

  .dropdown__content {
      display: none;
      position: absolute;
  }

  .dropdown--active .dropdown__content {
      display: block;
  }
  .cb-row {
    margin: auto !important;
  }
  
  </style>
  <script src="static/itemdata.js"></script>
  <script src="static/itemdata1.js"></script>
  <script src="static/itemdata2.js"></script>
  <script src="static/itemdata3.js"></script>
  <script src="static/itemdata4.js"></script>
  <script src="static/itemdata5.js"></script>
  <script>console.log('foo');</script>
  <script src="static/data.js"></script>
  <?php 
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
    $dir = "/home/newberry/webapps/dig/beta/static";
    $contents = scandir($dir);
    debug_to_console("test");
  ?>
  <script src="static/pardata.js"></script>
  <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5551324-4', 'auto');
  ga('send', 'pageview');</script>
</head>
<body>
    <div id="app"></div>
</body>
</html>
