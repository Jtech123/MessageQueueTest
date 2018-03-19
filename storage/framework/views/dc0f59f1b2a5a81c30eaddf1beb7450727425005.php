<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Messages</div>
                <div class="card-body" id="messageQueue" style="height: 250px; overflow-y: scroll">

                    <div id="loading"><p>Loading...</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $.ajax({
        url: "http://localhost:8000/messages"
    }).done(function(result) {
        for (var i = 0; i < result.length; i++) {
            var messageClass = "";
            if (result[i].sub_id == 1) {
                messageClass = "danger";
            }
            else if (result[i].sub_id == 2) {
                messageClass = "info";
            }
            var html = "<div data-message='" + result[i].id + "' class='alert alert-" + messageClass + " alert-dismissible fade show' role='alert'>";

            html += result[i].content;

            html += "<button onclick='dismissMessage(" + result[i].id + ")' type='button' class='close' data-dismiss='alert' aria-label='Close'>\n" +
                "                <span aria-hidden='true'>&times;</span>\n" +
                "            </button>            " +
                "</div>";

            $('#messageQueue').append(html);

            $('#messageQueue').find('#loading').remove();
        }
    });

    function dismissMessage(id) {
        $.ajax({
            url: "http://localhost:8000/dismiss/" + id
        }).done(function(id) {
            $('#messageQueue').find("[data-message='" + id + "']")
        })
    }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>