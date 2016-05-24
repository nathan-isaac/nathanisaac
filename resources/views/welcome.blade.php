<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Nathan Isaac's Portfolio</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://use.typekit.net/zkh5myr.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
    <section class="Section Section--hero-banner">
        <div class="Section__container">
            <nav class="Main-nav">
                <a href="/" class="Main-nav__logo">
                    <img src="/images/nathan-isaac-logo.svg" alt="Nathan Isaac" height="38px" width="auto">
                </a>

                <div class="Main-nav__list text-right hidden-xs">
                    <a href="#portfolio" class="Main-nav__item" onclick="$('#portfolio').animatescroll();">Portfolio</a>
                    <a href="#projects" class="Main-nav__item" onclick="$('#projects').animatescroll();">Projects</a>
                    <a href="#me" class="Main-nav__item" onclick="$('#me').animatescroll();">Me</a>
                </div>
            </nav>

            <div class="Hero">
                <h1 class="Hero__heading hidden-xs">Nathan Isaac</h1>
                <h3 class="Hero__sub-header">An enthusiastic Web Application Developer who enjoys making the web a better place.</h3>
            </div>

            <div class="About">
                <div class="Panel">
                    <div class="Panel__header">
                        <h2 class="Panel__title">I am...</h2>
                    </div>
                    <div class="Panel__body">
                        ...a Web Application Developer employed at <a target="_blank" href="https://wallawalla.edu">Walla Walla University</a>.
                    </div>
                </div>

                <div class="Panel">
                    <div class="Panel__header">
                        <h2 class="Panel__title">I do...</h2>
                    </div>
                    <div class="Panel__body">
                        ...web UX design and build custom websites and web applications.
                        <a target="_blank" href="https://laravel.com/">Laravel</a>, <a target="_blank" href="http://getbootstrap.com/">Bootstrap</a>,
                        and <a target="_blank" href="http://vuejs.org/">Vue.js</a> are a few of my favorite development tools.
                    </div>
                </div>

                <div class="Panel">
                    <div class="Panel__header">
                        <h2 class="Panel__title">I want...</h2>
                    </div>
                    <div class="Panel__body">
                        ...to help make your idea a reality, so what are you waiting for?
                        <a href="mailto:nathan@nathan-isaac.com">Get in touch</a>.
                    </div>
                </div>
            </div>

            <a href="#portfolio" class="More" onclick="$('#portfolio').animatescroll();">
                <i class="material-icons More__icon">&#xE313;</i>
            </a>
        </div>
    </section>

    <main class="Main-content">

        <section class="Section" id="portfolio">
            <div class="Section__container">
                <h1 class="Section__heading">Portfolio</h1>

                <div class="Portfolio-list">
                    <div class="Portfolio-list__item">
                        <div class="Portfolio-list__header">
                            <img src="/images/portfolio/mywwu-v2.jpg" alt="myWWU" class="img-responsive">
                        </div>
                        <div class="Portfolio-list__body">
                            <span class="label label-success Portfolio-list__label">In Beta</span>

                            <h1 class="Portfolio-list__heading">myWWU V2</h1>

                            <div class="Portfolio-list__content">
                                <div class="Portfolio-list__section">
                                    <h4>Client</h4>
                                    <p><a href="https://wallawalla.edu" target="_blank">Walla Walla University</a></p>

                                    <h4>Goals</h4>
                                    <ul>
                                        <li>Single sign on</li>
                                        <li>Password reset</li>
                                        <li>Centralize user dashboard</li>
                                        <li>Automated application tests</li>
                                        <li>New simplified logo</li>
                                    </ul>
                                </div>
                                <div class="Portfolio-list__section">
                                    <h4>Challenges</h4>
                                    <p>Create a website that can be flexible for students, faculty, staff, and
                                        alumni users. Implement SSO to make signing in to University applications
                                        simpler for the end user.</p>

                                    <h4>Solution</h4>
                                    <ul>
                                        <li>Extensive planning & research</li>
                                        <li>Sketching</li>
                                        <li>User feedback</li>
                                        <li>Implement site using modern frameworks</li>
                                    </ul>
                                </div>
                            </div>

                            <a target="_blank" href="https://mywwu-stage.wallawalla.edu" class="btn btn-primary">View project</a>
                        </div>
                    </div>

                    <div class="Portfolio-list__item">
                        <div class="Portfolio-list__header">
                            <img src="/images/portfolio/mywwu-v1.jpg" alt="myWWU" class="img-responsive">
                        </div>
                        <div class="Portfolio-list__body">

                            <h1 class="Portfolio-list__heading">myWWU V1</h1>

                            <div class="Portfolio-list__content">
                                <div class="Portfolio-list__section">
                                    <h4>Client</h4>
                                    <p><a href="https://wallawalla.edu" target="_blank">Walla Walla University</a></p>

                                    <h4>Goals</h4>
                                    <ul>
                                        <li>Login portal</li>
                                        <li>Password reset</li>
                                        <li>Centralize user dashboard</li>
                                        <li>Internal app authentication</li>
                                    </ul>
                                </div>
                                <div class="Portfolio-list__section">
                                    <h4>Challenge</h4>
                                    <p>Design website to match the WWU brand. Focus design for student user
                                        experience but also usable for faculty and staff.</p>

                                    <h4>Solution</h4>
                                    <p>Work side by side with designer to come up with a design focused on student
                                        user experience. Convert custom website to use modern frameworks.</p>
                                </div>
                            </div>

                            <a target="_blank" href="https://mywwu.wallawalla.edu" class="btn btn-primary">View project</a>
                        </div>
                    </div>

                    <div class="Portfolio-list__item">
                        <div class="Portfolio-list__header">
                            <img src="/images/portfolio/apply.jpg" alt="apply" class="img-responsive">
                        </div>
                        <div class="Portfolio-list__body">

                            <h1 class="Portfolio-list__heading">Apply</h1>

                            <div class="Portfolio-list__content">
                                <div class="Portfolio-list__section">
                                    <h4>Client</h4>
                                    <p><a href="https://wallawalla.edu" target="_blank">Walla Walla University</a></p>

                                    <h4>Goals</h4>
                                    <ul>
                                        <li>User friendly online application</li>
                                        <li>Integration into PeopleSoft</li>
                                        <li>Seamless transition from applicant to student dashboard</li>
                                        <li>Admin application management</li>
                                        <li>Responsive design</li>
                                    </ul>
                                </div>
                                <div class="Portfolio-list__section">
                                    <h4>Challenge</h4>
                                    <p>Create an application to integrate with internal data systems.</p>

                                    <h4>Solution</h4>
                                    <p>Design an online form application with a Turbo Tax feel to guide
                                        applicant's through the apply process.</p>
                                </div>
                            </div>

                            <a target="_blank" href="https://apply.wallawalla.edu" class="btn btn-primary">View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Section Section--projects" id="projects">
            <div class="Section__container">
                <h1 class="Section__heading">Projects</h1>

                <div class="Projects">
                    <div class="Panel">
                        <div class="Panel__header">
                            <h2 class="Panel__title">Personal</h2>
                        </div>
                        <div class="Panel__body">

                            <h4 class="clearfix">Pantry App <span class="label label-success pull-right">In Development</span></h4>

                            <p><img src="/images/portfolio/pantryapp.jpg" alt="Pantry App" class="img-responsive"></p>

                            <p>Figuring what to eat from what is in the kitchen has always been a
                                challenge for me. This is why I am working on Pantry. I am building this app
                                with <a target="_blank" href="http://vuejs.org">Vue.js</a> and
                                <a target="_blank" href="https://laravel.com">Laravel</a>.</p>

                            <p><a target="_blank" href="http://pantryapp.io/" class="btn btn-primary">View project</a></p>

                            <hr>

                            <h4>Quiz App</h4>

                            <p><img src="/images/portfolio/quizapp.jpg" alt="Quiz App" class="img-responsive"></p>

                            <p>My typography class required that I learn different typefaces by name. I created
                                this simple quiz app to help me study. This is built with
                                <a target="_blank" href="https://angularjs.org">Angular.js</a>.</p>

                            <p><a target="_blank" href="http://typereview.njisaac.com/" class="btn btn-primary">View project</a>
                                <a target="_blank" href="https://github.com/nisaac2fly/typereview" class="btn btn-default">View source</a></p>

                            <hr>

                            <h4>AOE Generator</h4>

                            <p><img src="/images/portfolio/aoeapp.jpg" alt="AOE App" class="img-responsive"></p>

                            <p>This app generates random teams with civilization for the Age of Empires II computer
                                game. This fun project was created in order to learn my first
                                <a target="_blank" href="https://angularjs.org/">JS framework</a> and keep up with
                                <a target="_blank" href="https://laravel.com">Laravel</a>.</p>

                            <p><a target="_blank" href="http://aoe.njisaac.com/" class="btn btn-primary">View project</a>
                                <a target="_blank" href="https://github.com/nisaac2fly/aoe" class="btn btn-default">View source</a></p>
                        </div>
                    </div>


                    <div class="Panel">
                        <div class="Panel__header">
                            <h2 class="Panel__title">WWU</h2>
                        </div>
                        <div class="Panel__body">
                            <h4>API</h4>

                            <p>WWU needed an app to provide integrations between internal projects and services.
                                I found this a perfect opportunity to use the dedicated API project called
                                <a target="_blank" href="https://lumen.laravel.com/">Lumen</a>.</p>

                            <hr>

                            <h4>Checkpoint</h4>

                            <p><img src="/images/portfolio/swipes.png" alt="Swipe App" class="img-responsive"></p>

                            <p>The WWU CommUnity department needed an app to collect event attendance. This app
                                needed to be internet independent. We decided to build a chrome app with
                                <a target="_blank" href="https://angularjs.org/">Angular JS</a>. This way the
                                the app can be installed locally and run without internet.</p>
                        </div>
                    </div>

                    <div class="Panel">
                        <div class="Panel__header">
                            <h2 class="Panel__title">Freelance</h2>
                        </div>
                        <div class="Panel__body">

                            <h4>EZPEDO</h4>

                            <p><img src="/images/portfolio/ezpedo.jpg" alt="EZPEDO" class="img-responsive"></p>

                            <p>For the EZPEDO project, I was responsible for converting PDF mockup's into HTML,
                                CSS, and JS based on client specifications.</p>

                            <p><a target="_blank" href="https://www.ezpedo.com/" class="btn btn-primary">View project</a></p>

                            <hr>

                            <h4>Martin Airfield</h4>

                            <p><img src="/images/portfolio/martin-airfield.jpg" alt="martin field" class="img-responsive"></p>

                            <p>The Martin Airfield website was designed for the privately owned airport in
                                College Place WA. The website was built with
                                <a href="https://wordpress.com" target="_blank">WordPress</a> and a custom
                                WordPress theme.</p>

                            <p><a target="_blank" href="https://www.ezpedo.com/" class="btn btn-primary">View project</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Section" id="me">
            <div class="Section__container">
                <h1 class="Section__heading">Me</h1>

                <div class="Section__content Section__content--me">
                    <p>
                        As a Web Application Developer, at
                        <a target="_blank" href="https://wallawalla.edu">Walla Walla University</a>,
                        my passion lies in bringing web pages to life with modern technologies.
                        I code in various coding languages such as HTML, CSS, JS, SQL, and PHP.
                    </p>

                    <p>Like to talk? <a href="mailto:nathan@nathan.isaac.com">Get in touch</a>.</p>
                </div>

            </div>
        </section>
    </main>

    <section class="Section Section--footer">
        <div class="Section__container">
            <div class="Footer">
                <div class="Footer__social">
                    <a target="_blank" href="https://github.com/nisaac2fly" class="Footer__social-link">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/nisaac2fly" class="Footer__social-link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/nathan-isaac-86549352" class="Footer__social-link">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:nathan@nathan.isaac.com" class="Footer__social-link">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="Footer__meta">
                    <h5 class="Footer__copy">&copy; Nathan Isaac {{ date('Y') }}</h5>
                    <div class="Footer__hosted">
                        Proudly hosted with <a target="_blank" href="https://forge.laravel.com/">Laravel Forge</a> and
                        <a target="_blank" href="https://m.do.co/c/2d5d69d54230">DigitalOcean</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
