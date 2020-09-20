<div class="container-fluid h-100">
    <div class="row h-100 justify-content-center">
        <div class="col-7 d-flex justify-content-center align-items-center">
            <div class="w-100 border text-center mx-auto justify-content-center shadow form-box">

            <?php if(session()->get('firstName') != ""): ?>
                
                <div class="title my-4">
                    <div class="my-4">Thank you <span class="user"><?= session()->get('firstName') ?></span> for submitting our form!</div>
                    <hr>
                </div>
                <div class="mt-5 mx-5 text-left px-3">
                    <div class="d-inline end-text">
                        The confirmation message has been sent to the given e-mail address with futher information.
                        Please check spam folder in your e-mail box if you cannot find the message.
                    </div>
                    <a href="/"><div class="mt-4 mb-2 text-center">Back To Technical Service Form</div></a>
                </div>

            <?php else: ?>
                
                <div class="title my-4">
                    <div class="my-4">You attempted to view this page without filling the form.</div>
                    <hr>
                </div>
                <div class="mt-5 mx-5 text-left px-3">
                    <div class="d-inline end-text">
                        Please fill our form so we can proceed your request and resolve your problem.
                    </div>
                    <a href="/"><div class="mt-4 mb-2 text-center">Back To Technical Service Form</div></a>
                </div>

            <?php endif; ?>

            </div>
        </div>
    </div>
</div>