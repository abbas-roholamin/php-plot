<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Generate QR Code</title>
    </head>

    <body>
        <section class="grid place-content-center min-h-screen  bg-gradient-to-r from-cyan-500 to-blue-500">
            <div class="block w-[500px] rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-700">
                <form action="action.php" method="POST">
                    <input name="text" id="text"
                        class="w-full border block mb-4 min-h-[auto] rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear "
                        autofocus placeholder="Type..." />

                    <button type="submit"
                        class="rounded bg-blue-500 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                        data-te-ripple-init data-te-ripple-color="light">
                        Submit
                    </button>
                </form>
            </div>
        </section>
        <script src="
https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.5.3/src/index.min.js
"></script>
    </body>

</html>