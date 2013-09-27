<!DOCTYPE html>
<html>
<head>
    <title>Business Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="/css/clean_canvas/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/clean_canvas/theme.css">
    <link rel="stylesheet" href="/css/clean_canvas/index.css" type="text/css" media="screen" />
    <?echo $this->Html->css('common.css');?>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/clean_canvas/animate.css" media="screen, projection">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
        echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
        echo $this->Html->script('jquery_jeditable/jquery.jeditable.js');
    ?>
    <script type="text/javascript">
    $(document).ready(function() {

        $('.edit').editable('/responses/text', {
            indicator : 'Saving...',
            tooltip   : 'Click to edit...'
        });
        $('.edit_area').editable('/responses/text', {
            type      : 'textarea',
            cancel    : 'Cancel',
            submit    : 'OK',
            indicator : '<img src="/js/jquery_jeditable/img/indicator.gif">',
            tooltip   : 'Click to edit...',
            data: function(value, settings) {
                var retval = value.replace(/<br\s*\/?>\n?/gi, '\n');
                return retval;
            },
            callback  : function(value, settings) {
                var retval = value.replace(/\n/gi, "<br>\n");
                $(this).html(retval);
            }
        });
    });
    </script>
</head>
<body class="pull_top">
    <?php echo $this->element('nav_bar'); ?>
    <?php echo $this->fetch('content'); ?>
</body>
</html>