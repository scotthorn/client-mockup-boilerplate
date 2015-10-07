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
        <!--ul class="buy-links">
          <li><a href="">
            <h2>The Witch of Bracken's Hollow</h2>
            <i class="fa fa-amazon"></i> Available on Amazon
          </a></li>
        </ul-->
        <nav id="main-nav">
          <ul class="menu">
            <li><a href="#writing">Writing</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#mailing-list">Mailing List</a></li>
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
    <div class="content-wrapper">
      <a href="#header" class="top-link" title="back to top"><i class="fa fa-chevron-up"></i></a>
      <h2>Writing</h2>
      <ul>
        <li>
          <img src="witch.jpg" alt="The Witch of Bracken's Hollow">
          <h3>The Witch of Bracken's Hollow</h3>
          <h4>Coming October 9th, 2015</h4>
          <p>Damon knows that the Witch of Bracken's Hollow is just a myth. He knew it when he was a child and his friend Rachel drowned in Deep Run Lake and became another victim of the legendary witch. And he knows it now that he is a youth pastor in charge of a camp full of teenagers meeting at the same lodge where Rachel drowned all those years ago.</p>
          <p>But as memories of Rachel's death play on Damon's mind, he finds the boundaries between reality and fantasy blurring before his eyes.  When a voice whispers Damon’s name at the witching hour, he must sort out history from myth, fact from fiction, and he must do so before the children he is charged to care for suffer the same fate as Rachel.</p>
          <!--p>
            <ul class="buy-links">
              <li><a href=""><i class="fa fa-amazon"></i> Buy on Amazon</a></li>
            </ul>
          </p-->
        </li>
      </ul>
    </div>
  </section>

  <section class="panel" id="about">
    <div class="content-wrapper">
      <a href="#header" class="top-link" title="back to top"><i class="fa fa-chevron-up"></i></a>
      <h2>About</h2>
      <p>Evan Winters lives in Kentucky with his wife and dogs.  He is a lifelong fan of horror and speculative fiction, be it in the form of comic books, film, short fiction or novels. <em>The Witch of Bracken's Hollow</em> is the first fiction he has published in the 21st Century. He hopes it won't be the last.</p>
  </section>

  <section class="panel" id="mailing-list">
    <div class="content-wrapper">
      <a href="#header" class="top-link" title="back to top"><i class="fa fa-chevron-up"></i></a>
      <h2>Mailing List</h2>
      <p>If you would like to know when new books are published, sign up for email alerts here.</p>
      
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="//evanwinters.us11.list-manage.com/subscribe/post?u=a7529490683f9c5c822dc89d6&amp;id=d8b66731b8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        
      <div class="mc-field-group">
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_a7529490683f9c5c822dc89d6_d8b66731b8" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>

      <!--End mc_embed_signup-->

      <p>*I will not share your email with anyone, and you can unsubscribe at any time.</p>
    </div>
  </section>

  <section class="panel" id="contact">
    <div class="content-wrapper">
      <a href="#header" class="top-link" title="back to top"><i class="fa fa-chevron-up"></i></a>
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
    </div>
  </section>

  <footer id="footer">
    <div class="content-wrapper">
      &copy; <?php print date('Y');?> Evan Winters, all rights reserved.
    </div>
  </footer>

  <div class="scripts">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </div>
</body>
</html>