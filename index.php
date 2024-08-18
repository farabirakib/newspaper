<?php
require_once 'models/HeaderFooter.php';

$HeaderFooter=new \models\HeaderFooter();

$header=$HeaderFooter->header();









$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://fakenews.squirro.com/news/entertainment",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$newsAr = json_decode($response, true);

$heroNews = array_splice($newsAr['news'], 1, 3);

$sidebarNews = array_splice($newsAr['news'], 3, 7);

$hero_ar = "";
foreach ($heroNews as $det_ar) {
    $hero_ar .= "
        <div class=\"hero-news\">
            <div class=\"hero-news-img\">
                <img src=\"https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F8a8fafe2-14bf-4e41-ab72-869b2a89cd73%2F453478-01-02.jpg?rect=0%2C0%2C5457%2C3638&auto=format%2Ccompress&fmt=webp&format=webp&w=240&dpr=1.5\">
            </div>
            <div class=\"hero-news-body\">
                " . $det_ar['headline'] . "
            </div>
        </div>
        ";
}
$side_ar = "";
foreach ($sidebarNews as $det_ar) {
    $side_ar .= "
        <div class=\"sidebar-news\">
            <div class=\"sidebar-news-img\">
                <img src=\"https://images.prothomalo.com/prothomalo-bangla%2F2021-08%2F27aa791f-0e37-40f7-a11c-a5eddd6d68b6%2F233090851_10227232504177318_1534901083189737337_n.jpg?rect=237%2C0%2C1680%2C1120&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3\">
            </div>
            <div class=\"sidebar-news-title\">
                " . $det_ar['headline'] . "
            </div>
        </div>
        ";
}



$side_ar1 = "";
foreach ($sidebarNews as $det_ar) {
    $side_ar1 .= "
        <div class=\"sidebar1-news\">
            <div class=\"sidebar1-news-img\">
                <img src=\"https://www.bahannonews.com/img/e/aHR0cHM6Ly93d3cuYmFoYW5ub25ld3MuY29tL3VwbG9hZHMvZGRmZWI1ZTBiZTU1YzM1MjRmMjViYjQ1MTNmNTIyOTQuanBn,120.jpg\">
            </div>
            <div class=\"sidebar1-news-title\">
                " . $det_ar['headline'] . "
            </div>
        </div>
        ";
}



$side_ar2 = "";
foreach ($sidebarNews as $det_ar) {
    $side_ar2 .= "
        <div class=\"sidebar2-news\">
            <div class=\"sidebar2-news-img\">
                <img src=\"https://www.bahannonews.com/img/e/aHR0cHM6Ly93d3cuYmFoYW5ub25ld3MuY29tL3VwbG9hZHMvYzIzMTNlZDA5N2JjMzczNDRhM2UzMTc2ZWI3YWU3YzIuanBn,360.jpg\">
            </div>
            <div class=\"sidebar2-news-title\">
                " . $det_ar['headline'] . "
            </div>
        </div>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>NewsPaper|Practis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">


</head>
<body>
     <!--Header Section Start-->
     <?=$header?>

<!--Header Section End-->

<!--total news-->
<div class="container ">
    <div class="row mb-4">
        <div class="col-9 ">
            <div class="row">
                <div class="col-8 mb-4">
                    <div class="lead-news">
                        <div class="lead-news-img" >
                            <img src="https://www.bahannonews.com/img/e/aHR0cHM6Ly93d3cuYmFoYW5ub25ld3MuY29tL3VwbG9hZHMvZGRmZWI1ZTBiZTU1YzM1MjRmMjViYjQ1MTNmNTIyOTQuanBn,600.jpg"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <?= $hero_ar ?>
                </div>


<!--hero1 start-->
            <div class="col-4 mb-4">
                <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fd939711f-65a2-42f7-98df-f7c79eed1285%2FWhatsApp%20Image%202024-07-15%20at%207.11.10%20PM.jpeg?rect=88%2C0%2C905%2C603&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div>
            </div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fd9f04acf-5274-4509-9124-79c933f4f8b9%2F451440-01-02.jpg?rect=0%2C0%2C3472%2C2315&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][2]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][2]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F99ba95b7-3657-4b37-a061-eb10a1ceded6%2F%E0%A7%A9.PNG?rect=0%2C0%2C1280%2C853&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fe3ab6565-61af-4343-9301-1d1e798b4b6d%2FOlympic.jpg?rect=1%2C0%2C999%2C666&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fce874f99-2f72-4422-a55b-1cc91c2d2810%2F150596.jpg?rect=90%2C0%2C702%2C468&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F17c79d77-53cf-4348-81b7-63c11dada35d%2Fuk_1.jpg?rect=0%2C0%2C800%2C533&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div>
                </div>
            </div>
</div>



<!--sidebar start-->
        <div class="col-3">
            <div class="sidebar">
                <div class="sidebar-title">
                    সর্বশেষ
                </div>
                <div class="sidebar-body">
                    <?=$side_ar?>
                </div>
            </div>
<!--sidebar end-->

        <div class="side-pic">
            <img src="https://www.bahannonews.com/static/media/globalassistant.fa1868104aece5a287a9.gif">

        </div>
     </div>
    </div>
</div>

<!--hero1 end-->


        
<!--ad start-->
<div class="container">
    <div class="row">
        <div class="col-12">
           <center> <img src="https://www.bahannonews.com/static/media/Panjeree-2.8cc1cc5e88f1ed3cddd3.gif" alt=""></center>
        </div>
    </div>
 </div>
 <!--ad end-->


 <!--Category(raj) Title start-->
  <div class="container">
    <div class="row">
        
        <div class="col-3 ">
        <div class="sidebar">
                <div class="sidebar-title">
                মতামত

                </div>
                <div class="sidebar-body">
                    <?=$side_ar1?>
                </div>
            </div>
        <div class="side-pic-2">
            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2023-07%2F01ce9a36-5626-41cd-a4c2-8f69ecd57311%2FWhatsApp_Image_2023_04_29_at_17_27_33__4_.jpeg?rect=0%2C0%2C1600%2C1067&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3">

        </div>
</div>
        <div class="col-9">

        <div class="Category-news">
        <div class="col-12  mb-4 " style="height: 40px;">রাজনীতি</div>
        </div>
            <div class="row">
<div class="col-4 mb-4">
                <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fb89efadd-021b-4f72-a8d6-021340ca6a1c%2Flutopiamagazine_1716097163_3371189804004815313_39459429887.webp?rect=90%2C0%2C912%2C608&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div>
            </div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F6b046c27-1a61-4b64-b5af-a68f292b6545%2FIMG_3254.JPG?rect=303%2C0%2C3266%2C2177&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][2]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][2]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F99ba95b7-3657-4b37-a061-eb10a1ceded6%2F%E0%A7%A9.PNG?rect=0%2C0%2C1280%2C853&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-06%2F96118217-cd3d-443f-8ace-8f2b4b67e2a8%2F3cbdd9b8_c280_43c7_9dbe_7ca5c6a485f5.jfif?rect=0%2C8%2C1600%2C1067&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F9bafcbca-3f03-4d78-9ac5-9b0ee81d2b45%2F459351-01-02.jpg?rect=0%2C0%2C7419%2C4946&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fd9770383-a7f8-4221-bcaa-b2eb1a1e3ce5%2Fcyber%20attack.Reuters.png?rect=4%2C0%2C810%2C540&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div>
                </div>
            </div>
      </div>
            </div>
        </div>
    </div>
</div>
<!--Category Title end-->


<!--Category Title 2start-->
<div class="container">
    <div class="row">
    
        <div class="col-9">
            <div class="Category2-news">
                 <div class="col-12 bg-warning mb-4" style="height: 40px;">Category Title 2</div>
            </div>
       
            
            <div class="row">
            <div class="col-4 mb-4">
                <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fd939711f-65a2-42f7-98df-f7c79eed1285%2FWhatsApp%20Image%202024-07-15%20at%207.11.10%20PM.jpeg?rect=88%2C0%2C905%2C603&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div>
            </div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fd9f04acf-5274-4509-9124-79c933f4f8b9%2F451440-01-02.jpg?rect=0%2C0%2C3472%2C2315&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][2]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][2]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fb4b4325b-8513-4d55-b6a7-a4a8553fc1f1%2F449045679_18344575315143120_8498649429682049096_n.jpg?rect=215%2C0%2C1215%2C810&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fe9cfa557-5a09-4580-8a3c-6795733ba18b%2FTanjin%20Tisha.jpg?rect=0%2C148%2C1536%2C1024&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4 ">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2Fce874f99-2f72-4422-a55b-1cc91c2d2810%2F150596.jpg?rect=90%2C0%2C702%2C468&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][1]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][1]['abstract'] ?>
                        </div>
                    </div></div>
                <div class="col-4 mb-4">
                    <div class="hero1-news">
                        <div class="hero1-news-img" >
                            <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-07%2F17c79d77-53cf-4348-81b7-63c11dada35d%2Fuk_1.jpg?rect=0%2C0%2C800%2C533&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.3"
                                 alt=""style="width:100% height=100%">
                        </div>
                        <div class="title">
                            <?= $newsAr['news'][0]['headline'] ?>
                        </div>
                        <div class="sub-title">
                            <?= $newsAr['news'][0]['abstract'] ?>
                        </div>
                    </div>
                </div>
            </div>
</div>
        <div class="col-3">
            <div class="sidebar">
                <div class="sidebar-title">
                    সর্বশেষ
                </div>
                <div class="sidebar-body">
                    <?=$side_ar2?>
                </div>
                <div class="side-pic-2">
            <img src="https://www.bahannonews.com/static/media/pbs.5c2ad0290a74fbef6b51.gif">

        </div>
            </div>
        
        </div>
    </div>
</div>

<!--Category Title2 end-->
<!--total news-->

<!--Footer Section Start-->
<div class="container">
    <div class="footer-section">
       © mdrakibulislam.xyz bestnews 2024>
    </div>
</div>


<div class="container">
    <div class="row">
    
        <div class="col-4">
            <div class="footer-logo">
                <img src="image/logo.png" alt="loading....">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti cumque totam odio, fugiat ipsa sequi corrupti repudiandae reiciendis sunt pariatur quibusdam quod consectetur. Ipsam, cupiditate. Repellendus perspiciatis mollitia doloremque cumque?</p>
                <h3>follow us</h3>
                <ul class="ml-0">
                     
                         <li>
                            <a href="https://www.facebook.com/"><i class='bx bxl-facebook-circle'targer="blank"></i></a>
                          </li>
                          <li>
                            <a href="https://www.email.com/lander"><i class='bx bx-envelope'style="color:red" ></i></a>
                          </li>
                          <li>
                            <a href="http://www.whatsapp.com/"><i class='bx bxl-whatsapp'style="color:green" ></i></a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/"><i class='bx bxl-instagram'style="color:red" ></i></a>
                            <li>
                             <a href="https://www.linkedin.com/hp"><i class='bx bxl-linkedin'></i></a>
                            </li>
                </ul>
            </div>
            
        </div>
        <div class="col-4">
           <div class="contacts">
            <h3>Quick contacts</h3>
            <ul>
                <li>
                <i class='bx bxs-location-plus' ></i>
                <span class="text">25 Street,Khulna,Bangladesh</span>
                </li>
                <li>
                <i class='bx bxs-phone' ></i>
                +01725663176<span class="text">+01725663176</span>
                </li>
                <li>
                <i class='bx bx-envelope' ></i>
                <span class="text">mdrakib399@email.com</span>
                </li>
                <li>
                <i class='bx bxl-internet-explorer' ></i>
                <span class="text">www.explorer.com</span>
                </li>
            </ul>
           </div>

        </div>
        <div class="col-4  bg-danger">
            <h3>Popular Search</h3>
            <div class="Popular">
                <ul>
                    <li>Specail Event</li>
                    <li>Facebook live</li>
                    <li>Ads price list</li>
                    <li>Features</li>
                    <li>Image</li>
                    <li>Videos</li>
                </ul>
            </div>
        </div>
    </div>
    
</div> 


<div claas="col-3  "style="display:flex; height: 40px;"><div class="shironam1"></div> <div class="shironam">শিরোনাম: </div>
 <marquee behavior="jomve" direction="">প্রাণহানির প্রতিটি ঘটনার বিচার বিভাগীয় তদন্ত হবে : প্রধানমন্ত্রী
| জাতির উদ্দেশে ভাষণে যা বললেন প্রধানমন্ত্রী
| কারবালার স্মরণে তাজিয়া মিছিলে মানুষের ঢল
| হল ছাড়ছেন কলেজ</marquee>

</div>



<!--Footer Section End-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>