<?php 
    session_start();
    include "config/db.php";
    include "config/fun.php";
    if(!isset($_SESSION["uname"])){
        header("location:index.php");
    }
    $connect=new connect();
    $fun=new fun($connect->dbconnect());
    $msg="";
    $uname=$_SESSION["uname"];

    $fetch=$fun->view_client_details($uname);
    if($fetch->num_rows>0){
        $row=$fetch->fetch_assoc();
        $id=$row["id"];
        $name=$row["name"]; 
        $email=$row["email"];
        $number=$row["mobile_number"];
        $dob=$row["dob"];
        $address=$row["address"];
        $event=$row["event"];
        $description=$row["description"];
    }
     $fetch1=$fun->event_details($id);
     if($fetch1->num_rows>0){
         $row1=$fetch1->fetch_assoc();
         $event_name=$row1["event"];
         $start_date=$row1["startdate"];
         $enddate=$row1["enddate"];
         $guest_expected=$row1["guest_expected"];
         $venue=$row1["venue"];
         $catering=$row1["catering"];
         $decoration=$row1["decoration"];
         $photography=$row1["photography"];
         $music=$row1["music"];
         $parlour=$row1["parlour"];
     }
     $fetch2=$fun->view_project($id);
     if($fetch2->num_rows>0){
         $row2=$fetch2->fetch_assoc();
         $manager=$row2["manager"];
         $manaher_id=$row2["manager_id"];
         $totalCost = $row2["total_cost"];
     }
     $fetch3=$fun->view_client_payment($id); 
     
     $fetch4=$fun->manager_details($manaher_id);
     if($fetch4->num_rows>0){
         $row4=$fetch4->fetch_assoc();
         $manager_name=$row4["name"];
         $manager_email=$row4["email"];
         $manager_number=$row4["number"];
     }
     $fetch5=$fun->owner_details();
     if($fetch5->num_rows>0){
         $row5=$fetch5->fetch_assoc();
         $owner_name=$row5["name"];
         $owner_email=$row5["email"];
         $owner_number=$row5["phone"];
     }
     $fetch6=$fun->view_notification($id);
?>

<!doctype html>
<html>
<title>Client login</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">


    <nav class="bg-white fixed top-0 left-0 w-full border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
           
                
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php echo $name ?>
                </span>
            
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="client_page.php"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#event_details"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Event-Details</a>
                    </li>
                    <li>
                        <a href="#payment"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Payment-Details</a>
                    </li>
                    <li>
                        <a href="#notify"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">notification</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="flex-auto md:inline-flex justify-between md:h-screen md:flex-row-reverse flex-col bg-black">

        <div class="md:ml-40 mt-5   flex justify-center items-center md:flex-row-reverse">
            <img src="assets/img/logo11.png" alt="" class="h-60 md:h-96 md:mr-28 mt-10 object-contain">
        </div>
        <div class="text-center md:w-1/2  md:ml-12">
            <p class="text-white md:mt-28 font-semibold text-4xl text-center animate-pulse">

            <h1 id="text" class="text-white md:mt-28 font-semibold text-4xl text-center">
                Welcome to Event Evolution
            </h1>

            </span>
            </h1>
            </p>
            <p class="text-white pt-5">
                "Elevate your event experience with bespoke planning and execution. From concept to celebration, we
                craft unforgettable moments tailored to your vision."</p>
        </div>
    </div>
    <div id="event_details">
        <div class="text-center items-center flex flex-wrap flex-col mt-10">
            <p class="text-indigo-400 text-2xl font-bold md:text-4xl">My
                Event Details</p>
            <div class="w-40 h-1 border-b-4 border-yellow-500 mt-4 rounded-lg mb-10 md:mr-6 "></div>
        </div>
        <div class="grid mt-10 place-content-center" >


            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="assets/img/party.jpg" alt="" />
                </a>
                <div class="p-5">
                    <!-- <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a> -->
                    <div class=" text-indigo-400" id="payment" >
                        <p> <span class="font-bold text-xl">Event :</span> <?php echo $event_name?></p>
                        <p><span class="font-bold text-xl">start date :</span> <?php echo $start_date?></p>
                        <p> <span class="font-bold text-xl">End date :</span> <?php echo $enddate?></p>
                        <p> <span class="font-bold text-xl">Guest expected :</span><?php echo        $guest_expected?>
                        </p>
                        <p><span class="font-bold text-xl"> Venue : </span> <?php echo $venue?></p>
                        <p> <span class="font-bold text-xl">Catering :</span><?php echo $catering?></p>
                        <p><span class="font-bold text-xl"> Decoration : </span> <?php echo $decoration?></p>
                        <p><span class="font-bold text-xl"> Photography : </span> <?php echo $photography?></p>
                        <p><span class="font-bold text-xl"> Music : </span> <?php echo $music?></p>
                        <p><span class="font-bold text-xl"> Parlour : </span> <?php echo $parlour?></p>
                       
                        <p><span class="font-bold text-xl">Total Cost : </span> <?php echo  $totalCost ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="md:mr-40 md:ml-40" >
        <div class="text-center items-center flex flex-wrap flex-col mt-10">
            <p class="text-indigo-400 text-2xl font-bold md:text-4xl"> Payment Details</p>
            <div class="w-40 h-1 border-b-4 border-yellow-500 mt-4 rounded-lg mb-10 md:mr-3 "></div>
        </div>
        <div class="overflow-x-auto text-white ">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="px-4 py-2">Sr_NO</th>
                        <th class="px-4 py-2">Client</th>
                        <th class="px-4 py-2">Event</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Amount Paid</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            if (mysqli_num_rows($fetch3) > 0) {
                $sr = 1;
                while ($res3 = mysqli_fetch_assoc($fetch3)) {
            ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo $sr; ?></td>
                        <td class="border px-4 py-2"><?php echo $res3['client_name']; ?></td>
                        <td class="border px-4 py-2"><?php echo $res3['event']; ?></td>
                        <td class="border px-4 py-2"><?php echo $res3['date']; ?></td>
                        <td class="border px-4 py-2"><?php echo $res3['amount']; ?></td>
                    </tr>
                    <?php
                    $sr++;
                }
            } ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php 
     if (mysqli_num_rows($fetch6) > 0) {
        $row6=$fetch6->fetch_assoc()
    ?>
    <div id="notify">
        <div class="text-center items-center flex flex-wrap flex-col mt-10">
            <p class="text-indigo-400 text-2xl font-bold md:text-4xl">Notification</p>
            <div class="w-40 h-1 border-b-4 border-yellow-500 mt-4 rounded-lg  md:mr-3 "></div>
        </div>
        <div>
            <p class="text-red-400 text-2xl font-bold m-5 md:text-center ">Select an image and Please contact manager</p>
        </div>

        <div class="flex justify-evenly flex-wrap" style="gap: 15px;">

            <div
                class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <img class="rounded-t-lg object-fill w-96 h-full" src="manager/assets/client_d_images/<?php echo $row6['image1']; ?>" alt="" />
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <img class="rounded-t-lg object-fill w-96 h-full" src="manager/assets/client_d_images/<?php echo $row6['image2']; ?>"  alt="" />

            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <img class="rounded-t-lg object-fill w-96  h-full" src="manager/assets/client_d_images/<?php echo $row6['image3']; ?>" alt="" />
            </div>
        </div>
    </div>
     <?php
     }
     ?>

    <div>
        <div id="contact">
            <div class="text-center items-center flex flex-wrap flex-col mt-20" id="contact">
                <p class="text-indigo-400 text-2xl font-bold md:text-4xl">Contact</p>
                <div class="w-52 h-1 border-b-4 border-yellow-500 mt-4 rounded-lg  md:mr-2 "></div>
            </div>
            <div class="md:flex  flex-auto">
                <div class="pl-6 md:pl-24 mt-16  mr-20">
                    <p class="text-indigo-400 text-2xl font-bold">OWNER</p>
                    <div class="flex items-center text-white md:mt-5 mt-3">
                        
                        <p class="text-white"><?php echo $owner_name ?></p>
                    </div>
                    <div class="flex items-center text-white md:mt-5 mt-3">
                        <img src="assets/img/gmail.png" alt="Email Icon" class="h-5 w-5 mr-2">
                        <p class="text-white"><?php echo $owner_email ?></p>
                    </div>
                    <div class="flex items-center text-white mt-4">
                        <img src="assets/img/telephone.png" alt="Email Icon" class="h-5 w-5 mr-2">
                        <p class="text-white"><?php echo $owner_number ?></p>
                    </div>
                </div>
                <div class="py-8 lg:py-16 px-4 mx-auto w-full  md:p-56">
                    <p class="text-indigo-400 text-2xl font-bold">MANAGER</p>
                    <div class="flex items-center text-white md:mt-5 mt-3 ">
                        
                        <p class="text-white"><?php echo $manager_name ?></p>
                    </div>
                    <div class="flex items-center text-white md:mt-5 mt-3 ">
                        <img src="assets/img/gmail.png" alt="Email Icon" class="h-5 w-5 mr-2">
                        <p class="text-white"><?php echo $manager_email ?></p>
                    </div>
                    <div class="flex items-center text-white mt-4">
                        <img src="assets/img/telephone.png" alt="Email Icon" class="h-5 w-5 mr-2">
                        <p class="text-white"><?php echo $manager_number ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>