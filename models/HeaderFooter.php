<?php
namespace models;
class HeaderFooter{
    function header()
    {
        $menuAr = ['সর্বশেষ', 'রাজনীতি', 'বাংলাদেশ', 'অপরাধ', 'বিশ্ব', 'বাণিজ্য', 'মতামত', 'খেলা', 'বিনোদন', 'চাকরি', 'জীবনযাপন'];
        $menu = "";
        foreach ($menuAr as $item) {
            $menu .= " <li>
                        <a href=\"#\">$item</a>
                    </li>";
        }
        return"
                 <!--Header Section Start-->\
<div class=\"container\">
    <div class=\"header-section\">
        <div class=\"header-section-top\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <div class=\"search-area\">
                        <input class=\"srch\"type=\"text\" placeholder=\"Search........\"requir>
                            <i class='bx bx-search-alt-2'></i>
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"header-logo\">
                        <img src=\"image/logo.png\" alt=\"Logo\">
                    </div>
                </div>
                <div class=\"col-4\">
                    <div class=\"header-social\">
                        <ul>
                          <li>
                            <a href=\"https://www.facebook.com/\"><i class='bx bxl-facebook-circle'targer=\"blank\"></i></a>
                          </li>
                          <li>
                            <a href=\"https://www.email.com/lander\"><i class='bx bx-envelope'style=\"color:red\" ></i></a>
                          </li>
                          <li>
                            <a href=\"http://www.whatsapp.com/\"><i class='bx bxl-whatsapp'style=\"color:green\" ></i></a>
                          </li>
                          <li>
                            <a href=\"https://www.instagram.com/\"><i class='bx bxl-instagram'style=\"color:red\" ></i></a>
                            <li>
                             <a href=\"https://www.linkedin.com/hp\"><i class='bx bxl-linkedin'></i></a>
                            </li>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <div class=\"header-section-menu\">
            <ul>
                <li><a href=\"home details\" class=\"menu-active\"><i class='bx bxs-home' ></i></a></li>
                " . $menu . "
               
            </ul>
        </div>
    </div>
</div>
<!--Header Section end-->











        ";
    }
    


}