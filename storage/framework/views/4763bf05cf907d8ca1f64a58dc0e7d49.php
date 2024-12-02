<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.adminName', 'Dashboard | JobLink')); ?></title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAYAAABxLuKEAAAACXBIWXMAAAsTAAALEwEAmpwYAAAELUlEQVR4nO2bX2iWVRzHP20MbG5pU6OWf2qRf5K1ak1DwguJeRNdOCRhkEwKVIiUoosu7CIvorA0/6RiyhQxnYh040gmpnnpRC1jKV5s1ho0cwi5tPXGgd8LDw97nvM8e88523mf9wO/i728v3POvu85z/n9zu88UKJEiRIlMslUoA6YRoYpA14BPgWuAn8DuYDdA34BtgBLgXIywGtAd0gInfUAK4GHKEKmA50pBQnbeeBJioi58qvnDNjvwGKKgPnAX4ZEyZt6JjXhMY8CvxoWJThzZuIpxy2JkrczeMhi4D/Lwih7Hc8450CUnMRB3mzjzzgSJW/ePIjfdyzMZjzhe8fCXMITehwLc8+XfOquY2FyPmTlFeMgSs6XYO/2OAijouwJz8+ORbnrSyxz0rEwP+IJbzsW5kM84THgX4fCzMMjOhyJ4l2G/Sxw37IoKnt/GQ/50rIw7XhKhUx1W/nRZDxmBnDdsCi/AbMpAmqALoMzpShECS6rz4B/xijIA2AX8DBFytPA4RQ7loqHTgALyFARvxU4AlwD7ogQQ3Keo+KgNqlgljAQcf8EDMhMG5C/1eeZpiViOa4g4+yOEOZrMswUYDBCmD+BR8goBzS72zfjeUvqCaABaDRgtQn7nRSzhMK2S77vhGnA50C/wZBf7SjPB/qoAi7LFr4OaJaa9WZJD9K0fQv4RPybpb0OaV/1Y4SXxjCwJLY/1M92C32MZl+ZEGUm8IelMxZV+87zHDDiSJgRExF2u6XB/RDqZ68jUfK2pxBRqoFhSwNTB+l5yg0/u5JYfyHl3qUWBxZcRsjRZVR8ErUUL0oJpzvl5aXBQo9KWyyJMhDzQzxI4K92lvqQr9rdriTwVdn+qxTISkvCqOsjUeieNX0xhf3psk3H+atYqGDesCSMOoKIYonG913NmN/T+Ksr/AWzxJIwO2L6rNL4BgPC0WjQ+FeaEKYq4ZpPa1tj+qzU+C7UjLle42/syPSsBWH2xfTXpPF9RzPetRp/lZ8ZodWCMKdi+tum8b0h8dVoqCOHmxp/VRw0QrlsjyaFUYOPysmGE14HmRPyfQq4kPAe3wumxFlkoT79eKiPeQm22qANy7avtvfTKcs1t0zenFhvWBi1RIOzstfCko2zXpM3QD8yOLDvQm0fcizMQQzTZiixVEtzVqDdRsfCvIgFGuSlh0IH94WjI46wqXNjqzXqjSkz4rANh7LsGsmFVOz0MbAKWC1lkaGUbauK507gLWlnk7TbJ/1Ypxr4IEH8EGWdoSuqUQ9Edb/3WMI2v5XS8GiUj0f1YJn8umm2XWUbUvShe5vuqHxvQr88ukamc5dM4ahYSOVjy1NcUBqKWT4T/l0DYpZEnTxb6uQfTVsD2p+w6pA5VkUI8yYZp1aOR/PllhEp8SStahY9ZbI0vXjxogRFxP+YcnCU67WphAAAAABJRU5ErkJggg==" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!--====== Material Icons ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/iconfont/material-icons.css')); ?>">

    <!-- dataTables.bootstrap4.min css-->
    <link href="<?php echo e(asset('backend/assets/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" media="screen">

    <!-- Chart.min css-->
    <link href="<?php echo e(asset('backend/assets/css/Chart.min.css')); ?>" rel="stylesheet" media="screen">

    <!-- animate css-->
    <link href="<?php echo e(asset('backend/assets/css/animate.css')); ?>" rel="stylesheet" media="screen">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/sidebar.css')); ?>">
	   <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/responsive.css')); ?>">

     <!--====== CkEditors js ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/js/ckeditor.js')); ?>">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

</head>
<body>


<!-- Prealoder -->
<div class="spinner_body">
    <div class="spinner"></div>  
 </div>
 
 <!-- Prealoder --><?php /**PATH F:\VSCODE\JobLink\resources\views////admin/partials/head.blade.php ENDPATH**/ ?>