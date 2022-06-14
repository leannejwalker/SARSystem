<?php include "../scripts/initialize.php"?>
<!DOCTYPE html>
<html lang="en">
<?php include "../scripts/linksandscripts.php"?>
<script>
  $(document).ready(function () {
    $('#users').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'scripts/users.php',
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'alert',
          text: 'My button 1'
        },
        {
          extend: 'alert',
          text: 'My button 2'
        },
        {
          extend: 'alert',
          text: 'Export to .csv'
        }
        ]
    });
  });
$.fn.dataTable.ext.buttons.alert = {
  className: 'buttons-alert',
 
  action: function ( e, dt, node, config ) {
    alert( this.text() );
  }
};
</script>
<style>
  body {
    background-image: url('img/background.jpg');
    overflow: auto;
  }
  .main{
    border: 0.1em solid #ffffff;
    margin: 5em;
    padding: 1.5em;
    border-radius: 1em;
    background: rgba(255, 255, 255, 0.9);
  }
  
  img{
    float: left;
    position: relative;
    block-size: 3em;
    margin-left: 18px;
    margin-right:24px;
  }

  .navbar {
    overflow: hidden;
    background-color: rgb(0, 0, 0);
    padding: -1em;
  } 

</style>
<body>
<?php include "header.php"?>
<div class="main">
<table id="users" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Access Type</th>
            </tr>
        </thead>
    </table>
</div>
<body>
</html>