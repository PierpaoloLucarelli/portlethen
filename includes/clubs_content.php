<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12">
                <h2>Our Clubs and Societies</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 portfolio-group no-padding">
                <?php
                include 'dbConfig.php';
                $result = $db->query("SELECT * FROM clubs");
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<div class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        echo "<div>";
                        echo "<h2>".$row['clubName']."</h2>";
                        echo "<a href='club-page.php?clubid=".$row['clubID']."'>";
                        echo "<figure>";
                        echo "<img src=".$row['clubImage']." alt='image9'>";
                        echo "<figcaption>";
                        echo "<h3 class='margin-top-20'>Placerat facer possim</h3>";
                        echo "<span>".$row['clubDesc']."</span>";
                        echo "</figcaption>";
                        echo "</figure>";
                        echo "</a>";
                        echo "<a href='club-page.php?clubid=".$row['clubID']."'><button type='button' class='btn btn-primary btn-xs'>Join</button></a>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
                mysqli_close($db);
                ?>
            </div>
        </div>
    </div>
</div>