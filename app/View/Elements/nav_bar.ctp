<script type="text/javascript">
    function saveHtml() {
        var postData = { html:$('html').html() };

        $.ajax({
            type: 'POST',
            url: '/sites/add',
            data: postData,
            success: function(data) {
                /*
                var decodedData = $.secureEvalJSON(data);
                if (decodedData['success'] != null) {
                    alert(decodedData['success']);
                } else if (decodedData['error'] != null) {
                    alert(decodedData['error']);
                }
                */
            },
            error: function() {
                alert('通信に失敗しました。');
            },
            complete: function() {
                alert('保存しました。');
            }
        });
    };


</script>

	<div class="masthead clearfix">
			
		<div class="container">
				
			<div class="logo"><span></span>peraichi</div>
		    <?php if ($this->layout != 'default'): ?>
			<ul class="nav main-nav">
                <button type="button" class="btn btn-success" onclick="saveHtml()">Save</button>
			</ul>
            <?php endif ?>
					
		</div>
		
	</div>