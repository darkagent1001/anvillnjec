<?php 

    require_once __DIR__ . '/templates/header.php';

    $stmt = $mysqli -> query("SELECT * FROM `users`;");
    $users = $stmt -> fetch_all(MYSQLI_ASSOC);

    $mysqli -> close();

?>

    <!-- Top light effect -->
    <div class="absolute -z-10 top-0 left-0 w-full h-full overflow-hidden">
        <div class="relative">
            <div class="absolute scale-50 md:scale-[unset] origin-right w-[274.95px] h-[734.61px] rotate-[30deg] *:inline-block -top-[250.97px] right-[78.02px] -z-10">
                <div class="relative *:absolute left-2/4 -translate-x-2/4 blur-[99.30000305175781px]">
                    <span class="w-14 h-[734.61px] bg-white-50 mix-blend-plus-lighter z-[1]"></span>
                    <span class="w-44 h-[629.85px] bg-primary-500 opacity-60 z-[2]"></span>
                    <span class="w-72 h-[629.85px] bg-primary-500 opacity-30 z-[3]"></span>
                </div>
            </div>  
        </div>
    </div>
    <!-- Top light effect -->

    <!-- Hero section -->
    <section class="container-full overflow-x-hiddenr h-[750px] relative grid place-items-center px-5 md:px-20 z-10">         
        <div class="max-w-[750px] text-center">
            <h1 class="text-4xl md:text-[44px] font-semibold leading-tight md:leading-[53px]">Test your skills on databases with SQL injection vulnerability</h1>
            <p class="text-lg text-dimmed mt-4 md:mt-6">Just a graduating project that i show it to my university and make them review it, and it work with php as Back-End language.</p>
            <div class="grid sm:flex *:w-full sm:*:w-auto items-center justify-center gap-4 sm:gap-6 mt-10">
                <!-- <a href="#" class="button bg-primary-500 shadow-[0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#6366F1,0px_8px_6px_-2px_rgba(99,102,241,0.20),0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] text-white-50 hover:bg-primary-400 px-3.5">
                    Start with us
                    <svg class="size-5" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                    </svg>                      
                </a> -->
                <a href="#examples" class="button bg-midnight-700 text-white-50 hover:bg-midnight-600 px-3.5 shadow-[0px_10px_5px_0px_rgba(97,97,111,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#282836,_0px_8px_6px_-2px_rgba(40,40,54,0.20),0px_10px_5px_0px_rgba(97,97,111,0.10)_inset]">See examples</a>
            </div>
        </div>
    </section>
    <!-- Hero section -->

    <!-- Features section -->
    <section class="container">
        <!-- Section title -->
         <div class="section-title-parent">
            <p class="section-title">Features section</p>
            <h1 class="section-description">You have to see our features to know why they choose us</h1>
         </div>
        <!-- Section title -->
        <!-- Grid layout -->
         <div class="grid grid-cols-1 md:grid-cols-2 gap-9 *:flex *:gap-4 *:p-5 mt-16">
            <div>
                <svg class="flex-none size-8 text-primary-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.75 6.75V8.25C4.75 9.35457 5.64543 10.25 6.75 10.25H8.25C9.35457 10.25 10.25 9.35457 10.25 8.25V6.75C10.25 5.64543 9.35457 4.75 8.25 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14.75 7H19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M17 4.75L17 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4.75 15.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H8.25C9.35457 19.25 10.25 18.3546 10.25 17.25V15.75C10.25 14.6454 9.35457 13.75 8.25 13.75H6.75C5.64543 13.75 4.75 14.6454 4.75 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M13.75 15.75V17.25C13.75 18.3546 14.6454 19.25 15.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25V15.75C19.25 14.6454 18.3546 13.75 17.25 13.75H15.75C14.6454 13.75 13.75 14.6454 13.75 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                                                      
                <div>
                    <h2 class="text-xl font-semibold">Multiple examples</h2>
                    <p class="text-dimmed mt-2.5">We made more than one example and every one of them focus on its specific case.</p>
                </div>
            </div>
            <!-- <div>
                <svg class="flex-none size-8 text-primary-500" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                </svg>                                                                      
                <div>
                    <h2 class="text-xl font-semibold">Documentation with examples</h2>
                    <p class="text-dimmed mt-2.5">We wrote many documentations to how SQL injection effects on website security and how to close it.</p>
                </div>
            </div> -->
            <div>
                <svg class="flex-none size-8 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 18.894V12m0 0L12 8.75 14.25 12m-4.5 0S10 14.25 12 14.25 14.25 12 14.25 12m0 0v6.894m5-6.894a7.25 7.25 0 1 1-14.5 0 7.25 7.25 0 0 1 14.5 0Z"></path>
                </svg>                                                     
                <div>
                    <h2 class="text-xl font-semibold">Beautiful UX / UI</h2>
                    <p class="text-dimmed mt-2.5">We took care about website user interface and focus on how the user have best experience in this website.</p>
                </div>
            </div>
            <div>
                <svg class="flex-none size-8 text-primary-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.25 9.75001H11.5C11.5 10.1642 11.8358 10.5 12.25 10.5V9.75001ZM18 9.75001L18 9.00001H18V9.75001ZM12.25 6.897L11.5 6.897V6.897H12.25ZM9.77107 5.59894L9.02168 5.56871L9.02168 5.56871L9.77107 5.59894ZM7.25 9.75001L7.25 9.00001C7.05109 9.00001 6.86032 9.07903 6.71967 9.21968C6.57902 9.36033 6.5 9.5511 6.5 9.75001L7.25 9.75001ZM18 12.25L18 11.5H18V12.25ZM16.75 11.5C16.3358 11.5 16 11.8358 16 12.25C16 12.6642 16.3358 13 16.75 13V11.5ZM17.2658 17.5267L16.523 17.4234L17.2658 17.5267ZM15.0809 19.2407L15.0044 19.9868L15.0044 19.9868L15.0809 19.2407ZM8.14797 18.5296L8.22449 17.7835L8.22449 17.7835L8.14797 18.5296ZM7.25 17.5348L8 17.5348L7.25 17.5348ZM10.9795 4.84133L10.6441 5.51215L10.6441 5.51215L10.9795 4.84133ZM12.25 10.5H18V9.00001H12.25V10.5ZM13 9.75001V6.897H11.5V9.75001H13ZM9.02168 5.56871C8.98986 6.35737 8.87029 7.28162 8.55917 7.98426C8.25916 8.66183 7.85682 9.00001 7.25 9.00001L7.25 10.5C8.66762 10.5 9.49282 9.58057 9.93074 8.59156C10.3575 7.62762 10.4863 6.47634 10.5205 5.62917L9.02168 5.56871ZM18 11.5H16.75V13H18V11.5ZM17.2572 12.1467L16.523 17.4234L18.0087 17.6301L18.7428 12.3534L17.2572 12.1467ZM15.1574 18.4946L8.22449 17.7835L8.07145 19.2757L15.0044 19.9868L15.1574 18.4946ZM8 17.5348L8 9.75001L6.5 9.75001L6.5 17.5348L8 17.5348ZM8.22449 17.7835C8.09697 17.7704 8 17.663 8 17.5348L6.5 17.5348C6.5 18.4322 7.17877 19.1841 8.07145 19.2757L8.22449 17.7835ZM18.5 11C18.5 11.2762 18.2761 11.5 18 11.5L18 13C19.1046 13 20 12.1046 20 11L18.5 11ZM16.523 17.4234C16.4303 18.0898 15.8267 18.5632 15.1574 18.4946L15.0044 19.9868C16.4769 20.1378 17.8047 19.0962 18.0087 17.6301L16.523 17.4234ZM11.3149 4.17051C10.2352 3.63063 9.06523 4.48919 9.02168 5.56871L10.5205 5.62917C10.5217 5.59822 10.5406 5.5562 10.5864 5.52693C10.6071 5.51378 10.6234 5.51013 10.6311 5.50947C10.6361 5.50905 10.6385 5.50932 10.6441 5.51215L11.3149 4.17051ZM13 6.897C13 5.74239 12.3477 4.68687 11.3149 4.17051L10.6441 5.51215C11.1687 5.77443 11.5 6.31055 11.5 6.897L13 6.897ZM18 10.5C18.2761 10.5 18.5 10.7239 18.5 11L20 11C20 9.89544 19.1046 9.00001 18 9.00001L18 10.5Z" fill="currentColor"></path>
                    <path d="M5.75 9.5H6.25V8H5.75V9.5ZM6.5 9.75V18.25H8V9.75H6.5ZM6.25 18.5H5.75V20H6.25V18.5ZM5.5 18.25V9.75H4V18.25H5.5ZM5.75 18.5C5.61193 18.5 5.5 18.3881 5.5 18.25H4C4 19.2165 4.7835 20 5.75 20V18.5ZM6.5 18.25C6.5 18.3881 6.38807 18.5 6.25 18.5V20C7.2165 20 8 19.2165 8 18.25H6.5ZM6.25 9.5C6.38807 9.5 6.5 9.61193 6.5 9.75H8C8 8.7835 7.2165 8 6.25 8V9.5ZM5.75 8C4.7835 8 4 8.7835 4 9.75H5.5C5.5 9.61193 5.61193 9.5 5.75 9.5V8Z" fill="currentColor"></path>
                </svg>                                                                   
                <div>
                    <h2 class="text-xl font-semibold">Best practices</h2>
                    <p class="text-dimmed mt-2.5">We will show you how to use prepared statement and when you can use it in the right place.</p>
                </div>
            </div>
         </div>
        <!-- Grid layout -->
    </section>
    <!-- Features section -->

    <!-- Examples section -->
    <section id="examples" class="container-full z-10 overflow-hidden relative md:px-14 dark:*:text-white-50 dark bg-midnight-950 dark:bg-[#0F0F1D] py-32 mt-20 rounded-lg">
        <div class="absolute top-0 right-0 rotate-45 -z-10">
            <span class="inline-block h-96 w-40 blur-2xl opacity-45 bg-gradient-to-r from-primary-500 to-primary-200 rounded-full"></span>
        </div>
        <!-- Section title -->
        <div class="section-title-parent">
            <p class="section-title">Examples</p>
            <h1 class="section-description">These are examples to practice on them:</h1>
         </div>
        <!-- Section title -->
        <!-- Grid layout -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 mt-24">
            <a href="login.php" class="card bg-transparent dark:bg-transparent dark:hover:bg-midnight-800 hover:bg-midnight-900">
                <img src="<?= $config['app_assets'] . 'images/login.png' ?>" alt="Login example" class="object-cover rounded h-[250px] w-full">
                <div class="card-content">
                    <h2 class="card-title text-2xl">Login example</h2>
                    <p class="text-sm text-dimmed mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, fugiat.</p>
                </div>
            </a>
            <a href="comments.php" class="card bg-transparent dark:bg-transparent dark:hover:bg-midnight-800 hover:bg-midnight-900">
                <img src="<?= $config['app_assets'] . 'images/comments.png' ?>" alt="Login example" class="object-cover rounded h-[250px] w-full">
                <div class="card-content">
                    <h2 class="card-title text-2xl">Comments example</h2>
                    <p class="text-sm text-dimmed mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, fugiat.</p>
                </div>
            </a>
            <a href="user-search.php" class="card bg-transparent dark:bg-transparent dark:hover:bg-midnight-800 hover:bg-midnight-900">
                <img src="<?= $config['app_assets'] . 'images/search_user.png' ?>" alt="Login example" class="object-cover rounded h-[250px] w-full">
                <div class="card-content">
                    <h2 class="card-title text-2xl">Search user example</h2>
                    <p class="text-sm text-dimmed mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, fugiat.</p>
                </div>
            </a>
        </div>
        <!-- Grid layout -->
    </section>
    <!-- Examples section -->

    <!-- Users section -->
     <section class="container mt-20">
        <!-- Section title -->
        <div class="section-title-parent">
            <p class="section-title">Examples</p>
            <h1 class="section-description">These are examples to practice on them:</h1>
         </div>
        <!-- Section title -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <?php foreach($users as $user){ ?>
                <div class="card">
                    <div class="card-content text-center">
                        <h1 class="card-title text-2xl"><?= $user['username'] ?></h1>
                        <p class="text-dimmed mt-3"><?= $user['bio'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
     </section>
    <!-- Users section -->

<?php 

    require_once __DIR__ . '/templates/footer.php';

?>