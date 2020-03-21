<?php $v->layout('_theme.php');?>

<div class="container text-center">
<br />
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <div class="alert alert-warning alert-dismissible fade show alert-session" role="alert">
                <?= $message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    </div>

</div>



