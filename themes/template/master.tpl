<html lang="en">
    <head>
        <meta charset="utf-8">

        {include file="{ROOT_PATH}\\themes\\template\\style.tpl"}
        {include file="{ROOT_PATH}\\themes\\template\\scripts.tpl"}
        <script>
            let app = {block name=appname}{/block};
            let path = "";
            function convertUppercaseToLowercaseWithPeriod(inputString) {
                return inputString.replace(/[A-Z]/g, function(match) {
                    return '.' + match.toLowerCase();
                });
            }

            path = convertUppercaseToLowercaseWithPeriod(app);
            path = path.slice(1);

            var strVuePath = "localhost{$PATH}view/js/view/" + path + ".js";

            let Vuescript = document.createElement("script");
            Vuescript.src = "{$PATH}view/js/view/" + path + ".js";
            Vuescript.type = "module";
            document.head.appendChild(Vuescript);
        </script>
        <!--script type="module" src="themes/js/app.js"></script-->
        
        {block name=script}{/block}

        <link rel="icon" href="favicon.png" type="image/x-icon">
        <title>{block name=title}{/block}</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
            </div>
        </nav>

        <!--here you need to add loop for the modules and its sub pages-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                    <li class="active"><a>Calculate <span class="sr-only">(current)</span></a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=Home">Home</a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=NewPage">New Page</a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=Home">Oher Project Pages(you can add all what you want but add the page methode first)</a></li>
                    </ul>
                </div>
                <!--end of the loop loop for the modules and its sub pages-->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">{block name=pageName}{/block}</h1>
                    <div id="app">
                        {block name=body}{/block}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>