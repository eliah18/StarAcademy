 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
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
<input type="button" id="btnshow" value="view results"> 
<br/>
<iframe id="show_pdf" style="width: 500px; height: 550px;">


</body>
</html>