<div class="video">

    <a href="index.php?action=home"> <img class="video_backArrow" src="assets/icon/back_arrow.svg"/></a>

    <video class="player__video" > <source src="<?=$_GET['film']?>"></video>

    <div class="video__container ">
        <div class="container">
            <div class="bar"><div class="progressBar"></div></div>
            <div class="container__controls"> 
                <div class="container-left">
                    <div class="container__play">
                        <svg class="play" width="42" height="62" viewBox="0 0 42 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M-0.455078 60.8236L41.6266 30.5453L-0.455078 0.266968V60.8236ZM5.23053 11.7327L31.3762 30.5453L5.23053 49.3579V11.7327Z" fill="#FFC61B"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="42" height="61.0909" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <svg  class="pause" width="42" height="62" viewBox="0 0 42 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 61.09H18V0H0V61.09ZM6 8.72714H12V52.3629H6V8.72714Z" fill="#FFC61B"/>
                        <path d="M24 61.09H42V0H24V61.09ZM30 8.72714H36V52.3629H30V8.72714Z" fill="#FFC61B"/>
                        </svg>

                        
                    </div>
                    <div class="container__backward">
                        <svg width="54" height="62" viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.2773 12.8219V0.65979L10.7149 15.8625L27.2774 31.0652V18.903C38.2087 18.903 47.1524 27.1124 47.1524 37.1462C47.1524 47.18 38.2087 55.3894 27.2774 55.3894C16.3462 55.3894 7.4024 47.18 7.4024 37.1462H0.777344C0.777344 50.5246 12.7024 61.4705 27.2774 61.4705C41.8525 61.4705 53.7773 50.5246 53.7773 37.1462C53.7773 23.7678 41.8523 12.8219 27.2773 12.8219Z" fill="#FECA28"/>
                        <path d="M30.9201 46.1157C31.5826 46.2677 32.0795 46.4197 32.9076 46.4197C33.7357 46.4197 34.3982 46.4197 34.8951 46.1157C35.392 45.8117 35.8889 45.5075 36.3857 45.0514C36.8826 44.5954 37.2138 43.9872 37.3795 43.3792C37.5452 42.7712 37.7107 41.8589 37.7107 40.9467V38.6663C37.7107 37.7541 37.545 36.842 37.3795 36.2338C37.214 35.6256 36.7169 35.0176 36.3857 34.5615C36.0545 34.1055 35.5577 33.6494 34.8951 33.4973C34.2325 33.3452 33.7357 33.1933 32.9076 33.1933C32.0795 33.1933 31.417 33.1933 30.9201 33.4973C30.4232 33.8013 29.9263 34.1055 29.4294 34.5615C28.9326 35.0176 28.6014 35.6258 28.4357 36.2338C28.27 36.842 28.1045 37.7541 28.1045 38.6663V40.9467C28.1045 41.8589 28.2702 42.771 28.4357 43.3792C28.6014 43.9873 29.0982 44.5954 29.4294 45.0514C29.7606 45.5075 30.2575 45.9637 30.9201 46.1157ZM31.0858 38.3623C31.0858 37.7541 31.2514 37.1461 31.2514 36.842C31.2514 36.5379 31.4171 36.0819 31.5826 35.9298C31.7483 35.7777 32.0795 35.6258 32.2452 35.4737C32.4109 35.3216 32.7421 35.3216 33.0733 35.3216C33.4045 35.3216 33.5701 35.4737 33.9013 35.4737C34.2325 35.4737 34.3982 35.7777 34.5639 35.9298C34.7296 36.0819 34.7296 36.3859 34.8951 36.842C35.0608 37.298 35.0608 37.7541 35.0608 38.3623V41.2508C35.0608 41.859 34.8951 42.467 34.8951 42.7712C34.8951 43.0753 34.7294 43.5313 34.5639 43.6833C34.3982 43.8354 34.067 43.9873 33.9013 44.1394C33.7357 44.2915 33.4045 44.2915 33.0733 44.2915C32.7421 44.2915 32.5764 44.1394 32.2452 44.1394C31.914 44.1394 31.7483 43.8354 31.5826 43.6833C31.417 43.5313 31.417 43.2272 31.2514 42.7712C31.0859 42.3151 31.0858 41.859 31.0858 41.2508V38.3623Z" fill="#FECA28"/>
                        <path d="M23.634 46.2677V33.1934H23.3027L17.5059 35.1697V37.2982L20.8183 36.386V46.2677H23.634Z" fill="#FECA28"/>
                        </svg>
                    </div>
                    <div class="container__forward">
                        <svg width="53" height="62" viewBox="0 0 53 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5001 12.2994V0L43.0625 15.3744L26.4999 30.7488V18.4492C15.5686 18.4492 6.62486 26.7514 6.62486 36.8984C6.62486 47.0455 15.5686 55.3477 26.4999 55.3477C37.4312 55.3477 46.3749 47.0455 46.3749 36.8984H53C53 50.4279 41.075 61.4974 26.4999 61.4974C11.9248 61.4974 -4.57764e-05 50.4279 -4.57764e-05 36.8984C-4.57764e-05 23.369 11.925 12.2994 26.5001 12.2994Z" fill="#FECA28"/>
                        <path d="M30.1437 45.9693C30.8063 46.1231 31.3031 46.2767 32.1312 46.2767C32.9593 46.2767 33.6218 46.2767 34.1187 45.9693C34.6156 45.6618 35.1125 45.3542 35.6093 44.893C36.1062 44.4318 36.4374 43.8167 36.6031 43.2019C36.7688 42.587 36.9343 41.6644 36.9343 40.7419V38.4357C36.9343 37.5133 36.7686 36.5908 36.6031 35.9758C36.4376 35.3608 35.9405 34.7459 35.6093 34.2846C35.2781 33.8234 34.7813 33.3622 34.1187 33.2084C33.4562 33.0546 32.9593 32.9009 32.1312 32.9009C31.3031 32.9009 30.6406 32.9009 30.1437 33.2084C29.6468 33.5158 29.1499 33.8234 28.6531 34.2846C28.1562 34.7459 27.825 35.3609 27.6593 35.9758C27.4936 36.5908 27.3281 37.5133 27.3281 38.4357V40.7419C27.3281 41.6644 27.4938 42.5868 27.6593 43.2019C27.825 43.8169 28.3219 44.4318 28.6531 44.893C28.9843 45.3542 29.4811 45.8156 30.1437 45.9693ZM30.3094 38.1283C30.3094 37.5133 30.4751 36.8984 30.4751 36.5908C30.4751 36.2834 30.6407 35.8221 30.8063 35.6683C30.9719 35.5145 31.3031 35.3609 31.4688 35.2071C31.6345 35.0533 31.9657 35.0533 32.2969 35.0533C32.6281 35.0533 32.7938 35.2071 33.125 35.2071C33.4562 35.2071 33.6218 35.5145 33.7875 35.6683C33.9532 35.8221 33.9532 36.1296 34.1187 36.5908C34.2844 37.052 34.2844 37.5133 34.2844 38.1283V41.0495C34.2844 41.6645 34.1187 42.2794 34.1187 42.587C34.1187 42.8946 33.953 43.3557 33.7875 43.5094C33.6218 43.6632 33.2906 43.8169 33.125 43.9707C32.9593 44.1245 32.6281 44.1245 32.2969 44.1245C31.9657 44.1245 31.8 43.9707 31.4688 43.9707C31.1376 43.9707 30.9719 43.6632 30.8063 43.5094C30.6406 43.3557 30.6406 43.0482 30.4751 42.587C30.3095 42.1257 30.3094 41.6645 30.3094 41.0495V38.1283Z" fill="#FECA28"/>
                        <path d="M22.8567 46.1229V32.9009H22.5253L16.7285 34.8995V37.052L20.0409 36.1296V46.1229H22.8567Z" fill="#FECA28"/>
                        </svg>
                    </div>
                </div>

                <div class="container__title">
                <?=$_GET['title']?>
                </div>

                <div class="container-right">
                    <div class="container__sound"> 
                        <svg class="sound" width="42" height="49" viewBox="0 0 42 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M-0.432617 14.1322V34.8678H8.61407L26.7074 49.3828V-0.382812L8.61407 14.1322H-0.432617ZM7.32168 30.7207H3.44453V18.2793H7.32168V30.7207ZM22.8303 41.0885L11.1988 31.7575V17.2425L22.8303 7.91146V41.0885Z" fill="#FFC61B"/>
                        <path d="M37.1051 11.3036L34.3633 14.2363C39.654 19.8954 39.654 29.1044 34.3633 34.7635L37.1051 37.6962C43.9077 30.4198 43.9077 18.58 37.1051 11.3036Z" fill="#FFC61B"/>
                        <path d="M31.6212 17.1691L28.8799 20.1012C31.1471 22.5269 31.1471 26.4731 28.8799 28.8988L31.6212 31.8309C35.4004 27.7885 35.4004 21.2114 31.6212 17.1691Z" fill="#FFC61B"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="42" height="49" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> 
                        <svg class="mute" width="42" height="49" viewBox="0 0 42 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 14.2917V34.7083H8.3279L24.9837 49V0L8.3279 14.2917H0ZM7.1382 30.625H3.5691V18.375H7.1382V30.625ZM21.4146 40.8333L10.7073 31.6458V17.3542L21.4146 8.16667V40.8333Z" fill="#FFC61B"/>
                        <path d="M42.0001 20.169L39.4766 17.282L35.691 21.6125L31.9053 17.282L29.3818 20.169L33.167 24.5001L29.3818 28.8312L31.9053 31.7183L35.691 27.3877L39.4766 31.7183L42.0001 28.8312L38.2149 24.5001L42.0001 20.169Z" fill="#FFC61B"/>
                        </svg>
                    </div>
                        <input class="volume" type="range" step="0.10" value="50">
                    <div class="container__fullscreen">
                        <svg class="fullscreen" width="42" height="45" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M28.3574 5.3613H37.5521V15.1548H42.1495V0.464539H28.3574V5.3613Z" fill="#FFC61B"/>
                        <path d="M37.5521 39.6387H28.3574V44.5354H42.1495V29.8452H37.5521V39.6387Z" fill="#FFC61B"/>
                        <path d="M5.37079 29.8452H0.773438V44.5354H14.5655V39.6387H5.37079V29.8452Z" fill="#FFC61B"/>
                        <path d="M0.773438 15.1548H5.37079V5.3613H14.5655V0.464539H0.773438V15.1548Z" fill="#FFC61B"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="42" height="45" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <svg class="minimize" width="42" height="45" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 35H9.33333V45H14V30H0V35Z" fill="#FFC61B"/>
                        <path d="M9.33333 10H0V15H14V0H9.33333V10Z" fill="#FFC61B"/>
                        <path d="M32.6667 0H28V15H42V10H32.6667V0Z" fill="#FFC61B"/>
                        <path d="M28 45H32.6667V35H42V30H28V45Z" fill="#FFC61B"/>
                        </svg>
                    </div>
                </div>
        </div>
    </div>
</div>