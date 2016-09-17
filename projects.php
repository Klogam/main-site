<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<title> Kasey Maberry</title>
</head>
<body>
    <div id="top"><div>
	  <ptitle>Kasey L<br>Maberry  </ptitle>
    </div></div>
      <div id="left"><div>
      <?php require_once('dynam/navbar.php'); ?>
      </div></div>
    <div id="right"><div>
    <h1>Personal Website</h1>
    <p class="first"> My first project is this website, the source code is available on github 
    <a href="https://github.com/Klogam/main-site"><font color="#8aacb8">here.</font></a> This website is incredibly
    simple as it is just basic CSS and HTML. In the Fall 2016 sesmester I am registered to take a web programming class,
    so after or during that semester this website may improve. I am learning HTML and CSS as I go with this 
    website,  with only minimal experience before this.  </p>
    <h1>Detecting Cheaters with an Artifical Neural Network</h1>

    <p class="first">This project came from an end of the year project in my Neural Networks class. We
    believed that if we trained a neural network with data of a player cheating and data of the same player not cheating
     in the online first person shooter Counter-Strike: Global Offensive we could tell whether they were cheating or not. We also
    included a high level player to see if that would throw off the network. I was the leader of the project, 
    and the paper we wrote is still a work in progress and for reasons below will not be available here.
    <a href="https://www.youtube.com/watch?v=MYD6dMVE-fM"><font color="#8aacb8">Here</font></a> is a video
    of the training data. We have around 600
    kills for each set of data shown in the video, for a total of 2400 points of training data. 1200 was for a
    legitimate player, one high level and one medium skill level. 1200 was also used for a cheater, 600
    obvious cheating and 600 where I tried to hide it. We used both LVQ version 3 and a multilayer perceptron for the classificationa algorithm, and in the end
    had a 95% correct rate of detecting cheaters with no false positives and only had false negatives. In this
    case, false negatives are much better to encounter than false positives as convicting a legitimate
    player as a cheater would be very bad. Next, we will move to using data of a player on a real map, as
    we used a training map to quickly and accurately manufacture enough data. If we still have a very
    high detection rate after that, we plan on moving to developing a web application so users 
    can upload their own demo and check to see if they were playing against a cheater or not. First we will have to
    find the fastest and most accurate network at classifying, however currently a majority of the time is taken in training and
    parsing the files so it might not make very much of a difference. Training will not be done on the website as it can take
    up to 10 minutes to train with our limited data set.  As Counter-Strike:Global Offensive has a system
    where players can review demos of cheaters and then decide whether the player is cheating or not and a player
    can be banned based on the verdict the source code
    and paper will not be available in it's current form as it contains everything to replicate what we did. 
    If a player that does not know much about neural networks tries to replicate this so he can use it for that
    system it could provide false positives and innocent players may be banned.  </p>
    <h1>Computer Aided Dispatch Center</h1>
    <p class="first"> For my software engineering course, we attempted to create a web-based Computer Aided Dispatch Center to replace
    currently used systems which are relatively dated technology. The project wasn't completed to what we originally planned for, it
    was semi-functional but we were a bit too ambitious and took too much time planning. I programmed input forms and tables that 
    retrieved/pulled/updated information from a SQL database in PHP, and wrote all of the error checking. I learned MySQL, PHP, HTML, 
    and how to setup Apache, MySQL, phpMyAdmin on a server (These were the technologies also used to create this website).
    </p>
    <h1>Vulcan Tech Forums</h1>
    <p class="first"> I am currently taking a course on Web Development and will be programming a forum for our final project, which 
    will probably also include a blog, wiki, and news section to make it feature rich. We will use HTML5, SQL, CSS(Most likely something
     like Bootstrap), JavaScript and Java Servlets. A link will be provided here once we finish or begin working.
    </p>
	<!--This is the first draft. This page will contain links to all of my projects.-->

    </div></div>
</body>