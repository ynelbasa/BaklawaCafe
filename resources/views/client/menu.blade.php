@extends('layouts.client')

@section('content')
<section class="menu-section">
    <div class="container">
        <h2>Our Food Menu</h2>
        <p>Original Lebanese Cuisines</p>
    </div>
</section>
<section id="our_menu" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        id="breakfast-tab"
                        data-toggle="tab"
                        href="#breakfast"
                        role="tab"
                    >Breakfast</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="lunch-tab"
                        data-toggle="tab"
                        href="#dinner"
                        role="tab"
                    >Dinner</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="dinner-tab"
                        data-toggle="tab"
                        href="#weekend"
                        role="tab"
                    >Weekend</a
                    >
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content col-lg-12" id="myTabContent">
                <div
                    class="tab-pane fade show active"
                    id="breakfast"
                    role="tabpanel"
                    aria-labelledby="breakfast-tab"
                >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger"/>
                                <div class="menu_content">
                                    <h4>Chicken Burger <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    alt="black coffee"
                                />
                                <div class="menu_content">
                                    <h4>Black coffee <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/AXAHrf6.jpg"
                                    alt="fried rice"
                                />
                                <div class="menu_content">
                                    <h4>Fried Rice <span>$45</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/TAq7lDR.jpg" alt="burger"/>
                                <div class="menu_content">
                                    <h4>Chicken Burger <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    alt="black coffee"
                                />
                                <div class="menu_content">
                                    <h4>Black coffee <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/AXAHrf6.jpg"
                                    alt="fried rice"
                                />
                                <div class="menu_content">
                                    <h4>Fried Rice <span>$45</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="dinner"
                    role="tabpanel"
                    aria-labelledby="lunch-tab"
                >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/Aowufa1.jpg" alt="pizza"/>
                                <div class="menu_content">
                                    <h4>12" Pizza <span>$35</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/DJlmZDJ.jpg" alt="salad"/>
                                <div class="menu_content">
                                    <h4>Salad <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/knnQm7e.jpg"
                                    alt="green tea"
                                />
                                <div class="menu_content">
                                    <h4>green tea <span>$15</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger"/>
                                <div class="menu_content">
                                    <h4>Chicken Burger <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    alt="black coffee"
                                />
                                <div class="menu_content">
                                    <h4>Black coffee <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/AXAHrf6.jpg"
                                    alt="fried rice"
                                />
                                <div class="menu_content">
                                    <h4>Fried Rice <span>$45</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="weekend"
                    role="tabpanel"
                    aria-labelledby="dinner-tab"
                >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger"/>
                                <div class="menu_content">
                                    <h4>Chicken Burger <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    alt="black coffee"
                                />
                                <div class="menu_content">
                                    <h4>Black coffee <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/AXAHrf6.jpg"
                                    alt="fried rice"
                                />
                                <div class="menu_content">
                                    <h4>Fried Rice <span>$45</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger"/>
                                <div class="menu_content">
                                    <h4>Chicken Burger <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    alt="black coffee"
                                />
                                <div class="menu_content">
                                    <h4>Black coffee <span>$20</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img
                                    src="https://i.imgur.com/AXAHrf6.jpg"
                                    alt="fried rice"
                                />
                                <div class="menu_content">
                                    <h4>Fried Rice <span>$45</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat"/>
                                <div class="menu_content">
                                    <h4>meat <span>$24</span></h4>
                                    <p>
                                        Aperiam tempore sit,perferendis numquam repudiandae
                                        porro voluptate dicta saepe facilis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
