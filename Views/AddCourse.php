<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background-color: #e3e3e3;
            display: flex;
        }

        .LeftEmptySpace {
            height: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .fab_parent {
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            margin-right: -20px;
        }

        .Rounded-Shit {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div style="width: 10%; height: 100%;">
        <div class=" LeftEmptySpace teal white-text">
            <div class="fab_parent">

                <a class="btn-floating btn-large waves-effect waves-light red Rounded-Shit btn tooltipped"
                    data-position="buttom" id="Home" data-tooltip="Home">
                    <i class="material-icons large left">home</i>
                </a>
                <a class="btn-floating btn-large waves-effect waves-light red  Rounded-Shit btn tooltipped"
                    data-position="buttom" id="Admin" data-tooltip="Admin">
                    <i class="material-icons large left">account_circle</i>
                </a>
                <a class="btn-floating btn-large waves-effect waves-light red Rounded-Shit btn tooltipped"
                    data-position="buttom" id="Courses" data-tooltip="Courses">
                    <i class="material-icons large left">import_contacts</i>
                </a>
            </div>
        </div>
    </div>
    <!-- Container -->
    <div class="container" style="width: 90%; height: 100%;  display: flex;   align-items: center;">
        <div class="row z-depth-1"
            style="display: flex; flex-direction: column;align-items: center;height: 90%;width: 85%;">
            <div class="col s12" style="margin: 0; padding :0px;display: flex;flex-direction: column; ">
                <div class="wrapper" style="margin-top: 20px;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                    <h1>New Trainning Course</h1>
                        <form action="">
                                <div class="row">
                                    <div class="col s6">
                                        <div class="input-field">
                                            <input type="number" name="Number" id="Number">
                                            <label for="Number">Course Number</label>
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field">
                                            <input type="text" name="Name" id="Name">
                                            <label for="Name">Course Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6">
                                        <div class="input-field">
                                            <input type="text" name="Trainer" id="Trainer">
                                            <label for="Trainer">Course Trainer</label>
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field">
                                            <select>
                                                <option value="0">In</option>
                                                <option value="1">Out</option>
                                            </select>
                                            <label>Internal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field">
                                        <input type="Number" name="FeedbackCode" id="FeedbackCode" data-length=3>
                                        <label for="FeedbackCode">Course FeedbackCode</label>
                                </div>
                                
                                <div class="input-field">
                                    <input type="Date" name="StartDate" id="StartDate">
                                    <label for="StartDate">Course StartDate</label>
                                </div>
                               
                                <button type="submit" class="btn waves-effect waves-light" style="width:100%;">
                                    <i class="material-icons">add</i>
                                </button>
            
                            </form>
                </div>
            </div><!-- End Col s12 -->
        </div><!-- End Row -->
    </div> <!-- End Container -->



    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.tooltipped').tooltip();
            $("#Home").click(() => {
                window.open("index.php", "_self");
            });
            $("#Admin").click(() => {
                window.open("Admin.php", "_self");
            });
            $("#Courses").click(() => {
                window.open("Courses.php", "_self");
            });
            $('.tabs').tabs();
            $('.collapsible').collapsible();
            $('select').formSelect();

        });


    </script>
</body>

</html>
<!-- <div class="col s12" style="margin: 0; padding :0px;display: flex;flex-direction: column; ">

</div>End Col s12 -->