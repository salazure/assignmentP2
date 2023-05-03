<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Enhancements page for SwinNet website" />
    <meta name="keywords" content="HTML5, tags" />
    <meta name="author" content="Emily Hocking" />
    <title>Enhancements</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="./images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- below is code for the navigation bar, specifically when screen size is above 1460px -->
    <div class="navbar">
        <div class="initial">
            <a class="link active" href=enhancements.php><span>Enhancements</span></a>
            <a class="link" href=about.php><span>About Us</span></a>
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
                <a class="link" href=about.php><span>About Us</span></a>
                <a class="link active" href=enhancements.php><span>Enhancements</span></a>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- this div is for setting a link destination for the top of the page -->
        <div id="topE">
            <div class="anchor"></div>
        </div>
        <section class="headAll">
            <h1 id="fullpage">ENHANCEMENTS</h1>
            <h1 id="extra">ENHANCE-MENTS</h1>
        </section>
        <article class="enhancements">
            <section>
                <p>In order to ensure our website possessed appropriate usability, readability and functionality, we have applied several enhancements, of which extended past the 
                    original requirements set by this task.</p>
                <h1>These enhancments include:</h1>
                <ul>
                    <!-- below is a mini contents page for the major sections of the page, within each section is a mini contents page for the minor sections of that major section -->
                    <li><a href="#responsive">Responsive design</a><br></li>
                    <li><a href="#animation">Animations</a><br></li>
                    <li><a href="#faviconSec">Use of favicons</a><br></li>
                    <li><a href="#textFont">Text and font alterations</a><br></li>
                    <li><a href="#targetDest">Use of ::target</a></li>
                </ul>
                <p>For references, they can be found at the <a href="#references">bottom of the page</a>.</p>
            </section>
            <section>
                <div id="responsive">
                    <div class="anchor"></div>
                    <h2>Enhancement 1: Responsive design</h2>
                </div>
                <p>Nowadays, a variety of devices are used to access the internet and view webpages. As such, we cannot assume that a website will only ever be used and viewed
                     on a computer by users. However, screen size changes and adjustments are a significant factor in how a website and its HTML and CSS is presented, so a screen
                      which was designed for laptop-view may not be presented in an appropriate way if viewed on a mobile.
                </p>
                <p>Typically, a website designed for only computer/laptop view will demonstrate significant alterations to the positioning of items when opened in a smaller view,
                     with these alterations often resulting in the page being unreadable or very hard to use.
                </p>
                <p>When considered in terms of customers and businesses, we cannot expect customers viewing the website on a mobile to be lenient nor patient towards a website which 
                    isn&#39;t optimized for such view. If anything, the customer may become frustrated towards the business, believing that the lack of optimization relates directly to 
                    the business&#39;s values, and thus assumes that the essence of the business is irresponsible, old-fashioned or corner-cutting, when it may have just been a simple 
                    oversight by the business.
                </p>
                <p>All in all, possessing responsive design in a webpage is considered best practice in regards to usability and readability.</p>
                <p>As such, we made sure to optimize our SwinNet business webpage for a variety of different screen sizes and a variety of different browsers, to ensure that a reader 
                    receives the best experience when viewing the pages, regardless of what device nor browser they are using.
                </p>
                <h3>This enhancement has been applied in a variety of ways:</h3>
                <ol>
                    <li><a href="#navEnh">Navigation bar</a><br></li>
                    <li><a href="#marginEnh">Margins</a><br></li>
                    <li><a href="#textEnh">Text, images and placement</a><br></li>
                    <li><a href="#1con">Conclusion</a></li>
                </ol>
                <div id="navEnh">
                    <div class="anchor"></div>
                    <h3>Navigation bar:</h3>
                </div>
                <p class="location">Location of enhancement: at the top of each page and screen (thus no link has been provided).</p>
                <p>In the original wide computer/laptop view, the navigation bar spreads across the full length of the page and as a result, features the logo on the leftmost side 
                    and the links to the other pages on the rightmost side. As the screen gets smaller from this view, the links to the other pages do not reduce in size, but do 
                    slowly move inwards towards the logo, which ensures that they do not remain absolute nor overflow off the page.
                </p>
                <p>When the links to the other pages reach the logo, and once they are about to overflow onto the logo or be pushed off the navigation bar (which is around 1460 pixels 
                    screen width), the links to the other pages are then compressed and hidden under a menu icon (a small image of three horizontal lines stacked almost on top of each 
                    other), which is then floated to the right. At this stage, the links to the other pages are accessed by hovering over the menu icon (on computer view), or by tapping 
                    on the icon (on mobile view).
                </p>
                <ul>
                    <li>Above uses the following significant elements of CSS code:<br>
                        <ul>
                            <li class="location">@media only screen and (max-width: 1460px)
                                <ul>
                                    <li>Used in initiating screen changes once the page size decreases under this maximum width</li>
                                </ul>
                            </li>
                            
                        </ul><br>
                        <ul>
                            <li class="location">.navbar a.link:hover
                                <ul>
                                    <li>Used in animations being re-used (covered further in the enhancement of <a href="#animation">animation</a>)</li>
                                </ul>
                            </li>
                            
                        </ul><br>
                        <ul>
                            <li class="location">.drop:hover .dropContent
                                <ul>
                                    <li>Used in initiating the dropdown content to appear under the menu icon when screen size is under a certain pixel width</li>
                                </ul>
                            </li>
                            
                        </ul><br>
                        <ul>
                            <li>And other related aspects, of which are explored further within documentation of the CSS or in other enhancements such as <a href="#animation">animation</a></li>
                        </ul>
                    </li>
                </ul>
                <p>The menu icon behaves like the original links to other pages, and as such is &#39;sticky&#39; in how it moves down the page by remaining stuck at the top of the screen once 
                    a user scrolls. Even when viewed on a small mobile phone, both the logo and menu icons do not overflow on-top of each other.
                </p>
                <p>Additionally, in this state, the animations of the links for the original computer-view have been reused and made to apply to the smaller screen views as well. While 
                    the intricacies of the animation have been explored in the <a href="#animation">animation</a> enhancement, in mobile-view the navigation bar dropdown has an allocated &#39;active&#39; link depending 
                    on which page is active, with all animations applying to all links (with exclusions for the active link).
                </p>
                <div id="marginEnh">
                    <div class="anchor"></div>
                    <h3>Margins:</h3>
                </div>
                <p class="location">Location of enhancement: on the sides of each page and screen (thus no link has been provided).</p>
                <p>As the width of a page increases, static margins (using pixels) would compress the page and continue compressing to a set pixel size, regardless of what device is viewing 
                    the page and the screen size. This, if not altered would result in a webpage becoming totally unreadable when viewed on smaller screens.
                </p>
                <p>So, as a result, we replaced the static margins with flexible one which use percentages rather than pixels, of which allow for the margins to react and shrink/grow depending 
                    on the width of the page. Moreover, once the page passes a specific point, the margins would recede into the sides of the webpage, allowing for the content of the page to 
                    be seen in a cleaner and clearer way.
                </p>
                <p>Additionally, for extra smoothness when interacting with the page, an animation was applied to the margin when the page width falls or grows beyond a certain point, which 
                    makes page resizing cleaner.
                </p>
                <div id="textEnh">
                    <div class="anchor"></div>
                    <h3>Text, images and placement:</h3>
                </div>
                <p class="location">Location of enhancement: within each page and screen (thus no link has been provided).</p>
                <p>A website must be readable. And in terms of readability, there is a big difference between a website featuring a massive block of text which falls off the page when the 
                    window is resized and a website featuring small sections of text separated by headings, of which alter depending on screen width.
                </p>
                <p>As such, while both types may be &#39;readable&#39;, their level of readability and usability in terms of different people, browsers and devices differs greatly.</p>
                <p>Thus, for a website to possess this readability to a high level, it must be designed with users in mind and understand that a webpage should never be static, but should 
                    rather be possessing responsive design. This can be achieved in a variety of ways.
                </p>
                <p>In our website, we have achieved this by setting a viewpoint to ensure that the text size alters on different devices. Through the code of adding &#39;meta name="viewport" 
                    content="width=device-width, initial-scale=1.0"&#39; (code courtesy of Swinburne University Lab 05 instructions url: <a class="location" href="https://swinburne.instructure.com/courses/49151/files/22040644?wrap=1">https://swinburne.instructure.com/</a> (website link has been shortened)) 
                    to the head of each page (within head element of CSS).
                </p>
                <p>Moreover, we used a font which was rounder and clearer for the website (this is explored further in the enhancement of <a href="#textFont">text and font</a>).</p>
                <p>Additionally, we have separated passages of text with paragraph elements, sections and even extra line breaks when necessary. While this doesn&#39;t go outside of the 
                    requirements given by the task explicitly, it nevertheless adds to the responsiveness of the page.
                </p>
                <p>Furthermore, we have also conducted proper flexible placement for the images, tables and other rigid sections of the page to ensure that nothing gets cut off and nothing is 
                    impacted by screen changes. For example, the [communications table] in the [About Us] page resizes depending on the screen width and never overlays with other elements nor 
                    falls off the page.
                </p>
                <div id="1con">
                    <div class="anchor"></div>
                    <h3>Conclusion:</h3>
                </div>
                <p>As a result, applying this enhancement has gone very far beyond what was originally required of the CSS requirements of the webpage. The navigation bar, margin resizing 
                    and extra additions were not explicitly required, but we added them for extra usability, readability and to improve the performance of the webpage when it is resized in 
                    a variety of ways.
                </p>
            </section>
            <section>
                <div id="animation">
                    <div class="anchor"></div>
                    <h2>Enhancement 2: Animations</h2>
                </div>
                <p>Webpages which follow the original, default static style are boring. If you were to attempt to read through a page and navigate throughout a website with only static 
                    effects of sharp switching between items and vague buttons with no highlights, you may find yourself confused as to the purpose of some elements or bored by the lack of 
                    animation.
                </p>
                <p>As such, we made sure to include many different animations to improve the experience a person may have with the website.</p>
                <h3>We decided to implement animations for our webpage in the following ways:</h3>
                <ol>
                    <li><a href="#navAni">Navigation bar</a><br></li>
                    <li><a href="#btnAni">Buttons</a><br></li>
                    <li><a href="#chaAni">For changing views</a><br></li>
                    <li><a href="#inpAni">Input</a><br></li>
                    <li><a href="#higAni">Highlights</a><br></li>
                    <li><a href="#2con">Conclusion</a></li>
                </ol>
                <div id="navAni">
                    <div class="anchor"></div>
                    <h3>Navigation bar:</h3>
                </div>
                <p class="location">Location of enhancement: at the top of each page and screen (thus no link has been provided).</p>
                <p>For the navigation bar, several animations have been layered upon each other to help promote the usability of the website.</p>
                <p>The animations apply to every button except for the logo button.</p>
                <p>The first animation is a text animation using the span element. It involves the initial frame of the text button content, for example &#39;Enhancements&#39; being offset to the 
                    left by a few pixels, with a right arrow being added to the right of the content. All of this is done in a smooth way, with the text shifting in a smooth movement and the 
                    arrow appearing in a fade-in way.
                </p>
                <p>The second animation applied is a white box which moves to cover the original background of the button. This animation functions by the webpage registering in a small white 
                    box just outside of the navigation buttons by the left, hidden because overflow is set to hidden. It uses x transformation to smoothly move the white box across to cover 
                    the background color of the buttons. The white box is given layer of -1 given by the z-index CSS element, which results in the white box covering the background color, 
                    but not covering the text itself.
                </p>
                <p>The third animation is minor and just involves the text transitioning from white to black alongside the other animations occurring.</p>
                <p>Altogether, this makes up the animation for the navigation bar buttons.</p>
                
                <div id="btnAni">
                    <div class="anchor"></div>
                    <h3>Buttons:</h3>
                </div>
                <p class="location">Location of enhancement: within the <a href="jobs.html#buttonEnhLink">Job Description</a> page and <a href="apply.html#buttonEnhLink2">Apply Now</a> page.</p>
                <p>In regards to the other buttons (not navigation buttons) a different animation applies.</p>
                <p>This animation is applied to the &#39;Apply Now&#39; buttons in the <a href="jobs.html#buttonEnhLink">Job Description</a> page and the &#39;Reset&#39; button in the <a href="apply.html#buttonEnhLink2">Apply Now</a> page. It is a simplified version of the navigation bar 
                    button animations, simply featuring a transition between white to blue (or white to red in the case of the reset button) for the background color, and the opposite for the 
                    border. 
                </p>

                <div id="chaAni">
                    <div class="anchor"></div>
                    <h3>For changing views:</h3>
                </div>
                <p class="location">Location of enhancement: changing views animation is inbuilt within every page (thus no link has been provided), a secondary changing views animation can be found in the <a href="about.html#topA">About Us</a> page.</p>
                <p>When changing from a wide view (laptop view) to a smaller view by decreasing the width of the page, some animations become active.</p>
                <p>The first animation becomes active when the screen size decreases under 850 pixels. It makes the margins of the page decrease in a smooth motion, resulting in the contents section of the 
                    page widening to fill 100% of the page. This animation occurs in reverse once the page size increases past 850 pixels.
                </p>
                <p>The second animation occurs in the <a href="about.html#topA">About Us</a> page. It becomes active when the screen size decreases under 850 pixels as well. It makes the aside and the profile photo which was aligned and 
                    floated to the right of the page become center aligned in one smooth motion.
                </p>

                <div id="inpAni">
                    <div class="anchor"></div>
                    <h3>Input:</h3>
                </div>
                <p class="location">Location of enhancement: within the <a href="apply.html">Apply Now</a> page.</p>
                <p>Within the <a href="apply.html#topP">Apply Now</a> page, a variety of animations have also been applied. The main animation which they all share is that when an input box or field set is clicked/hovered upon, that 
                    box transforms from having a static, dashed light blue border to a solid dark blue border with a box-shadow appearing too (colored in light blue). All of the movements for this, 
                    from the border change, to the box-shadow appearing occurs in a smooth, fluid motion via use of the transition element of CSS.
                </p>
                <p>When clicked/hovered upon, some of the boxes also possess an extra animation where the input box widens out. This doesn&#39;t apply to the fieldsets but is useful for the sections such as the first 
                    name or last name input box as it gives extra space to type.
                </p>

                <div id="higAni">
                    <div class="anchor"></div>
                    <h3>Highlights:</h3>
                </div>
                <p class="location">Location of enhancement: within the <a href="jobs.html">Job Description</a> page and <a href="about.html">About Us</a> page.</p>
                <p>For some sections of each page, such as the aside in the <a href="jobs.html#highlightEnh">Job Description</a> page or the aside and photo in the <a href="about.html#highlightEnh2">About Us</a> page there are parts which feature highlights.</p>
                <p>These highlights possess the same animation as the input boxes and activate upon hover. This assists a person when reading the pages as it differentiates important information from usual information.</p>
                
                <div id="2con">
                    <div class="anchor"></div>
                    <h3>Conclusion:</h3>
                </div>
                <p>From this, it can be seen that the animations help promote the readability and usability of the webpage. Evidently, given we have not learnt animations in class either, this variety of animations 
                    also goes beyond the required CSS as well.
                </p>
                <p>And as a final added plus, since the animations all use raw CSS and HTML, they are quick to load and work on all browsers.</p>
            </section>
            <section>
                <div id="faviconSec">
                    <div class="anchor"></div>
                    <h2>Enhancement 3: Use of favicons</h2>
                </div>
                <p class="location">Location of enhancement: at the top of the page tab for the website pages outside of the actual webpage (thus no link has been provided).</p>
                <p>A favicon is a small icon which is placed in the top of the page, acting as a website icon for the page.</p>
                <p>Favicons act to assist people in recognizing which website is which without having to show the full URL or full website title.</p>
                <p>We applied this to help promote the website&#39;s ability to be user-friendly and also to assist in differentiating our website from others.</p>
                <p>It is present on each page and uses our logo, of which can also be seen to the left-most points of each page.</p>
                <p>Another reason as to why possessing a favicon is important to a webpage is because favicons generally are present on genuine sites and are lacking on unsafe/shifty 
                    looking sites. Thus, there is a need to help subtly reassure a reader that the website is not anything but authentic.
                </p>
                <p>The implementation of this enhancement has been done using a link in the head element of the page, of which links to the icon.</p>
            </section>
            <section>
                <div id="textFont">
                    <div class="anchor"></div>
                    <h2>Enhancement 4: Text and font</h2>
                </div>
                <p>Text and fonts are essential to a webpage, as they heavily promote readability.</p>
                <h3>For our website, we have implemented a variety of fonts in the following ways:</h3>
                <ol>
                    <li><a href="#enhHead">Headings</a><br></li>
                    <li><a href="#enhSub">Subheadings</a><br></li>
                    <li><a href="#enhBody">Body text</a><br></li>
                    <li><a href="#backFonts">Backup fonts</a><br></li>
                    <li><a href="#4con">Conclusion</a></li>
                </ol>
                <div id="enhHead">
                    <div class="anchor"></div>
                    <h3>Headings:</h3>
                </div>
                <p class="location">Location of enhancement: used throughout the website, for example, can be seen from the 'Enhancement 4: Text and Font' heading above (thus no link has been provided).</p>
                <p>For the headings of the page, an imported font has been used. This font is called Press Start 2P (and can be found on <a href="https://fonts.google.com/specimen/Press+Start+2P/">Google Fonts</a>). It features a blocky design much 
                    like what was used for old videogame text.
                </p>
                <p>We chose this font because of how easy it is to read, its style and its subtle relation to the concept of networks.</p>
                <p>It has been applied to the main headings of each page, as well as significant section headings of pages such as the About Us page, where the names for each 
                    group member have this font applied.
                </p>

                <div id="enhSub">
                    <div class="anchor"></div>
                    <h3>Subheadings:</h3>
                </div>
                <p class="location">Location of enhancement: used throughout the website, for example, can be seen from the 'Subheadings:' subheading just above (thus no link has been provided).</p>
                <p>For the subheadings of the page, another imported font has been used. This font is called Oswald (and can be found on <a href="https://fonts.google.com/specimen/Oswald/">Google Fonts</a>). It features a blocky but slim design, with symbols 
                    close together.
                </p>
                <p>We chose this font because it places emphasis on subheadings while not overshadowing the heading text, nor being overshadowed by the body text.</p>
                <p>This font is present in the subheadings (h3) for this page as seen above and below.</p>

                <div id="enhBody">
                    <div class="anchor"></div>
                    <h3>Body text:</h3>
                </div>
                <p class="location">Location of enhancement: used throughout the website, including this text (thus no link has been provided).</p>
                <p>For the main body text, another imported font has been used. This font is called Comfortaa (and can be found on <a href="https://fonts.google.com/specimen/Comfortaa/">Google Fonts</a>). It features a very rounded design with slim lettering.</p>
                <p>We chose this font because it is easy to read and because none of the characters are too similar to each other.</p>

                <div id="backFonts">
                    <div class="anchor"></div>
                    <h3>Backup fonts:</h3>
                </div>
                <p>However, within the CSS, we have also implemented some backup vanilla fonts which would apply if the imported fonts did not load in or in the situation 
                    where a section of the page was not given a font.
                </p>
                <p>These are vanilla fonts because every device and every browser can load them up with no issues.</p>
                <p>For the backup, several fonts have been set, including Verdana, Arial and Helvetica of the sans-serif family.</p>
                <ul>
                    <li>The explicit code for this is (for the example of adding the custom heading font to an element):<br>
                        <ul>
                            <li class="location">font-family: headingFont, bodyFont, Verdana, Arial, Helvetica, sans-serif;</li>
                        </ul>
                    </li>
                    
                </ul>

                <div id="4con">
                    <div class="anchor"></div>
                    <h3>Conclusion:</h3>
                </div>
                <p>This enhancement goes beyond the required CSS because it involves the importing of external fonts and lettering. While it is not super significant, its 
                    implementation is significant to the viewer because in enhances their viewing experience with the page.
                </p>
                <p>These enhancements were applied using the code of calling @font-face in the CSS to establish the fonts using their downloaded text files.</p>

            </section>
            <section>
                <div id="targetDest">
                    <div class="anchor"></div>
                    <h2>Enhancement 5: Contents and the use of ::target</h2>
                </div>
                <p>For webpages with a lot of content, it is important that the page has ease of use in terms of navigation. For example, for Wikipedia pages, they possess a contents 
                    table and many navigation links. 
                </p>
                <div class="pictureInfo">
                    <aside>
                        <h3>Prior knowledge:</h3>
                        <p>Page links take you to a section of the page, without transferring you outside of the webpage itself. These destinations are known as page fragments, and 
                            it uses the id of the destination text or heading to navigate to that section.
                        </p>
                    </aside>
                </div>
                <h3>We decided to implement both aspects for our webpage in the following ways:</h3>
                <ol>
                    <li><a href="#contTable">Contents table</a><br></li>
                    <li><a href="#textLinks">Text links</a><br></li>
                    <li><a href="#backTop">Back-to-top links</a><br></li>
                    <li><a href="#3con">Conclusion</a></li>
                </ol>
                <div id="contTable">
                    <div class="anchor"></div>
                    <h3>Contents table:</h3>
                </div>
                <p class="location">Location of enhancement: used in the <a href="jobs.html">Job Opportunities</a> page and the <a href="#topE">Enhancements</a> page.</p>
                <p>For each of the major content-heavy pages (<a href="jobs.html">Job Opportunities</a> page and the <a href="#topE">Enhancements</a> page) a contents table in some form has been applied to both.</p>
                <p>This table contains a set of links which direct the viewer to sections of the webpage according to which link was pressed.</p>
                <p>Upon pressing a link, the viewer is taken to the section, with the heading for that section being highlighted in blue with a :before span of an arrow.</p>
                <p>This thus promotes usability of the content-heavy pages because it allows a viewer to skip to the section of the page they wish to see.</p>
                <div id="textLinks">
                    <div class="anchor"></div>
                    <h3>Text links:</h3>
                </div>
                <p class="location">Location of enhancement: used throughout the website, including in the above links for this enhancement's mini contents table (thus no link has been provided).</p>
                <p>Much alike to the contents table, the text links involve links to sections of the page. But for this, links have been added to words or phrases which refers and 
                    links to other sections of the page. For example, in the <a href="#animation">animation</a>section of enhancements, that section expresses and explains the various animations applied to the page.
                </p>
                <p>While this is quite insignificant, it still promotes the usability of the page.</p>
                <div id="backTop">
                    <div class="anchor"></div>
                    <h3>Back-to-top links:</h3>
                </div>
                <p class="location">Location of enhancement: at the very bottom of every page on the website, including at the bottom of this one.</p>
                <p>At the bottom of every page, there is a back-to-top link which takes the user literally back to the top of the page. It makes it easier to navigate through the page 
                    and prevents users from having to scroll all the way up again.
                </p>
                <p>For all these links, it has used somewhat complicated code. This is because we are only allowed to use raw HTML and CSS in this project, with JavaScript not being 
                    marked and also jQuery likely not being allowed, thus the easy way to link between fragments of a page wasn&#39;t able to be done. So, raw HTML and CSS was used.
                </p>
                <p>However, the code became complicated because of the navigation bar. While the navigation bar is initially seen as a &#39;solid&#39; section of the page when it is fully scrolled 
                    up, once the navigation bar enters &#39;sticky&#39; mode in that it sticks to the top of the page when scrolled downwards, the bar isn&#39;t seen as solid anymore.
                </p>
                <p>Thus, the webpage is still registering that text can fit beneath the navigation bar, something which means that any links within text would take you to the appropriate 
                    section, but would hide the heading and beginning of text of that section underneath the navigation bar. This decreases usability and readability as the text is cut 
                    off and the situation would cause users to become confused.
                </p>
                <p>To resolve this issue, an invisible block was applied to the page, present above the destination for each link. This block is totally invisible in terms of whitespace 
                    being left behind yet acts as a buffer for the link destination, basically forcing the links to think that the destination is higher up the page than it actually is.
                </p>
                <p>This has been optimized to result in the heading for each link destination being present just below the navigation bar. With this complicated enhancement ensuring 
                    that readability and usability is applied.
                </p>
                <div id="3con">
                    <div class="anchor"></div>
                    <h3>Conclusion:</h3>
                </div>
                <p>This enhancement thus goes beyond what was required of the CSS since it optimizes the reading experience for users via links to page fragments.</p>
                <p>Moreover, with the content of the enhancement, mainly being the complication of having to use raw CSS and HTML without JavaScript or jQuery to implement 
                    this concept, it definitely goes beyond the requirements for the CSS.
                </p>
            </section>
            <section>
                <div id="references">
                    <div class="anchor"></div>
                    <h2>References List:</h2>
                </div>
                <p>For this project, a massive number of references were used to help ensure that the website has full functionality. Due to this, the references have been seperated by type and by origin in some cases</p>
                <p>Websites and links used have been referenced to in terms of the Harvard referencing style.</p>
                <p class="location">Format: Author name + publication date + title of article + title of journal/website + day accessed + URL link</p>
                <h3>Here is are the references sections:</h3>
                <ol>
                    <li><a href="#refImages">References used for images</a><br></li>
                    <li><a href="#refNav">References used for navigation bar</a><br></li>
                    <li><a href="#refJob">References used for Job Opportunities page</a><br></li>
                    <li><a href="#refEnhancements">References used for Enhancements page</a></li>
                </ol>
                <!-- below this is a massive list of references which took me ages to do since the person in the group 
                    who was supposed to do this page did nothing at all for the whole duration of the task -->

                <div id="refImages">
                    <div class="anchor"></div>
                    <h3>References used for images:</h3>
                </div>
                <p>Only one external image was used (logo was created by us), that is the image which acts as a background behind each heading of each page such as at the top of <a href="enhancements.html">this</a> page.</p>
                <p>Also note that the author, publication date and other information is unknown.</p>
                <ul>
                    <li class="location">Author unknown, crossroads technologies linkedin, CuteWallpaper.org, accessed 24th March, URL: <a href="https://cutewallpaper.org/27x/hm2jfp0j9/273174879.html">https://cutewallpaper.org/27x/hm2jfp0j9/273174879.html</a></li>
                </ul>
                
                <div id="refNav">
                    <div class="anchor"></div>
                    <h3>References used for navigation bar and animations:</h3>
                </div>
                <p>Major origin of information used to create the navigation bar and apply animations was from <a href="https://www.w3schools.com/">https://www.w3schools.com/</a>.</p>
                <ul>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Round Buttons, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/howto/howto_css_round_buttons.asp">https://www.w3schools.com/howto/howto_css_round_buttons.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Animate Buttons, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/howto/howto_css_animate_buttons.asp">https://www.w3schools.com/howto/howto_css_animate_buttons.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Fading Buttons, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/howto/howto_css_fading_buttons.asp">https://www.w3schools.com/howto/howto_css_fading_buttons.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - More Button in Navbar, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/howto/howto_css_more_button.asp">https://www.w3schools.com/howto/howto_css_more_button.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, CSS :active Selector, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/cssref/sel_active.php">https://www.w3schools.com/cssref/sel_active.php</a><br></li>
                    <li class="location">Author unknown, publication date unknown, CSS Transitions, accessed 28th March, URL: <a href="https://www.w3schools.com/css/css3_transitions.asp">https://www.w3schools.com/css/css3_transitions.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, CSS background-image Property, W3Schools, accessed 28th March, URL: <a href="https://www.w3schools.com/cssref/pr_background-image.php">https://www.w3schools.com/cssref/pr_background-image.php</a><br></li>
                    <li class="location">David Herbert, November 20, 2022, CSS ::before and ::after for custom animations and transitions, LogRocket, accessed 28th March, URL: <a href="https://blog.logrocket.com/css-before-after-custom-animations-transitions/">https://blog.logrocket.com/css-before-after-custom-animations-transitions/</a><br></li>
                    <li class="location">Ivy Walobwa, January 21, 2022, Creating a responsive mobile menu with CSS without JavaScript, LogRocket, accessed 29th March, URL: <a href="https://blog.logrocket.com/create-responsive-mobile-menu-with-css-no-javascript/">https://blog.logrocket.com/create-responsive-mobile-menu-with-css-no-javascript/</a><br></li>
                    <li class="location">Ryan Menezes, publication date unknown, How to Add an Image to a CSS File, Chron., accessed 29th March, URL: <a href="https://smallbusiness.chron.com/add-image-css-file-51301.html">https://smallbusiness.chron.com/add-image-css-file-51301.html</a><br></li>
                    <li class="location">Author unknown, publication date unknown, Using CSS transitions, MDN, accessed 1st April, URL: <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions</a><br></li>
                    <li class="location">Author unknown, publication date unknown, UTF-8 Arrows, W3Schools, accessed 1st April, URL: <a href="https://www.w3schools.com/charsets/ref_utf_arrows.asp">https://www.w3schools.com/charsets/ref_utf_arrows.asp</a><br></li>
                    <li class="location">Ali Spittel, publication date unknown, Create Rainbow Text with CSS: Three Different Methods, We Learn Code, accessed 1st April, URL: <a href="https://welearncode.com/rainbow-text/">https://welearncode.com/rainbow-text/</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Responsive Navbar with Dropdown, W3Schools, accessed 1st April, URL: <a href="https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp">https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Hero Image, W3Schools, accessed 1st April, URL: <a href="https://www.w3schools.com/howto/howto_css_hero_image.asp">https://www.w3schools.com/howto/howto_css_hero_image.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, HOW TO - Responsive Images, W3Schools, accessed 1st April, URL: <a href="https://www.w3schools.com/howto/howto_css_image_responsive.asp">https://www.w3schools.com/howto/howto_css_image_responsive.asp</a><br></li>
                    <li class="location">Author unknown, publication date unknown, Resizing background images with background-size, MDN, accessed 1st April, URL: <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Backgrounds_and_Borders/Resizing_background_images">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Backgrounds_and_Borders/Resizing_background_images</a><br></li>
                    <li class="location">Author unknown, publication date unknown, CSS Font Family List, TutorialBrain, accessed 1st April, URL: <a href="https://www.tutorialbrain.com/css_tutorial/css_font_family_list/">https://www.tutorialbrain.com/css_tutorial/css_font_family_list/</a><br></li>
                    <li class="location">Andor Nagy, publication date unknown, Pure CSS Responsive Dropdown Menu, CodePen, accessed 1st April, URL: <a href="https://codepen.io/andornagy/pen/RNeydj">https://codepen.io/andornagy/pen/RNeydj</a><br></li>
                    <li class="location">Author unknown, publication date unknown, CSS Layout - Overflow, W3Schools, accessed 1st April, URL: <a href="https://www.w3schools.com/css/css_overflow.asp">https://www.w3schools.com/css/css_overflow.asp</a></li>
                </ul>

                <div id="refJob">
                    <div class="anchor"></div>
                    <h3>References used for Job Opportunities page:</h3>
                </div>
                <p>Some resources were used for researching job titles, including the following:</p>
                <ul>
                    <li class="location">Author unknown, publication date unknown, Network Architect Overview, Glassdoor, accessed 27th March, URL: <a href="https://www.glassdoor.com.au/Career/network-architect-career_KO0,17.htm">https://www.glassdoor.com.au/Career/network-architect-career_KO0,17.htm</a><br></li>
                    <li class="location">Author unknown, publication date unknown, What is VMware?, IBM, accessed 27th March, URL: <a href="https://www.ibm.com/topics/vmware">https://www.ibm.com/topics/vmware</a><br></li>
                    <li class="location">Author unknown, publication date unknown, Principle Network Engineer, Field Engineer, accessed 27th March, URL: <a href="https://www.fieldengineer.com/skills/principal-network-engineer">https://www.fieldengineer.com/skills/principal-network-engineer</a><br></li>
                    <li class="location">Author unknown, publication date unknown, Network Design Engineer, Field Engineer, accessed 27th March, URL: <a href="https://www.fieldengineer.com/skills/network-design-engineer">https://www.fieldengineer.com/skills/network-design-engineer</a></li>
                </ul>
                
                <div id="refEnhancements">
                    <div class="anchor"></div>
                    <h3>References used for Enhancements page:</h3>
                </div>
                <p>Only one reference was used in this page, and that was for the further study under the enhancement of <a href="#targetDest">linking to page sections</a>.</p>
                <ul>
                    <li class="location">anniemcg, March 7, 2017, Linking to Page Fragments in HTML5, In Easy Steps, accessed 12th April, URL: <a href="https://ineasysteps.com/linking-page-fragments-html5/">https://ineasysteps.com/linking-page-fragments-html5/</a></li>
                </ul>



            </section>
            <div class="topOfPage"><a href="#topE">CLICK HERE TO RETURN TO TOP OF PAGE</a></div>
        </article>
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
