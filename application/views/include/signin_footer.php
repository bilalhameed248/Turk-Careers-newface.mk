<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    <?php
        if($this->session->flashdata('error_message_detail')) 
        {
        ?>
        Swal.fire({
              icon: 'error',
              title: '<?php echo $this->session->flashdata('message_title'); ?>',
              text: '<?php echo $this->session->flashdata('error_message_detail'); ?>',
              footer: '<a href>Why do I have this issue?</a>'
            })
    <?php }?>

    <?php
        if($this->session->flashdata('message_detail')) 
        {
        ?>
        Swal.fire(
           '<?php echo $this->session->flashdata('message_title'); ?>',
           '<?php echo $this->session->flashdata('message_detail'); ?>',
           'success'
         )
    <?php }?>
</script>
   </body>
</html>