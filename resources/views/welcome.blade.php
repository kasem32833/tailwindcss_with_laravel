<x-guest-layout>
    <div class="bg-gray-500 h-screen">
        <div class="flex justify-center">
            <div class="bg-white w-1/3  my-20 border rounded-md">
                <div class="text-2xl text-center">Register</div>
                <hr>
                <div class="py-10 px-10">
                    <form action="">
                        <div class="flex flex-col space-y-3">
                            <div class="flex">
                                <div class="w-1/2 mr-4">
                                    <label for="Name" class="block font-semibold">First Name</label>
                                    <input type="text" class="border border-indigo-500 rounded-md shadow-md w-full">
                                </div>
                                <div class="w-1/2">
                                    <label for="Last Name" class="block font-semibold">Last Name</label>
                                    <input type="text" class="border border-indigo-500 rounded-md shadow-md w-full">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block font-semibold">Email Address</label>
                                <input type="email" class="border border-indigo-500 rounded-md shadow-md w-full">
                            </div>
                            <div>
                                <label for="password" class="block font-semibold">Password</label>
                                <input type="password" class="border border-indigo-500 rounded-md shadow-md w-full">
                            </div>
                            <div>
                                <label for="confirm_password" class="block font-semibold">Confirm Password</label>
                                <input type="password" class="border border-indigo-500 rounded-md shadow-md w-full">
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/2">
                                    <button type="button" value="submit" class="bg-indigo-500 px-6 py-2 rounded-md mt-4 text-white font-semibold
                                    ">Submit</button>
                                </div>
                                <div class="w-1/2">
                                   <a href="https://google.com">Already have an accoutn</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>