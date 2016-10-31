<div class="container maincontainer">
    <div class="row">
        <div class="col-md-8">
            <h1>Search Results.</h1>
            <?php
            displayTweets('search');
            ?>

        </div>
        <div class="col-md-4">
            <?php
            displaySearch();
            echo "<hr>";
            TweetBox();


            ?>
        </div>

    </div>


</div>
