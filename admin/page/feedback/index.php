<?php
    include('koneksi.php');
    include('../../functions/FeedbackFunction.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <style>
        td {
            padding: 15px;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #6495ED;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center; 
        }
        .tabel {
            margin-left:auto;
            margin-right:auto;
            width : 100%;
        }

    </style>
</head>
<body>
    <?php
        $feedback = getFeedback();
    ?>

    <div>
        <h1>Feedback</h1>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Komentar</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($feedback as $feedback) {
            ?>
                    <tr>
                    <td><?=$feedback['id']?></td>
                    <td><?=$feedback['nama']?></td>
                    <td><?=$feedback['komentar']?></td>
                    <td><a href="edit.php?id=<?=$feedback['id']?>">Edit</a> 
                    <a href='delete.php?id=<?php echo $feedback["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>