<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>

<style>
    /* Hide the editing section initially */
    .FrameDesignSection {
        display: none;
    }

    /* Animation for image loading */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .frameinner img {
        animation: fadeIn 0.5s ease-in-out;
    }
</style>

<main>
    <section class="file-uploadSection">
        <div class="row">
            <div class="col-lg-12">
                <div class="file-uploadMain">
                    <input type="file" accept="image/*" class="upload-photo" multiple="">
                    <label class="d-block">
                        <div class="MiniUploadBtn card">
                            <div class="MiniUploadBtn_uploadInner card-body">
                                <span class="MiniUploadBtn_sign">
                                    <svg width="16" height="16" class="w-em h-em mb-0 " fill="currentColor"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-width=".5" fill-rule="evenodd" stroke="currentColor"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z">
                                        </path>
                                    </svg>
                                </span>
                                <h6 class="instruction">Upload your Photos</h6>
                                <p class="minResolution">Minimum resolution</p>
                                <p class="sizeuploaded">125px * 112px</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </section>

    <section class="FrameDesignSection">
        <div class="wrapper">
            <div class="grid-parent">
                <div class="grid-1">
                    <ul class="LeftSidebar_designTool">
                        <!-- 1 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">

                            <button type="button" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                    class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                    <g transform="translate(1 1)">
                                        <line x1="20" transform="translate(0 4)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="20" transform="translate(0 16)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line y2="20" transform="translate(4)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line y2="20" transform="translate(16)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                    </g>
                                </svg>
                                <p class="para">Frame</p>
                            </button>
                            <ul class="designToolPropertiesLists dropdown-menu">
                                <!-- Dropdown menu links -->
                                <div class="menuParent">
                                    <p class="propertyTitle">
                                        Select Color
                                    </p>
                                </div>

                                <li type="button" class="parentProperties frame-change dropdown-item li-border-color "
                                    data-design="classic-card-design" data-price="0" data-text="Classic">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704186592728.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Classic</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties frame-change dropdown-item"
                                    data-design="bold-card-design" data-price="0" data-text="Bold">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704186603683.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Bold</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- 1 dropdown -->

                        <!-- 2 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.992" height="22"
                                    viewBox="0 0 21.992 22" class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                    <g transform="translate(1 1)">
                                        <circle cx="0.5" cy="0.5" r="0.5" transform="translate(11 4)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></circle>
                                        <circle cx="0.5" cy="0.5" r="0.5" transform="translate(15 8)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></circle>
                                        <circle cx="0.5" cy="0.5" r="0.5" transform="translate(6 5)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></circle>
                                        <circle cx="0.5" cy="0.5" r="0.5" transform="translate(4 10)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></circle>
                                        <path
                                            d="M12,2a10,10,0,0,0,0,20,1.652,1.652,0,0,0,1.648-1.688,1.712,1.712,0,0,0-.437-1.125,1.5,1.5,0,0,1-.438-1.125,1.64,1.64,0,0,1,1.668-1.668h2a5.576,5.576,0,0,0,5.555-5.554C21.965,6.012,17.461,2,12,2Z"
                                            transform="translate(-2 -2)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </g>
                                </svg>
                                <p class="para">Color</p>
                            </button>
                            <ul class="designToolPropertiesLists dropdown-menu">
                                <!-- Dropdown menu links -->
                                <div class="menuParent">
                                    <p class="propertyTitle">
                                        Select Color
                                    </p>
                                </div>

                                <li type="button" class="parentProperties dropdown-item frame-color" data-color="Black"
                                    data-src="assets/images/black-frame.png">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1703756434121.jpeg">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Black</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-color" data-color="Dark"
                                    data-src="assets/images/brown-frame.png">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1708685596474.jpeg">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Dark</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-color" data-color="White"
                                    data-src="assets/images/white-frame.png">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/170868561394.jpeg">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">White</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-color" data-color="Light"
                                    data-src="assets/images/light-frame.png">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1708685632234.jpeg">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Light</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- 2 dropdown -->

                        <!-- 3 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414" class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                    <g transform="translate(1 1.414)">
                                        <path d="M21,3,9,15" transform="translate(-3 -3)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                        <path d="M12,3H3V21H21V12" transform="translate(-3 -3)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                        <path d="M16,3h5V8" transform="translate(-3 -3)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                        <path d="M14,15H9V10" transform="translate(-3 -3)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                    </g>
                                </svg>
                                <p class="para">Size</p>
                            </button>
                            <ul class="designToolPropertiesLists dropdown-menu">
                                <!-- Dropdown menu links -->
                                <div class="menuParent">
                                    <p class="propertyTitle">
                                        Select Size (Inches)
                                    </p>
                                </div>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="318px"
                                    data-width="309px" data-max-width="500px" data-price="399">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195283683.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">8" X 8"</p>
                                        <p class="propertyPrize">₹399</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="483px"
                                    data-width="261px" data-max-width="500px" data-price="504">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195388737.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">8" X 10"</p>
                                        <p class="propertyPrize">₹504</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="389px"
                                    data-width="460px" data-max-width="500px" data-price="504">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195457270.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">10" X 8"</p>
                                        <p class="propertyPrize">₹504</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="500px"
                                    data-width="261px" data-max-width="500px" data-price="682">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195503983.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">9" X 12"</p>
                                        <p class="propertyPrize">₹682</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="261px"
                                    data-width="500px" data-max-width="500px" data-price="682">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195521559.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">12" X 9"</p>
                                        <p class="propertyPrize">₹682</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="362px"
                                    data-width="451px" data-max-width="500px" data-price="897">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195535660.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">12" X 12"</p>
                                        <p class="propertyPrize">₹897</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="509px"
                                    data-width="263px" data-max-width="500px" data-price="1318">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195552341.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">12" X 18"</p>
                                        <p class="propertyPrize">₹1318</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="263px"
                                    data-width="509px" data-max-width="500px" data-price="1318">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195567601.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">18" X 12"</p>
                                        <p class="propertyPrize">₹1318</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="362px"
                                    data-width="451px" data-max-width="500px" data-price="2022">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195580863.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">18" X 18"</p>
                                        <p class="propertyPrize">₹2022</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="509px"
                                    data-width="263px" data-max-width="500px" data-price="2638">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195597135.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">18" X 24"</p>
                                        <p class="propertyPrize">₹2638</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="263px"
                                    data-width="509px" data-max-width="500px" data-price="2638">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195794113.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">24" X 18"</p>
                                        <p class="propertyPrize">₹2638</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="509px"
                                    data-width="263px" data-max-width="500px" data-price="4558">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195815647.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">24" X 32"</p>
                                        <p class="propertyPrize">₹4558</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-size" data-height="265px"
                                    data-width="510px" data-max-width="500px" data-price="4558">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1704195831826.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">32" X 24"</p>
                                        <p class="propertyPrize">₹4558</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- 3 dropdown -->

                        <!-- 4 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                    <path
                                        d="M12,3,10.1,8.8a2,2,0,0,1-1.287,1.288L3,12l5.8,1.9a2,2,0,0,1,1.288,1.287L12,21l1.9-5.8a2,2,0,0,1,1.287-1.288L21,12l-5.8-1.9a2,2,0,0,1-1.288-1.287Z"
                                        transform="translate(-2 -2)" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                <p class="para">Finish</p>
                            </button>
                            <ul class="designToolPropertiesLists dropdown-menu">
                                <!-- Dropdown menu links -->
                                <div class="menuParent">
                                    <p class="propertyTitle">
                                        Select Finish
                                    </p>
                                </div>

                                <li type="button" class="parentProperties dropdown-item frame-finish" data-price="399">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1701851447650.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Normal</p>
                                        <p class="propertyPrize">₹399</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-finish" data-price="453">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1701851447650.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Matte</p>
                                        <p class="propertyPrize">₹453</p>
                                    </div>
                                </li>
                                <li type="button" class="parentProperties dropdown-item frame-finish" data-price="492">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1701851447650.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Gloss</p>
                                        <p class="propertyPrize">₹492</p>
                                    </div>
                                </li>
                                <li type="button" class="parentProperties dropdown-item frame-finish" data-price="537">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1701851447650.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Canvas</p>
                                        <p class="propertyPrize">₹537</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- 4 dropdown -->

                        <!-- 5 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24.413"
                                    viewBox="0 0 18 24.413" class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                    <g transform="translate(2638 17326.398)">
                                        <g transform="translate(-2636.575 -17318)">
                                            <rect width="16" height="15" rx="2" transform="translate(-0.425 -0.397)"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"></rect>
                                            <circle cx="1.5" cy="1.5" r="1.5" transform="translate(2.575 3.603)"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"></circle>
                                            <path d="M18.611,14.264,16.016,11.8a1.743,1.743,0,0,0-2.378,0L6,19.062"
                                                transform="translate(-3.508 -4.46)" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </g>
                                        <path d="M-2567-17497.715l5.251-4.811,4.893,4.811"
                                            transform="translate(-67.072 179.128)" fill="none" stroke="currentColor"
                                            stroke-width="2"></path>
                                        <circle r="2" cx="2" cy="2" fill="currentColor"
                                            transform="translate(-2631 -17326.398)"></circle>
                                    </g>
                                </svg>
                                <p class="para">Hang</p>
                            </button>
                            <ul class="designToolPropertiesLists dropdown-menu">
                                <!-- Dropdown menu links -->
                                <div class="menuParent">
                                    <p class="propertyTitle">
                                        Select Finish
                                    </p>
                                </div>

                                <li type="button" class="parentProperties dropdown-item frame-hang" data-price="399">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1702976624908.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Stickable Tape</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>

                                <li type="button" class="parentProperties dropdown-item frame-hang" data-price="453">
                                    <figure class="PropertiesleftChild">
                                        <img alt="drawer" width="72" height="72" class="LeftSidebar"
                                            src="assets/images/1702976645152.png">
                                    </figure>
                                    <div class="PropertiesRightChild">
                                        <p class="propertyName">Stickable Hook</p>
                                        <p class="propertyPrize">₹0</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- 5 dropdown -->

                        <!-- 6 dropdown -->
                        <li class="designToolPropertiesChild">
                            <button type="button">
                                <!-- <svg id="item-img-output" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                        <g transform="translate(1 1)">
                                            <path d="M6,2V16a2,2,0,0,0,2,2H22" transform="translate(-2 -2)" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                            <path d="M18,22V8a2,2,0,0,0-2-2H2" transform="translate(-2 -2)" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </g>
                                    </svg>
                                    <p class="para">Crop</p> -->


                                <label class="cabinet">
                                    <!-- <img src="" class="" id="item-img-output" /> -->
                                    <svg id="item-img-output" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" class="w-em h-em LeftSidebar_designIcon__3UjGH">
                                        <g transform="translate(1 1)">
                                            <path d="M6,2V16a2,2,0,0,0,2,2H22" transform="translate(-2 -2)" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                            <path d="M18,22V8a2,2,0,0,0-2-2H2" transform="translate(-2 -2)" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </g>
                                    </svg>
                                    <!-- <figcaption><i class="fa fa-camera"></i></figcaption> -->
                                    <p class="para">Crop</p>
                                    <input type="file" class="item-img file" name="file_photo" />
                                </label>

                            </button>
                        </li>

                        <!-- partial:index.partial.html -->
                        <!-- <div class="container mt-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <label class="cabinet">
                                            <figure>
                                                <img src="" class="gambar img-fluid img-thumbnail"
                                                    id="item-img-output" />
                                                <figcaption><i class="fa fa-camera"></i></figcaption>
                                            </figure>
                                            <input type="file" class="item-img file" name="file_photo" />
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                        <div class="modal fade customcroppopup" id="cropImagePop" tabindex="-1"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="myModalLabel">Edit Photo</h5> -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="fa fa-times" aria-hidden="true"></i>

                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="upload-demo" class="mx-auto"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn custom-btn filled"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="cropImageBtn"
                                            class="btn custom-btn filled">Crop</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->










                        <!-- 7 dropdown -->

                        <!-- 8 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button type="button" id="remove-image">
                                <svg width="15.9" height="17.5" class="w-em h-em LeftSidebar_designIcon__3UjGH"
                                    viewBox="0 0 15.9 17.5" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(-2.25 -1.25)">
                                        <path d="M3,6H17.4" transform="translate(0 -0.8)" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"></path>
                                        <path d="M16.2,6V17.2a1.721,1.721,0,0,1-1.6,1.6h-8A1.721,1.721,0,0,1,5,17.2V6"
                                            transform="translate(-0.4 -0.8)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        </path>
                                        <path d="M8,5.2V3.6A1.721,1.721,0,0,1,9.6,2h3.2a1.721,1.721,0,0,1,1.6,1.6V5.2"
                                            transform="translate(-1)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        </path>
                                        <line y2="5" transform="translate(8.2 9)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        </line>
                                        <line y2="5" transform="translate(12.2 9)" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        </line>
                                    </g>
                                </svg>
                                <p class="para">Remove</p>
                            </button>
                        </li>
                        <!-- 8 dropdown -->

                        <!-- 9 dropdown -->
                        <li class="designToolPropertiesChild btn-group dropend">
                            <button class="d-sm-none">
                                <svg class="LeftSidebar_designIcon__AcLPk" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20">
                                    <g id="Group_2" data-name="Group 2" transform="translate(-762 -1646)">
                                        <g id="Rectangle_1" data-name="Rectangle 1" transform="translate(762 1646)"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <rect width="9" height="9" rx="1" stroke="none"></rect>
                                            <rect x="1" y="1" width="7" height="7" fill="none"></rect>
                                        </g>
                                        <g id="Rectangle_3" data-name="Rectangle 3" transform="translate(762 1657)"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <rect width="9" height="9" rx="1" stroke="none"></rect>
                                            <rect x="1" y="1" width="7" height="7" fill="none"></rect>
                                        </g>
                                        <g id="Rectangle_2" data-name="Rectangle 2" transform="translate(773 1646)"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <rect width="9" height="9" rx="1" stroke="none"></rect>
                                            <rect x="1" y="1" width="7" height="7" fill="none"></rect>
                                        </g>
                                        <g id="Rectangle_4" data-name="Rectangle 4" transform="translate(773 1657)"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <rect width="9" height="9" rx="1" stroke="none"></rect>
                                            <rect x="1" y="1" width="7" height="7" fill="none"></rect>
                                        </g>
                                    </g>
                                </svg>
                                <p class="para">More</p>
                            </button>
                        </li>
                        <!-- 9 dropdown -->
                    </ul>
                </div>
                <div class="grid-2">
                    <div class="box">
                        <div class="frame-main-wrap classic-card-design" id="frameWrap">
                            <div class="frameborder inherit-design">
                                <div class="frameinner child-inherit-design">
                                    <!-- Placeholder for uploaded image -->
                                    <img alt="Frame" class="img-fluid" id="uploaded-image" src="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="multi-upload-Main">
                        <div class="file-uploadMain">
                            <input type="file" accept="image/*" class="upload-photo" multiple="">
                            <label class="d-block">
                                <div class="MiniUploadBtn card">
                                    <div class=" MiniUploadBtn_uploadInner card-body">
                                        <span class="MiniUploadBtn_sign">
                                            <svg width="16" height="16" class="w-em h-em mb-0 " fill="currentColor"
                                                viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-width=".5" fill-rule="evenodd" stroke="currentColor"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z">
                                                </path>
                                            </svg>
                                        </span>
                                        <h6 class="instruction">Upload</h6>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="multi-Images-frame-slider">
                            <div class="swiper Images-frame-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="frame-main-wrap" style="
                                            padding: 10px;
                                            border: 10px solid black;
                                            max-width: 310px;
                                            margin: auto;
                                            height: 100%;
                                            width: 100%;
                                            ">
                                                <div class="frameborder">
                                                    <div class="frameinner">
                                                        <!-- Placeholder for uploaded image -->
                                                        <img alt="Frame" class="img-fluid" id="slider-image" srcset="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid-3">
                    <div class="Right-Sidebar-Cart-Parent">

                        <div class="Right-Sidebar-header">
                            <div class="card-header">
                                <h5 class="heading-3">Frame Details</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0 row g-4">
                                    <li class="col-6">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="22" height="22" viewBox="0 0 22 22"
                                                class="w-em h-em ttl-22 mb-0">
                                                <g transform="translate(1 1)">
                                                    <line x1="20" transform="translate(0 4)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></line>
                                                    <line x1="20" transform="translate(0 16)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></line>
                                                    <line y2="20" transform="translate(4)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></line>
                                                    <line y2="20" transform="translate(16)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></line>
                                                </g>
                                            </svg>
                                            <div class="frame-detail">
                                                <p class="para">Frame </p>
                                                <h6 class="heading-4" id="frame-show">Classic</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="21.992" height="22" viewBox="0 0 21.992 22"
                                                class="w-em h-em ttl-22 mb-0">
                                                <g transform="translate(1 1)">
                                                    <circle cx="0.5" cy="0.5" r="0.5" transform="translate(11 4)"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></circle>
                                                    <circle cx="0.5" cy="0.5" r="0.5" transform="translate(15 8)"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></circle>
                                                    <circle cx="0.5" cy="0.5" r="0.5" transform="translate(6 5)"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></circle>
                                                    <circle cx="0.5" cy="0.5" r="0.5" transform="translate(4 10)"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></circle>
                                                    <path
                                                        d="M12,2a10,10,0,0,0,0,20,1.652,1.652,0,0,0,1.648-1.688,1.712,1.712,0,0,0-.437-1.125,1.5,1.5,0,0,1-.438-1.125,1.64,1.64,0,0,1,1.668-1.668h2a5.576,5.576,0,0,0,5.555-5.554C21.965,6.012,17.461,2,12,2Z"
                                                        transform="translate(-2 -2)" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    </path>
                                                </g>
                                            </svg>
                                            <div class="frame-detail">
                                                <p class="para">Color </p>
                                                <h6 class="heading-4" id="color-show">Black</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20.414" height="20.414" viewBox="0 0 20.414 20.414"
                                                class="w-em h-em ttl-22 mb-0">
                                                <g transform="translate(1 1.414)">
                                                    <path d="M21,3,9,15" transform="translate(-3 -3)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></path>
                                                    <path d="M12,3H3V21H21V12" transform="translate(-3 -3)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></path>
                                                    <path d="M16,3h5V8" transform="translate(-3 -3)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></path>
                                                    <path d="M14,15H9V10" transform="translate(-3 -3)" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"></path>
                                                </g>
                                            </svg>
                                            <div class="frame-detail">
                                                <p class="para">Size </p>
                                                <h6 class="heading-4" id="size-show">8" X 8"</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" viewBox="0 0 20 20"
                                                class="w-em h-em ttl-22 mb-0">
                                                <path
                                                    d="M12,3,10.1,8.8a2,2,0,0,1-1.287,1.288L3,12l5.8,1.9a2,2,0,0,1,1.288,1.287L12,21l1.9-5.8a2,2,0,0,1,1.287-1.288L21,12l-5.8-1.9a2,2,0,0,1-1.288-1.287Z"
                                                    transform="translate(-2 -2)" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                </path>
                                            </svg>
                                            <div class="frame-detail">
                                                <p class="para">Finish </p>
                                                <h6 class="heading-4" id="finish-show">Normal</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="24.413" viewBox="0 0 18 24.413"
                                                class="w-em h-em ttl-24 mb-0">
                                                <g transform="translate(2638 17326.398)">
                                                    <g transform="translate(-2636.575 -17318)">
                                                        <rect width="16" height="15" rx="2"
                                                            transform="translate(-0.425 -0.397)" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"></rect>
                                                        <circle cx="1.5" cy="1.5" r="1.5"
                                                            transform="translate(2.575 3.603)" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"></circle>
                                                        <path
                                                            d="M18.611,14.264,16.016,11.8a1.743,1.743,0,0,0-2.378,0L6,19.062"
                                                            transform="translate(-3.508 -4.46)" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"></path>
                                                    </g>
                                                    <path d="M-2567-17497.715l5.251-4.811,4.893,4.811"
                                                        transform="translate(-67.072 179.128)" fill="none"
                                                        stroke="currentColor" stroke-width="2"></path>
                                                    <circle r="2" cx="2" cy="2" fill="currentColor"
                                                        transform="translate(-2631 -17326.398)"></circle>
                                                </g>
                                            </svg>
                                            <div class="frame-detail">
                                                <p class="para">Hang </p>
                                                <h6 class="heading-4" id="hang-show">Stickable Tape</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="summary-card-footer">
                                <p class="para">Item Price</p>
                                <h6 class="prizing" id="price-show">₹399</h6>
                            </div>
                        </div>
                        <div class="Right-Sidebar-footer">
                            <div class="GrandTotal">
                                <p class="">Grand Total</p>
                                <h6 class="">₹399</h6>
                            </div>
                            <button type="button" class="btn custom-btn filled"> Add to Cart
                                <svg width="21" height="21" viewBox="0 0 21 21"
                                    class="w-em h-em RightSidebar_addtocart_btn_icon__nIKa3"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(-1336 -29)">
                                        <g transform="translate(1335.75 28.891)">
                                            <path
                                                d="M5.583,2,3,5.444V19.219c.744-.008.771,0,1.722,0H18.5c0-1.634,0-.771,0-1.722V5.444L15.914,2Z"
                                                transform="translate(0)" fill="none" stroke="currentColor"
                                                stroke-width="2"></path>
                                            <line x2="15" transform="translate(3 6)" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <path d="M14.888,10A3.444,3.444,0,1,1,8,10"
                                                transform="translate(-0.695 -1.112)" fill="none" stroke="#9d0b78"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'include/header.php' ?>