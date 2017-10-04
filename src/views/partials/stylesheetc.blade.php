<style type="text/css">
body.status-page {
    background-color: #FFFFFF;
    color: black;
    @if($app_banner)
    padding-top: 0;
    @endif
}
p, strong { color: #000000 !important; }
.reds { color: red !important; }
.blues { color: blue !important; }
.greens { color: greenyellow !important; }
.yellows { color: yellow !important; }
.oranges { color: orange !important; }
.metrics { color: #FFFF00 !important; }
.links { color: lightgreen !important; }

/**
 * Banner background
 */
.app-banner {
    background-color: whitesmoke !important;
}

.app-banner-padding {
    padding: white !important;
}

/**
 * Alert overrides.
 */
.alert {
    background-color: yellow;
    border-color: yellowgreen;
    color: yellowgreen;
}
.alert.alert-success {
    background-color: green;
    border-color: darkgreen;
    color: green;
}
.alert.alert-info {
    background-color: blue;
    border-color: blue;
    color: blue;
}
.alert.alert-danger {
    background-color: red;
    border-color: red;
    color: red;
}


.footer a {
    color: #000000;
}
</style>
