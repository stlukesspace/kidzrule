<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<META HTTP-EQUIV="refresh" CONTENT="5">

    </head>
    <body>
<centre>
   <h1>Watch the birdie!</h1>

<p>Live webcam images from the St Lukes Bird Cam!</p>

<p>&nbsp;</p>

<table align="center" border="1" cellpadding="1" cellspacing="1";">
	<tbody>
		<tr>
			<td> 
			<script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('/home/users/web/b648/ipg.stlukesspace/getimage.php', function(){
           setTimeout(refreshTable, 5000);
        });
    }
</script>
</td>
		</tr>
	</tbody>

</table>


<p></p>
<p>(Updates every 30 secs or so)</p></centre>
 </body>
</html>