<?php
error_reporting(0);
?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="?section=accueil">Fatima.</a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if (($_GET["section"]) == 'accueil') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>" aria-current="page" href="?section=accueil">Accueil</a>

                </li>
                <li class="nav-item">
                    <a class=" <?php if (($_GET["section"]) == 'qui') {
                                    echo 'active';
                                } else {
                                    echo '';
                                } ?> nav-link" href="?section=qui">Qui suis-je?</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if (($_GET["section"]) == 'portfolio') {
                                    echo 'active';
                                } else {
                                    echo '';
                                } ?>  nav-link" href="?section=portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if (($_GET["section"]) == 'contact') {
                                    echo 'active';
                                } else {
                                    echo '';
                                } ?>  nav-link" href="?section=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="absolute">
    <div>
        <a href="https://www.linkedin.com/in/fatima-el-harraoui/">
            <svg class="imgLinkedin" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 306.62 306.68">

                <path class="cls-1" d="M217.19,176.15a61.26,61.26,0,0,1,19.06-20.7c16.18-11,34.26-13.38,53.23-11.59,10.75,1,21.13,3.45,30.62,8.79,15.55,8.77,23.84,22.82,28.39,39.51,4.36,16,5.11,32.46,5.15,48.93.09,35.92,0,71.83.07,107.75,0,2.53-.24,3.68-3.31,3.65q-28.62-.24-57.24,0c-2.78,0-3.15-.93-3.14-3.38q.09-51.25,0-102.51A110.89,110.89,0,0,0,288.06,225c-4.29-21.32-18-28-37-25.79-17.88,2.07-27.6,12.66-30.51,31.91a141,141,0,0,0-1.45,21.24c0,32.3,0,64.6.07,96.9,0,2.81-.54,3.75-3.6,3.73q-28.43-.24-56.86,0c-2.67,0-3.26-.74-3.26-3.32q.12-99.15,0-198.29c0-2.34.45-3.22,3-3.2q27.5.16,55,0c2.65,0,3.06,1,3,3.25-.12,7-.07,14,0,20.95C216.5,173.53,216,174.82,217.19,176.15Z" transform="translate(-47.1 -46.33)" />
                <path class="cls-1" d="M52.16,250.54c0-32.77.06-65.55-.08-98.33,0-3.3.78-4.1,4.07-4.07q27.85.27,55.7,0c3,0,4,.55,4,3.78q-.15,98.72,0,197.42c0,3-.83,3.66-3.71,3.64q-28.23-.19-56.45,0c-3.12,0-3.57-1-3.56-3.77Q52.23,299.9,52.16,250.54Z" transform="translate(-47.1 -46.33)" />
                <path class="cls-1" d="M120.65,83c.13,20.29-16.39,37.17-36.49,37.28S47.1,103.54,47.1,83.16A36.78,36.78,0,0,1,120.65,83Z" transform="translate(-47.1 -46.33)" />
            </svg>
        </a>
    </div>
    <div><a class="mail" href="mailto:elharraoui.f@gmail.com">@</a></div>
    <div>
        <a href="tel:0473231754">
            <svg class="phone" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 359.15 359.04">
                <path d="M288.24,379.16c-15.6-1.42-30.59-5.39-45.23-10.8-34.95-12.92-65.95-32.53-94.63-56-39.94-32.71-73.3-71-98.62-116.13-12.54-22.35-22.2-45.85-27.07-71.14-.77-4-1.18-8.13-1.78-12.2-.64-4.35,1.19-8,3.19-11.65C34.26,82.94,47.23,66.7,61.05,51.11A192.55,192.55,0,0,1,88.2,25.49c12.64-9.66,24.64-4.91,31.52,4.35,17.89,24.09,34.55,49.07,46.43,76.81,6.78,15.81,5.1,22.45-7.59,34-5.7,5.22-11.62,10.2-17.54,15.16-1.75,1.46-2.32,2.64-1.43,5q27.21,72.45,99.62,99.6c2.31.86,3.5.43,5-1.32,6.43-7.28,12.26-15.1,19.26-21.88s14.74-9,23.95-5.62c3.62,1.33,7.32,2.48,10.79,4.12,25.42,12,48.72,27.52,71.42,43.95,5.91,4.28,9,10.52,10.14,17.7.48,3-.52,5.65-1.76,8.26a50,50,0,0,1-7.91,11.74,288.49,288.49,0,0,1-71.7,58.68C295.35,377.87,292.07,379.54,288.24,379.16Z" transform="translate(-20.78 -20.18)" />
            </svg>
        </a>
    </div>
</div>