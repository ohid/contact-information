<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard | Support Pro </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->

        <!-- NORMALIZING CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">

        <!-- ICONIC FONT - FONT AWESOME -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">

        <!-- BOOTSTRAP FRONTEND FRAMEWORD -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">

        <!-- LOAD WEB FONTS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-stylesheet.css') }}">

        <!-- MAIN STYLESHEET FILE -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        <!-- RESPONSIVE STYLESHEET -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">

        <!-- MODERNIZER -->
        <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <!-- Google Recaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        


        <!--====================================
        =            NAVBAR STARTS            =
        =====================================-->

        @include('partials.site.nav')

        

        <!--====  End of NAVBAR  ====-->


        <!--====================================
        =            CONTENT STARTS            =
        =====================================-->

        <div class="content-area">
            <div class="container">
                <div class="search-pblm">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="problem" id="problem" class="form-control" placeholder="Facing a problem? Try searching here...">            
                            <button type="submit"><i class="fa fa-search"></i></button>      
                        </div>
                    </form>
                </div>

                <div class="ticket-area">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Ticket submit form -->
                            <div class="submit-ticket">
                                <div class="heading-text">
                                    <h2>Didn’t find what you want?  <span>Open a ticket now!</span></h2>
                                    <p>We are very responsive in our service. You will get reply within 24 hours.</p>
                                </div>

                                <div class="ticket-form">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="first_name" class="form-control" placeholder="First Name *">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address  *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <select name="type" id="type" name="type" class="form-control" >
                                                <option disabled  selected value>What type of support you want?</option>
                                                <option value="Theme">Theme</option>
                                                <option value="Plugin">Plugin</option>
                                                <option value="installation">Installation</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea  name="message" class="form-control" placeholder="Type your message here"></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ticket-submit-file">
                                                    <input type="file" name="file" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                                    <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span> <span class="browse">Browse</span> your file here&hellip;</span></label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="g-recaptcha" data-sitekey="6Ld4lycTAAAAALQJOPD4C2UoTtJ2LGYLr4azVwIV"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" value="Submit your ticket" class="btn btn-submit">
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- Ticket submit form ends -->
                        </div>
                        <div class="col-md-5">
                            <!-- Common answer start -->
                            <div class="common-answers">
                                <div class="heading-text">
                                    <h2>Try to find some common answers:</h2>
                                    <p>Here you will find some common question that can help you!</p>
                                </div>

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title collapsed"  role="button" data-toggle="collapse" data-parent="#accordion" href="#answerOne" aria-expanded="true" aria-controls="answerOne">
                                          <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit in vulputate velit?
                                      </h4>
                                    </div>
                                    <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                        
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque minima exercitationem magni, odit magnam laudantium neque harum autem voluptas? Dolorum, est dolorem aperiam! Rerum pariatur, qui molestias vitae accusamus iste!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                      <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
                                           <i class="fa fa-angle-right"></i> <span>Esum dolor sit amet, consectetuer adipiscing elit, sed diam?</span>
                                      </h4>
                                    </div>
                                    <div id="answerTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body">
                                        
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minus, quasi accusantium ratione totam delectus expedita quaerat hic vero quae voluptate placeat sequi doloremque, adipisci. Odit distinctio labore aliquid iste!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#answerThree" aria-expanded="false" aria-controls="answerThree">
                                          <i class="fa fa-angle-right"></i> Nam liber tempor cum soluta nobis eleifend option congue nil?
                                      </h4>
                                    </div>
                                    <div id="answerThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="panel-body">
                                        
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quas quaerat perferendis doloremque, dolorem ullam possimus ducimus mollitia. Minus nulla magnam quibusdam. Animi cupiditate omnis architecto, iste aliquam delectus nemo!
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- Common answer ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====  End of CONTENT  ====-->
        
        
        


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    </body>
</html>
