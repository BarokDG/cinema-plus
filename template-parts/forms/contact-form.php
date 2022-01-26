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
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Jane" />

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" placeholder="Doe" />
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
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Your Message
                </label>
                <textarea rows="10" id='grid-message'
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  mb-3 focus:outline-none focus:bg-white focus:border-gray-500">
            </textarea>
            </div>
            <div class="flex justify-between w-full px-3 mt-8">
                <button
                    class="shadow bg-primary hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                    type="submit">
                    Send Message
                </button>
            </div>
        </div>
    </form>
</div>