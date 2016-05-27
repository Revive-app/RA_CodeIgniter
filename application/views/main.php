<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reviveapp-Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
      </head>
         <body>
             <div class="container">
               <div class="row">
                <div class="six columns">
                      <form action="main/addTrainer" method="POST">
                            <div class="row">
                                <div class="twelve columns">
                                    <h3>New Trainer</h3>
                                </div>
                            </div>
                            <div class="row">
                                <label for="username">
                                    <div class="four columns">
                                        <h5>Full Name: </h5>
                                    </div>
                                    <div class="eight columns">
                                        <input type="text" name="fullname">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label for="comapny">
                                    <div class="four columns">
                                        <h5>Company: </h5>
                                    </div>
                                    <div class="eight columns">
                                        <input type="text" name="company">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label for="email">
                                    <div class="four columns">
                                        <h5>Email: </h5>
                                    </div>
                                    <div class="eight columns">
                                        <input type="email" name="email">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label for="password">
                                    <div class="four columns">
                                        <h5>Password: </h5>
                                    </div>
                                    <div class="eight columns">
                                        <input type="password" name="password">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <div class="twelve columns">
                                    <input type="submit" value="Add Trainer">
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </body>
</html>
