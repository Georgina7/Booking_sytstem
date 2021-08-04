<!<!D<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <title>Select Seat</title>
</head>
<body>
<div x-show="showModal"
     class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40"
     x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

    <div x-show="showModal"
         class="w-auto h-full p-6 bg-white shadow-2xl rounded-xl sm:w-10/12"
         @click.away="showModal = false"
         x-transition:enter="transition ease duration-100 transform"
         x-transition:enter-start="opacity-0 scale-90 translate-y-1"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         x-transition:leave="transition ease duration-100 transform"
         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 scale-90 translate-y-1">

        <span class="block mb-3 text-2xl font-bold">Select Seat</span>


        <div class="w-full justify-items-center" style="width: 50em;">
            <div class="block p-2 pb-4 border-4 border-gray-400 rounded-md" style="width: ">
                <div  style="align-content: baseline;">
                    <div style="display:inline-block;width:5em;height:5em;margin-right: 10px;  margin-left: 43em;" class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">
                        <label class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 ">Driver</label>
                        <div class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                        </div>
                    </div>
                    <form action="/payment" method="post">

                    @foreach($seats as $seat)
                    <div style="display:inline-block;width:5em; margin-right: 12em;" class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">
                        <input type="checkbox" name="CheckBox[]" id="seatNumber[]" class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 checked:red background-color:red"
                               value="{{$seat->id+1}}"><label class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 ">
                        {{$seat->id+1}}</label>
                        <div class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                        </div>
                    </div>
                    @endforeach

                        <?php
                        //session_start();

//                        if(isset($seat->seatID)){
//                            $_SESSION["seatNumber"] = ($seat->seat_ID);
//                            }

//                        $values = array();
////                        $quantities = array();
//
//                        foreach($_POST['CheckBox'] as $key => $value){
//                            $_SESSION["seatNumber"] = array_push($values, $value);
//                        }

//                        $quantities = $_POST['Quantities'];
//                        $i=0;
//
//                        foreach ($quantities as $q){
//                            if($q){
//                                $values[$i] = $values[$i].','.$q;
//                                $i++;
//                            }

//                        foreach ($_POST['CheckBox'] as $key => $value) {
//
//                            if (empty($value) || $value == 0) {
//                                // wasn't ordered!  Skip to the next.
//                                continue;
//                            }
//
//                            $id = $_POST['seatNumber'][$key];
//                            echo $id;
                            // Now you know they want $value of pizza id $id.  You can look
                            // up the price, name, etc, from your DB, same as you did to
                            // display them on the form in the first place.
                        //}

                        ?>


                    <div class="w-8"></div>
                    <i class="fas fa-steering-wheel"></i>
                    </div>
            </div>
        </div>
        <div class="w-full justify-items-center ">
            <div class="block p-2 pb-4">
                <div class="flex flex-row p-2 ">
                    <div class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                        <div class="w-8 h-6 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 rounded-t-0" value="">

                        </div>
                        <div class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                        </div>
                    </div>
                    <label><b>Occupied</b></label>
                    <div class="w-8"></div>

                    <div class="w-8"></div>
                    <div class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

{{--                        <div class="w-8 h-6 font-bold text-gray-500 bg-red-600 border-0 rounded-sm rounded-t-0" value=""></div>--}}
                        <div class="">
                            <input class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm" type="checkbox" checked="checked" disabled required></div>
                    </div><label><b>Selected</b></label>
                    <div class="w-8"></div>
                    <div class="w-8"></div>
                    <div
                        class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                        <div
                            class="w-8 h-6 font-bold text-gray-500 bg-gray-400 border-0 rounded-sm rounded-t-0"
                            value="Available"></div>
                        <div
                            class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                        </div>
                    </div><label><b>Available</b></label>
                </div>

                </div>
            </div>


        <div class="flex flex-row space-x-5 text-right sm:justify-center">
            <form action="/booking" method="get">
                <button @click="showModal = !showModal"
                    class="w-auto h-10 px-4 py-2 text-sm font-bold text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-0 hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel
                </button></form>
            <form action="/payment" method="get">
                {{--                                <button type="submit" class="w-20 h-auto text-xs font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-xl focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Continue</button>--}}

                <button type="submit" class="px-4 py-2 text-sm font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-l focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500" required>Select
                    Seat</button>
            </form>
        </div></form>

</body>
</html>
