<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title>evan winters</title>
  <link href='https://fonts.googleapis.com/css?family=Oswald:300|Raleway:200,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
  <header id="header" class="clearfix table">
    <div class="content-wrapper table-row">
      <div class="middle table-cell">
        <h1><a href="/"><span>Evan</span> <span>Winters</span></a></h1>
        <nav id="main-nav">
          <ul class="menu">
            <li><a href="#writing">Writing</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
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
      </li>
    </ul>
  </section>

  <section class="panel" id="about">
    <h2>About</h2>
    <p>Evan Winters ain't your median rodeo clown. He's a poot-tootin' cowboy that can charm old and young alike with his roudy adventures. Come join him on a magical quest to rescue his neice's microwave from the clutches of the most evil Lord Abugabu.</p>
  </section>

  <section class="panel" id="contact">
    <h2>Contact</h2>
    <form>
      <h3>Dear Evan,</h3>
      <textarea name="message" id="message" rows="7" placeholder="message"></textarea>
      <select name="ending" id="ending">
        <option value="sincerely">Sincerely,</option>
        <option value="yours-truly">Yours Truly,</option>
        <option value="fuck-off">Cower at my Feet,</option>
        <option value="you-suck">You Suck,</option>
        <option value="call-me">Call Me!</option>
      </select>
      <input type="text" id="name" placeholder="name">
      <input type="email" id="email" placeholder="email">
      <input type="submit">
    </form>
  </section>

  <footer id="footer">
    &copy; <?php print date('Y');?> Evan Winters, all rights reserved.
  </footer>

</body>
</html>