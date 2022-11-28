<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: skyblue;
        }

        .col1 {
            width: 24%;
            float: left;
            margin: 0.5% 0.5% 0.5%;
        }

        .col2 {
            width: 24%;
            float: left;
            margin: 0.5% 0.5% 0.5%;
        }

        .col3 {
            width: 24%;
            float: left;
            margin: 0.5% 0.5% 0.5%;
        }

        .col4 {
            width: 24%;
            float: left;
            margin: 0.5% 0.5% 0.5%;
        }

        img {
            width: 100%;
            margin: 1% 0.4%;
            border-radius: 5%;
        }

        h1 {
            font-size: 5vw;
            text-align: center;
            padding-top: 1%;
            margin: 0 0 5%;
        }
    </style>
</head>

<body>
    <?php
    $Myimagecol1 = array(
        "https://www.ndow.org/wp-content/uploads/2021/10/Family-of-Raccoons.jpg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkzQYBAeKdGBTAvnv6eQReUjTfqnOZ-hqXYA&usqp=CAU",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Raccoon_in_Central_Park_%2835264%29.jpg/1200px-Raccoon_in_Central_Park_%2835264%29.jpg",
        "https://curiodyssey.org/wp-content/uploads/2017/03/Mammals-Raccoon.jpg",
        "https://squeaksandnibbles.com/wp-content/uploads/2021/08/Raccoon-Names-SN-long.jpg"
    );
    $Myimagecol2 = array(
        "https://images.unsplash.com/photo-1497752531616-c3afd9760a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmFjY29vbnxlbnwwfHwwfHw%3D&w=1000&q=80",
        "https://i.pinimg.com/originals/c7/8c/6e/c78c6ebbfa9ca67254764584c3248b9d.jpg",
        "https://i.natgeofe.com/k/6289c775-a06c-426a-badb-8d181a55237b/raccoon-grass_square.jpg",
        "https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/home-improvement/wp-content/uploads/2022/06/featured-image-raccoon.jpeg",
        "https://img.freepik.com/free-photo/raccoon-park-montreal-canada_649448-4368.jpg?w=2000"
    );
    $Myimagecol3 = array(
        "https://i.insider.com/55fdd056dd089562588b45a5?width=600&format=jpeg&auto=webp",
        "https://o.quizlet.com/89b4Fum4uJ23GElX79z5jQ_b.jpg",
        "https://ichef.bbci.co.uk/news/976/cpsprodpb/15015/production/_95173068_racoon.jpg",
        "https://pbs.twimg.com/media/ELJOo4KWsAAcHk9.jpg",
        "https://apexwildlifecontrol.com/wp-content/uploads/2021/07/raccoon-meme-about-pretending-to-be-cat-for-food.jpg"
    );
    $Myimagecol4 = array(
        "https://pbs.twimg.com/media/D-vbAPEXkAEwyGh.png",
        "https://pbs.twimg.com/media/El_B52LXUAYXkF7.jpg",
        "https://i.redd.it/zfd90uurq0c91.jpg",
        "https://npr.brightspotcdn.com/dims4/default/0723757/2147483647/strip/true/crop/1800x1109+0+46/resize/880x542!/quality/90/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2Flegacy%2Fsites%2Fkplu%2Ffiles%2F201802%2FSE_Raccoons_180201_164.jpg",
        "https://c.tenor.com/qht9bHMSClAAAAAC/masturbation-raccoon.gif"
    );

    echo "<h1>Image Gallery 🦝🦝</h1>";
    echo "<div class='col1'>";
    foreach ($Myimagecol1 as $image1) {
        echo "<img src='" . $image1 . "'>";
    }
    echo "</div>";

    echo "<div class='col2'>";
    foreach ($Myimagecol2 as $image2) {
        echo "<img src='" . $image2 . "'>";
    }
    echo "</div>";

    echo "<div class='col3'>";
    foreach ($Myimagecol3 as $image3) {
        echo "<img src='" . $image3 . "'>";
    }
    echo "</div>";

    echo "<div class='col4'>";
    foreach ($Myimagecol4 as $image4) {
        echo "<img src='" . $image4 . "'>";
    }
    echo "</div>";
    ?>
</body>

</html>