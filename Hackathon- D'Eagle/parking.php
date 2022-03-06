<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    

    <title>Suburbanization</title>

    <style>
        @import url('./style/reset.css');
        @import url('./style/global.css');
        @import url('./style/transport.css'); 
        @import url('./style/parking.css');

        
    </style>

</head>
<body>
    
    <!-- Header section -->
    <header class="header">
        <div class="container">
            <!-- Nav -->
            <nav class="nav">

                <!-- Logo -->
                <div class="logo">
                    <img src="./images/logo.svg" alt="" class="logo__img">

                    <span class="logo-text">
                        <span>
                            Sub
                        </span>
                        urb
                    </span>
                </div>


                <!-- Lists -->
                <ul class="menu-list">
                    <li class="menu__item">
                        <a href="./index.html" class="menu__link">
                            Home
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="./transport.php" class="menu__link">
                            Business
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            Parking
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Main section -->
    <main class="main">


        <!-- intro -->
        <section class="intro">
            <div class="container">
                
                <div class="intro__inner">
                    <!-- Search Parking -->
                    <h2 class="intro-title">
                        <span>
                            Check
                        </span>
                        for parking
                    </h2>

                    <p class="intro-text">
                        This is procedure to find parking places near your location 
                    </p>

                    <div class="form">
                        <input id="searchParking"
                            
                            type="text"
                            placeholder="Search Box">
                        <a href="https://www.google.com.br/maps/search/parking/@40.3731631,49.8452289,14z" id="submitParking">
                            Check
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Google Map -->
        <div class="container">
            <div id="map"></div>
        </div>

        <div class="container">
    </div>
    </main>





    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="social-items">
                    <a href="#" class="social-item__link">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.8809 35C22.627 35 12.373 35 2.11914 35C1.45605 34.8086 0.84082 34.5283 0.464844 33.9199C0.273438 33.5986 0.150391 33.2295 0 32.8809C0 22.627 0 12.373 0 2.11914C0.164062 1.57227 0.348633 1.01855 0.820312 0.683594C1.2168 0.40332 1.68164 0.225586 2.11914 0C12.373 0 22.627 0 32.8809 0C33.5439 0.18457 34.1592 0.47168 34.5352 1.08008C34.7334 1.40137 34.8496 1.77051 35 2.11914C35 12.373 35 22.627 35 32.8809C34.8086 33.5439 34.5283 34.1592 33.9199 34.5352C33.5986 34.7266 33.2295 34.8496 32.8809 35ZM17.5273 7.39648C17.5273 7.4375 17.5273 7.47852 17.5273 7.51953C16.0781 7.51953 14.6357 7.49219 13.1865 7.52637C12.0244 7.55371 10.9033 7.82715 9.91895 8.49023C8.27832 9.59766 7.57422 11.2314 7.5332 13.1318C7.47168 16.0439 7.49902 18.9629 7.52637 21.875C7.54004 23.0166 7.83398 24.1104 8.4834 25.0742C9.59082 26.7148 11.2246 27.4189 13.125 27.46C16.0371 27.5215 18.9561 27.5146 21.8682 27.46C23.4814 27.4326 24.9307 26.8994 26.0449 25.6553C27.0293 24.5547 27.4326 23.2285 27.46 21.793C27.5146 19.4004 27.5215 17.0078 27.5215 14.6152C27.5215 13.9111 27.4668 13.2002 27.3984 12.5029C27.125 9.78906 25.1836 7.82031 22.4629 7.59473C20.8359 7.46484 19.1816 7.45801 17.5273 7.39648Z" fill="#fff"/>
                            <path d="M25.7715 17.493C25.7305 19.0174 25.7236 20.5487 25.6348 22.0663C25.5117 24.1649 24.1787 25.5663 22.0801 25.621C19.0449 25.703 16.0029 25.703 12.9609 25.621C10.8145 25.5663 9.44044 24.1923 9.37892 22.0321C9.29689 18.9833 9.32423 15.9276 9.37892 12.8788C9.40626 11.5594 10.0078 10.4657 11.2315 9.81628C11.9219 9.45397 12.6807 9.31725 13.4463 9.31725C16.3174 9.31725 19.1885 9.28307 22.0527 9.37194C24.1787 9.4403 25.4707 10.8143 25.6348 12.9403C25.6553 13.1659 25.6826 13.3915 25.6826 13.6239C25.6895 14.909 25.6826 16.201 25.6826 17.4862C25.7168 17.4862 25.7441 17.493 25.7715 17.493ZM22.6543 17.4862C22.6475 14.6356 20.3506 12.3456 17.5 12.3456C14.6426 12.3387 12.332 14.6561 12.3389 17.5135C12.3457 20.3641 14.6426 22.6542 17.4932 22.661C20.3506 22.661 22.668 20.3436 22.6543 17.4862ZM24.0625 12.12C24.0557 11.4637 23.5225 10.9374 22.8662 10.9305C22.1895 10.9305 21.6563 11.4706 21.6631 12.1473C21.6699 12.8241 22.21 13.3436 22.8936 13.3299C23.5498 13.3231 24.0693 12.7831 24.0625 12.12Z" fill="#fff"/>
                            <path d="M17.5 14.1504C19.3457 14.1504 20.8428 15.6475 20.8496 17.4863C20.8564 19.3457 19.3457 20.8496 17.4863 20.8428C15.6475 20.8359 14.1504 19.332 14.1504 17.4863C14.1572 15.6543 15.6543 14.1504 17.5 14.1504Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="social-item__link">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 32.8809C0 22.627 0 12.373 0 2.11914C0.164063 1.57227 0.348633 1.01855 0.820312 0.683594C1.2168 0.40332 1.68164 0.225586 2.11914 0C12.373 0 22.627 0 32.8809 0C33.5439 0.18457 34.1592 0.47168 34.5352 1.08008C34.7334 1.40137 34.8496 1.77051 35 2.11914C35 12.373 35 22.627 35 32.8809C34.8086 33.5439 34.5283 34.1592 33.9199 34.5352C33.5986 34.7334 33.2295 34.8496 32.8809 35C22.627 35 12.373 35 2.11914 35C1.45605 34.8086 0.84082 34.5283 0.464844 33.9199C0.273438 33.5986 0.150391 33.2295 0 32.8809ZM17.0557 9.76172C17.0557 9.78906 17.0557 9.81641 17.0488 9.84375C16.9258 9.84375 16.7959 9.83691 16.6729 9.84375C14.2871 9.95313 11.8945 10.0352 9.50879 10.1992C8.12793 10.2949 7.19824 11.1426 6.96582 12.5098C6.76074 13.6924 6.6582 14.9023 6.59668 16.1055C6.49414 18.2725 6.53516 20.4326 6.97266 22.5654C7.21875 23.7822 8.00488 24.5479 9.23535 24.7324C10.3906 24.9033 11.5664 24.9922 12.7354 25.0469C16.8369 25.2246 20.9316 25.2246 25.0264 24.876C26.9951 24.7051 27.877 23.8779 28.1436 21.9434C28.4102 20.0088 28.499 18.0605 28.3896 16.1123C28.3213 14.8682 28.2051 13.6104 27.9932 12.3867C27.7949 11.2451 27.0156 10.541 25.874 10.2812C25.5322 10.1992 25.1768 10.1445 24.8281 10.1309C22.2441 9.99414 19.6533 9.87793 17.0557 9.76172Z" fill="white"/>
                            <path d="M15.3467 14.2322C17.2471 15.3259 19.0996 16.3992 21.0137 17.4998C19.0996 18.6004 17.2402 19.6736 15.3467 20.7673C15.3467 18.5798 15.3467 16.4334 15.3467 14.2322Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="social-item__link">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 32.8809C0 22.627 0 12.373 0 2.11914C0.164062 1.57227 0.348633 1.01855 0.820312 0.683594C1.2168 0.40332 1.68164 0.225586 2.11914 0C12.373 0 22.627 0 32.8809 0C33.5439 0.18457 34.1592 0.47168 34.5352 1.08008C34.7334 1.40137 34.8496 1.77051 35 2.11914C35 12.373 35 22.627 35 32.8809C34.8086 33.5439 34.5283 34.1592 33.9199 34.5352C33.5986 34.7334 33.2295 34.8496 32.8809 35C22.627 35 12.373 35 2.11914 35C1.45605 34.8086 0.84082 34.5283 0.464844 33.9199C0.273438 33.5986 0.150391 33.2295 0 32.8809ZM13.8359 22.1416C12.0723 23.4609 10.165 23.9805 7.96387 23.8027C8.14844 23.9189 8.24414 23.9873 8.34668 24.0488C10.9512 25.5391 13.7402 25.9287 16.6592 25.3135C22.2236 24.1377 25.416 19.0791 25.4844 14.3418C25.4912 13.8428 25.6006 13.5078 26.0176 13.207C26.5781 12.7969 27.0293 12.25 27.4463 11.6143C27.043 11.7441 26.7148 11.8672 26.3799 11.9629C26.0449 12.0518 25.6963 12.1133 25.3545 12.1885C26.0723 11.6006 26.6191 10.9307 26.8994 10.1035C26.1816 10.3633 25.4639 10.6162 24.7529 10.876C24.5137 10.9648 24.3496 10.9033 24.1514 10.7324C22.9551 9.67969 21.5674 9.39941 20.0771 9.94629C18.5732 10.5 17.6982 11.6279 17.4932 13.2207C17.4316 13.6719 17.4863 14.1367 17.4863 14.6152C14.1709 14.376 11.4434 12.9746 9.27637 10.4316C8.74316 11.3682 8.62012 12.3252 8.83203 13.3301C9.05078 14.3281 9.61816 15.1074 10.4248 15.7363C10.4043 15.7705 10.3838 15.7979 10.3633 15.832C9.81641 15.6748 9.2627 15.5176 8.70215 15.3604C8.72266 16.2764 8.99609 17.0967 9.57031 17.8213C10.1377 18.5459 10.8896 19.0039 11.7783 19.25C11.7715 19.2842 11.7646 19.3115 11.7646 19.3457C11.2314 19.3457 10.6914 19.3457 10.1035 19.3457C10.7734 21.0479 11.9834 21.957 13.8359 22.1416Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="social-item__link">
                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.1367 3.20605C35.1367 12.7148 35.1367 22.2168 35.1367 31.7256C35.123 31.7461 35.1025 31.7598 35.0957 31.7803C34.8701 33.1885 33.6465 34.1387 32.1494 34.1387C22.4492 34.125 12.749 34.1318 3.04883 34.125C2.75488 34.125 2.44727 34.1045 2.16699 34.0293C0.847656 33.6807 0.0683594 32.6211 0.0683594 31.1992C0.0683594 27.0293 0.0683594 22.8525 0.0683594 18.6826C0.0683594 13.7129 0.0683594 8.74316 0.0683594 3.77344C0.0683594 3.09668 0.211914 2.46094 0.628906 1.91406C1.25781 1.10059 2.10547 0.792969 3.11035 0.792969C12.0107 0.799805 20.9111 0.799805 29.8184 0.799805C30.6182 0.799805 31.418 0.806641 32.2178 0.799805C32.9424 0.792969 33.585 1.00488 34.1455 1.46289C34.6992 1.9209 34.959 2.54297 35.1367 3.20605ZM14.7793 28.3008C16.3926 28.3008 17.9443 28.3008 19.5303 28.3008C19.5303 24.4727 19.5303 20.6719 19.5303 16.8301C20.3232 16.8301 21.082 16.8301 21.8477 16.8301C22.4971 16.8301 22.4971 16.8301 22.6475 16.1943C22.8662 15.2646 23.0781 14.3418 23.3105 13.3711C22.0391 13.3711 20.8018 13.3711 19.4756 13.3711C19.5439 12.5645 19.5781 11.792 19.6738 11.0332C19.7217 10.6504 19.9746 10.3428 20.3506 10.1855C21 9.91895 21.6768 9.83691 22.3535 10.0762C22.791 10.2266 23.2012 10.4453 23.6523 10.6504C23.9326 9.57715 24.2197 8.51074 24.5 7.43066C23.9941 7.28027 23.5293 7.15723 23.0781 7.00684C21.3896 6.45312 19.6875 6.49414 17.9922 6.93848C16.6182 7.29395 15.668 8.15527 15.1553 9.46777C14.8203 10.3291 14.7998 11.2451 14.793 12.1543C14.793 12.5508 14.793 12.9404 14.793 13.3643C14.0342 13.3643 13.3164 13.3643 12.5918 13.3643C12.5918 14.5264 12.5918 15.6543 12.5918 16.8232C13.3301 16.8232 14.041 16.8232 14.7861 16.8232C14.7793 20.6719 14.7793 24.4727 14.7793 28.3008Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <p class="copyright">
                    Copyright  2022, All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHUGjWrBPJQY0bG7vrKg-nhpul-mfjQSE&callback=initMap"></script> -->

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHUGjWrBPJQY0bG7vrKg-nhpul-mfjQSE&callback=initAutocomplete&libraries=places&v=weekly"
        async>
    </script>

    <script>

        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 	40.409264, lng: 49.867092 },
            zoom: 13,
            mapTypeId: "roadmap",
        });
        // Create the search box and link it to the UI element.
        const input = document.getElementById("pac-input");
        const searchBox = new google.maps.places.SearchBox(input);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map.addListener("bounds_changed", () => {
            searchBox.setBounds(map.getBounds());
        });

        let markers = [];

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener("places_changed", () => {
            const places = searchBox.getPlaces();

            if (places.length == 0) {
            return;
            }

            // Clear out the old markers.
            markers.forEach((marker) => {
            marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            const bounds = new google.maps.LatLngBounds();

            places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };

            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                map,
                icon,
                title: place.name,
                position: place.geometry.location,
                })
            );
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            });
            map.fitBounds(bounds);
        });
        }

        

    </script>
</body>
</html>