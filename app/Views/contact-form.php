<div class="container-fluid h-100">
    <div class="row h-100 justify-content-center">
        <div class="col-5 d-flex justify-content-center align-items-center">
            <div class="w-100 text-center border shadow-lg form-box p-0">
                <div class="title-text mt-3 mb-0">Technical Service Form</div>
                
                <hr class="mb-5">

                <div class="end-text mx-5 mt-3 mb-5">
                    Please fill in the form below to get in touch with one of our engineers
                    in order to solve any problems that may occur with your Internet
                </div>   
                <form class="w-100" action="/" method="POST" name="form" id="contactForm">

                    <div class="row text-left">
                        <div class="col-lg-12">
                            <label for="title"><span class="mandatory">*</span>Title:</label>
                            <div class="mb-1">
                                <input type="radio" name="title" class="ml-1 mr-2 form-element" value="Mr.">
                                <label for="title">Mr.</label>
                                <input type="radio" name="title" class="ml-5 mr-2 form-element" value="Ms.">
                                <label for="title">Ms.</label>
                            </div>
                            <div>
                                
                                <?php if(isset($validation) && $validation->hasError('title')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('title') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-lg-6">
                            <label for="firstName"><span class="mandatory">*</span>First Name:</label>
                            <input 
                                id="firstName"
                                name="firstName"
                                class="w-100 d-flex form-element"
                                type="text" 
                                placeholder="e.g. John" 
                                autofocus
                            />

                            <?php if(isset($validation) && $validation->hasError('firstName')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('firstName') ?>
                                        </div>
                                    </div>
                            <?php endif; ?>

                        </div>
                        <div class="col-lg-6">
                            <label for="lastName"><span class="mandatory">*</span>Last Name:</label>
                            <input 
                                id="lastName"
                                name="lastName"
                                class="w-100 d-flex form-element"
                                type="text" 
                                placeholder="e.g. Smith" 
                            />

                            <?php if(isset($validation) && $validation->hasError('lastName')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('lastName') ?>
                                        </div>
                                    </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-lg-12">
                            <div>
                                <label for="email"><span class="mandatory">*</span>E-mail:</label>
                                <input 
                                    id="email"
                                    name="email"
                                    class="w-100 form-element"
                                    type="email" 
                                    placeholder="e.g. johnsmith@example.com" 
                                />

                                <?php if(isset($validation) && $validation->hasError('email')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <div>
                                <label for="phone"><span class="mandatory">*</span>Phone Number: </label>
                                <input 
                                    id="phone"
                                    name="phone"
                                    class="w-100 form-element"
                                    type="tel" 
                                    placeholder="e.g. 07500 222 333 or 07500-222-333" 
                                />

                                <?php if(isset($validation) && $validation->hasError('phone')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('phone') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <div>
                                <label for="category"><span class="mandatory">*</span>Problem:</label>
                                <div>
                                    <select id="category" class="form-element w-100" name="category" id="">
                                        <option value="" hidden>Please choose an option..</option>
                                        <option value="Connection issues - lags, spikes, disconnecting">Connection issues - lags, spikes, disconnecting</option>
                                        <option value="My Router can't establish connection - orange light">My Router can't establish connection - orange light</option>
                                        <option value="My computer can't detect the Router">My computer can't detect the Router</option>
                                        <option value="Router doesn't switch on">My Router doesn't switch on</option>
                                        <option value="I have lost the password to my Router">I have lost the password to my Router</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <?php if(isset($validation) && $validation->hasError('category')): ?>
                                    <div class="col-12 px-0">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->getError('category') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
    
                            <div>
                                <label for="details">Details:</label>
                                <textarea 
                                    id="details"
                                    form="contactForm" 
                                    class="w-100" 
                                    cols="10" rows="3" 
                                    name="details" 
                                    placeholder="Please specify a problem here.."
                                ></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mt-4 w-100">
                        Submit Form
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>