<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our First Web Site</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cards.css">
    <link rel="stylesheet" type="text/css" href="css/contacts.css">

    <link rel="stylesheet" type="text/css" href="css/responsive/max-600px.css" media="(max-width: 600px)">
    <link rel="stylesheet" type="text/css" href="css/responsive/min-1024px.css" media="(min-width: 1024px)">
    <link rel="stylesheet" type="text/css" href="css/fonts/genericons/genericons.css" media="all" />
</head>
<body>

<div id="layout" class="x-borders">
    <header>
        <div>
            <a id="logo" href="." title="FastTrackIT">
                <img src="img/logo.png" alt="FastTrackIT" title="FastTrackIT">
            </a>
            <h1>Welcome to our First Web Site made @ FastTrackIT</h1>
        </div>
    </header>

    <div id="top-menu">
        <div>
            <button id="secondary-toggle" class="genericon genericon-menu">Widgets</button>

            <ul>
                <li><a href="index.html" title="welcome home">HOME</a></li>
                <li><a href="https://www.linkedin.com/in/nicolaematei" title="my personal projects" target="_blank">Projects</a></li>
                <li><a href="https://www.linkedin.com/in/nicolaematei" title="about me" target="_blank">About</a></li>
                <li><a href="https://www.linkedin.com/in/nicolaematei" title="contact me" target="_blank">Contact</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </div>
    </div>

    <div id="content-wrapper">
        <div id="left-bar">
            <div id="news-widget" class="widget">
                <div class="header" title="Show/Hide content">News</div>
                <div class="content">
                    <p>
                        Today we created a new web site
                        <a id="show-info" href="#">read more</a>

                        <span id="more-info" style="display: none;">
                            made at 'Web programming' course.
                            We learned about HTML (Hyper Text Markup Language), CSS (Cascading Style Sheets) and JS (JavaScript)
                            <a id="hide-info" href="#">hide detail</a>
                        </span>
                    </p>
                    <p class="red-element">This is a red paragraph, it has 'red-element' class (declared in style.css)</p>
                    <p class="red-element">One more red paragraph</p>

                </div>
            </div>
            
            <div id="help-widget" class="widget">
                <div class="header">Help links</div>
                <div class="content">
                    <p><a href="http://www.cssmatic.com/box-shadow" target="_blank">box-shadow generator</a></p>
                    <p><a href="http://www.cssmatic.com/border-radius" target="_blank">border-radius generator</a></p>
                </div>
            </div>

            <div id="google-search" class="widget">
                <div class="header">Google Search</div>
                <div class="content">
                    <form action="http://www.google.com/search" target="_blank">
                        <label for="q">Keyword(s):</label>
                        <input type="text" name="q" id="q">
                        <input type="hidden" name="ie" value="utf-8">
                        <input type="hidden" name="oe" value="utf-8">
                        <input type="hidden" name="as_sitesearch" value="fasttrackit.org">
                        <input type="submit" value="Search">
                    </form>

                                        <?php
                                        echo "Suma este";
                                        echo 4+3;
                                        $a=4;
                                        $b=5;
                                        echo "Salut";
                                        echo $name;
                                        $name;
                                        $firstname = "Nicolae";
                                        echo "<br>" $firstName . " " . $name;
                                        function getName (){
                                        return $firstName . " " . $name;
                                        }
                                        echo "<br>Nume Complet: " . getName($firstName, $name)
                                        ?>

                </div>
            </div>
        </div>

        <div id="content">
            <div id="breadcrumb">Contacts</div>

            <form id="contact-form" action="contacts.html">
                <input type="hidden" name="id"/>
                <input type="text" name="name" placeholder="Name" required/>
                <input type="text" name="phone" placeholder="Phone" required/>
                <button type="submit" class="add">Add</button>
                <button type="submit" class="save">Save</button>
                <button type="reset" onclick="resetContact()">Reset</button>
            </form>

            <table id="contacts-list">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>phone</th>
                        <th width="100">actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="clear"></div>
    </div>

    <footer>
        <p>&copy; 2015 FastTrackIT. All rights reserved.</p>
    </footer>
</div>

<!--<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>-->
<script src="js/lib/jquery/jquery-2.1.3.js"></script>

<!--<script src="js/functions.js" type="text/javascript"></script>-->
<script src="js/code-examples/functions-jquery.js" type="text/javascript"></script>
<script src="js/code-examples/contacts.js" type="text/javascript"></script>

<script src="js/responsive.js" type="text/javascript"></script>
<script>
    loadContacts();
</script>

</body>
</html>