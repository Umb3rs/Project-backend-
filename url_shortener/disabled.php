<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>PHP URL Shortener</title>
	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<!--Header-->
	<header class="header">
        <a href="index.php" class="logo">
            <img src="images/logo.svg" alt="Website logo">
            <span>Shortner'Up</span>
        </a>
        <div class="header-buttons">
			<!--Connexion link-->
            <a href="#Se connecter" class="signup-button">Se connecter</a>
			<!--Registrer link-->
            <a href="#Inscription" class="signin-button">S'inscrire</a>
        </div>
    </header>
	<!--Main page-->
	<main class="main-content">
        <svg class="error float" width="1075" height="585" viewBox="0 0 1075 585" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M520.426 167.01C434.482 167.01 372.775 222.149 372.775 350.808C372.775 496.621 434.482 535.218 520.426 535.218C606.37 535.218 671.753 492.945 671.753 350.808C671.753 198.868 606.37 167.01 520.426 167.01ZM520.991 486.818C461.464 486.818 430.365 451.895 430.365 350.902C430.365 261.79 462.737 214.797 522.264 214.797C581.791 214.797 614.163 245.665 614.163 350.902C614.163 449.349 580.517 486.818 520.991 486.818Z" fill="#FCFCFC"/>
            <path d="M321.311 433.517H285.777V328.877C285.777 323.319 283.569 317.989 279.639 314.059C275.709 310.129 270.379 307.921 264.821 307.921H256.495C253.743 307.921 251.018 308.463 248.475 309.517C245.933 310.57 243.623 312.113 241.677 314.059C239.731 316.005 238.187 318.315 237.134 320.858C236.081 323.4 235.539 326.125 235.539 328.877V433.517H135.309C133.247 433.517 131.22 432.984 129.425 431.97C127.629 430.955 126.127 429.494 125.062 427.728C123.998 425.962 123.408 423.951 123.35 421.89C123.292 419.829 123.768 417.788 124.731 415.965L230.814 215.184C232.136 212.681 232.938 209.936 233.17 207.114C233.402 204.293 233.061 201.453 232.165 198.767C231.27 196.082 229.84 193.605 227.961 191.487C226.082 189.369 223.793 187.654 221.233 186.445L214.971 183.488C210.108 181.192 204.549 180.853 199.444 182.541C194.338 184.23 190.077 187.816 187.542 192.558L58.1602 434.591C55.957 438.712 54.8043 443.314 54.8043 447.987C54.8043 451.719 55.5393 455.414 56.9673 458.861C58.3954 462.309 60.4885 465.441 63.1271 468.08C65.7658 470.719 68.8983 472.812 72.3459 474.24C75.7935 475.668 79.4885 476.403 83.2202 476.403H235.539V542.57C235.539 545.869 236.189 549.135 237.451 552.183C238.713 555.23 240.564 557.999 242.896 560.332C245.229 562.664 247.998 564.515 251.045 565.777C254.093 567.039 257.359 567.689 260.658 567.689H260.658C263.957 567.689 267.223 567.039 270.271 565.777C273.318 564.515 276.087 562.664 278.42 560.332C280.752 557.999 282.603 555.23 283.865 552.183C285.127 549.135 285.777 545.869 285.777 542.57V476.403H321.311C326.998 476.403 332.452 474.144 336.474 470.122C340.495 466.101 342.754 460.647 342.754 454.96C342.754 449.273 340.495 443.819 336.474 439.797C332.453 435.776 326.998 433.517 321.311 433.517Z" fill="#A27BD5"/>
            <path d="M979.308 433.517H943.774V328.877C943.774 323.319 941.566 317.989 937.636 314.059C933.706 310.129 928.376 307.921 922.818 307.921H914.491C911.739 307.921 909.014 308.463 906.472 309.517C903.929 310.57 901.619 312.113 899.673 314.059C897.727 316.005 896.184 318.315 895.131 320.858C894.077 323.4 893.535 326.125 893.535 328.877V433.517H793.305C791.243 433.517 789.216 432.984 787.421 431.97C785.626 430.955 784.123 429.494 783.059 427.728C781.995 425.962 781.405 423.951 781.347 421.89C781.289 419.829 781.764 417.788 782.728 415.965L888.81 215.184C890.133 212.681 890.934 209.936 891.167 207.114C891.399 204.293 891.057 201.453 890.162 198.767C889.266 196.082 887.836 193.605 885.957 191.487C884.078 189.369 881.79 187.654 879.23 186.445L872.967 183.488C868.105 181.192 862.546 180.853 857.44 182.541C852.334 184.23 848.073 187.816 845.538 192.558L716.157 434.591C713.953 438.712 712.801 443.314 712.801 447.987C712.801 455.523 715.795 462.751 721.124 468.08C726.453 473.409 733.68 476.403 741.217 476.403H893.535V542.57C893.535 549.232 896.182 555.621 900.893 560.332C905.603 565.043 911.992 567.689 918.654 567.689C925.316 567.689 931.706 565.043 936.416 560.332C941.127 555.621 943.773 549.232 943.773 542.57V476.403H979.308C984.995 476.403 990.449 474.144 994.47 470.122C998.492 466.101 1000.75 460.647 1000.75 454.96C1000.75 449.273 998.492 443.819 994.47 439.797C990.449 435.776 984.995 433.517 979.308 433.517Z" fill="#A27BD5"/>
            <path d="M331.114 421.264H295.58V316.624C295.58 313.872 295.038 311.147 293.984 308.605C292.931 306.062 291.388 303.752 289.442 301.806C287.496 299.86 285.186 298.317 282.643 297.263C280.101 296.21 277.376 295.668 274.624 295.668H266.297C260.74 295.668 255.409 297.876 251.479 301.806C247.549 305.736 245.341 311.066 245.341 316.624V421.264H145.111C143.049 421.264 141.023 420.731 139.227 419.716C137.432 418.702 135.929 417.241 134.865 415.475C133.801 413.709 133.211 411.698 133.153 409.637C133.095 407.576 133.571 405.535 134.534 403.712L240.616 202.931C241.939 200.428 242.74 197.683 242.973 194.861C243.205 192.04 242.863 189.2 241.968 186.514C241.072 183.828 239.642 181.352 237.763 179.234C235.884 177.116 233.596 175.401 231.036 174.192L224.773 171.235C219.911 168.939 214.352 168.6 209.246 170.288C204.141 171.976 199.879 175.563 197.344 180.305L67.9627 422.338C65.7595 426.459 64.6069 431.06 64.6069 435.734V435.734C64.6069 443.27 67.6007 450.498 72.9297 455.827C78.2587 461.156 85.4864 464.15 93.0227 464.15H245.341V530.317C245.341 533.616 245.991 536.882 247.254 539.93C248.516 542.977 250.366 545.746 252.699 548.079C255.031 550.411 257.8 552.262 260.848 553.524C263.895 554.786 267.162 555.436 270.46 555.436H270.461C277.122 555.436 283.512 552.789 288.222 548.079C292.933 543.368 295.58 536.979 295.58 530.317V464.15H331.114C333.93 464.15 336.718 463.595 339.32 462.517C341.921 461.44 344.285 459.86 346.276 457.869C348.268 455.878 349.847 453.514 350.925 450.913C352.002 448.311 352.557 445.523 352.557 442.707V442.707C352.557 439.891 352.002 437.102 350.925 434.501C349.847 431.899 348.268 429.535 346.276 427.544C344.285 425.553 341.921 423.973 339.32 422.896C336.718 421.818 333.93 421.264 331.114 421.264V421.264Z" stroke="#3F3D56" stroke-width="4" stroke-miterlimit="10"/>
            <path d="M997.688 421.264H962.153V316.624C962.153 311.066 959.945 305.736 956.016 301.806C952.086 297.876 946.755 295.668 941.197 295.668H932.871C930.119 295.668 927.394 296.21 924.852 297.263C922.309 298.317 919.999 299.86 918.053 301.806C916.107 303.752 914.564 306.062 913.51 308.605C912.457 311.147 911.915 313.872 911.915 316.624V421.264H811.685C809.623 421.264 807.596 420.731 805.801 419.716C804.006 418.702 802.503 417.241 801.439 415.475C800.374 413.709 799.785 411.698 799.727 409.637C799.669 407.576 800.144 405.535 801.108 403.712L907.19 202.931C908.512 200.428 909.314 197.683 909.546 194.861C909.779 192.04 909.437 189.2 908.542 186.514C907.646 183.828 906.216 181.352 904.337 179.234C902.458 177.116 900.17 175.401 897.61 174.192L891.347 171.235C886.485 168.939 880.925 168.6 875.82 170.288C870.714 171.976 866.453 175.563 863.918 180.305L734.536 422.338C732.333 426.459 731.181 431.06 731.181 435.734C731.181 443.27 734.174 450.498 739.503 455.827C744.832 461.156 752.06 464.15 759.596 464.15H911.915V530.317C911.915 536.979 914.562 543.368 919.272 548.079C923.983 552.789 930.372 555.436 937.034 555.436V555.436C943.696 555.436 950.085 552.789 954.796 548.079C959.507 543.368 962.153 536.979 962.153 530.317V464.15H997.688C1000.5 464.15 1003.29 463.595 1005.89 462.517C1008.49 461.44 1010.86 459.86 1012.85 457.869C1014.84 455.878 1016.42 453.514 1017.5 450.913C1018.58 448.311 1019.13 445.523 1019.13 442.707V442.707C1019.13 437.02 1016.87 431.565 1012.85 427.544C1008.83 423.523 1003.37 421.264 997.688 421.264V421.264Z" stroke="#3F3D56" stroke-width="4" stroke-miterlimit="10"/>
            <path d="M540.031 155.982C454.087 155.982 392.38 211.121 392.38 339.78C392.38 485.593 454.087 524.19 540.031 524.19C625.975 524.19 691.358 481.917 691.358 339.78C691.358 187.84 625.975 155.982 540.031 155.982ZM540.596 475.79C481.069 475.79 449.97 440.867 449.97 339.874C449.97 250.762 482.342 203.769 541.869 203.769C601.396 203.769 633.768 234.637 633.768 339.874C633.768 438.321 600.123 475.79 540.596 475.79Z" stroke="#3F3D56" stroke-width="4" stroke-miterlimit="10"/>
        </svg>
        <h1 class="error-text">Uh-oh!</h1>
        <div class="error-text">This page doesn't seem to exist!</div>
        <div class="error-text">Your link may be inexistent.</div>
	</main>
	<!--Footer-->
	<footer class="footer">
        <span>Made with &#x1F90D; by H2G2</span>
        <span>&#x1F98A; Audrey Pont – &#x1F428; Paul Gasselin – &#x1F984; Théo Sciancalepore</span>
    </footer>
</body>
</html>