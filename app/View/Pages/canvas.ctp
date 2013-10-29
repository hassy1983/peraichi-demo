<?php
Configure::write('debug', 0);
$this->layout = 'bootstrap_default'
?>
<script>
    $(document).ready(function(){

        //
        jQuery( '#sort-drop-area' ) . sortable( {
            //revert: true
        } );

       /*
       jQuery( '#dragArea' ).find('img,li').draggable( {
            connectToSortable: '#sort-drop-area',
            helper: 'clone',
            revert: 'invalid',
        } );

        //
        jQuery( '#dragArea' ) . disableSelection();
        */


    });
    function addElement(id) {
        if (id) {
            $("#sort-drop-area").append($("#"+id).html()).hide().fadeIn("slow");;
            //$($("#"+id).html()).appendTo("#sort-drop-area").hide().fadeIn("slow");;
        }
    }
</script>
<div id="sort-drop-area">
<?php echo $this->element('jumbotron');?>
</div>
<?php echo $this->element('add_element_menu'); ?>
<div id="elements" style="display:none">
    <?php echo $this->element('subheading_2column');?>
    <?php echo $this->element('product_with_picture_3column');?>
    <?php echo $this->element('feature_with_picture');?>
    <?php echo $this->element('heading_with_picture_3column');?>
    <?php echo $this->element('youtube_embedder');?>
</div>