<nav>
    <ol>
        <?php
        
        print '<li class ="';
        if ($pathparts['filename'] == 'home') {
            print 'activePage ';
        }
        print '">';
        print '<a href="home.php">Home</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'AboutUS') {
            print 'activePage ';
        }
        print '">';
        print '<a href="AboutUs.php">About Us</a>';
        print '</li>';PHP_EOL;
        
        print '<li class="';
        if ($pathparts['filename'] == 'join') {
            print 'activePage';
        }
        print '">';
        print '<a href="join.php">Join</a>'; 
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'music') {
            print 'activePage ';
        }
        print '">';
        print '<a href="music.php">'
        . 'Music</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'news') {
            print 'activePage ';
        }
        print '">';
        print '<a href="news.php">News</a>';
        print '</li>';PHP_EOL;

        print '<li class ="';
        if ($pathparts['filename'] == 'tour') {
            print 'activePage ';
        }
        print '">';
        print '<a href="tour.php">Tour</a>';
        print '</li>';PHP_EOL;
        ?>

    </ol>
</nav>