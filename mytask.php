<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynasoft Software</title>
</head>

<body>
    <div class="flex justify-between mt-8 px-10">
        <div class="font-bold text-3xl px-4mt-4">
            <h1>
                My Tasks
            </h1>
        </div>
        <div>
            <select class="border border-gray-300  rounded px-4 py-2">
                <option>All Tasks</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-20">

        <div class=" w-[480px] h-[400px] border border-gray-900  bg-white-300 rounded-[5%] mt-8 ml-6">
            <div class="flex justify-between">
                <div>
                    <h2 class="text-xl py-10 px-6 font-bold"> React Component Development</h2>
                </div>
                <div class="bg-yellow-200 text-yellow-800 rounded-[35%] h-[5vh] mt-9 w-[90px] mr-8 px-3 py-1">
                    pending
                </div>
            </div>

            <p class="text-xl px-3">
                Create a reusable React components following best practises.
                Your components should be well-
            </p>
            <div class="flex justify-center">
                <div>
                    <p class="text-red-700 text-xl px-5 mt-3"><svg class="inline-block w-[20px] h-[50px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Overdue by 671 days
                    </p>
                </div>
                <div class="bg-red-300 text-red-900 rounded-[35%] w-[70px] h-[25px] px-5 mr-20 mt-6">
                    high
                </div>

            </div>
            <div class="flex justify-between">
                <div class="ml-10 mt-5 border border-blue-800 rounded-[10%] w-[170px] h-[7vh] text-xl px-6 py-2 text-blue-900">
                    <button>View Details</button>
                </div>
                <div class="text-white bg-blue-800 rounded-[10%] w-[170px] h-[7vh] text-xl px-11 py-2 text-white-900 mr-20 mt-5 ">
                    <button>Submit</button>
                </div>

            </div>
        </div>





        <div class=" w-[480px] h-[400px] border border-gray-900  bg-white-300 rounded-[5%] mt-8 ml-6">
            <div class="flex justify-between">
                <div>
                    <h2 class="text-2xl py-10 px-6 font-bold">Data Design Exercise</h2>
                </div>
                <div class=" bg-blue-300 text-blue-800 rounded-[35%] h-[5vh] mt-9 w-[110px] mr-8 px-3 py-1">
                    in progress
                </div>
            </div>

            <p class="text-xl px-3">
                Design and normalize a database for an e-commerce system.Include
                Entity Relationship Diagrams.
            </p>
            <div class="flex justify-center">
                <div>
                    <p class="text-red-700 text-xl px-5 mt-3"><svg class="inline-block w-[20px] h-[50px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Overdue by 666 days
                    </p>
                </div>
                <div class="bg-yellow-200 text-yellow-900 rounded-[35%] w-[90px] h-[25px] px-5 mr-20 mt-6">
                    medium
                </div>

            </div>
            <div class="flex justify-between">
                <div class="ml-10 mt-5 border border-blue-800 rounded-[10%] w-[170px] h-[7vh] text-xl px-6 py-2 text-blue-900">
                    <button>View Details</button>
                </div>
                <div class="text-white bg-blue-800 rounded-[10%] w-[170px] h-[7vh] text-xl px-12 py-2 text-white-900 mr-20 mt-5">
                    <button>Submit</button>
                </div>

            </div>
        </div>



        <div class=" w-[480px] h-[450px] border border-gray-900  bg-white-300 rounded-[5%] mt-8 ml-6">
            <div class="flex justify-between">
                <div>
                    <h2 class="text-2xl py-10 px-6 font-bold">HTML & CSS Basics </h2>
                </div>
                <div class=" bg-blue-300 text-blue-800 rounded-[35%] h-[5vh] mt-9 w-[90px] mr-8 px-5 py-1">
                    graded
                </div>
            </div>

            <p class="text-xl px-3 ">
                Complete the exercises on HTML structure and CSS
                styling basics
            </p>
            <div class="flex justify-center ">
                <div>
                    <p class="text-red-700 text-xl px-5 mb-7 mt-4"><svg class="inline-block w-[20px] h-[50px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Overdue by 686 days
                    </p>
                </div>
                <div class="bg-blue-300 text-blue-900 rounded-[35%] w-[70px] h-[25px] px-5 ml-20 mt-6 mb-15">
                    low
                </div>
            </div>
            <div class="border border-gray-200 bg-gray-200 ml-3 mr-4">
                <div>
                    <div class="flex justify-between text-xl font-bold mb-2 ml-2 mt-1">
                        Grade:
                        <div class="text-2xl text-blue-500 mr-2">
                            92/100
                        </div>

                    </div>
                    <p class="ml-2">Feedback:Exellent work! Your HTML Structure is clean and semantic.
                        CSS could use more comments
                    </p>

                </div>


            </div>
            <div class="flex justify-start">
                <div class=" font-bold ml-10 mt-5 border border-blue-900 rounded-[10%] w-[170px] h-[7vh] text-xl px-6 py-2 text-blue-900">
                    <button>View Details</button>

                </div>
            </div>
        </div>
</body>

</html>