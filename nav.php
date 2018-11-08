<nav>
    <ol>
        <?php
        
        print '<li class ="';
        if ($pathparts['filename'] == 'index') {
            print 'activePage ';
        }
        print '">';
        print '<a href="art.php">home</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'about-us') {
            print 'activePage ';
        }
        print '">';
        print '<a href="contest.php">About Us</a>';
        print '</li>';PHP_EOL;
        
        print '<li class="';
        if ($pathparts['filename'] == 'contact') {
            print 'activePage';
        }
        print '">';
        print '<a href="index.php">Contact us</a>'; 
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'tour') {
            print 'activePage ';
        }
        print '">';
        print '<a href="form.php">'
        . 'Tour</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'music') {
            print 'activePage ';
        }
        print '">';
        print '<a href="news.php">Music</a>';
        print '</li>';PHP_EOL;

        print '<li class ="';
        if ($pathparts['filename'] == 'news') {
            print 'activePage ';
        }
        print '">';
        print '<a href="weather.php">News</a>';
        print '</li>';PHP_EOL;
        ?>

    </ol>
</nav>