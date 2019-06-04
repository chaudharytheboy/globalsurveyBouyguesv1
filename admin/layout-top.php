<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bouygues</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<script>
        function Bouygues(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#globalbouygues').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function Bouyguespopimg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#globalbouyguespop').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
</script>
</head>
<body>
<!-- Header -->

<div class="top-header">
        <span><a href="#"><img src="../images/bouygues.png" class="img-responsive"></a></span><br>
        <p> Mobile | Box | Box + Mobile | Bons Plans | Assistance</p>
        <hr>
        <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->

    </div>