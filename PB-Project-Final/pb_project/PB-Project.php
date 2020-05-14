
<!DOCTYPE HTML>

<html>

	<head>
		<title>QuarantineBuddy</title>

    <link rel="stylesheet" type="text/css" href="PB-ProjectStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	</head>

  <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a class="logo">
									<span class="title">Hello There!</span>
								</a>

						</div>
					</header>



            <div id="wrapper">
                    <div><span style="color:black">
                    <div id="jokeDisplay">
                    </div>
                    <script>
                    var jokes= ['How many programmers does it take to change a light bulb? Zero its a hardware problem---------------------------------------------------------',
                    'There are only 10 kinds of people in this world: those who know binary and those who don’t.---------------------------------------------------------',
                    'Real programmers count from 0.---------------------------------------------------------', 
                    'Why did the programmer quit his job? Because he didnt get arrays.---------------------------------------------------------', 
                    'A foo walks into a bar, takes a look around and says Hello World---------------------------------------------------------',
                    '0 is false 1 is true right? 1---------------------------------------------------------',
                    'Things arent always #000000 and #FFFFFF.---------------------------------------------------------',
                    'What is the most used language in programming? Profanity---------------------------------------------------------',
                    '!False its funny because its True---------------------------------------------------------',
                    '2b||!2b---------------------------------------------------------',
                    'Yesterday I changed the name on my wifi to Hack-if-you-can. Today I found it named Challenge-Accepted---------------------------------------------------------',
                    'A programmer is a person who fixes a problem that you didnt know you had in a way you dont understand---------------------------------------------------------',
                    'How can you tell if a computer geek is an extrovert? They stare at your shoes when you talk instead of their own.---------------------------------------------------------',
                    'I would love to change the world but they wont give me the source code.---------------------------------------------------------',
                    'If at first you dont succeed call it version 1.0---------------------------------------------------------',
                    "I farted in the Apple store and everyone got mad at me. Not my fault they don't have Windows.---------------------------------------------------------",
                    'Knock Knock... Whos there? Art... Art Who? R2D2---------------------------------------------------------']


                    var randomNumber=Math.floor(Math.random()*(jokes.length));

                    var i;
                    text = ""
                    for (i = 0; i <jokes.length ; i++) {
                      text += jokes[i];
                    }
                    document.getElementById('jokeDisplay').innerHTML="<marquee><b>"+text+"</b></marquee>";
                        
                    function closeWin() {
                      <?php header("Location:meet.php"); ?>
                    myWindow.close();   // Closes the new window
                    }

                    </script>

</div>



				


										<!-- Main -->
        	<div id="main">
						<div class="inner">

              <a href="#fun">Go straight to fun activities?</a>
              <hr>

							<header>
								<h1>How are you feeling today?</h1>
								<p>Maybe we can help life those spirits up :)</p>
							</header>

							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">


										<!--------- EMOTIONS ----------------->

                  <div class="spotlight">
                    <div class="content">



                      <div class="container">
                          <!-- <h2>Happy</h2> -->
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse1"><h2>Happy</h2></a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">


                                  <p>Glad to hear</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>A smile on your face</li>
                        <li>Spring in you step</li>
                        <li>Sparkly eyes</li>
                        <li>Content and satisfied</li>
                        <li>Glass half full mentality</li>
                        <li>Taking each day in a stride</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>



                      <!-- <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse1"><h2>Happy</h2></a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">Panel Body




                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div> -->                     

                




                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse2"><h2>Okay-ish</h2></a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>You're doing fine, don't sweat it</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Satisfied to a certain extent</li>
                        <li>Can't complain about how thing are going</li>
                        <li>Might not be having the best time, but it's not bad</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>                     
    



                <div class="spotlight">
                    <div class="content">
                      <h2>Anxious</h2>
                      <p>Yikes!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Stressed out</li>
                        <li>Panic, fear, and uneasiness</li>
                        <li>Not being able to stay calm and still</li>
                        <li>Cold, sweaty, numb or tingling hands or feet</li>
                        <li>Shortness of breath</li>
                        <li>Heart palpitations</li>
                        <li>Dry Mouth</li>
                        <li>Nausea</li>
                        <li>Tense Muscles</li>
                        <li>Dizziness</li>
                        <li>Excessive worrying</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.bbc.com/news/health-52443108" class="button">This article might help</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/anxiety-panic/ss/slideshow-ways-to-stop-panic-attack" class="button">Ways to Stop a Panic Attack</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="http://understandinganxiety.wayahead.org.au/online-anxiety-and-mental-health-resources/" class="button">Online Anxiety and Mental Health Resources</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>


                <div class="spotlight">
                    <div class="content">
                      <h2>Paranoid</h2>
                      <p>Oof!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Being defensive, hostile, and aggressive</li>
                        <li>Being easily offended</li>
                        <li>Believing you are always right and having trouble relaxing or letting your guard down</li>
                        <li>Not being able to compromise, forgive, or accept criticism</li>
                        <li>Not being able to trust or confide in other people</li>
                        <li>Reading hidden meanings into people’s normal behaviors</li>
                      </ul>
                      

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/anxiety-panic/ss/slideshow-ways-to-stop-panic-attack" class="button">Ways to Stop a Panic Attack</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/mental-health/why-paranoid#4-6" class="button">Treatment</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>


                <div class="spotlight">
                    <div class="content">
                      <h2>Depressed</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>



                <div class="spotlight">
                    <div class="content">
                      <h2>Insomniac</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>




                <div class="spotlight">
                    <div class="content">
                      <h2>Chronophobic</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>





                <div class="spotlight">
                    <div class="content">
                      <h2>Cleithrophobic</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>



                <div class="spotlight">
                    <div class="content">
                      <h2>Home-sick</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>





                <div class="spotlight">
                    <div class="content">
                      <h2>Lonely</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>


<!-- 
                <div class="spotlight">
                    <div class="content">
                      <h2>Apathetic</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr> -->



                <div class="spotlight">
                    <div class="content">
                      <h2>Frustrated</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Try our online chat forum</a></li>
                      </ul>


                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>


                <div class="spotlight">
                    <div class="content">
                      <h2>Fearful of the future</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>

               
                    </div>
                  </div>
                

              </section>
              
              <section id="fun">
                    <h3>Fun Stuff!</h3>
                    <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Global Chat Room</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="meet.php" class="button">Meet Others</a></li>
                      </ul>
                    
                    <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Games</a></li>
                      </ul>
                    
                    <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Sports</a></li>
                      </ul>
                  </section>
                  <hr>
							
						<!-- </div>
					</div> -->


                <div class="spotlight">
                  <div class="content">
                    <h5>Any advice/personal experience you'd like to share?</h5>
                      <p>Please enter in the box below. Including your name isn't mandatory.</p>
                      
              <div class = "container">
                <div class = "container">    
                  <div class = "form_group"> 
                  <form action="insert_quote.php" method="get">
                    <textarea name="quote" placeholder="Remember, be nice!" id="quote" cols="70" rows="4"></textarea>
                    <br>
                    <input type="submit" value="Submit">  
                    </form> 
                </div>

              </div></div>
                
                <hr>
              <div class = "container">
                <div class = "container">
                <h5>Recent Quotes and Stories by Fellow Users</h5>
                <?php 
                $link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                // $sqselect = "SELECT quote FROM quotes";

                // $sqselect= "SELECT quote FROM quotes ORDER BY S.no DESC";

                // $sqselect= "SELECT TOP 5* FROM quotes ORDER BY S.no DESC";

                $sqselect="SELECT quote FROM quotes ORDER BY q_id DESC LIMIT 5";
                
                if($result=mysqli_query($link, $sqselect)){
                    while ($row = mysqli_fetch_assoc($result))
                 {
                    echo $row['quote'];
                    echo "<br><br>";
                 }
                }
                    
                    
                else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                
                
                ?>
                </div></div>



                    </div>
                  </div>
                <hr>

                <a target="_blank" href="full_quotes.php" class="button">Show more quotes</a>

							</section>
							
						</div>
					</div>
				


					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>Made by </li>
                <li>Juhi Pandey,</li> 
                <li>Vishesh Agrawal,</li> 
                <li>Ankit Rana, </li>
                <li>Parth Garg</li>
                <li>Sarthak Pal</li>
							</ul>
						</div>
					</footer>



			</div>
	</body>
</html>
