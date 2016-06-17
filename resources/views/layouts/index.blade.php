<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>Carousel Template for Bootstrap</title>
    <link href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css rel=stylesheet>
    <script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script>
    <link href=/Content/AssetsBS3/examples/carousel.css rel=stylesheet>

    <body>
        <div class=navbar-wrapper>
            <div class=container>
                <nav class="navbar navbar-inverse navbar-static-top" role=navigation>
                    <div class=container>
                        <div class=navbar-header>
                            <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> <a class=navbar-brand href=#>Project name</a></div>
                        <div id=navbar class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class=active><a href=#>Home</a>
                                    <li><a href=#about>About</a>
                                        <li><a href=#contact>Contact</a>
                                            <li class=dropdown><a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>Dropdown <span class=caret></span></a>
                                                <ul class=dropdown-menu role=menu>
                                                    <li><a href=#>Action</a>
                                                        <li><a href=#>Another action</a>
                                                            <li><a href=#>Something else here</a>
                                                                <li class=divider>
                                                                    <li class=dropdown-header>Nav header
                                                                        <li><a href=#>Separated link</a>
                                                                            <li><a href=#>One more separated link</a></ul>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id=myCarousel class="carousel slide" data-ride=carousel>
            <ol class=carousel-indicators>
                <li data-target=#myCarousel data-slide-to=0 class=active>
                    <li data-target=#myCarousel data-slide-to=1>
                        <li data-target=#myCarousel data-slide-to=2>
            </ol>
            <div class=carousel-inner role=listbox>
                <div class="item active"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class=container>
                        <div class=carousel-caption>
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.
                                <p><a class="btn btn-lg btn-primary" href=# role=button>Sign up today</a></div>
                    </div>
                </div>
                <div class=item><img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class=container>
                        <div class=carousel-caption>
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                <p><a class="btn btn-lg btn-primary" href=# role=button>Learn more</a></div>
                    </div>
                </div>
                <div class=item><img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class=container>
                        <div class=carousel-caption>
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                <p><a class="btn btn-lg btn-primary" href=# role=button>Browse gallery</a></div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href=#myCarousel role=button data-slide=prev> <span class="glyphicon glyphicon-chevron-left" aria-hidden=true></span> <span class=sr-only>Previous</span> </a>
            <a class="right carousel-control" href=#myCarousel role=button data-slide=next> <span class="glyphicon glyphicon-chevron-right" aria-hidden=true></span> <span class=sr-only>Next</span> </a>
        </div>
        <div class="container marketing">
            <div class=row>
                <div class=col-lg-4><img class=img-circle src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style=width:140px;height:140px>
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
                        <p><a class="btn btn-default" href=# role=button>View details &raquo;</a></div>
                <div class=col-lg-4><img class=img-circle src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style=width:140px;height:140px>
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                        <p><a class="btn btn-default" href=# role=button>View details &raquo;</a></div>
                <div class=col-lg-4><img class=img-circle src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style=width:140px;height:140px>
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        <p><a class="btn btn-default" href=# role=button>View details &raquo;</a></div>
            </div>
            <hr class=featurette-divider>
            <div class="row featurette">
                <div class=col-md-7>
                    <h2 class=featurette-heading>First featurette heading. <span class=text-muted>It'll blow your mind.</span></h2>
                    <p class=lead>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</div>
                <div class=col-md-5><img class="featurette-image img-responsive" data-src=holder.js/500x500/auto alt="Generic placeholder image"></div>
            </div>
            <hr class=featurette-divider>
            <div class="row featurette">
                <div class=col-md-5><img class="featurette-image img-responsive" data-src=holder.js/500x500/auto alt="Generic placeholder image"></div>
                <div class=col-md-7>
                    <h2 class=featurette-heading>Oh yeah, it's that good. <span class=text-muted>See for yourself.</span></h2>
                    <p class=lead>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</div>
            </div>
            <hr class=featurette-divider>
            <div class="row featurette">
                <div class=col-md-7>
                    <h2 class=featurette-heading>And lastly, this one. <span class=text-muted>Checkmate.</span></h2>
                    <p class=lead>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</div>
                <div class=col-md-5><img class="featurette-image img-responsive" data-src=holder.js/500x500/auto alt="Generic placeholder image"></div>
            </div>
            <hr class=featurette-divider>
            <footer>
                <p class=pull-right><a href=#>Back to top</a>
                    <p>&copy; 2014 Company, Inc. &middot; <a href=#>Privacy</a> &middot; <a href=#>Terms</a></footer>
        </div>
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
        <script src=/Scripts/AssetsBS3/docs.min.js></script>
        <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>
