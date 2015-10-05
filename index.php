<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title>evan winters</title>
  <link href='https://fonts.googleapis.com/css?family=Oswald:300|Raleway:200,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header id="header" class="clearfix table">
    <div class="content-wrapper table-row">
      <div class="middle table-cell">
        <h1><a href="/"><span>Evan</span> <span>Winters</span></a></h1>  
        <ul class="buy-links">
          <li><a href="">
            <h2>The Witch of Bracken's Hollow</h2>
            <i class="fa fa-amazon"></i> Available on Amazon
          </a></li>
        </ul>
        <nav id="main-nav">
          <ul class="menu">
            <li><a href="#writing">Writing</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="social-media">
              <a href="https://www.facebook.com/AuthorEvanWinters?fref=ts"><i class="fa fa-facebook-square"></i></a>
              <a href="https://twitter.com/evanwintersauth"><i class="fa fa-twitter-square"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section class="panel" id="writing">
    <h2>Writing</h2>
    <ul>
      <li>
        <img src="witch.jpg" alt="The Witch of Bracken's Hollow">
        <h3>The Witch of Bracken's Hollow</h3>
        <h4>Coming October 9th, 2015</h4>
        <p>Seasoned beef or carnitas? Join Aldous Marbory on a dystopic odessey in discovering the source of his taco obsession. They taste alright, I guess.</p>
        <p>
          <ul class="buy-links">
            <li><a href=""><i class="fa fa-amazon"></i> Buy on Amazon</a></li>
          </ul>
        </p>
      </li>
    </ul>
  </section>

  <section class="panel" id="about">
    <h2>About</h2>
    <p>Evan Winters ain't your median rodeo clown. He's a poot-tootin' cowboy that can charm old and young alike with his roudy adventures. Come join him on a magical quest to rescue his neice's microwave from the clutches of the most evil Lord Abugabu.</p>
  </section>

  <section class="panel" id="contact">
    <h2>Contact</h2>
    <form action="contact/index.php" method="post">
      <h3>Dear Evan,</h3>
      <textarea name="message" id="message" rows="7" placeholder="message" required="required"></textarea>
      <select name="ending" id="ending">
        <option value="Sincerely">Sincerely,</option>
        <option value="Yours Truly">Yours Truly,</option>
        <option value="Cower at my Feet">Cower at my Feet,</option>
        <option value="You Suck">You Suck,</option>
        <option value="Call Me!">Call Me!</option>
      </select>
      <input type="text" name="name" id="name" placeholder="name" required="required">
      <input type="email" name="email" id="email" placeholder="email" required="required">
      <input type="submit" name="submit">
    </form>
  </section>

  <footer id="footer">
    &copy; <?php print date('Y');?> Evan Winters, all rights reserved.
  </footer>

  <div class="scripts">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </div>
</body>
</html>