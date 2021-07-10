<?php 
  //connecting to the database
  $connection = mysqli_connect('localhost','root','','news');
  //checking the connection
  if (!$connection) {
    die("Error - Database Connection failed");
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/news.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEWS</title>
</head>
<body>
  
  <div class="content">
    <div class="newsblog">
        <h1>NEWS 1</h1>
        <p class="newsdate">DATE POSTED: 16 JULY 2021</p><br>


        <p><span>Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem molestiae consequatur dignissimos sequi, nam impedit, voluptates debitis adipisci possimus officia accusamus, deserunt, nulla aliquid beatae fugiat ex temporibus veniam corrupti.</span><span>In consequatur nesciunt, ab, laboriosam iste dolore possimus, sed nisi sint illum tenetur? Illo nostrum, doloremque quas distinctio earum in enim deserunt vero, incidunt esse nemo nam praesentium ipsa, eum!</span></p>
        <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure non, ducimus veniam cumque hic saepe, maxime repellat similique laborum illum recusandae, reiciendis consequuntur quos dignissimos optio minus est dolores atque.</span><span>Laborum nisi sunt nesciunt at adipisci ullam iure consequatur! Nesciunt repellat saepe corrupti laboriosam temporibus modi explicabo, sapiente, perspiciatis praesentium? Dignissimos esse eius aspernatur tempora, dolores perspiciatis, accusantium ducimus sunt?</span></p>
        <p><span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, recusandae, beatae eaque ullam, laborum, magnam impedit illum et inventore quidem nam. Nulla repudiandae quia magnam, error recusandae dicta ipsam corrupti.</span><span>Dolorem deserunt maiores itaque impedit ducimus asperiores, animi adipisci corrupti excepturi ipsa perferendis totam quisquam in ad obcaecati saepe laboriosam culpa eligendi eos, ab quos id. Illum facere, tempore debitis.</span></p>
        <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita molestiae ducimus aspernatur, ipsa, quisquam facere dolorum voluptas quis laborum explicabo totam omnis magnam dicta consectetur dolore. Tempore consequatur accusamus voluptas?</span><span>Nostrum perferendis asperiores facere fugit veniam cum cupiditate fugiat aperiam dolores est, tempora recusandae molestiae earum hic rem! Corporis, mollitia quaerat? Repellendus consequuntur reiciendis quae. Sequi cupiditate, eos alias ut?</span></p>
        <p><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque nihil optio ullam suscipit, ipsa, laboriosam ratione magnam maiores quo doloribus sed aut qui libero nulla quaerat autem, placeat. Ad, repellat.</span><span>Quaerat, dolores soluta hic officiis dolorem tempore velit sapiente itaque voluptatem eligendi ab omnis impedit suscipit quidem minima blanditiis qui nobis quis totam quos fugit aut ullam nihil amet corporis?</span></p>
    </div>

    <div class="newsnav">
      <h2>PREVIOUS NEWS</h2>
      <ul>
        <li><a href="#">LINK 01</a></li>
        <li><a href="#">LINK 01</a></li>
        <li><a href="#">LINK 01</a></li>
        <li><a href="#">LINK 01</a></li>
        <li><a href="#">LINK 01</a></li>
      </ul>
    </div>
  </div>

</body>
</html>