<?php 	include 'view/partials/header.php';?>
<head>
    <style>
        input[type=number] {
            width: 100% !important;
            padding: 12px 20px !important;
            margin: 8px 0 !important;
            display: inline-block !important;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            box-sizing: border-box !important;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


    </style>
</head>
    <h1 style="text-align: center">Reserveren</h1>
    <div class="col-2">


        

    </div>

    <form method="post" action="" >


        <div class="formcontent col-8">
			<?php echo $content;?>
        </div>

        <div class="col-2"></div>
    </form>

<?php include 'view/partials/footer.php'; ?>