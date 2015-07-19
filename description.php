<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This app is a baby name app that we created for our CIT 261 class." >
        <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Baby Name Finder</title>
        <link type="text/css" media="screen" href="css/styles.css" rel="stylesheet">
        <script>
        </script>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <main>
                <h1>
                    On Time Trainer
                </h1>

                <div class="btn_container aligncenter">
                    <div class="half_pie">
                        <div class="half_part_pie_one half_bar_color half_percentage" data-percentage="35"></div>
                        <div class="half_part_pie_two"></div>
                        <div class="half_part_pie_three"></div>
                        <span class="half_pie_icon iconfont-android" id="time" onclick="startTimer()">Start</span>

                    </div>
                </div>

            </main>

            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>

        <script src="timer.js"></script>
    </body>

</html>