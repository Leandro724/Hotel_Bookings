<!-- Requiring the compare file -->
<?php require("Compare.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare and Book</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="hotel-comparison">
        <div class="hotel-column">
            <div class="hotel-header">
                <div class="hotel-image">
                 <img src="https://www.sa-venues.com/visit/thewestin/01.jpg" alt="Hotel image">
                </div>
                <div class="hotel-name">The Westin</div>
            </div>
            <div class="divider"></div>
            <div class="feature">
             <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm-5.92 19.995L22 22H10l-.08-.005L4 27.916V28h24v-.085zM28 4H4v21.084l12-11.998 12 12zM16 15.915L11.915 20h8.17zM22 7a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>
                Mountain View
            </div>
            <div class="feature inactive">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M15 14a2 2 0 00-2 2 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 1 1 0 012 0 .5.5 0 001 0 2 2 0 00-2-2zM10.5 18.5a.5.5 0 00-.5.5 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 .5.5 0 00-.5-.5zM13.5 18.5a.5.5 0 01.5.5 1 1 0 002 0 2 2 0 014 0 .5.5 0 01-1 0 1 1 0 00-2 0 2 2 0 01-4 0 .5.5 0 01.5-.5zM16.5 2A1.5 1.5 0 0015 3.5V7H8V3.5a.5.5 0 011 0v1a.5.5 0 001 0v-1a1.5 1.5 0 00-3 0v9a.5.5 0 001 0V11h7v1.5a.5.5 0 001 0v-9a.5.5 0 011 0v1a.5.5 0 001 0v-1A1.5 1.5 0 0016.5 2zM8 10V8h7v2z"></path></g></svg>
                Swiming Pool
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14z"></path><path d="M15.18 15.32a.49.49 0 01-.35-.15 4.1 4.1 0 00-5.66 0 .5.5 0 01-.71 0 .51.51 0 010-.71 5 5 0 017.08 0 .51.51 0 010 .71.51.51 0 01-.36.15zM19.42 11.08a.5.5 0 01-.35-.15 10 10 0 00-14.14 0 .5.5 0 01-.71-.71 11 11 0 0115.56 0 .51.51 0 010 .71.51.51 0 01-.36.15z"></path><path d="M20.84 9.66a.47.47 0 01-.35-.15 12 12 0 00-17 0 .49.49 0 01-.7-.7 13 13 0 0118.38 0 .5.5 0 01-.35.85zM13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14zM16.6 13.9a.54.54 0 01-.36-.14 6 6 0 00-8.48 0 .51.51 0 01-.71 0 .5.5 0 010-.71 7 7 0 019.9 0 .5.5 0 010 .71.54.54 0 01-.35.14z"></path><path d="M18 12.49a.47.47 0 01-.35-.15 8 8 0 00-11.32 0 .49.49 0 01-.7-.7 9 9 0 0112.72 0 .48.48 0 010 .7.47.47 0 01-.35.15z"></path><circle cx="12" cy="19" r="1"></circle></g></svg>
                Wifi
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M4.71 4.29a1 1 0 00-1.18-.17.69.69 0 00-.2.13 1 1 0 00-.06 1.35l7.07 8.48a.93.93 0 00.14.14 1 1 0 00.58.22 1 1 0 00.76-.29l.7-.71 6.66 6.37a.5.5 0 00.71-.71zM4 5l7.78 7.77-.71.71zM9.08 14.22l-4.93 4.94a.49.49 0 10.69.69L9.73 15l-.21-.21zM20.86 5.93a.5.5 0 00-.7 0l-3.48 3.48a.47.47 0 01-.69 0 .48.48 0 010-.7l3.47-3.48a.49.49 0 10-.69-.69L15.29 8a.48.48 0 01-.7 0 .47.47 0 010-.69l3.48-3.48a.49.49 0 00-.7-.7L13.55 7a2 2 0 000 2.78l-.91.91.7.68.9-.9a2 2 0 002.78 0l3.83-3.82a.5.5 0 00.01-.72z"></path></g></svg>
                Resturant
            </div>
            <div class="feature inactive">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 12H20V9.5A1.5 1.5 0 0018.5 8a1.39 1.39 0 00-.5.09V7.5a1.5 1.5 0 00-3 0V12H9V7.5a1.5 1.5 0 00-3 0v.59A1.39 1.39 0 005.5 8 1.5 1.5 0 004 9.5V12H2.5a.5.5 0 000 1H4v2.5A1.5 1.5 0 005.5 17a1.47 1.47 0 00.56-.11A1.47 1.47 0 007.5 18 1.5 1.5 0 009 16.5V13h6v3.5a1.5 1.5 0 001.5 1.5 1.47 1.47 0 001.44-1.11 1.47 1.47 0 00.56.11 1.5 1.5 0 001.5-1.5V13h1.5a.5.5 0 000-1zm-16 4a.5.5 0 01-.5-.5v-6a.5.5 0 011 0v6a.5.5 0 01-.5.5zm2.5.5a.5.5 0 01-1 0v-9a.5.5 0 011 0zm9 0a.5.5 0 01-1 0v-9a.5.5 0 011 0zm2-1a.5.5 0 01-1 0v-6a.5.5 0 011 0z" fill="currentColor"></path></svg>
                Gym
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M12 6.6c1.43 1.87 3 4.33 3 5.4a3 3 0 01-6 0c0-1.07 1.57-3.53 3-5.4M12 5s-4 4.79-4 7a4 4 0 008 0c0-2.21-4-7-4-7z"></path><path d="M17 12.53a5.23 5.23 0 01-.21 1C19.43 14.12 21 15.18 21 16c0 1.22-3.51 3-9 3s-9-1.78-9-3c0-.82 1.57-1.88 4.26-2.5a5.23 5.23 0 01-.21-1c-3 .69-5 2-5 3.47 0 2.21 4.48 4 10 4s10-1.79 10-4C22 14.51 20 13.22 17 12.53z"></path><path d="M17.83 16c-.67.42-2.69 1-5.83 1s-5.16-.58-5.83-1a6.79 6.79 0 012.12-.68 5.1 5.1 0 01-.63-.89C6 14.8 5 15.36 5 16c0 1.1 3.13 2 7 2s7-.9 7-2c0-.64-1-1.2-2.66-1.57a5.1 5.1 0 01-.63.89 6.79 6.79 0 012.12.68z"></path></g></svg>
               Spa
            </div>
            <div class="price-plan">
            <?php
               
               echo "CheckIn: ".$_POST['checkIn'];
               echo "</br>";
               echo "CheckOut: ".$_POST['checkOut'];
               echo "</br>";
               echo "R".$Hotels['The Westin']."/night";
               echo "</br>";
               $total = $Hotels['The Westin']*dateDiffInDays($_POST['checkIn'], $_POST['checkOut']);
               echo "R".$total." total";            
               ?>
            </div>
            <input class="button" type="submit" value="Book Now"/>
        </div>
        <div class="hotel-column cheapest">
            <div class="most-cheapest">Cheapest Price</div>
            <div class="hotel-header">
                <div class="hotel-image">
                 <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/236251566.jpg?k=44cd05044298eff12ccc6c5765ef4f0a4b383d25272bf467be39ed8ae4f92398&o=&hp=1" alt="Hotel image" >
                </div>
                <div class="hotel-name">Raddison Blu</div>
            </div>
            <div class="divider"></div>
            <div class="feature inactive">
             <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm-5.92 19.995L22 22H10l-.08-.005L4 27.916V28h24v-.085zM28 4H4v21.084l12-11.998 12 12zM16 15.915L11.915 20h8.17zM22 7a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>
             Mountain View
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M15 14a2 2 0 00-2 2 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 1 1 0 012 0 .5.5 0 001 0 2 2 0 00-2-2zM10.5 18.5a.5.5 0 00-.5.5 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 .5.5 0 00-.5-.5zM13.5 18.5a.5.5 0 01.5.5 1 1 0 002 0 2 2 0 014 0 .5.5 0 01-1 0 1 1 0 00-2 0 2 2 0 01-4 0 .5.5 0 01.5-.5zM16.5 2A1.5 1.5 0 0015 3.5V7H8V3.5a.5.5 0 011 0v1a.5.5 0 001 0v-1a1.5 1.5 0 00-3 0v9a.5.5 0 001 0V11h7v1.5a.5.5 0 001 0v-9a.5.5 0 011 0v1a.5.5 0 001 0v-1A1.5 1.5 0 0016.5 2zM8 10V8h7v2z"></path></g></svg>
                Swiming Pool
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14z"></path><path d="M15.18 15.32a.49.49 0 01-.35-.15 4.1 4.1 0 00-5.66 0 .5.5 0 01-.71 0 .51.51 0 010-.71 5 5 0 017.08 0 .51.51 0 010 .71.51.51 0 01-.36.15zM19.42 11.08a.5.5 0 01-.35-.15 10 10 0 00-14.14 0 .5.5 0 01-.71-.71 11 11 0 0115.56 0 .51.51 0 010 .71.51.51 0 01-.36.15z"></path><path d="M20.84 9.66a.47.47 0 01-.35-.15 12 12 0 00-17 0 .49.49 0 01-.7-.7 13 13 0 0118.38 0 .5.5 0 01-.35.85zM13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14zM16.6 13.9a.54.54 0 01-.36-.14 6 6 0 00-8.48 0 .51.51 0 01-.71 0 .5.5 0 010-.71 7 7 0 019.9 0 .5.5 0 010 .71.54.54 0 01-.35.14z"></path><path d="M18 12.49a.47.47 0 01-.35-.15 8 8 0 00-11.32 0 .49.49 0 01-.7-.7 9 9 0 0112.72 0 .48.48 0 010 .7.47.47 0 01-.35.15z"></path><circle cx="12" cy="19" r="1"></circle></g></svg>
                Wifi
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M4.71 4.29a1 1 0 00-1.18-.17.69.69 0 00-.2.13 1 1 0 00-.06 1.35l7.07 8.48a.93.93 0 00.14.14 1 1 0 00.58.22 1 1 0 00.76-.29l.7-.71 6.66 6.37a.5.5 0 00.71-.71zM4 5l7.78 7.77-.71.71zM9.08 14.22l-4.93 4.94a.49.49 0 10.69.69L9.73 15l-.21-.21zM20.86 5.93a.5.5 0 00-.7 0l-3.48 3.48a.47.47 0 01-.69 0 .48.48 0 010-.7l3.47-3.48a.49.49 0 10-.69-.69L15.29 8a.48.48 0 01-.7 0 .47.47 0 010-.69l3.48-3.48a.49.49 0 00-.7-.7L13.55 7a2 2 0 000 2.78l-.91.91.7.68.9-.9a2 2 0 002.78 0l3.83-3.82a.5.5 0 00.01-.72z"></path></g></svg>
                Resturant
            </div>
            <div class="feature ">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 12H20V9.5A1.5 1.5 0 0018.5 8a1.39 1.39 0 00-.5.09V7.5a1.5 1.5 0 00-3 0V12H9V7.5a1.5 1.5 0 00-3 0v.59A1.39 1.39 0 005.5 8 1.5 1.5 0 004 9.5V12H2.5a.5.5 0 000 1H4v2.5A1.5 1.5 0 005.5 17a1.47 1.47 0 00.56-.11A1.47 1.47 0 007.5 18 1.5 1.5 0 009 16.5V13h6v3.5a1.5 1.5 0 001.5 1.5 1.47 1.47 0 001.44-1.11 1.47 1.47 0 00.56.11 1.5 1.5 0 001.5-1.5V13h1.5a.5.5 0 000-1zm-16 4a.5.5 0 01-.5-.5v-6a.5.5 0 011 0v6a.5.5 0 01-.5.5zm2.5.5a.5.5 0 01-1 0v-9a.5.5 0 011 0zm9 0a.5.5 0 01-1 0v-9a.5.5 0 011 0zm2-1a.5.5 0 01-1 0v-6a.5.5 0 011 0z" fill="currentColor"></path></svg>
                Gym
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M12 6.6c1.43 1.87 3 4.33 3 5.4a3 3 0 01-6 0c0-1.07 1.57-3.53 3-5.4M12 5s-4 4.79-4 7a4 4 0 008 0c0-2.21-4-7-4-7z"></path><path d="M17 12.53a5.23 5.23 0 01-.21 1C19.43 14.12 21 15.18 21 16c0 1.22-3.51 3-9 3s-9-1.78-9-3c0-.82 1.57-1.88 4.26-2.5a5.23 5.23 0 01-.21-1c-3 .69-5 2-5 3.47 0 2.21 4.48 4 10 4s10-1.79 10-4C22 14.51 20 13.22 17 12.53z"></path><path d="M17.83 16c-.67.42-2.69 1-5.83 1s-5.16-.58-5.83-1a6.79 6.79 0 012.12-.68 5.1 5.1 0 01-.63-.89C6 14.8 5 15.36 5 16c0 1.1 3.13 2 7 2s7-.9 7-2c0-.64-1-1.2-2.66-1.57a5.1 5.1 0 01-.63.89 6.79 6.79 0 012.12.68z"></path></g></svg>
               Spa
            </div>
            <div class="price-plan">
            <?php
            echo "CheckIn: ".$_POST['checkIn'];
            echo "</br>";
            echo "CheckOut: ".$_POST['checkOut'];
            echo "</br>";
            echo "R".$Hotels['Raddison Blu']."/night"; 
            echo "</br>";
            $total = $Hotels['Raddison Blu']*dateDiffInDays($_POST['checkIn'], $_POST['checkOut']);
            echo "R".$total." total";
            ?>
         </div>
            <input class="button" type="submit" value="Book Now"/>
        </div>
        <div class="hotel-column">
            <div class="hotel-header">
                <div class="hotel-image">
                 <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/315474866.jpg?k=5029c5645f4847a502016aa45ea9cd9dc6288e3fd666be13f3aef0be194ad3e1&o=&hp=1" alt="Hotel image">
                </div>
                <div class="hotel-name">Garden Court</div>
            </div>
            <div class="divider"></div>
            <div class="feature">
             <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm-5.92 19.995L22 22H10l-.08-.005L4 27.916V28h24v-.085zM28 4H4v21.084l12-11.998 12 12zM16 15.915L11.915 20h8.17zM22 7a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>
             Mountain View
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M15 14a2 2 0 00-2 2 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 1 1 0 012 0 .5.5 0 001 0 2 2 0 00-2-2zM10.5 18.5a.5.5 0 00-.5.5 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 .5.5 0 00-.5-.5zM13.5 18.5a.5.5 0 01.5.5 1 1 0 002 0 2 2 0 014 0 .5.5 0 01-1 0 1 1 0 00-2 0 2 2 0 01-4 0 .5.5 0 01.5-.5zM16.5 2A1.5 1.5 0 0015 3.5V7H8V3.5a.5.5 0 011 0v1a.5.5 0 001 0v-1a1.5 1.5 0 00-3 0v9a.5.5 0 001 0V11h7v1.5a.5.5 0 001 0v-9a.5.5 0 011 0v1a.5.5 0 001 0v-1A1.5 1.5 0 0016.5 2zM8 10V8h7v2z"></path></g></svg>
                Swiming Pool
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14z"></path><path d="M15.18 15.32a.49.49 0 01-.35-.15 4.1 4.1 0 00-5.66 0 .5.5 0 01-.71 0 .51.51 0 010-.71 5 5 0 017.08 0 .51.51 0 010 .71.51.51 0 01-.36.15zM19.42 11.08a.5.5 0 01-.35-.15 10 10 0 00-14.14 0 .5.5 0 01-.71-.71 11 11 0 0115.56 0 .51.51 0 010 .71.51.51 0 01-.36.15z"></path><path d="M20.84 9.66a.47.47 0 01-.35-.15 12 12 0 00-17 0 .49.49 0 01-.7-.7 13 13 0 0118.38 0 .5.5 0 01-.35.85zM13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14zM16.6 13.9a.54.54 0 01-.36-.14 6 6 0 00-8.48 0 .51.51 0 01-.71 0 .5.5 0 010-.71 7 7 0 019.9 0 .5.5 0 010 .71.54.54 0 01-.35.14z"></path><path d="M18 12.49a.47.47 0 01-.35-.15 8 8 0 00-11.32 0 .49.49 0 01-.7-.7 9 9 0 0112.72 0 .48.48 0 010 .7.47.47 0 01-.35.15z"></path><circle cx="12" cy="19" r="1"></circle></g></svg>
                Wifi
            </div>
            <div class="feature inactive">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M4.71 4.29a1 1 0 00-1.18-.17.69.69 0 00-.2.13 1 1 0 00-.06 1.35l7.07 8.48a.93.93 0 00.14.14 1 1 0 00.58.22 1 1 0 00.76-.29l.7-.71 6.66 6.37a.5.5 0 00.71-.71zM4 5l7.78 7.77-.71.71zM9.08 14.22l-4.93 4.94a.49.49 0 10.69.69L9.73 15l-.21-.21zM20.86 5.93a.5.5 0 00-.7 0l-3.48 3.48a.47.47 0 01-.69 0 .48.48 0 010-.7l3.47-3.48a.49.49 0 10-.69-.69L15.29 8a.48.48 0 01-.7 0 .47.47 0 010-.69l3.48-3.48a.49.49 0 00-.7-.7L13.55 7a2 2 0 000 2.78l-.91.91.7.68.9-.9a2 2 0 002.78 0l3.83-3.82a.5.5 0 00.01-.72z"></path></g></svg>
                Resturant
            </div>
            <div class="feature inactive">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 12H20V9.5A1.5 1.5 0 0018.5 8a1.39 1.39 0 00-.5.09V7.5a1.5 1.5 0 00-3 0V12H9V7.5a1.5 1.5 0 00-3 0v.59A1.39 1.39 0 005.5 8 1.5 1.5 0 004 9.5V12H2.5a.5.5 0 000 1H4v2.5A1.5 1.5 0 005.5 17a1.47 1.47 0 00.56-.11A1.47 1.47 0 007.5 18 1.5 1.5 0 009 16.5V13h6v3.5a1.5 1.5 0 001.5 1.5 1.47 1.47 0 001.44-1.11 1.47 1.47 0 00.56.11 1.5 1.5 0 001.5-1.5V13h1.5a.5.5 0 000-1zm-16 4a.5.5 0 01-.5-.5v-6a.5.5 0 011 0v6a.5.5 0 01-.5.5zm2.5.5a.5.5 0 01-1 0v-9a.5.5 0 011 0zm9 0a.5.5 0 01-1 0v-9a.5.5 0 011 0zm2-1a.5.5 0 01-1 0v-6a.5.5 0 011 0z" fill="currentColor"></path></svg>
                Gym
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M12 6.6c1.43 1.87 3 4.33 3 5.4a3 3 0 01-6 0c0-1.07 1.57-3.53 3-5.4M12 5s-4 4.79-4 7a4 4 0 008 0c0-2.21-4-7-4-7z"></path><path d="M17 12.53a5.23 5.23 0 01-.21 1C19.43 14.12 21 15.18 21 16c0 1.22-3.51 3-9 3s-9-1.78-9-3c0-.82 1.57-1.88 4.26-2.5a5.23 5.23 0 01-.21-1c-3 .69-5 2-5 3.47 0 2.21 4.48 4 10 4s10-1.79 10-4C22 14.51 20 13.22 17 12.53z"></path><path d="M17.83 16c-.67.42-2.69 1-5.83 1s-5.16-.58-5.83-1a6.79 6.79 0 012.12-.68 5.1 5.1 0 01-.63-.89C6 14.8 5 15.36 5 16c0 1.1 3.13 2 7 2s7-.9 7-2c0-.64-1-1.2-2.66-1.57a5.1 5.1 0 01-.63.89 6.79 6.79 0 012.12.68z"></path></g></svg>
               Spa
            </div>
            <div class="price-plan">
            <?php
            echo "CheckIn: ".$_POST['checkIn'];
            echo "</br>";
            echo "CheckOut: ".$_POST['checkOut'];
            echo "</br>";
            echo "R".$Hotels['Garden Court']."/night"; 
            echo "</br>";
            $total = $Hotels['Garden Court']*dateDiffInDays($_POST['checkIn'], $_POST['checkOut']);
            echo "R".$total." total";
            ?>
         </div>
            <input class="button" type="submit" value="Book Now"/>
        </div>
        <div class="hotel-column">
            <div class="hotel-header">
                <div class="hotel-image">
                 <img src="https://ik.imgkit.net/3vlqs5axxjf/external/ik-seo/http://images.ntmllc.com/v4/hotel/418/418056/418056_EXT_Z53920/Southern-Sun-Cape-Sun-Exterior.jpg?tr=w-780%2Ch-437%2Cfo-auto" alt="Hotel image" >
                </div>
                <div class="hotel-name">Southern Sun</div>
            </div>
            <div class="divider"></div>
            <div class="feature">
             <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm-5.92 19.995L22 22H10l-.08-.005L4 27.916V28h24v-.085zM28 4H4v21.084l12-11.998 12 12zM16 15.915L11.915 20h8.17zM22 7a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>
                Mountain View
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M15 14a2 2 0 00-2 2 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 1 1 0 012 0 .5.5 0 001 0 2 2 0 00-2-2zM10.5 18.5a.5.5 0 00-.5.5 1 1 0 01-2 0 2 2 0 00-4 0 .5.5 0 001 0 1 1 0 012 0 2 2 0 004 0 .5.5 0 00-.5-.5zM13.5 18.5a.5.5 0 01.5.5 1 1 0 002 0 2 2 0 014 0 .5.5 0 01-1 0 1 1 0 00-2 0 2 2 0 01-4 0 .5.5 0 01.5-.5zM16.5 2A1.5 1.5 0 0015 3.5V7H8V3.5a.5.5 0 011 0v1a.5.5 0 001 0v-1a1.5 1.5 0 00-3 0v9a.5.5 0 001 0V11h7v1.5a.5.5 0 001 0v-9a.5.5 0 011 0v1a.5.5 0 001 0v-1A1.5 1.5 0 0016.5 2zM8 10V8h7v2z"></path></g></svg>
                Swiming Pool
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14z"></path><path d="M15.18 15.32a.49.49 0 01-.35-.15 4.1 4.1 0 00-5.66 0 .5.5 0 01-.71 0 .51.51 0 010-.71 5 5 0 017.08 0 .51.51 0 010 .71.51.51 0 01-.36.15zM19.42 11.08a.5.5 0 01-.35-.15 10 10 0 00-14.14 0 .5.5 0 01-.71-.71 11 11 0 0115.56 0 .51.51 0 010 .71.51.51 0 01-.36.15z"></path><path d="M20.84 9.66a.47.47 0 01-.35-.15 12 12 0 00-17 0 .49.49 0 01-.7-.7 13 13 0 0118.38 0 .5.5 0 01-.35.85zM13.77 16.73a.54.54 0 01-.36-.14 2 2 0 00-2.82 0 .51.51 0 01-.71 0 .5.5 0 010-.71 3.08 3.08 0 014.24 0 .5.5 0 010 .71.52.52 0 01-.35.14zM16.6 13.9a.54.54 0 01-.36-.14 6 6 0 00-8.48 0 .51.51 0 01-.71 0 .5.5 0 010-.71 7 7 0 019.9 0 .5.5 0 010 .71.54.54 0 01-.35.14z"></path><path d="M18 12.49a.47.47 0 01-.35-.15 8 8 0 00-11.32 0 .49.49 0 01-.7-.7 9 9 0 0112.72 0 .48.48 0 010 .7.47.47 0 01-.35.15z"></path><circle cx="12" cy="19" r="1"></circle></g></svg>
                Wifi
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M4.71 4.29a1 1 0 00-1.18-.17.69.69 0 00-.2.13 1 1 0 00-.06 1.35l7.07 8.48a.93.93 0 00.14.14 1 1 0 00.58.22 1 1 0 00.76-.29l.7-.71 6.66 6.37a.5.5 0 00.71-.71zM4 5l7.78 7.77-.71.71zM9.08 14.22l-4.93 4.94a.49.49 0 10.69.69L9.73 15l-.21-.21zM20.86 5.93a.5.5 0 00-.7 0l-3.48 3.48a.47.47 0 01-.69 0 .48.48 0 010-.7l3.47-3.48a.49.49 0 10-.69-.69L15.29 8a.48.48 0 01-.7 0 .47.47 0 010-.69l3.48-3.48a.49.49 0 00-.7-.7L13.55 7a2 2 0 000 2.78l-.91.91.7.68.9-.9a2 2 0 002.78 0l3.83-3.82a.5.5 0 00.01-.72z"></path></g></svg>
                Resturant
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 12H20V9.5A1.5 1.5 0 0018.5 8a1.39 1.39 0 00-.5.09V7.5a1.5 1.5 0 00-3 0V12H9V7.5a1.5 1.5 0 00-3 0v.59A1.39 1.39 0 005.5 8 1.5 1.5 0 004 9.5V12H2.5a.5.5 0 000 1H4v2.5A1.5 1.5 0 005.5 17a1.47 1.47 0 00.56-.11A1.47 1.47 0 007.5 18 1.5 1.5 0 009 16.5V13h6v3.5a1.5 1.5 0 001.5 1.5 1.47 1.47 0 001.44-1.11 1.47 1.47 0 00.56.11 1.5 1.5 0 001.5-1.5V13h1.5a.5.5 0 000-1zm-16 4a.5.5 0 01-.5-.5v-6a.5.5 0 011 0v6a.5.5 0 01-.5.5zm2.5.5a.5.5 0 01-1 0v-9a.5.5 0 011 0zm9 0a.5.5 0 01-1 0v-9a.5.5 0 011 0zm2-1a.5.5 0 01-1 0v-6a.5.5 0 011 0z" fill="currentColor"></path></svg>
                Gym
            </div>
            <div class="feature">
             <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M12 6.6c1.43 1.87 3 4.33 3 5.4a3 3 0 01-6 0c0-1.07 1.57-3.53 3-5.4M12 5s-4 4.79-4 7a4 4 0 008 0c0-2.21-4-7-4-7z"></path><path d="M17 12.53a5.23 5.23 0 01-.21 1C19.43 14.12 21 15.18 21 16c0 1.22-3.51 3-9 3s-9-1.78-9-3c0-.82 1.57-1.88 4.26-2.5a5.23 5.23 0 01-.21-1c-3 .69-5 2-5 3.47 0 2.21 4.48 4 10 4s10-1.79 10-4C22 14.51 20 13.22 17 12.53z"></path><path d="M17.83 16c-.67.42-2.69 1-5.83 1s-5.16-.58-5.83-1a6.79 6.79 0 012.12-.68 5.1 5.1 0 01-.63-.89C6 14.8 5 15.36 5 16c0 1.1 3.13 2 7 2s7-.9 7-2c0-.64-1-1.2-2.66-1.57a5.1 5.1 0 01-.63.89 6.79 6.79 0 012.12.68z"></path></g></svg>
               Spa
            </div>
            <?php
            echo "CheckIn: ".$_POST['checkIn'];
            echo "</br>";
            echo "CheckOut: ".$_POST['checkOut'];
            echo "</br>";
            echo "R".$Hotels['Southern Sun']."/night";
            echo "</br>";
            $total = $Hotels['Southern Sun']*dateDiffInDays($_POST['checkIn'], $_POST['checkOut']);
            echo "R".$total." total"; 
            ?>
         </div>
            <input class="button" type="submit" value="Book Now"/>
        </div>
     </div>
</body>
</html>