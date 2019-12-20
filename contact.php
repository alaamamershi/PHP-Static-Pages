<?php
    $title = "Contact";
    include("./templates/header.php");
?>

<h1><?php echo $title; ?></h1>

<!-- Contact Info -->
<div class="card">
    <div class="card-body">
        <!-- Name -->
        <div class="row">
            <div class="col col-3">
                <p class="fieldLabelContainer">
                    <label class="fieldLabel">Name:</label>
                </p>
            </div>
            <div class="col col-9">
                <span>John Doe</span>
            </div>
        </div>

        <!-- Email -->
        <div class="row">
            <div class="col col-3">
                <p class="fieldLabelContainer">
                    <label class="fieldLabel">Email:</label>
                </p>
            </div>
            <div class="col col-9">
                <span>
                    <a href="mailto:john.doe@example.com">john.doe@example.com</a>
                </span>
            </div>
        </div>
    </div>
</div>

<?php
    include("./templates/footer.php");
?>
