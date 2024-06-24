 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<script src="../application/steps/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#btnshow').off().on({
        click:function(){
         $('#show_pdf').prop('src','view_pdf.php');

        }
    });
});


</script>
</head>
<body>
<?php 
error_reporting(0);

?>
 <a href="view_pdf.php?id='<?php echo $nat ?>' " type="button" id="btnshow" class='btn btn-info btn-sm btn-flat'>view results</a>

<br/>
<iframe id="show_pdf" style="width: 500px; height: 550px;">

</form>
</body>
</html>