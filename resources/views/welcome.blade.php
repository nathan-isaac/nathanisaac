<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nathan Isaac Portfolio</title>

    <!-- Styles -->
    <link href="css/all.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="hero section black-bg dark-bg">
        <div class="container">
            <img src="/images/logo-lg.svg" class="hero-logo img-responsive animated bounceInDown" alt="Nathan Isaac Web Design and Development"/>
        </div>
    </section>

    <section class="section green-bg dark-bg">
        <div class="container">
            <div class="section-header">
                <h1 class="section-heading">I specialize in...</h1>
            </div>

            <div class="section-content">

                <div class="col-1-3rd">
                    <h3>Languages</h3>
                    <ul class="list-group">
                        <li class="list-group-item-progressive"><div class="progress-100-percent"></div>HTML &amp; HTML5</li>
                        <li class="list-group-item-progressive"><div class="progress-95-percent"></div>CSS &amp; CSS3</li>
                        <li class="list-group-item-progressive"><div class="progress-95-percent"></div>Sass</li>
                        <li class="list-group-item-progressive"><div class="progress-85-percent"></div>JS</li>
                        <li class="list-group-item-progressive"><div class="progress-80-percent"></div>PHP</li>
                    </ul>
                </div>

                <div class="col-1-3rd">
                    <h3>Frameworks</h3>
                    <ul class="list-group">
                        <li class="list-group-item-progressive"><div class="progress-90-percent"></div>Laravel</li>
                        <li class="list-group-item-progressive"><div class="progress-80-percent"></div>jQuery</li>
                        <li class="list-group-item-progressive"><div class="progress-75-percent"></div>Angularjs</li>
                        <li class="list-group-item-progressive"><div class="progress-50-percent"></div>WordPress</li>
                    </ul>
                </div>

                <div class="col-1-3rd">
                    <h3>Operating Systems</h3>
                    <ul class="list-group">
                        <li class="list-group-item-progressive"><div class="progress-95-percent"></div>Windows</li>
                        <li class="list-group-item-progressive"><div class="progress-70-percent"></div>Mac</li>
                        <li class="list-group-item-progressive"><div class="progress-50-percent"></div>Linux</li>
                    </ul>

                    <h3>Other</h3>
                    <ul class="list-group">
                        <li class="list-group-item-progressive"><div class="progress-80-percent"></div>Git (Version Control)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="section yellow-bg light-bg">
        <div class="container">
            <div class="section-header">
                <h1 class="section-heading">This is how I work</h1>
            </div>

            <div class="section-content">
                <ol>
                    <li>Consultation</li>
                    <li>Contract</li>
                    <li>Sketching & Mockups</li>
                    <li>Design &amp; Development</li>
                    <li>Delivery</li>
                    <li>Maintenance</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="portfolio section orange-bg dark-bg">
        <div class="container">
            <div class="section-header">
                <h1 class="section-heading">Here is my work</h1>
            </div>

            <div class="section-content">
                <p class="paragraph">Something</p>
            </div>
        </div>
    </section>-->

    <section class="about section yellow-bg light-bg">
        <div class="container">
            <div class="col-1-3rd">
                <div class="text-center">
                    <img src="/images/profile.png" alt="Nathan Isaac" class="img-responsive img-profile"/>
                </div>
            </div>

            <div class="col-2-3rds">
                <div class="section-header">
                    <h1 class="section-heading">A little bit about me</h1>
                </div>

                <div class="section-content">
                    <p class="paragraph">
                        Hi, I'm Nathan. I am a web designer and developer who enjoys web technology and the web technology community. I am currently finishing up my Web Design Degree at Walla Walla University while employed full time at Walla Walla University as a Web Application Developer.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact section white-bg light-bg">
        <div class="container">
            <div class="section-header">
                <h1 class="section-heading">Get in touch</h1>
            </div>

            <div class="section-content">
                {!! Form::open(['route' => 'contact']) !!}
                    <div class="row">
                        <div class="col-1-half">
                            <div class="form-group">
                                {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'How should I address you?'] ) !!}
                            </div>
                        </div>

                        <div class="col-1-half">
                            <div class="form-group">
                                {!! Form::label('company', 'Company', ['class' => 'form-label']) !!}
                                {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Who do you work for?'] ) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1-half">
                            <div class="form-group">
                                {!! Form::label('phone', 'Phone', ['class' => 'form-label']) !!}
                                {!! Form::input('phone', 'phone', null, ['class' => 'form-control', 'placeholder' => 'How should I contact you?'] ) !!}
                            </div>
                        </div>

                        <div class="col-1-half">
                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'How should I contact you?'] ) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('subject', 'Subject', ['class' => 'form-label']) !!}
                        {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'What\'s this message about?']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('message', 'Message', ['class' => 'form-label']) !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'What\'s on your mind?']) !!}
                    </div>

                    <div class="form-group">
                        <button class="btn-primary btn-lg btn-block">Send</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

    <section class="footer section-sm black-bg dark-bg">
        <div class="container">
            <div class="col-1-half">
                &copy; Nathan-Isaac.com {{ date('Y') }}. All rights reserved.
            </div>

            <div class="col-1-half">
                <div class="text-right">Proudly hosted with <a href="https://forge.laravel.com" class="link"><strong>Laravel Forge</strong></a> and <a href="https://www.digitalocean.com/?refcode=2d5d69d54230" class="link"><strong>DigitalOcean</strong></a>.</div>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>
</html>
