<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	
	<title>Peraichi cafe</title>
	<?php
		echo $this->fetch('meta');
        echo $this->Html->css('bootstrap.css');
		echo $this->fetch('css');
		echo $this->fetch('script');

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
<body>
	<?php echo $this->fetch('content'); ?>
</body>
</html>