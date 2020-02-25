<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <?php echo $this->Html->css(array(
        '/vendors/bootstrap/dist/css/bootstrap.min',
        '/vendors/font-awesome/css/font-awesome.min',
        '/vendors/themify-icons/css/themify-icons',
        '/vendors/flag-icon-css/css/flag-icon.min',
        '/vendors/selectFX/css/cs-skin-elastic',
        'style'
    ));?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <?php echo $this->Html->script(array(
        '/vendors/jquery/dist/jquery.min',
        '/vendors/popper.js/dist/umd/popper.min',
        '/vendors/bootstrap/dist/js/bootstrap.min',
        'main'
    ));?>

</head>