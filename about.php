<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="About Us page for SwinNet website" />
    <meta name="keywords" content="HTML5, tags" />
    <meta name="author" content="Emily Hocking" />
    <title>About Us</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="./images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- below is code for the navigation bar, specifically when screen size is above 1460px -->
    <div class="navbar">
        <div class="initial">
            <a class="link" href=enhancements.php><span>Enhancements</span></a>
            <a class="link active" href=about.php><span>About Us</span></a>
            <a class="link" href=apply.php><span>Apply Now</span></a>
            <a class="link" href=jobs.php><span>Job Opportunities</span></a>
            <a class="link" href=index.php><span>Homepage</span></a>
            <a href="index.php">
                <img id="logo" src="styles/images/logo.png" alt="SwinNet logo featuring a cloud icon overlayed with connected nodes. It links to the homepage." title="SwinNet logo" />
            </a>
        </div>

    <!-- below is code for the navigation bar, specifically when the screen size is below 1460px, 
        it results in the navigation bar compressing to form a burger menu dropdown -->
        <div class="drop">
            <button class="buttonDrop"></button>
            <div class="dropContent">
                <a class="link" href=index.php><span>Homepage</span></a>
                <a class="link" href=jobs.php><span>Job Opportunities</span></a>
                <a class="link" href=apply.php><span>Apply Now</span></a>
                <a class="link active" href=about.php><span>About Us</span></a>
                <a class="link" href=enhancements.php><span>Enhancements</span></a>
            </div>
        </div>
    </div>
    
    <div class="content">
        <!-- this div is for setting a link destination for the top of the page -->
        <div id="topA">
            <div class="anchor"></div>
        </div>
        <section class="headAll">
            <h1>ABOUT US</h1>
        </section>
        
        <article class="groupInfo">
            <section id="imageGroup">
                <img id="groupPhotoAbout" src="images/group_photo.jpg" alt="Group photo of SwinNet website creators" title="Group photo of SwinNet website creators">
            </section>
            <section id="dlStyle">
                <dl>
                    <dt>Group Name:</dt>
                        <dd class="gName">The Swinners</dd>
                    <dt>Group ID:</dt>
                        <dd>Emily Hocking = 104554365<br>
                            Tessa Mordue = 104540555<br>
                            Finbarr Brennan = 104022163<br>
                            Nisha Purumandla = 104188984<br>
                            Keshav Arora = 104322960
                        </dd>
                    <dt>Tutor's name:</dt>
                        <dd>Md Kafil Uddin</dd>
                    <dt>Course we are doing:</dt>
                        <dd>This is an assignment for COS10026 (Computing Inquiry Technology Project).</dd>
                </dl>
            </section>
            <br>

            <!-- below is a list of emails, each, when clicked, takes you to your default mail application and automatically sets the email defined below as the recipient of that email -->
            <section id="beneathDL">
                <dl>
                    <dt>Here are links to our email:</dt>
                    <dd>Emily Hocking = <a href="mailto:104554365@student.swin.edu.au">104554365@student.swin.edu.au</a><br>
                        Tessa Mordue = <a href="mailto:104540555@student.swin.edu.au">104540555@student.swin.edu.au</a><br>
                        Finbarr Brennan = <a href="mailto:104022163@student.swin.edu.au">104022163@student.swin.edu.au</a><br>
                        Nisha Purumandla = <a href="mailto:104188984@student.swin.edu.au">104188984@student.swin.edu.au</a><br>
                        Keshav Arora = <a href="mailto:104322960@student.swin.edu.au">104322960@student.swin.edu.au</a><br><br>
                        Group Email = <a href="mailto:104554365@student.swin.edu.au,104540555@student.swin.edu.au,104022163@student.swin.edu.au,104188984@student.swin.edu.au,104322960@student.swin.edu.au">Click here</a>
                    </dd>
                </dl>
            </section>
            <br>
            <section id="meetupTable">
                <table>
                    <tr>
                        <th>Form of Meeting</th>
                        <th>Meet-up Time and Day</th>
                    </tr>
                    <tr>
                        <td>Workshop class</td>
                        <td>Every Wednesday 12:30PM till 2:30PM in the ATC 627 room</td>
                    </tr>
                    <tr>
                        <td>Online via Discord</td>
                        <td>Throughout the week with no specific set time nor day</td>
                    </tr>
                </table>
            </section>
            <br><br>

            <section>
                <h3>CLASS SCHEDULE:</h3>
            <p>We are doing the following classes, the table below displays our timetable:</p>
            <ul>
                <li>COS10009 - Introduction to Programming</li>
                <li>COS10026 - Computing Technology Inquiry Project</li>
                <li>TNE10005 - Network Administration</li>
                <li>TNE10006 - Networks and Switching</li>
            </ul>
            </section>

            <br><br>

            <!-- below sets up a colour coded timetable -->
            <div class="weekTable">
                <table>
                    <tr class="weekName">
                        <td id="blockEmpty"></td>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <tr class="timeTable">
                        <th>8:30AM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>9:30AM</th>
                        <td></td>
                        <td></td>
                        <td id="TNE100051" rowspan="3">
                            <p>TNE10005 - LAB - ATC626</p>
                            <p>8:30AM - 11:30AM</p>
                        </td>
                        <td></td>
                        <td id="COS100091" rowspan="2">
                            <p>COS10009 - CLASS 2 - EN101</p>
                            <p>8:30AM - 10:30AM</p>
                        </td>
                    </tr>
                    <tr class="timeTable">
                        <th>10:30AM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>11:30AM</th>
                        <td></td>
                        <td id="COS100092" rowspan="2">
                            <p>COS10009 - LECTURE - ATC101</p>
                            <p>10:30AM - 12:30PM</p>
                        </td>
                        <td></td>
                        <td id="TNE100061" rowspan="2">
                            <p>TNE10006 - LECTURE - ATC101</p>
                            <p>10:30AM - 12:30PM</p>
                        </td>
                    </tr>
                    <tr class="timeTable">
                        <th>12:30PM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>1:30PM</th>
                        <td id="COS100261">
                            <p>COS10026 - LECTURE - ONLINE</p>
                            <p>12:30PM - 1:30PM</p>
                        </td>
                        <td></td>
                        <td id="COS100262" rowspan="2">
                            <p>COS10026 - WORKSHOP - ATC627</p>
                            <p>12:30PM - 2:30PM</p>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>2:30PM</th>
                        <td></td>
                        <td id="COS100263">
                            <p>COS10026 - CLASS - BA805</p>
                            <p>1:30PM - 2:30PM</p>
                        </td>
                        <td></td>
                        <td id="TNE100052">
                            <p>TNE10005 - LECTURE - ATC101</p>
                            <p>1:30PM - 2:30PM</p>
                        </td>
                    </tr>
                    <tr class="timeTable">
                        <th>3:30PM</th>
                        <td id="TNE100062" rowspan="3">
                            <p>TNE10006 - LAB - ATC329</p>
                            <p>2:30PM - 5:30PM</p>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="COS100093" rowspan="2">
                            <p>COS10009 - CLASS - ATC625</p>
                            <p>2:30PM - 4:30PM</p>
                        </td>
                    </tr>
                    <tr class="timeTable">
                        <th>4:30PM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>5:30PM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="timeTable">
                        <th>6:30PM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </article>

        <article class="groupInfo">
            <h1>Group Profiles:</h1>
            <hr />
            
            <!-- below are the individual group profiles, each have a variety of animations which apply to 
                them when hovered or when the screen size shrinks, this is explored further in its related section in style.css -->
            <section class="groupProfiles">
                <section>
                    <h2 class="nameIndiv">Emily Hocking</h2>
                
                    <div class="pictureInfo">
                        <img class="photo" src="images/emily.jpg" alt="Photo of Emily Hocking" title="Photo of Emily Hocking"/>
                        <aside class="overlay">
                            <h3>WHAT AM I LOOKING FORWARD FOR IN THE FUTURE:</h3>
                            <p>I am looking forward to getting into the IT industry as there seems to be many interesting topics and forms of IT to 
                                explore and understand! But other than that, I am looking forwards to learning about cybersecurity especially.
                            </p>
                            <p>In regards to future career aspirations, I want to enter the cybersecurity industry and hope for a job in a large company or maybe even in the army. </p>
                            <p>However, only time can tell!</p>
                        </aside>
                    </div>
                    <h3>INTRODUCTION:</h3>
                    <p>Hello! I'm Emily Hocking and I'm 18! This year (2023) will be my first year at Swinburne University of Technology.</p>
                    <p>I am studying Computer Science (Professional) and will be majoring in Cybersecurity!</p>
                    <h3>PERSONAL JOURNEY:</h3>
                    <p>Personally, my journey to getting into this university and this course was quite bland. I am a local student and I got an 
                        ATAR of over 80 (thus got guaranteed entry). However, I also did not do Maths Methods during highschool, so I am pretty glad that I got into a computer science course!
                    </p>

                    <h3>SKILLS:</h3>
                    <ul>
                        <li>I am somewhat skilled in some computing languages including HTML, JavaScript, Python and .NET</li>
                        <li>I play field hockey as a goalkeeper</li>
                        <li>I am a black-belt in karate</li>
                    </ul>
                </section>
                
                <br><br><hr>
                
                <section>
                    <h2 class="nameIndiv">Tessa Mordue</h2>
                
                    <div class="pictureInfo">
                        <img class="photo" src="images/tessa.jpg" alt="Photo of Tessa Mordue" title="Photo of Tessa Mordue"/>
                        <aside class="overlay">
                            <h3>WHAT AM I LOOKING FORWARD FOR IN THE FUTURE:</h3>
                            <p>I am looking forward to seeing where technology goes in the future and how technology can be use to improve our lives and keep us safe.</p>
                        </aside>
                    </div>
                    <h3>INTRODUCTION:</h3>
                    <p>I am Tessa Mordue and I'm 18. This year is my first year studying at Swinburne. I am studying Computer Science (Professional) and am majoring in Cybersecurity. </p>
                    <p>I enjoy learning about technology and seeing how things work.</p>

                    <h3>SKILLS:</h3>
                    <ul>
                        <li>I have some experience with some programming languages including HTML, JavaScript, Python and Arduino</li>
                        <li>I have completed my grade 8 AMEB exam on flute</li>
                        <li>I sing as a first soprano in choirs</li>
                    </ul>
                </section>

                <br><br><hr>

                <section>
                    
				    <h2 class="nameIndiv">Finbarr Brennan</h2>
                
                    <div class="pictureInfo">
                        <img class="photo" src="images/FinbarrAlternate.jpg" alt="Photo of Finbarr Brennan" title="Photo of Finbarr Brennan (supposed to be a joke photo)"/>
                        <aside class="overlay">
                            <h3>WHAT AM I LOOKING FORWARD FOR IN THE FUTURE:</h3>
                            <p>I am looking forward to exploring neural interfacing and AI 'cause I think that's the coolest thing.
                            But other than that, I am looking forward &#128065; &#128067; &#128065;.
                            </p>
                            <p>In regards to future career aspirations, I want to turn people into computers!</p>
                        </aside>
                    </div>
                    <h3>INTRODUCTION:</h3>
                    <p>Hello! I'm Finbarr Brennan and I'm 18! This year (2023) will be my first year undertaking a bachelors at Swinburne University of Technology.</p>
                    <p>I am studying Computer Science and will be majoring in AI and Neuroscience!</p>
                    <h3>PERSONAL JOURNEY:</h3>
                    <p>Personally, my journey to getting into this university and this course was quite bland. I am a local student and I got an 
                        ATAR of over a gazillion (real). However, I also did not do Susology during highschool, so I am pretty glad that I got into a computer science course!
                    </p>

                    <h3>SKILLS:</h3>
                    <ul>
						<li>I am great at programming and find coding fascinating</li>
						<li>I am an expert at balancing my work vs life</li>
						<li>I am an expert in Memeology</li>
                    </ul>

                </section>

                <br><br><hr>

                <section>
                    <h2 class="nameIndiv">Nisha Purumandla</h2>
                
                    <div class="pictureInfo">
                        <img class="photo" src="images/nisha.jpg" alt="Photo of Nisha Purumandla" title="Photo of Nisha Purumandla"/>
                        <aside class="overlay">
                            <h3>WHAT AM I LOOKING FORWARD FOR IN THE FUTURE:</h3>
                            <p>To start a business that makes life simpler, especially in the digital field for all the high-aiming teenagers that will rise.</p>
                        </aside>
                    </div>
                    <h3>INTRODUCTION:</h3>
                    <p>Heyy, I'm Nisha Purumandla. I&#39;m 17 and this is my first year at Swinburne. I&#39;m studying Bachelor in Computer Science majoring in Data Science.</p>
                    <p>Growing up I started to prefer practical studies over the theoretical ones. I love how this course gives me the feeling that I&#39;m doing what I love and the 
                        joy of an achievement when I finish a task.</p>
                    <h3>PERSONAL JOURNEY:</h3>
                    <p>I&#39;m an International student who somehow managed to get an above 80 grade and voila, here I am.</p>

                    <h3>SKILLS:</h3>
                    <ul>
                        <li>Logic</li>
                        <li>Error recognitions</li>
                        <li>Last minute checks</li>
                    </ul>
                    <p>Sounds very boring I know!!</p>
                </section>
                
                <br><br><hr>

                <section>
                    <h2 class="nameIndiv">Keshav Arora</h2>
                
                    <div class="pictureInfo">
                        <img class="photo" src="images/keshav.jpg" alt="Photo of Keshav Arora" title="Photo of Keshav Arora"/>
                        <aside class="overlay">
                            <h3>WHAT AM I LOOKING FORWARD FOR IN THE FUTURE:</h3>
                            <p>I am looking forward to get into the IT industry and want to get experience of IT industry along with belonging to a business background family I want to run my own startup.</p>
                        </aside>
                    </div>
                    <h3>INTRODUCTION:</h3>
                    <p>Hello! I&#39;m Keshav Arora and I'm 19 and am from India. This year (2023) will be my first year at Swinburne University of Technology.</p>
                    <p>I have pursued Computer science and will be majoring in cybersecurity. </p>
                    <h3>PERSONAL JOURNEY:</h3>
                    <p>I am much into programming and that is the main reason why I chose computer science. I scored 78% score in my high school.</p>

                    <h3>SKILLS:</h3>
                    <ul>
                        <li>I like many programming languages like java, html, css, c++, c, and python</li>
                        <li>I am a good observer and a quick learner</li>
                        <li>I am a professional powerlifter</li>
                    </ul>
                </section>
            </section>
        </article>
        <div class="topOfPage"><a href="#topA">CLICK HERE TO RETURN TO TOP OF PAGE</a></div>
        
    </div>
    <footer>
        <!-- here is the code for setting up the footer, in wide view, the link footer is between the leftfooter and rightfooter, 
            but when in a smaller view, linkfooter re-aligns beneath the other footer classes -->
        <section class="leftfooter">
            <p>COPYRIGHT &copy; 2023 SwinNet Pty Ltd</p>
            <p>All rights reserved</p><br><br><br>
        </section>
        <section class="rightfooter">
            <p>CONTACT:</p>
            <p>Available 9AM - 5PM Weekdays</p>
            <p>04 0404 0404</p>
            <p>123 Swinburne Street</p><br>
        </section>
        <section class="linkfooter">
            <h3>PROJECT CREATED BY:</h3>
            <p>
                <a href="mailto:104554365@student.swin.edu.au">Emily Hocking</a><br>
                <a href="mailto:104540555@student.swin.edu.au">Tessa Mordue</a><br>
                <a href="mailto:104022163@student.swin.edu.au">Finbarr Brennan</a><br>
                <a href="mailto:104188984@student.swin.edu.au">Nisha Purumandla</a><br>
                <a href="mailto:104322960@student.swin.edu.au">Keshav Arora</a><br><br>
            </p>
        </section>
    </footer>
</body>
</html>
