<section class="bg_back">
            <header class="top_Nav wrap clearfix">
                    <ul class="Top_menu floatLeft">
                        <li><a onclick="confirm('Bạn có chắc mình muốn đăng xuất?');">Giới thiệu</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul><!--End .Top_menu-->
                    <ul class="user clearfix floatRight">
                    <?php if(isset($info) && count($info)){
                        if($info['logged_in']==1){
                            echo '
                    <li class="price_user">
                        <span><a href="">100000 VND</a></span>
                    </li>
                    
                    <li>
                        <a href="#" class="headerTinymanPhoto">
                            <img src="'.base_url().'template/uploads/1076505_100003738868761_2002716988_q.jpg" alt="user"/>
                            <span class="headerTinymanName">'.$info['fullname'].'</span>
                        </a>
                        <div class="detail_user">
                            <ul>
                                <li><h6 class="welcome">Xin chào '.$info['fullname'].' !</h6></li>
                                <li><a href="#">Đăng tin</a></li>
                                <li><a href="">Profile</a></li>
                                <li><a href="'.base_url().'index.php/home/chome/logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                        ';}
                        else {
                            echo '

                        <li><a href="#">Đăng tin</a></li>
                        <li><a href="#">Đăng nhập</a>';
                        $this->load->view('vusers/login');
                    echo '
                        </li>
                        ';}
                    } ?>
                    
                </ul>
            </header><!--End .top_Nav-->
</section>
        <section class="logo_formSearch">
            <div class="wrap clearfix">
                <a href="#" id="logo" class="floatLeft"><img src="<?php echo base_url();?>/template/uploads/logo.png" alt=""/></a>
                <form id="search" >
                    <input type="text" placeholder="search" class="txt-search"/>
                    <input type="button" id="btnSearch" class="btnsearch"/>
                </form>
                <section class="cart">
                    <a class="icon_cart"></a>
                    <span>0</span>

                </section>
            </div>
        </section><!--End .logo_formSearch-->
        
                <nav id="navigation">
            <ul class="wrap clearfix lever1">
                <li><a href="#">Home</a></li>
                <li><a href="#">man  </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Bags & Purses</a></li>
                            <li> <a href="#">Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">woman </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">kids </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">fashion </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">new </a></li>
                <li><a href="#">sale </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">new</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">Sweatshirts</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>

                <li><a href="#">Bags & Purses</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
            </ul><!--End #Navigation-->
        </nav><!--End .navigation-->
