<html lang="en" style="font-size: 50px;" class="pc">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="/logo1.ico" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google" content="notranslate">
    <script>
        window.addEventListener("error", function (event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function () {
            document.addEventListener("touchstart", function (event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function (event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function (event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function (event) {
                    noddy = event.target;
                    while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                        noddy = noddy.parentNode;
                    }
                    if (
                        "href" in noddy &&
                        noddy.href.indexOf("http") !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }

    </script>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            background-color: #000;
        }

        .orderList .list>li ul li .s[data-v-167ffb9b] {
    font-size: .25rem !important;
    font-weight: 100 !important;
    line-height: 135%;
}

    </style>
    <link href="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-6072d8a4.6ac11efd.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-6072d8a4.290faf4b.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-79aa18e0.f843b761.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-79aa18e0.e3404a41.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-5109cffc.e3562785.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-5109cffc.3f1196fb.1717187934571.chunk.js"></script>
</head>

<style>
    .popBox .cllist li .img[data-v-167ffb9b] {
    height: 1.28rem;
    position: absolute;
    right: .28rem;
    bottom: 26px;
}
.popBox .cllist li .mini[data-v-167ffb9b] {
    opacity: .8;
    margin-bottom: .38rem;
    margin-top: .1rem;
}
.para{
    line-height: normal;
    font-size: 12px;
    padding: 0px;
   /* Adjust to increase left space */
    }
    .pa{
        margin: 11px;
    }
    .totalBox1 ul[data-v-167ffb9b] {
    display: flex;
    /* border-top: .02rem solid #4e4b66; */
    padding-top: -1.68rem;
    margin-top: 0.16rem;
    justify-content: space-between;
}
.totalBox1[data-v-167ffb9b] {
    background: url(../../images/1.png) no-repeat;
    background-size: 100% 100%;
    padding: .28rem;
}

.title{
    font-size: 13px;
    font-weight: bold;
}
.t{
    font-size: 11px;
    line-height: normal;
}

.tab {
    padding: 33px 0 .24rem 0;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    margin-right: 10px;
}
.btn3{
    height: 33px;
    border-radius: .2rem;
    background: #55b2c2 ;
    color: #000;
    font-weight: 500;
    font-size: 14px;
    width: 115%;
    border: 0;
}
.btn4{
    height: 33px;
    border-radius: .2rem;
    background: #55b2c2 ;
    color: #000;
    font-weight: 500;
    font-size: 14px;
    width: 115%;
    border: 0;
}
.earn{
    display: inline-block;
    padding-top: 20px; /* Consistent padding */
    margin-right: 25px; /* Space between buttons */
   
}
.investment-amount{
   font-size: 14px;
}
.ft-l{
    display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 30px 0;
        margin-bottom: 9px;
}
.title{
    color: #170529d9;
        text-align: left;
        font-family: PingFang SC;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-bottom: 0;
}
.til{
    color: #ffffffd9;
        text-align: left;
        font-family: PingFang SC;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-bottom: 0;
}
.ftw-r-img{position: absolute;
        top: 0;
        right: 0;
        width: 175px;
        height: auto;
    }
    .content-container{
        position: relative; 
    }

   .mini {
    font-size: 14px;
    font-weight: 500;
}
</style>
<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-167ffb9b="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-167ffb9b="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">

                        <div data-v-397da544="" class="left_title">@lang('Strategy') </div>

                        <div data-v-397da544="" class="flex1"></div>

                        <div data-v-397da544="" class="head_right">
                            <a href="{{ route('user.roi-bonus') }}">
                                <img data-v-167ffb9b="" data-v-397da544="" src="/assets/images/list.png" class="record_icon">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="container">
                    <div data-v-9aac4ed6="" class="ft-l"><div data-v-9aac4ed6="" class="title" style="color:#fff">AI computing power</div><div data-v-9aac4ed6="" class="til">Simple, Secure, High Yield</div></div>
                    <img data-v-9aac4ed6="" class="ftw-r-img" src="https://h5.whatchat3.com/static/png/big-bg-14ffbd66.png" alt="">
                    <!-- <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="totalBox" style="border-radius: 4%;border-color: black;">
                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="name flex">
                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex1">@lang('Total Balance')</div>
                                <a href="{{route('user.wallet')}}">
                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style="">@lang('My Wallet')
                                  
                                    <img
                                        data-v-167ffb9b="" data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAANlBMVEXS/9IAAADS/9LU/9TU/9TV/9XQ/9DA/Kyr/HvU/9TT/9Pa/9qu+4Kv+4S5/Zus+3ut+36q+3jdZBpaAAAAEXRSTlMzAC0GFCEZTeUoHA6zpmbZzB36ToMAAAFKSURBVFjDtZdLdsMgDEUf+rWIpq33v9mmg5wkjkHGcu5c9wASIKF0YHGthCtU1RqXDtuC5oQVpG2vgA3bkPAOARsGOEcCwRiSoYArQoj7AsEeSHoCx05sW6DYjW4JKiaorwLFFLoWGCbxZ4FgGnkUMOYhfhAQDlDvAsEh5CZgAnB0EwgqMKxIBCcYLgHBCYRLwCAFMfQvaEjQCsJLcFl+PgYFjWgH38uyfHYNVMCIBEMDoyHga2gQGFIGhyJlUFSkDBWElIF6uV+zMoSp2+byDkF6C+lDTKcxX0ieiodBUvFo6eucf1CKhzXx242HnvGoFiSf9WI4jJzytSWW4LfvPbGAUxqMKxUHoGSTBU62efbcaPp0fLbVTTfb57f7MxXpuZEHNhi6CCGVx2NfpLBw8PQoPB59haLwePjWFwd5MHyv4Wb38d+FS4c/ZqkSYvi2fKYAAAAASUVORK5CYII=">
                                  
                                </div>
                            </a>
                            </div>
                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="amount" style=""> {{number_format(Auth::user()->available_balance(),2)}} <span
                                    data-v-167ffb9b="" data-v-cfc9a7fc="">USDT</span></div>
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";">@lang('Todays earnings')
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style="> 0 <span data-v-167ffb9b="
                                            data-v-cfc9a7fc="">{{currency()}} {{number_format($todaysIncome,2)}}</span></div>
                                </li>
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class=" n" style=""> @lang('Total revenue')</div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style=""> {{currency()}} {{number_format($totalRoi,2)}} <span
                                            data-v-167ffb9b="" data-v-cfc9a7fc="" style=""></span></div>
                                </li>
                            </ul>
                        </div> -->

                        <!-- <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="add" style="    padding-top: 1rem;
"><button data-v-167ffb9b=""
                            data-v-cfc9a7fc="" class="btn2 open-model"><img data-v-167ffb9b="" data-v-cfc9a7fc=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAxAQMAAACmkLhhAAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAABpJREFUGNNjIAqwP6Anxf4fCB4QQdHZZSQAALGHOjODQZQ0AAAAAElFTkSuQmCC">
                                @lang('Add strategy') </button></div>
                 -->

                                {{-- <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="earn" style="    padding-bottom: 20px;
"><button data-v-167ffb9b=""
                            data-v-cfc9a7fc="" class="btn3 open-model">
                                @lang('Earn Record') </button></div>
                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="earn" style="    padding-bottom: 20px;
"><button data-v-167ffb9b=""
                            data-v-cfc9a7fc="" class="btn4 open-model">
                                @lang('Earning Records') </button></div> --}}
                                <div class="show_data">
                                <div  class="tab"> <div>Total Balance </div><br>
                                    <span class="investment-amount"> {{number_format(Auth::user()->available_balance(),2)}} USDT</span>
                                </div>
                        <div   class="tab" style="color: grey;"> <div>Total Revenue</div> <br>
                        <span class="investment-amount">{{currency()}} {{number_format($totalRoi,2)}}</span> </div>
                        <div   class="tab" style="color: grey;"> <div>Today's Earnings</div> <br>
                        <span class="investment-amount">{{currency()}} {{number_format($todaysIncome,2)}}</span> </div>
                        </div>

                      <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="totalBox" style="border-radius: 4%;border: #55b2c2 2px solid; padding-top='10px'">
                           
                            
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";"><img data-v-9aac4ed6="" src="https://h5.whatchat3.com/static/png/level-big-icon-1-751bc9b1.png" alt="" height="auto" width="44px">
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style=""> <span
                                    data-v-167ffb9b="" data-v-cfc9a7fc="">Level:P1</span></div>
                                </li>
                                <li data-v-167ffb9b="" data-v-cfc9a7fc=""class="pa">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class=" n" style=""> </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style="">  <span
                                            data-v-167ffb9b="" data-v-cfc9a7fc="" class="para">Recharge 0 EUR, recommend 0 valid users, and recommend 3 P1 to upgrade to P2</span></div>
                                </li>
                            </ul>
                        </div>
                        
                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="totalBox" style="border-radius: 4%;border: #55b2c2 2px solid; margin-top:12px">
                           
                            
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";"><img data-v-9aac4ed6="" src="data:image/png;base64,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" alt="" width="24px" height="24px" >
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="title" style="color:#fff">Become a member</span></div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" 
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="t" >Only members with P level 1 or above can run the computing power package</span></div>        
                                </li>
                               
                            </ul>
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";"><img data-v-9aac4ed6="" src="data:image/png;base64,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" alt="" width="24px" height="24px" >
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="title" style="color:#fff">Run computing power package</span></div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" 
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="t" >The system will run the computing power package according to the maximum runnable amount of the current user level</span></div>        
                                </li>
                               
                            </ul>
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";"><img data-v-9aac4ed6="" src="data:image/png;base64,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" alt="" width="24px" height="24px" >
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="title" style="color:#fff">distribute income</span></div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" 
                                        style="">  <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="" class="t" >The principal and income will be returned in one go after the operation is completed</span></div>        
                                </li>
                               
                            </ul>
                        </div>
                        <div id="tab1" class="tab" style="color: #fff;">Computing Power Rental</div>
                        <div id="tab2" class="tab" style="color: grey;">My Computing Power</div>

                        </div>
                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="orderList" style="display: none;" id="orderList">
                            {{-- <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="cname">@lang('My Strategy')</div> --}}
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="list">
                                
<style>
.Progress {
        margin-top: .32rem;
    }
 .Progress .van-slider {
    background: hsla(0, 0%, 100%, .1) !important;
}

.van-slider {
    position: relative;
    width: 100%;
    height: .03448rem;
    background-color: #ebedf0;
    border-radius: 17.22414rem;
    cursor: pointer;
}
.van-slider:before {
    position: absolute;
    top: -.13793rem;
    right: 0;
    bottom: -.13793rem;
    left: 0;
    content: "";
}
.Progress .van-slider__bar {
    background: #55b2c2 !important;
}

.van-slider__bar {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #1989fa;
    border-radius: inherit;
    -webkit-transition: all .2s;
    transition: all .2s;
}
.van-slider__button-wrapper, .van-slider__button-wrapper-right {
    position: absolute;
    top: 50%;
    right: 0;
    -webkit-transform: translate3d(50%, -50%, 0);
    transform: translate3d(50%, -50%, 0);
    cursor: grab;
}
.Progress .van-slider__button {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAgCAMAAABabbp1AAAAtFBMVEUAAAD///////////////////////////////////////////+f6pSP5Y2H44qB4Yic6pOs7pqV55Cq7pmF4ol734Wo7ZiR5o6a6ZKD4YmJ5IuT549+4Iez8Z2x8JyY6JGM5Iy28p6l7Jav75um7Zeh65Wj7Jbz/fJ43oSu75rG8cnu++/f+dT4/vbw+/Ha+NDK9bm68qO978LA8rOk6aea5qO08KKI4pDT9seu67TA86qa6ZT+kNadAAAAC3RSTlMA3yDvkBDQYKCfMLC2wLEAAAHvSURBVDjLlZTZWsJADEYrZYA6Uugi2EUFpVRBlE0Wff/3MssYmKrwmQuuznf4M03iHEo1vYarK+U2vKZyflatbqFWebUKrOr6ZNVt9YU+UxdHf3DJ9Gyy/kwH7X4/C8P7m+7VVTF+CFZvJfOXtnu6ThI/BbwN+L3Bx6NeFMxLy0/0ZJskcewTHpK9i/ZeFAXPmxfiFdHU5TLPO4nP9naWkR3xEfKPd2/Sb43c13mnA3YJI3YIA/gt+TFOC3MngEMY3x8IfsN2gy9K1isNtb9GO2V/fYWnCcsSw5Ql4L3gGfDhHDBXOU2UPxEeY3it8SG1xjBao53x4QzAJmWZME5htG4TDmFsHLv1nAb8vguepoJ3Ce8ZnNM0HBys3IQBO+Eh47b9A8M7GuqJcPpMnD2j7IXWY3p3wodICo52n+2VViMOs0CSwmxPZI8YHxLu2q3GVXwk2blVesgl4jnZB3arPAQUBsfAo880E7u8u7wM46Av6TMpF9N8Z6chyLKjIYiMfaehFM/vNDFhrIksCnjH4xHzZIARj2UiZT3G3KoMsKwHhkkMLvNecKt3sh5Qyiwftyo40mwPzPLZq72nVg9hZD1WstrW4ZhO1v0U9GxnfLPazeRw/PcsSZ07eqp6Ult/sm5d1NbBbv12sFvHB/sLfD5h+WOezsEAAAAASUVORK5CYII=) no-repeat;
    background-size: 100% 100%;
    width: .38rem;
    height: .24rem;
    border-radius: .1rem;
}

.van-slider__button {
    width: .41379rem;
    height: .41379rem;
    background-color: #fff;
    border-radius: 50%;
    box-shadow: 0 .01724rem .03448rem rgba(0, 0, 0, .5);
}
.Progress .ul {
    margin-top: .16rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #6b7285;
    font-size: .26rem;
    font-weight: 500;
}

</style>
                                @foreach($recharges as $recharge)
                                
                                @php
                                     $planDetail = \DB::table('plans')->where('id',$recharge->plan)->first(); 
                                     $todayEarning = \DB::table('incomes')->where('invest_id',$recharge->id)->where('ttime',Date("Y-m-d"))->sum('comm'); 

                                    // dd($planDetail);
                                @endphp

                                
                                <?php 
                                $endDate= date("Y-m-d H:i:s");                                  
                                $date1 = $recharge->created_at;
                                $startDate=$recharge->created_at;
                                $date1 = strtotime($date1);
                                $date1 = strtotime(" + ".($planDetail?$planDetail->days:0)." days", $date1);
                                $new_date1= date('Y-m-d H:i:s', $date1);
                                $process = 100/($planDetail?$planDetail->days:0);
                                $days = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
                                $processBar = $process*$days;
                                //   echo $days;
                                ?>

                                <script>
                                // Set the date we're counting down to
                                var x = setInterval(function() {
                                    
                                    var countDownDate = new Date("{{$new_date1}}").getTime();
                                 
                                     // Get todays date and time
                                     // var now = new Date().getTime();


                                     var now =  new Date(new Date().toLocaleString('en-US', {timeZone: 'Asia/Kolkata'}))

                                     // Find the distance between now an the count down date
                                     var distance = countDownDate - now;
                                     
                                     // Time calculations for days, hours, minutes and seconds
                                     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                     
                                     // Output the result in an element with id="demo"
                                     
                                 
                                     
                                     document.getElementById("countdown-{{ $recharge->id }}").innerHTML = "<span>" + days + ":</span><span>" + "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>";
                                         //   $('#left_time').html('Hello');
                                     
                                     // If the count down is over, write some text 
                                     if (distance < 0) {
                                     clearInterval(timer);
                                         document.getElementById("countdown-{{ $recharge->id }}").innerHTML = "EXPIRED";
                                     }
                              
                                 },1000);
                                </script>

                                 


                                <li data-v-167ffb9b="" data-v-cfc9a7fc="" style="background:none;border-radius:10px">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="ico">
                                            <img data-v-167ffb9b="" data-v-cfc9a7fc=""
                                                data-src="/assets/static/image/image_2024_06_22T06_06_48_469Z.png"
                                                src="/assets/static/image/image_2024_06_22T06_06_48_469Z.png"
                                                lazy="loaded"></div>
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n1 flex">
                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">
                                                    {{ $recharge->plan == 1 ? "VIP 1" : ($recharge->plan == 2 ? "ServerCore Prime" : ($recharge->plan == 3 ? "VIP 3" : "VIP 4")) }}
                                                </div>
                                                                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="status">
                                                    <span data-v-167ffb9b="" data-v-cfc9a7fc="">{{ $recharge->roiCandition==0?"Running":"Completed" }}</span></div>
                                            </div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n2 flex">
                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="sun"><img
                                                        data-v-167ffb9b="" data-v-cfc9a7fc=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAMAAACrZuH4AAAAM1BMVEUAAAD///////////////////////////////////////////////////////////////+3leKCAAAAEHRSTlMAYJ/fMCDvEHBAwJCvgFDP9KY6pgAAAJNJREFUOMvNktEOwyAIRVUUUdvu/v/XLjFZxOLWZH3peSBijkpA91Aiy4XhEW4YAZpXNsKBmX19vc7+NBJR7OGr4THC2sjEqYcbdQwEzQ4ErJpE8M5QQfFjbyBnSYQBR2eJ2iC/EBgkqS/zUQFZvNFUpTtQzOy3KW+oJwNIU575dEkxRxrk4vMJgjV+7pTRZbXzKN5DrAf2kOJR1wAAAABJRU5ErkJggg==">
                                                </div>
                                                <!---->
                                                <!---->
                                                {{-- <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="time flex" style="font-size: 13px;">@lang('Contract Time'): <span id="countdown-{{ $recharge->id }}"></span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div><img src="{{ asset('')}}assets/static/img/strategy.png" style="padding:8px"></div>
                                    <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Running amount')</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $recharge->amount }} <span>
                                        </li>
                                        {{-- <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Today earning')</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ number_format($todayEarning,2)  }} 
                                               
                                                </div>
                                        </li> --}}
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Yield')</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $planDetail?$planDetail->profit:0   }} % </div>
                                        </li>
                                    </ul>
                                    <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">
                                        {{-- <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Investment')</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $recharge->amount }} <span>
                                        </li> --}}
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">Today's executable amount</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ number_format($todayEarning,2)  }} 
                                               
                                                </div>
                                        </li>
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Level')</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> 2 </div>
                                        </li>
                                    </ul>

                                    <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">

                                    <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">@lang('Running Time')</div>
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> 1 hour
                                           
                                            </div>
                                    </li>
                                    <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">Number of times that can be run today</div>
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style="text-align: end;"> 1 times</div>
                                    </li>
                                </ul>
                                    
                                    {{-- <div data-v-1fa86597="" data-v-cfc9a7fc="" class="Progress" style=""><div data-v-1fa86597="" data-v-cfc9a7fc="" class="cons"><div data-v-1fa86597="" class="van-slider" data-v-cfc9a7fc="" style="height: 10px;"><div class="van-slider__bar" style="background: rgb(0, 0, 0); width: 69%;"><div role="slider" tabindex="0" aria-valuemin="0" aria-valuenow="50" aria-valuemax="50" aria-orientation="horizontal" class="van-slider__button-wrapper"><div class="van-slider__button"></div></div></div></div></div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="ul"><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 0% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 25% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 50% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li"> 75% </div><div data-v-1fa86597="" data-v-cfc9a7fc="" class="li active"> 100% </div></div></div> --}}
                                    <div data-v-7bab1ac4="" data-v-cfc9a7fc="" class="item" style="margin:8px"><button data-v-7bab1ac4=""
                                        data-v-cfc9a7fc="" class="btn2" type="submit"> Run </button></div>
                                </li>
                                @endforeach
                            </ul>

                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="list" style="display: none;"></ul>
                        </div>
                        
                  

                    <div data-v-167ffb9b="" 
                       >
                       <div data-v-167ffb9b="" class="popBox" style="background: none;" id="popBox">
                         @php
                          $vip = 1;

// Determine VIP level based on conditions
if ($active_gen_team1total >= 30 && $active_gen_team23total >= 40) {
    $vip = 7;
} elseif ($active_gen_team1total >= 15 && $active_gen_team23total >= 20) {
  $vip = 6;
} elseif ($active_gen_team1total >= 8 && $active_gen_team23total >= 15) {
    $vip = 5;
} elseif ($active_gen_team1total >= 5 && $active_gen_team23total >= 10) {
    $vip = 4;
} elseif ($active_gen_team1total >= 3 && $active_gen_team23total >= 5) {
    $vip = 3;
} elseif ($active_gen_team1total >= 2) {
    $vip = 2;
} elseif ($active_gen_team1total > 0 || $active_gen_team2total > 0 || $active_gen_team3total > 0) {
    $vip = 1;
}

       

@endphp
                            
                           
                            <ul data-v-167ffb9b="" class="cllist" style="scroll:none">
                                <li class="serverCoreItem" data-id="1" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%); color: #000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore</div>
                                    <div data-v-167ffb9b="" class="mini">$30</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom: 5px;">
                                            <span style="color: #170529d9;" data-v-167ffb9b="">$1</span> Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top: 5px;">
                                            <div><span style="font-size: 11px; margin-right: 269px;">1 times</span></div>
                                            <div style="font-size: 11px;">1 hour</div>
                                        </div>
                                    </div>
                                    @if($vip >= 1)
                                    <div data-v-167ffb9b="" class="lv">
                                        <img data-v-167ffb9b="" src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv">
                                        <img data-v-167ffb9b="" src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('') }}assets/static/img/vip1.png" style="padding: 8px; bottom: 43px;" class="img">
                                    <div class="flex" style="opacity: 0.7;">
                                        <div style="margin-right: 180px;">Daily Run Times</div>
                                        <div>Running time</div>
                                    </div>
                                </li>                                
                                <li class="serverCoreItem" data-id="2" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Prime</div>
                                    <div data-v-167ffb9b="" class="mini">$120</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$4</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div>
                                    @if($vip>=2)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip2.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                                <li class="serverCoreItem" data-id="3" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Plus</div>
                                    <div data-v-167ffb9b="" class="mini">$300</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$10</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div>
                                    @if($vip>=3)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip3.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                                <li class="serverCoreItem" data-id="4" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Max</div>
                                    <div data-v-167ffb9b="" class="mini">$1200</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$40</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div>
                                    @if($vip>=4)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip4.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                                <li class="serverCoreItem" data-id="5" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Pro</div>
                                    <div data-v-167ffb9b="" class="mini">$3600</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$120</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div> 
                                    @if($vip>=5)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip5.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                                <li class="serverCoreItem" data-id="6" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Edge</div>
                                    <div data-v-167ffb9b="" class="mini">$6000</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$200</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div>
                                    @if($vip>=6)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip6.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                                <li class="serverCoreItem" data-id="7" data-v-167ffb9b="" style="background: linear-gradient(92deg, #55B2C2 1.36%, #fff 103.37%);color:#000;">
                                    <div data-v-167ffb9b="" class="title">ServerCore Hub</div>
                                    <div data-v-167ffb9b="" class="mini">$15000</div>
                                    <div data-v-167ffb9b="" class="rate">
                                        <div data-v-167ffb9b="" class="s" style="padding-bottom:5px"><span style="color:#170529d9" data-v-167ffb9b="">$500</span>
                                            Daily Reward
                                        </div>
                                        <div data-v-167ffb9b="" class="n flex" style="padding-top:5px"> <div><span  style="font-size:11px;margin-right:269px">1 times</span>
                                           </div>
                                         
                                            <div style="font-size:11px">1 hour</div>

                                        </div>
                                    </div>
                                    @if($vip>=7)
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/unlock.png"> Unlocked
                                    </div>
                                    @else
                                    <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b="" 
                                        src="{{ asset('') }}assets/static/img/lock.png"> Locked
                                    </div>
                                    @endif
                                    <img data-v-167ffb9b="" src="{{ asset('')}}assets/static/img/vip7.png" style="padding:8px;bottom:43"class="img">
                                        <div class="flex" style="opacity:0.7">
                                        <div style="margin-right:180px">  Daily Run Times</div>
                                        <div> Running time</div>
                                        </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com//jquery-3.3.1.min.js"> </script>
            <script>
                $(".open-model").click(function () {
                    // alert("hi");
                    // $(".van-overlay").toggleClass("van-overlay-active");
                    $('.van-popup--bottom').toggle().css('display', 'block');

                });
                $(".close-btn").click(function () {
                    // alert("hi");
                    // $(".van-overlay").toggleClass("van-overlay-active");
                    $('.van-popup--bottom').toggle().css('display', 'none');

                });

            </script>
            <script>
                // Get the elements
                const tab1 = document.getElementById('tab1');
                const tab2 = document.getElementById('tab2');
                const orderList = document.getElementById('orderList');
                const popBox = document.getElementById('popBox');
              
                // Function to handle the click event for My Computing Power tab
                tab2.addEventListener('click', () => {
                  // Change the colors of the tabs
                  tab2.style.color = 'white'; // Set clicked tab to black
                  tab1.style.color = 'grey';  // Set other tab to grey
              
                  // Show the orderList and hide the popBox
                  orderList.style.display = 'block'; // Show orderList
                  popBox.style.display = 'none';     // Hide popBox
                });
              
                // Function to handle the click event for Computing Power Rental tab
                tab1.addEventListener('click', () => {
                  // Change the colors of the tabs
                  tab1.style.color = 'white'; // Set clicked tab to black
                  tab2.style.color = 'grey';  // Set other tab to grey
              
                  // Show the popBox and hide the orderList
                  popBox.style.display = 'block'; // Show popBox
                  orderList.style.display = 'none'; // Hide orderList
                });

                document.querySelectorAll('.serverCoreItem').forEach(function(item) {
    item.addEventListener('click', function() {
        // Check if the element contains the unlocked image
        var isUnlocked = item.querySelector('.lv img[src*="unlock.png"]');

        if (isUnlocked) {
            // Get the data-id value for dynamic redirection
            var dataId = item.getAttribute('data-id');
            // Redirect to the corresponding page using the data-id
            window.location.href = `/user/edit/${dataId}`;
        } else {
            // Optionally show a message or prevent action
            alert('This item is locked.');
        }
    });
});

              </script>
          
            
          

            @include('layouts.upnl.footer')
