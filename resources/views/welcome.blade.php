@extends('layouts.front_end.app')
@section('content')
    <section class="about-one" style="background-image: url({{ asset('data/bg-image.png') }});">
        <div class="about-one__shape-3 float-bob-x">
            <img src="{{ asset('data/shape2.png') }}" alt="" style="width:250px;">
        </div>
        <div class="about-one__shape-4 float-bob-y">
            <img src="{{ asset('data/shape1.png') }}" alt="" style="width:300px;">
        </div>

        <div class="container">
            <div class="row">


                <div class="col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="section-title text-center sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">About Us</span>
                                        <div class="section-title__tagline-shape"></div>
                                    </div>
                                    <h3 class="section-title__title title-animation">Welcome From <br>
                                        <span>I AM Myanmar Company</span>
                                    </h3>
                                </div>
                                <br>
                                <p class="about-two__text flex" style="font-size: 16px;text-align: left;">Your Foreign
                                    Worker Recruitment and
                                    Employment Agency joint @
                                    Myanmar.
                                    Our Company, I Am Myanmar Co.,Ltd is one of the reputed foreign
                                    worker recruitment groups that includes all agencies from
                                    Myanmar, a licensed with the Ministry of Investment and Foreign
                                    Economic Relations (MIFER).I Am Myanmar Co.,Ltd provides
                                </p>
                                <div class="about-two__right">

                                    <div class="about-two__points-and-vission-mission">
                                        <div class="col-lg-7 col-md-12">
                                            <div class="about-two__points-box">
                                                <ul class="about-two__points list-unstyled">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-comment"></span>
                                                        </div>
                                                        <p style="font-size: 16px;">the specialized recruitment services</p>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-comment"></span>
                                                        </div>
                                                        <p>different levels of employees on our client’s demand in various
                                                            industries</p>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-comment"></span>
                                                        </div>
                                                        <p>safe and secure working environment for employees</p>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-12">
                                            <div class="about-two__vission-mission">
                                                <div class="about-two__tab-box tabs-box">
                                                    <ul class="tab-buttons clearfix list-unstyled">
                                                        <li data-tab="#vission" class="tab-btn active-btn">
                                                            <span>vision</span>
                                                        </li>
                                                        <li data-tab="#mission" class="tab-btn">
                                                            <span>mission</span>
                                                        </li>
                                                    </ul>
                                                    <div class="tabs-content">
                                                        <!--tab-->
                                                        <div class="tab active-tab" id="vission">
                                                            <div class="tabs-content__inner">
                                                                <p>

                                                                    Whether you are a global organization or a small
                                                                    start-up,
                                                                    we are
                                                                    devoted to helping you grow rapidly with minimum risks,
                                                                    losses, as well
                                                                    as maximum satisfaction and results.</p>
                                                            </div>
                                                        </div>
                                                        <!--tab-->
                                                        <!--tab-->
                                                        <div class="tab" id="mission">
                                                            <div class="tabs-content__inner">
                                                                <p>At I Am Myanmar Co.,Ltd, we aim to successfully connect
                                                                    businesses and
                                                                    job seekers for a better future by offering smart,
                                                                    measurable, and
                                                                    efficient recruitment services.</p>
                                                            </div>
                                                        </div>
                                                        <!--tab-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="col-xl-12 py-3">
                    <div class="about-two__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Welcome From <br>
                                <span>IM Myanmar Company</span>
                            </h2>
                        </div>
                        <p class="about-two__text">Your Foreign Worker Recruitment and Employment Agency joint @
                            Myanmar.
                            Our Company, I Am Myanmar Co.,Ltd is one of the reputed foreign
                            worker recruitment groups that includes all agencies from
                            Myanmar, a licensed with the Ministry of Investment and Foreign
                            Economic Relations (MIFER).I Am Myanmar Co.,Ltd provides
                        </p>


                        <div class="about-two__points-and-vission-mission">
                            <div class="about-two__points-box">
                                <ul class="about-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <p>the specialized recruitment services</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <p>different levels of employees on our client’s demand in various industries</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <p>safe and secure working environment for employees</p>
                                    </li>

                                </ul>

                            </div>
                            <div class="about-two__vission-mission">
                                <div class="about-two__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#vission" class="tab-btn active-btn">
                                            <span>vision</span>
                                        </li>
                                        <li data-tab="#mission" class="tab-btn">
                                            <span>mission</span>
                                        </li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="vission">
                                            <div class="tabs-content__inner">
                                                <p>

                                                    Whether you are a global organization or a small start-up, we are
                                                    devoted to helping you grow rapidly with minimum risks, losses, as well
                                                    as maximum satisfaction and results.</p>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="mission">
                                            <div class="tabs-content__inner">
                                                <p>At I Am Myanmar Co.,Ltd, we aim to successfully connect businesses and
                                                    job seekers for a better future by offering smart, measurable, and
                                                    efficient recruitment services.</p>
                                            </div>
                                        </div>
                                        <!--tab-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>


    </section>





    <section class="about-one">
        <div class="container">
            <div class="row">
                <!-- Title Section -->
                <div class="col-xl-4 col-lg-4 col-md-12 mb-4">
                    <div class="about-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape"></div>
                            </div>
                            <h4 class="section-title__title title-animation" style="font-size: 22px;">
                                IM MYANMAR CO.,LTD <span>アイアムミャンマー情報</span>
                            </h4>
                        </div>
                        <img src="{{ asset('data/training1.png') }}" alt="" style="border-radius:10px;">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="why-choose-one__right">

                        <table class="table">
                            <tbody>
                                <tr>

                                    <td style="color:rgb(98, 93, 93);width:30%; border: none;">
                                        <span style="font-size:16px;">会社名</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">I Am Myanmar Co.,Ltd</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:rgb(98, 93, 93);width:30%; border: none;">
                                        <span style="font-size:16px;">事務所</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93);width:70%; border: none;">
                                        <span style="font-size:16px;">Room No.3-236, Building No.11B Ayar Chan Thar Condo,
                                            Ward (61) Dagon Seikkan Township, Yangon, Myanmar</span><br>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">設立日</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">2020年8月23日</span><br>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">業務内容</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">各種物版、情報サービス、海外人材派遣、学校運営、企業コンサル</span><br>

                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">役員</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">Han Myo Win(代表取締役)</span><br>

                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">社員数</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">10名</span><br>

                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">電話番号</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">(+95)9 765 557 785 / 86 (ミャンマー)
                                            (+81)7011478880(日本)</span><br>

                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">E-mail</span><br>
                                    </td>
                                    <td style="color:rgb(98, 93, 93); border: none;">
                                        <span style="font-size:16px;">contact@iam.myanmar.com</span><br>

                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>


                <!-- Company Info Table -->


            </div>
        </div>
    </section>







    <section class="testimonial-two" hidden>
        <div class="testimonial-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
        </div>
        <div class="testimonial-two__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Networks</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation">Our Goal is to Make your Life Better </h2>
            </div>

            {{-- <p class="case-details__text-4">Out enigma ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in the
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur. Excepteur
                                snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.</p> --}}


            <div class="case-details__img-and-points py-5">
                <div class="case-details__points-img">
                    <img src="{{ asset('data/group6.png') }}" alt="">
                </div>
                <div class="case-details__points-img">
                    <img src="{{ asset('data/group1.png') }}" alt="">
                </div>

                <div class="case-details__points-img">
                    <img src="{{ asset('data/group3.png') }}" alt="">
                </div>

                {{-- <div class="case-details__points-img">
                    <img src="{{ asset('data/group4.png') }}" alt="">
                </div> --}}

            </div>
            <div class="testimonial-two__carousel owl-carousel owl-theme" hidden>
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <img src="{{ asset('data/group2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('data/group1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('data/group3.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('data/group4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="team-two" hidden>
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Attorneys</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation">Exceptional Legal Lawyers, <br>
                    <span>Proven Results</span>
                </h2>
            </div>
            <div class="team-two__carousel owl-carousel owl-theme">
                <!-- Team Two Single Start -->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/russia.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">Russia</a></h3>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/china.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">China</a></h3>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/thailand.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">Thailand</a></h3>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/singapore.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">Singapore</a></h3>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/malaysia.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">Malaysia</a></h3>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('data/japan.png') }}" alt="">

                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="">Japan</a></h3>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- visa / .... --}}
    <section class="case-details" style="background-image: url({{ asset('data/bg-img.png') }});" hidden>
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our Services</span>
                <div class="section-title__tagline-shape"></div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/china.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            パスポート取得
                        </p>
                        <p class="case-details__text-3">
                            ミャンマーでの独自のパスポート申請サービスを通じて、 パスポートの取得を容易にしました。当社ではプロセスを合理化し、ミャンマー人労働者が安心してパスポート申請が出来ることをお約束致します。
                        </p>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/russia.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            ※申請書類作成
                        </p>
                        <p class="case-details__text-3">

                            我々は海外での雇用や国際業務での公文書の重要性を理解しています。当社では経験豊富な書類作成の専門スタッフが迅速かつ正確な公文書作成を行っております。
                            企業様・ミャンマー人労働者に信頼・安心して頂くために雇用契約書やその他海外で働くために必要な書類作成の全てを当社スタッフがお手伝いさせて頂くことをお約束致します。

                        </p>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/singapore.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            ※VISA申請
                        </p>
                        <p class="case-details__text-3">

                            当社の経験豊富なスタッフがVISA申請業務を代行させて頂きます。ミャンマー人労働者が安心して海外勤務の準備が出来るように、VISA申請に関わる全てのお手伝いをさせて頂くことをお約束致します。

                        </p>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/japan.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            ※航空券の手配
                        </p>
                        <p class="case-details__text-3">
                            ミャンマー人労働者が安心して海外に行けるように、 当社の専門スタッフが航空券を手配します。
                        </p>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/malaysia.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            学生への教育
                        </p>
                        <p class="case-details__text-3">
                            私たちのグループでは、日本語・韓国語の語学学校も併設しております。この学校では、教科書を使った授業に加え、早い段階から会話や記述などアウトプットに関するトレーニングも行っています。
                            また、日本の特定技能試験に対応するクラスもございます。
                            このクラスでは主に介護・外食業についての教育を行っております。
                        </p>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <div class="case-details__text-img">
                        <img src="{{ asset('data/malaysia.png') }}" alt=""
                            style="width: 100%; height: auto; border-radius: 10px; max-height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-xl-9 col-lg-6 col-md-12">
                    <div class="case-details__text-img">
                        <p class="case-details__text-3" style="font-weight:bold; color:black">
                            学生への教育
                        </p>
                        <p class="case-details__text-3">
                            海外の企業様との面接合格者に関しては、現地での生活に早く馴染めるように各国の生活スタイルやマナー、習慣なども教育しております。
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section>



    {{-- トレーニングセンター / Training Center  --}}
    <section class="about-one">
        <div class="container">
            <div class="row">
                <!-- Title Section -->

                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="why-choose-one__right">
                        <div class="section-title text-right sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Training Center</span>
                                <div class="section-title__tagline-shape"></div>
                            </div>
                            <h4 class="section-title__title title-animation" style="font-size: 22px;">
                                <span>トレーニングセンター</span>
                            </h4>
                        </div>
                        <p style="font-size: 14px; text-align:justify">
                            I Am Myanmarでは日本語学校だけでなく、実習生や労働者の日本での生活をより快適なものにし、雇用主様との関係を良好なものにするため、TRAINING CENTERを併設しております。
                        </p>
                        <p style="font-size: 14px; text-align:justify">
                            このTRAINING
                            CENTERでは、寮での共同生活を通じて協調性の醸成と規則正しい生活を身につけることを目的とし、また日本人教師による日常会話と日本語発声練習に加え、日本の法律、習慣、ルール、マナーなどの教育を座学と実習で行っております。
                        </p>

                        <p style="font-size: 14px;text-align:justify">
                            他の送り出し機関でも入国前講習は行っていますが、弊社では他のエージェントとの差別化を図るため面接合格者のみならず、現在日本語勉強中の学生にもTRAINING
                            CENTERで実習を行っており、より良い人材の育成努めております。
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 mb-4">
                    <div class="about-two__left">

                        <img src="{{ asset('data/class1.jpg') }}" alt="" style="border-radius:10px;">
                    </div>
                </div>

                <!-- Company Info Table -->


            </div>
        </div>
    </section>


    {{-- 御紹介  --}}
    <section class="service-details" style="background-image: url({{ asset('data/about-bg1.png') }}); ">
        <div class="about-one__shape-3 float-bob-x">
            <img src="{{ asset('data/shape2.png') }}" alt="" style="width:250px;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__services-box">
                            <h3 class="service-details__services-title">About Us</h3>
                            <ul class="service-details__services-list list-unstyled">

                                <li>
                                    <a href="">Company Information<span class="icon-right-arrow-1"></span></a>
                                </li>
                                <li>
                                    <a href="">Employer Form<span class="icon-right-arrow-1"></span></a>
                                </li>
                                <li>
                                    <a href="">Activities<span class="icon-right-arrow-1"></span></a>
                                </li>
                                <li>
                                    <a href="">News<span class="icon-right-arrow-1"></span></a>
                                </li>


                            </ul>
                        </div>

                        <div class="service-details__sidebar-contact text-center" style="background-color: #fdfae0">
                            <div class="service-details__sidebar-contact-img" style="background-color: #fdfae0">
                                <div class="inner" hidden>
                                    <img src="{{ asset('assets/images/services/service-details-sidebar-img.png') }}"
                                        alt="">
                                </div>
                                <br>

                            </div>
                            <br>

                            <div class="service-details__sidebar-contact-content" style="background-color: #fdfae0">
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <h3><a href="tel:+959 765 148 521"><span style="color:#15313d">+959 765 148 521</span></a>
                                </h3>
                                <h3>If You Need Any Help <br>
                                    Contact With Us</h3>
                            </div>




                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details">

                        <h3 class="service-details__title-1" style="font-size: 28px;">御紹介</h3>
                        <p style="font-size:14px;" style="font-size:14px;">
                            I Am Myanmar Co., Ltd
                            は、ミャンマーのヤンゴンで送り出し機関や日本語学校を経営しているグループです。送り出し機関5社と系列の日本語学校を4校、入国前講習を行うトレーニングセンターで組織しています。

                        </p>
                        <br>
                        <p style="font-size:14px;">
                            現在までに日本をメインに、韓国、タイ、マレーシア、シンガポール等の様々な業種の日系企業様にミャンマー人材を送らせて頂いております。現在、各国で働いた後ミャンマーに帰国した各業種の経験者やこれから海外(主に日本)で働きたいという意欲ある若者が大勢在籍しております。
                        </p>
                        <br>
                        <p style="font-size:14px;">
                            弊社の事業内容は、技能実習生、特定技能、ワーキングビザでの労働者の派遣、また日本への語学留学のサポート等を行っております。
                        </p>
                        <br>
                        <p style="font-size:14px;">
                            グループ代表者は日本在住歴20年以上のミャンマー人、さらにアドバイザーとして現地在住日本人を迎え、完全日本語対応のサービスと受入企業様に安心して頂けるサービスの提供をお約束致します。
                        </p>
                        <br>
                        <p style="font-size:14px;">
                            ミャンマー人の採用をご検討の際は、是非弊社にお問い合わせのほど宜しくお願い致します。
                        </p>
                        <br>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        {{-- <div class="service-details__img-box-img">
                                            <img src="{{ asset('data/class1.jpg') }}" alt="">
                                        </div> --}}
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                </div>
                                                <h4 class="service-details__img-box-content-title"
                                                    style="font-size:18px;">
                                                    アイアムミャンマー情報
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Message to Our Students --}}
    <section class="video-one">
        <div class="video-one__bg-color">
            <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('data/students_bg/1.jpg') }});">
            </div>
        </div>
        <div class="container">
            <div class="video-one__inner">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Message to Our Students</span>
                        <div class="section-title__tagline-shape"></div>
                    </div>
                    <h2 class="section-title__title title-animation">学生へのメッセージ </h2>
                </div>

                <p style="font-size:14px;">
                    面接(インタビュー)への申し込みはウェブサイト内の登録フォームから行えみます。
                    この情報を、当社が契約している日本の管理組合や会社に送付し、面接希望があった場合に面接をセッテイング致します。以下の資格をお持ちの方は是非登録をお願い致します。なお、面接希望者については、当社が運営している研修センターで研修を受ける必要があります。
                </p>
                <ul style="text-align: start">
                    <li>
                        <span style="font-size: 14px;"> N4合格以上・・・技能実習生として日本で実習を受けます。</span>
                    </li>
                    <li>
                        <span style="font-size: 14px;"> N4合格以上+「特定技能」合格 (or JFT A2)・・・特定技能の職種で日本で働きます。</span>
                    </li>
                    <li>
                        <span style="font-size: 14px;"> N3合格以上・・・技能実習生やワーキングビザで日本へ行く事が出来ます。</span>
                    </li>
                </ul>
                <br>

                <p style="font-size:14px; text-align: start">
                    登録して頂いた情報については面接をするためにだけ使用し、それ以外の用途では使用致し ません。また面接や日本へ行く手続きの全てを当社で行うことをお約束させて頂きます。
                </p>


                <br>

                <div class="video-one__contact-box">

                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <form class="contact-form-validated video-one-contact__form" action="" method="post"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="video-one-contact__input-box">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="video-one-contact__input-box">
                                            <input type="email" name="Email" placeholder="Email Address"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="video-one-contact__input-box">
                                            <input type="text" name="Address" placeholder="Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="video-one-contact__input-box">
                                            <input type="text" name="Phone" placeholder="Phone Number"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="video-one-contact__input-box text-message-box">
                                            <textarea name="message" placeholder="Messege"></textarea>
                                        </div>
                                        <div class="video-one-contact__btn-box">
                                            <button type="submit" class="thm-btn">
                                                <span class="thm-btn-text">send a message</span>
                                                <span class="thm-btn-icon-box"><i class="fas fa-arrow-right"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="video-one-contact__info-box">
                                <h3 class="video-one-contact__info-title">Contact Info</h3>
                                <ul class="video-one-contact__info-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <p>Dagon Seikkan Township, Yangon, Myanmar</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-call"></span>
                                        </div>


                                        <div class="content">
                                            <p><a href="tel:0882466422710">+(959) 765 557 785 </a></p>
                                            <p><a href="tel:0882466422710">+(81) 701 147 8880</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <p><a href="mailto:info@iam-myanmar.com">info@iam-myanmar.com</a></p>
                                            <p><a href="mailto:contact@iam-myanmar.com">contact@iam-myanmar.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- Our Purpose --}}
    <section class="testimonial-two">


        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Purpose</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation">私達の目的】 </h2>
            </div>
            <br>

            <p style="font-size:14px;">
                私達の目的は海外での就職を希望するミャンマー人と世界中の企業様の関係を取り持つことです。
            </p>

            <p style="font-size:14px;">
                現在、ミャンマー国内では様々な要因で就職するのが困難な状況があり、海外での就職を希望する優秀な人材が多数います。
            </p>
            <p style="font-size:14px;">
                元来、ミャンマー人は世界の中でも識字率が高い国であり教育に力を入れている国です。
            </p>
            <p style="font-size:14px;">
                また年代別人口分布においても若者の割合が多く、 未来へ希望がある人材が多数います。
            </p>
            <p style="font-size:14px;">
                このような理由から、世界中の企業様へ優秀なミャンマー人材を提供することで世界中の様々な企業様の雇用需要を満たし、またミャンマーの若者の未来を一緒に作っていくことが私達の目的です。
            </p>
            <p style="font-size:14px;">
                我々の活動がこれらの一助になることを願っています。
            </p>

        </div>
    </section>


    <section class="case-three">
        <div class="case-three__bg-box" style="background-color: #fdfae0">
            <div class="case-three__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('data/class1.jpg') }});">
            </div>
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Case Studies</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation" style="color: black">Specified Skilled Works <br>
                    <span>in Job</span>
                </h2>
            </div>
            <div class="case-three__filter-box">
                <ul class="case-three__filter style1 post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">View All</span>
                    </li>
                    <li data-filter=".language">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Study in Japan
                        </span>
                    </li>

                    <li data-filter=".job">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Work in Japan
                        </span>
                    </li>

                    <li data-filter=".tokutei">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            TOKUTEI & KENSHU
                        </span>
                    </li>

                    <li data-filter=".caregiver">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Caregiver
                        </span>
                    </li>



                    <li data-filter=".engineering">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Engineering
                        </span>
                    </li>


                    <li data-filter=".hotel">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Hotel
                        </span>
                    </li>
                    <li data-filter=".agriculture">
                        <span class="filter-text" style="background-color:#15313d;font-size:16px;font-weight:bold;">
                            Agriculture
                        </span>
                    </li>

                </ul>
            </div>
            <div class="case-three__bottom">
                <div class="row filter-layout">
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item language job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/class1.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/class1.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Study in Japan</a></h3>
                                        <p>Language School</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item caregiver job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/caregiver.png') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/caregiver.png') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Caregiver</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item caregiver job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/nurse-aid.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/nurse-aid.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Nurse Aid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item  tokutei job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/garment.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/garment.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan </a></h3>
                                        <p>Garment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item hotel job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/hotel.png') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/hotel.png') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="case-details.html">Work in Japan</a></h3>
                                        <p>Hotel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item hotel job">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/restaurant.png') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/restaurant.png') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="case-details.html">Work in Japan</a></h3>
                                        <p>Restaurant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item hotel job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/waiter.png') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/waiter.png') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                    <!-- Case Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item hotel job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/j12.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/j12.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item engineering job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/j08.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/j08.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item engineering job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/j04.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/j04.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item engineering job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/j06.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/j06.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item engineering job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/j03.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/j03.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item agriculture job ">
                        <div class="case-three__single">
                            <div class="case-three__img-box">
                                <div class="case-three__img">
                                    <img src="{{ asset('data/agri.jpg') }}" alt=""
                                        style="width:415px; height:250px;object-fit:cover;">
                                    <div class="case-three__content-box">
                                        <div class="case-three__icon-box">
                                            <a href="{{ asset('data/agri.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow-1"></span></a>
                                        </div>
                                        <h3><a href="">Work in Japan</a></h3>
                                        <p>Job</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Three Single End -->
                </div>
            </div>
        </div>
    </section>
    {{-- our services 6 facts --}}
    <section class="faq-one" style="background-image: url({{ asset('data/bg-image.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="faq-one__left">
                        <div class="section-title text-center sec-title-animation animation-style2">
                            <div class="section-title__tagline-box justify-content-center">
                                <div class="section-title__tagline-shape"></div>
                                <span class="section-title__tagline">Our Services</span>
                                <div class="section-title__tagline-shape"></div>
                            </div>
                            <h5 class="section-title__title title-animation" style="font-size: 30px;">弊社のサービス</h5>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 wow fadeInRight" data-wow-delay="200ms">
                    <div class="faq-one__center">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;" style="font-size: 14px;">1.
                                        私達はミャンマー政府から認可を受けた送り出し機関です。海外で働きたいミャンマー人のために面接から書類作成、航空券の手配等、全てをサポート致します。</h4>
                                </div>

                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;">2. 海外で働き始めた後も、相談やその他様々なサポートをすることをお約束致します。</h4>
                                </div>

                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;">3.
                                        私達が労働者を派遣している国は様々です。日本をメインに韓国・タイ・マレーシア・シンガポール等にも実績があります。</h4>
                                </div>

                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;">4.
                                        日本に行く場合は、私達の日本語学校で勉強していただきます。また、日本とミャンマーでは仕事の仕方や生活スタイルも大きく異なります。日本に行ってから困らないように、
                                        トレーニングセンターも用意しています。ここでは日本の生活や法律・習慣・マナーなどを学ぶことになります。</h4>
                                </div>

                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;">5. 日本に留学したい人へのサポートも行っています。提携している日本語学校も多数あり、
                                        私費留学、スカラシップの両方でサポートすることが出来ます。</h4>
                                </div>

                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 style="font-size: 14px;">6. 日本に着いた時に使えるSIM CARDも用意しています。(有料)</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Our services partner logo --}}

    <section class="feature-one" style="background-image: url({{ asset('data/bg-image.png') }});">
        <div class="container">
            <div class="feature-grid">

                <div class="feature-one__single border-brown col-6">
                    <a href=""><img src="{{ asset('data/jlpt_logo.png') }}" alt=""></a>
                </div>

                <div class="feature-one__single border-red col-6">
                    <a href=""><img src="{{ asset('data/nat-test_logo.png') }}" alt=""></a>
                </div>


                <div class="feature-one__single border-lime col-6">
                    <a href=""><img src="{{ asset('data/partner-schools/yu.png') }}" alt=""></a>
                </div>


                <div class="feature-one__single border-green col-6">
                    <a href=""><img src="{{ asset('data/partner-schools/ju.png') }}" alt=""></a>
                </div>



                <div class="feature-one__single border-lime col-6">
                    <a href=""><img src="{{ asset('data/partner-schools/sh.png') }}" alt=""></a>
                </div>


            </div>
        </div>
    </section>






    {{-- partner agencies logos --}}

    <section class="brand-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="brand-one__left">
                        <p class="brand-one__text" style="font-size: 18px;">We have <span>our partners agencies</span>
                            <br>
                        </p>
                        <p>弊社のパートナー代理店</p>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="brand-one__right">
                        <div class="brand-one__carousel owl-theme owl-carousel">
                            <div class="item">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <a href="#">

                                            <img src="{{ asset('data/swmk_logo.png') }}" alt="">

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <a href="#"> <img src="{{ asset('data/kq_logo.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <a href="#"><img src="{{ asset('data/mlt_logo.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <a href="#"><img src="{{ asset('data/partner-agencies/gsd_logo.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two">
        <div class="services-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{ asset('data/students_bg/1.jpg') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">弊社のパートナー代理店</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation">We have <br> trusted
                    <span>Our Partners Agencies</span>
                </h2>
            </div>
            <div class="row">
                
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-two__single"
                        style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/swmk.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">Shwe Wutt Hmone Kha Co.,Ltd</a></h3>
                        <p class="services-two__text">
                            Overseas Employement Agency
                        </p>
                        
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-two__single"
                        style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/skkl.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">Shwe Kant Kaw Linn Co.,Ltd</a></h3>
                        <p class="services-two__text">
                            Overseas Employement Agency
                        </p>
                        
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-two__single"
                        style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/mlt.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">Myat Lin Thit Co.,Ltd</a></h3>
                        <p class="services-two__text">
                            Overseas Employement Agency
                        </p>
                        
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-two__single"
                        style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/gsd_logo.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">Gold Silver Diamond Co.,ltd</a></h3>
                        <p class="services-two__text">Overseas Employment Agency
                        </p>
                       
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__single" 
                    style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/kq_logo.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">KQ International Co.,Ltd</a></h3>
                        <p class="services-two__text">Overseas Employement Agency
                        </p>
                        
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__single" 
                    style="background: rgba(46, 52, 58, .80); position: relative;
                                display: block;
                                text-align: center;
                                padding: 30px 45px 22px;
                                border-radius: var(--judges-bdr-radius);
                                margin-bottom: 30px;
                                -webkit-transition: all 500ms ease;
                                transition: all 500ms ease;
                                z-index: 1;">
                        <div class="services-two__icon">
                            <img src="{{ asset('data/partner-agencies/yun.png') }}" alt=""
                                class="brand-one__img" style="width:60px; height:60px;">
                        </div>
                        <h3 class="services-two__title"><a href="">Yun Nadi Oo Co.,Ltd</a></h3>
                        <p class="services-two__text">Overseas Employement Agency
                        </p>
                        
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </section>
    {{-- * partner agencies logos * --}}

    {{-- latest news --}}
    <section class="blog-page">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Latest News</span>
                    <div class="section-title__tagline-shape"></div>
                </div>
                <h2 class="section-title__title title-animation">Our Goal is to Make your Life Better </h2>
            </div>
            <br>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('data/training1.png') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Training</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Sep</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-one__title"><a href="">Design a leverage existing
                                    future proof rathe of-morate.</a></h3>
                            <p class="blog-one__text">Lawyer texting is a way for lawyers to communicate with
                                clients using text messages.</p>
                            <a href="" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('data/new1.png') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Training</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Aug</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-one__title"><a href="">One of the most effective lawyer
                                    blog topic</a></h3>
                            <p class="blog-one__text">Lawyer texting is a way for lawyers to communicate with
                                clients using text messages.</p>
                            <a href="" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('data/new2.png') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Training</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Aug</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-one__title"><a href="">Ideas for divorce and family
                                    law Rules</a></h3>
                            <p class="blog-one__text">Lawyer texting is a way for lawyers to communicate with
                                clients using text messages.</p>
                            <a href="" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
