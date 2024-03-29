<!DOCTYPE html>
<html lang="en">
<?php require('vars.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $appName ?></title>
    <link rel="shortcut icon" href="../img/icons/icon.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="mainblock" id="mainblock">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a href="https://molitaderus.com" class="header__link">
                        <img class="header__img" src="../img/icons/icon.png" alt="icon">
                        Applications from a duck
                    </a>
                    <nav class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/" class="header__menu-link">Home</a></li>
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/PrivacyPolicy.php" class="header__menu-link">Privacy Policy</a></li>
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/terms.php" class="header__menu-link">Terms of Use</a></li>
                        </ul>
                    </nav>
                    <div class="header__burger">
                        <span></span>
                      </div>
                </div>
            </div>
        </header>
        <div class="container">
            <section class="mainblock__content">
                <div class="mainblock__media">
                    <img class="mainblock__image" src="./images/app-icon.png" alt="image">
                </div>
                <div class="mainblock__textbox">
                    <p class="mainblock__text">
                        <?php echo $appName ?>
                    </p>
                    <div class="mainblock__content-links">
                        <a href="https://play.google.com/store/apps/details?id=<?php echo $bundle ?>&hl=en" target="_blank" class="mainblock__content-link">Download</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="app">
        <h3 class="app__title">What is this?</h3>
        <div class="app__textbox">
            <p class="app__text">
                Are you into astrology? 😍 Then we know what you need! There are so many sites, applications, and pieces of advice about horoscope predictions on the internet and all around us in general that it can be really overwhelming! 🤯 So we decided to collect all the most important features in one convenient everyday predictions and advices from the starts app. Find our everything to any zodiac sign - Taurus, Gemini, Virgo, Cancer, Scorpio, Sagittarius, Libra, Leo, Capricorn, Pisces, Aries, Aquarius.
            </p>
            <p class="app__text">
               <b>✅ Have a look into your future with a new horoscope program!</b><br>
               It was never so easy to know about your past or future as with a new horoscope app for everyday. Classroom design, simple interface, truthful, thoughtful predictions for each zodiac sign, and the opportunity to view predictions for every day, week, month, or year - are all collected in one convenient application for you, your friends, and others interested in astrology. Check free personal horoscopes! Each prediction is made according to the position of the stars and their impact on your sign - so trust fate and find the answers to the questions that you are interested in quickly and accurately. 👍
            </p>
            <p class="app__text">
                <b>Try the new app to connect with stars and get your maximum detailed predictions!</b><br>
                Daily horoscope is a useful astro logy app for everyone to check your predictions every day and get into your future with courage. You will find out why this day is the best for you - personal relationships, friendship, career, business, training, important events, meetings, luck, or peace of mind. Check your horoscopes tomorrow, today, a week later, a month later, or even for a full year! What is waiting for you? Don`t hesitate to check!
            </p>
            <p class="app__text">
                <b>Find out all about what you are interested in about your life with the help of horoscopes! 😉</b><br>
                You can get all information about what is waiting you in a year with the horoscopes yearly option. You no longer need to look for truthful predictions on different sites in search of Astro of Today. All the most important information in one convenient modern astro logy program!
            </p>
            <p class="app__text">
                <b>Some short examples of week predictions in our program:</b><br>
                <b>♈ Aries</b><br>
                Things are going your way, Aries, and you should really enjoy spending time with other people. If it's not necessary, don't bother connecting to reality. Go to a dance performance or an art gallery. Go to your preferred restaurant and see a movie.
            </p>
            <p class="app__text">
                <b>♊ Gemini</b><br>
                Today, Gemini, you might need to focus on financial paperwork because you might be hosting guests. In some way, the doors to adventure will start to open. Take advantage of this.
            </p>
            <p class="app__text">
                <b>♋ Cancer</b><br>
                You'll pay attention to money issues and make appropriate plans. You will save more money than you would have to spend. Starts by encouraging hard work to be successful.
            </p>
            <p class="app__text">
                <b>♎ Libra</b><br>
                The stars advise you to avoid becoming stressed out over trivial matters. Only after carefully weighing the pros and cons should you decide on important issues.
            </p>
            <p class="app__text">
                <b>♏ Scorpio</b><br>
                Scorpio, you only need to ask what you want, and there's a good chance you'll get it. Take action right away to ensure that you get more time in the spotlight if you have a nagging desire for greater public recognition.
            </p>
            <p class="app__text">
                <b>♑ Capricorn</b><br>
                Workplace circumstances might become a little challenging, but with your natural abilities, acquired skills, and prior knowledge, you will be able to handle everything. In the long run, your efforts will pay off, even if you have to work hard for a while.
            </p>
            <p class="app__text">
                <b>♒ Aquarius</b><br>
                You overestimate the severity of the situation, Aquarius. Actually, it's clear that things are improving. Of course, if you don't force yourself out of bed to see for yourself, you'll never know that.
            </p>
            <p class="app__text">
                <b>Find out more advanced features inside the horo scope program!</b><br>
                ⬇Download ⬇ horoscope today program and start your everydayastrology journey. You can check not only your sign but any else! We calculate your predictions depending on your date and place of birth. Try the new stage of horoscope predictions! You can return to an app whenever you want and check predictions for any day! Install and use on everyday bases! ⚡
            </p>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <h3 class="footer__title">Contact Us</h3>
            <span class="footer__mail">
                Email: 
                <a class="footer__mail-lnk" href="mailto:<?php echo $gmail ?>"><?php echo $gmail ?></a>
            </span>
            <span class="footer__rights">All Rights Reserved</span>
        </div>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>