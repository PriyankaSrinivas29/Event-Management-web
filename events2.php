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
                    <h1>Our previous events</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">JAN</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-4"><!--image holder with 5 grid column-->
                            <img src="https://www.photojaanic.com/blog/wp-content/uploads/sites/2/2021/05/first-birthday-decoration-ideas.jpg" class="img-responsive">
                            
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Nicolas birthday!!!</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Terrace gardens
                            </p>
                            <p class="definition"><!--event content definition-->
                            Customised decor, speacial cake, return gifts,games and many more!
                            </p>
                        
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">DEC</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">19</span><!--day-->
                        </div>
                        <div class="col-md-4"><!--image holder with 5 grid column-->
                            <img src="https://media.weddingz.in/images/165c15fe7f27ad7eae4d378a9d1ec9f5/7-mehndi-decor-ideas-that-your-wedding-mehndi-function-is-incomplete-without-mehndidays-weddingdecor.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Mehendi</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                           R K Palace
                            </p>
                            <p class="definition"><!--event content definition-->
                            Making memories and living them. Most special day for the bride and the family.
                            </p>
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">NOV</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">29</span><!--day-->
                        </div>
                        <div class="col-md-4"><!--image holder with 5 grid column-->
                            <img src="https://i.pinimg.com/originals/0d/e4/07/0de4076ad286a64727a2692cc0044420.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">25th Wedding aniversary</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                             Home sweet home
                            </p>
                            <p class="definition"><!--event content definition-->
                            It is a fairy tale romance!
                            </p>
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">NOV</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-4"><!--image holder with 5 grid column-->
                            <img src="images/meetevent.jpg" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Conference</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Kalyani Aura
                            </p>
                            <p class="definition"><!--event content definition-->
                            A conference is a gathering of people who singly can do nothing but together can decide that nothing can be done.-Fred Allen.
                            </p>
                       </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
