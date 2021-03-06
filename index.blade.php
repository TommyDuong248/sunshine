<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Layout Laravel Blade</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <style>
    #logo {
        background-color: #dae8fc;
        height: 80px;
    }

    #company-name {
        background-color: #d5e8d4;
        height: 80px;
    }

    #sidebar {
        background-color: #e1d5e7;
        height: 300px;
    }

    #main-content {
        background-color: #f8cecc;
        height: 300px;
    }

    #main-footer {
        background-color: #fad7ac;
        height: 100px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div id="header">
            <div class="row">
                <div class="col-md-4" id="logo">
                    LOGO
                </div>
                <div class="col-md-8" id="company-name">
                    SUNSHINE
                </div>
            </div>
        </div>
        <div id="content">
            <div class="row">
                <div class="col-md-4" id="sidebar">
                    SIDEBAR
                </div>
                <div class="col-md-8" id="main-content">
                    MAIN-CONTENT
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="row">
                <div class="col-md-12" id="main-footer">
                    FOOTER
                </div>
            </div>
        </div>
    </div>
</body>

</html>