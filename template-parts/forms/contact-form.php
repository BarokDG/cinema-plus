<!-- <form action="" id='cp_contact_form' data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <label for="fname">First name:</label><br>
    <input type="text" id="name" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="email" name="lname" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>

<style>
input {
    background-color: red;
}
</style> -->
<div class="max-w-screen-md mx-auto p-5">
    <div class="text-center mb-16">
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
            Get In <span class="text-primary">Touch</span>
        </h3>
    </div>

    <form class="w-full" id='cp_contact_form' data-url="<?php echo admin_url('admin-ajax.php'); ?>">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 "
                    for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Jane" />
                <small id='grid-first-name-error' class='text-red-600 hidden'>First Name is required</small>

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" placeholder="Doe" />
                <small id="grid-last-name-error" class='ml-2 text-red-600 hidden'>Last Name is required</small>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Email Address
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-email" type="email" placeholder="janedoe@gmail.com" />
            </div>
            <small id="grid-email-error" class='ml-3 text-red-600 hidden'>Email is required</small>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Your Message
                </label>
                <textarea rows="10" id='grid-message'
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  mb-3 focus:outline-none focus:bg-white focus:border-gray-500">
            </textarea>
                <small id="grid-message-error" class='ml-2 text-red-600 hidden'>Message is required</small>
            </div>
            <div class="flex justify-between w-full px-3 mt-8">
                <button
                    class="shadow  bg-primary hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                    type="submit" id='submit-button'>
                    Send Message
                </button>

                <!-- Submitting Button -->
                <button type="button" id='submitting-button'
                    class="hide items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-primary hover:bg-indigo-400 active:bg-rose-700 transition ease-in-out duration-150 cursor-not-allowed"
                    disabled="">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    Processing
                </button>


            </div>
            <!-- Message -->
            <div class="bg-green-100 border-l-4 hide border-green-500 text-green-700 p-4 mt-5 w-full" role="alert"
                id='success-alert-message'>
                <p class="font-bold">Form Submitted</p>
                <p>We will get back to you as soon as possible.</p>
            </div>

            <!-- Message -->
            <div class="bg-red-100 border-l-4 hide border-red-500 text-red-700 p-4 mt-5 w-full" role="alert"
                id='error-alert-message'>
                <p class="font-bold">Form Not Submitted</p>
                <p>Something went wrong. Try again!</p>
            </div>
        </div>
    </form>
</div>

<style>
/* #grid-first-name-error {
    display: none;
} */

.has-error-text {
    display: block !important;
    color: red !important;
}

.has-error-border {
    border: 1px solid red !important;
}

.hide {
    display: none;
}

.show {
    display: block;
}
</style>