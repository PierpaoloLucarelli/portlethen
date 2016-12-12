<div id="hornav" class="bottom-border-shadow">
    <div class="navigation-container no-padding border-bottom">
        <div class="row">
            <div class="col-md-8 no-padding">
                <div class="visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="index.php" class="fa-home active">Home</a>
                        </li>
                        <li>
                            <a href="clubs.php" class="fa-gears">Clubs & Societies</a>
                        </li>
                        <li>
                            <a href="#" class="fa-copy">Health & Wellbeing</a>
                        </li>
                        <li>
                            <a href="dnk.php" class="fa-comment ">D.N.K</a>
                        </li>
                        <?php
                        session_start();
                        ?>

                        <!-- <li>
                            <span class="fa-font ">Blog</span>
                            <ul>
                                <li>
                                    <a href="blog-list.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Blog Single Item</a>
                                </li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
            </div>
            <div class="col-md-4 no-padding">
                <ul id="hornavmenu" class="nav navbar-nav">
                    <?php

                    if (!isset($_SESSION['access_level'])) {
                        echo '<li>
                                    <a href="login.php" class="fa-user">Login</a>
                                </li>
                                <li>
                                    <a href="signup.php" class="fa-sign-in">Signup</a>
                                </li>';
                    } else {
                        echo '<li>
                                    <a href="logout.php" class="fa-sign-out ">Logout</a>
                                </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
