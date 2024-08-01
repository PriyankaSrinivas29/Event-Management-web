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
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Priyanka </h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: priyanka7dd@gmail.com<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9731350181
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Renusree </h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: renuteja1912@gmail.com<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9391180839
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">NAME</label>
                            <input type="text" name="NAME" id="NAME" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Title">Contact</label>
                            <input type=" name="Contact" id="Contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Title">Event</label>
                            <input type="text" name="Event" id="Event" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Title">Date</label>
                            <input type="date" name="Date" id="Date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>