<!DOCTYPE html>
<html>
    <head>
        <title>Web Programing Project</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
    </head>
    <body>
        <div class="content">
            <div class="title">
                <a href="index.php"><img src="Acme Movies.png"></a>
            </div>
            <ul class="nav">
                <li class="nav-index"><a href="index.php">HOT 50</a></li>
                <li class="nav-index"><a href="movies.php">Movies</a></li>
                <li class="nav-index"><a href="top10.php">Top 10</a></li>
                <li class="nav-index active"><a href="subscription.php">News Letter Subscription</a></li>
            </ul>
            <main>
                <section>
                    <article class="subscription">
                        <div class="subscription_form">
                            <h3>News Letter Subscription</h3>
                            <form action="subscribe_scr.php" method="post">
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" pattern="[A-Za-z]{2-50}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" pattern="[A-Za-z]">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail Address:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="monthlySubStatus">Monthly Sub: </label>
                                    <input type="checkbox" class="form-control" id="monthlySubStatus" name="monthlySubStatus" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="newsFlashSub">News Flash Sub: </label>
                                    <input type="checkbox" class="form-control" id="newsFlashSub" name="newsFlashSub" value="1">
                                </div>
                                <button type="submit" name = "submit" class="btn btn-default">Subscribe</button>
                            </form>
                        </div>
                        <div class="subscription_cancle_form">
                            <h3>Cancel Subscription</h3>
                            <form action="unsubscribe_scr.php" method="post">
                                <div class="form-group">
                                    <label for="email">E-mail Address:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <button type="submit" name = "submit" class="btn btn-default">Remove</button>
                            </form>
                        </div>
                    </article>
                </section>
            </main>
            <div class="footer">
            Rapid Application Development | Dream Team Supreme | <a href="mailto:30024165@tafe.wa.edu.au">30024165@tafe.wa.edu.au</a>
            </div>
        </div>
    </body>
</html>