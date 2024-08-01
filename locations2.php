<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images\p1.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The Grand Ballroom </h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images\p1.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE EXPERIENCE</h5><!--content title-->
                                                <p>
                                                The grand ballroom, luxurious 3,696 sq. ft. ballroom, opens to a pre-function area.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                This comfortable 5-star The Lalit Ashok Bangalore Hotel, located just off the renowned Karnataka Chitrakala Parishath School and 25 minutes' walk from the five-decade-old M Chinnaswamy Stadium, features an outdoor pool for guests to take a dip in. Set 25 minutes' stroll of the Modern Bangalore Royal Palace, it is the boutique hotel to stay in Sheshadripuram district of the city.
                                                </p>

                                                <p>
                                                With multiple event spaces, it can be a perfect venue for your pre-wedding, wedding, as well as post-wedding functions. The Lalit Ashok Bangalore offers services like exotic dinner, event planners, concierge service, in-house catering, as well as drinks, and beverages. They also provide you with empanelled decorators so that you have professional help at your disposal while planning and executing your event.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">The Lalith Ashoka Hotel</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Sheshadripuram
                            </p>
                            <p class="definition"><!--content body-->
                            Known for its contemporary design and elegant ambience, it boasts the largest banquet facilities, in the city. It is aesthetically built with an opulent finish and decor which can surely make your wedding and its related functions a grand celebration.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images\p2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The Grand Ballroom</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images\p2.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Experience</h5><!--content title-->
                                                <p>
                                                The Taj West End, Bangalore is a tropical paradise in the garden city for your special day. It’s majestic banqueting venues lend a certain colonial charm to the wedding celebrations.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The banquets in The Taj West End are ideal to host grand birthdays, anniversaries, ring ceremonies, big fat weddings, grandiose receptions, pre-wedding rituals such as haldi, mehndi, sangeet, as well as various cultural events, school functions, exhibitions, fairs as well as community events. From close-knit celebrations to theme parties as well as social, cocktail and corporate events, Taj West End Party Hall is your one-stop venue for all!
                                                </p>

                                                <p>
                                                The world inside The Taj West End Bengaluru is one of elegance. Done up aesthetically in stunning lights, upscale decor, and charming vibes, the banquet halls make for a perfect picturesque sight and are ideal to host a varied number of patrons. The sprawling lawns, on the other hand, mesmerize you with their well-maintained settings and refreshing surroundings.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Taj westend</h1><!--location title-->
                            <p class="location">Racecourse Road</p><!--location secondary content-->
                            <p class="definition">
                            The Taj West End, Race Course Road, Bangalore, is an ideal venue for couples who want to tie the knot in a luxurious ambiance. It is your one-stop destination for hosting indoor or outdoor celebrations of any kind. Offering excellent services, magical party areas, and ease of commute, this wedding hotel has everything to make your event a blockbuster.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images\p3.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel"> Howard Johnson</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images\p3.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Experience</h5><!--content title-->
                                                <p>
                                                Howard Johnson, Bangalore, can easily accommodate a large gathering for your special day. In terms of satiating your taste buds, the hotel offers multi-cuisine vegetarian and non-vegetarian delicacies.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Howard Johnson By Wyndham, Nagavara, Bangalore, is a premium-class 4-star property nestled amidst the vibrant suburbs of this metropolitan city. Located at a close distance from Elements Mall, this venue becomes easily commutable via all modes of public and private transportation. Equipped with state of the art amenities and impeccable seating arrangements, this hotel would ensure that the attendees are always comfortable.
                                                </p>
                                                <p>
                                                Howard Johnson By Wyndham, Bangalore, offers chic and beautiful accommodation across well-appointed rooms and suites with state-of-the-art facilities to pamper your guests. It has its team of professionals who understand your requirements and decorate the venue accordingly.  Refreshing cocktails and alcoholic beverages are prepared by the trained bartenders present here.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Howard Johnson By Wyndham</h1>
                            <p class="location">Nagavara</p>
                            <p class="definition"> Features of this wedding venues are : Food provided by the venue, Non-Veg allowed at the venue, Alcohol allowed at the venue, Halls are air Conditioned, Ample parking, Baarat allowed, Fire crackers allowed, Decor provided by the venue, </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images\p4.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Balan Farm Convention Center</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images\p4.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Experience</h5>
                                                <p>
                                                It’s a perfect venue to hold an engagement function, sangeet, wedding, reception, Mehendi, bachelor party, or even a birthday party. For corporate events, you can choose the banquet halls
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The outdoor space creates a picturesque vista to make your big day even more stunning. You can host their close-knit events or even large-scale parties by accommodating around 1k people. Especially for the nuptial ceremonies, these spacious outdoor settings provide you with the best memories. The cozy ambiance helps your guests enjoy it the most. The roofs covered with red slates add a decorative look to them
                                                </p>
                                                
                                                <p>
                                                The venue has special rooms for the bride and groom and even their family members to get ready for the celebrations. It has a reserved parking area too for all vehicles where around 80 cars can be parked easily. If you prefer non-vegetarian food then they offer separate spacious kitchens for that purpose. So, it’s an ideal option for veg as well as non-veg preferences. The dining area is fabulous. You can even hold a cocktail dinner here as per your guests’ demands. The exceptional hospitality delivers a perfect experience to you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Balan Farm Convention Center</h1>
                            <p class="location">Arekere</p>
                            <p class="definition">Balan Farm Convention Center is one of the top outdoor party venues in Bangalore. It has 3 alluring banquet halls which hold the capacity of around 2k people at one time. All these halls are fully-furnished and equipped with all amenities.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
