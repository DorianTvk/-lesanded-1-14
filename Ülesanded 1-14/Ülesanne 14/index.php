<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvaline pilt ja pisipildid</title>
    <style>
        .thumbnail {
            width: 150px; /* Pisipildi laius */
            height: 150px; /* Pisipildi kõrgus */
            margin: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content img {
            width: 100%;
            height: auto;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            font-size: 30px;
            color: #f1f1f1;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Suvaline pilt -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
        <img id="modal-image">
    </div>
</div>

<!-- Pisipildid veergudes -->
<div class="thumbnail-container">
    <?php
    // Pildi lingid
    $pildiLingid = [
        'https://www.cnet.com/a/img/resize/20d6844768bd3f5f0df41deee97897423bcaf3c5/hub/2021/11/03/3c2a7d79-770e-4cfa-9847-66b3901fb5d7/c09.jpg?auto=webp&fit=crop&height=1200&width=1200',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz6oCYoKoqY2KfciP77zMJWPRkt0P2fBG3_ZkcaFLOVg&s',
        'https://m.media-amazon.com/images/I/31GEsNVK8dL.jpg',
        'https://prod-printler-front-as.azurewebsites.net/media/photo/115286-1.jpg?mode=crop&width=727&height=1024&rnd=0.0.1',
        'https://hips.hearstapps.com/hmg-prod/images/most-interesting-dog-meme-1546529364.png'
    ];

    foreach ($pildiLingid as $link) {
        echo '<img class="thumbnail" src="' . $link . '" onclick="displayImage(\'' . $link . '\')">';
    }
    ?>
</div>

<script>
    // Kuvab suuremat pilti modaalkastis
    function displayImage(imageSrc) {
        document.getElementById('myModal').style.display = 'block';
        document.getElementById('modal-image').src = imageSrc;
    }

    // Sulge suure pildi kuvamine klikkides "x" nupule
    var closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'none';
    });

    // Sulge suure pildi kuvamine klikkides väljaspool suurt pilti
    window.addEventListener('click', function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>

</body>
</html>
