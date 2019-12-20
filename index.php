<?php
    $title = "Home";
    include("./templates/header.php");
?>

<h1>Welcome!</h1>
<p>
    This is an implementation of static pages in PHP.
    <br />
    It is ideal for simple webapps.
</p>

<p>
    Page-Specific CSS and JS files are automatically associated with their webpage when
    created in their respective folders.
    <br />
    There is no need to link the webpage to these files when creating them.
</p>

<hr />

<div class="infoContainer">
    <span class="containerHeader">Site Structure:</span>
    <br />
    <br />
    <ul>
        <li class="treeItem">
            <span>/</span>
            <ul>
                <li class="treeItem">index.php (default page)</li>
                <li class="treeItem">StyleSheet.css (site-wide CSS)</li>
                <li class="treeItem">JavaScript.js (site-wide JS)</li>
                <li class="treeItem">
                    ***other page files***
                    <br />
                    <span class="indented">ie.) somePage.php</span>
                </li>
                <li class="treeItem">
                    <span>css/</span>
                    <ul>
                        <li class="treeItem">
                            ***page-specific css files***
                            <br />
                            <span class="indented">ie.) somePage.css</span>
                        </li>
                    </ul>
                </li>
                <li class="treeItem">
                    <span class="treeItem">js/</span>
                    <ul>
                        <li class="treeItem">
                            ***page-specific js files***
                            <br />
                            <span class="indented">ie.) somePage.js</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<br />

<div class="alertContainer">
    <span class="containerHeader">NOTE:</span>
    <br />
    This template does <span class="containerHeader">NOT</span> support the automated use of
    page templates in subdirectories.
</div>

<?php
    include("./templates/footer.php");
?>
