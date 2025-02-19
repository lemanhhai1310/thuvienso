<?php $data["title"] = "Chi tiết tài liệu"; ?>
<?php $isHome = false; ?>
<?php $isLogin = true; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-20"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="tailieu.php">tài liệu</a></li>
            <li><span aria-current="page">Thủ tục thẩm định dự toán xây dựng công trình đối với các dự án, công trình có yêu cầu thẩm định độc lập tổng mức đầu tư xây dựng công trình</span></li>
        </ul>
    </nav>
    <div class="space-h-40"></div>
    <div class="uk-grid uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <ul class="chi_tiet_sach__tab uk-margin-remove-top uk-margin-remove-bottom uk-tab uk-child-width-expand" uk-tab>
                <li><a href="#" class="uk-width-auto">Thông tin chung</a></li>
                <li>
                    <a href="#" class="uk-width-auto">
                        <div class="uk-position-relative">
                            Căn cứ pháp lý
                            <span class="chitiettailieu__label uk-position-top-right padding-5-7 rounded-4px bg-FFC01F text-966412 fz-10 be-vietnam-pro-medium">Mua để xem</span>
                        </div>
                    </a>
                </li>
                <li class="uk-active"><a href="" class="uk-width-auto">Trình tự thực hiện</a></li>
                <li><a href="" class="uk-width-auto">Thành phần hồ sơ</a></li>
                <li>
                    <a href="" class="uk-width-auto">
                        <div class="uk-position-relative">
                            Biểu mẫu
                            <span class="chitiettailieu__label uk-position-top-right padding-5-7 rounded-4px bg-FFC01F text-966412 fz-10 be-vietnam-pro-medium">Mua để xem</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="space-h-40"></div>
            <div class="uk-switcher fz-14">
                <div>
                    <table class="chi_tiet_sach__table uk-table uk-table-striped uk-table-hover uk-table-middle">
                        <tbody>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--home"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Cơ quan thực hiện</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">Cục Giám định nhà nước về chất lượng công trình xây dựng</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--graduation-cap"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Lĩnh vực</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">LĨNH VỰC QUẢN LÝ CHẤT LƯỢNG XÂY DỰNG, GIÁM ĐỊNH TƯ PHÁP</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--sort-arrow-up"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Mức độ</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <span class="padding-4-8 rounded-4px bg-0CB0A7 text-FFF fz-14">Mức độ 3</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--calculator"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Cách thực hiện</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">Gửi hồ sơ trực tuyến, trực tiếp hoặc qua đường Bưu điện về Bộ phận Một cửa của Bộ Xây dựng</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--time"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Thời gian giải quyết</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">Không quá 40 ngày</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--users-02"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Đối tượng</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">Tổ chức, cá nhân</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--notes-edit-01"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Yêu cầu, điều kiện</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">
                                        - Nội dung thẩm định thiết kế xây dựng: <br>
                                        + Điều kiện năng lực của tổ chức, cá nhân thực hiện khảo sát, thiết kế xây dựng;
                                        <br>
                                        + Sự phù hợp của thiết kế xây dựng bước sau so với thiết kế xây dựng bước trước (thiết kế kỹ thuật so với thiết kế cơ sở; thiết kế bản vẽ thi công so với thiết kế kỹ thuật trong trường hợp thiết kế ba bước, so với thiết kế cơ sở trong trường hợp thiết kế hai bước hoặc so với nhiệm vụ thiết kế trong trường hợp thiết kế một bước);
                                        <br>
                                        + Sự hợp lý của các giải pháp thiết kế xây dựng công trình;
                                        <br>
                                        + Sự tuân thủ các tiêu chuẩn áp dụng, quy chuẩn kỹ thuật, quy định của pháp luật về sử dụng vật liệu xây dựng cho công trình;
                                        <br>
                                        + Đánh giá sự phù hợp các giải pháp thiết kế công trình với công năng sử dụng của công trình, mức độ an toàn công trình và bảo đảm an toàn của công trình lân cận;
                                        <br>
                                        + Sự hợp lý của việc lựa chọn dây chuyền và thiết bị công nghệ đối với thiết kế công trình có yêu cầu về công nghệ;
                                        <br>
                                        + Sự tuân thủ các quy định về bảo vệ môi trường, phòng, chống cháy, nổ.
                                        <br>
                                        - Nội dung thẩm định dự toán xây dựng:
                                        <br>
                                        + Sự phù hợp giữa khối lượng chủ yếu của dự toán với khối lượng thiết kế;
                                        <br>
                                        + Tính đúng đắn, hợp lý của việc áp dụng, vận dụng định mức, đơn giá xây dựng công trình;
                                        <br>
                                        + Xác định giá trị dự toán công trình sau thẩm định.
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--task-check"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Kết quả giải quyết</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">
                                        Công văn thông báo kết quả thẩm định thiết kế, dự toán xây dựng công trình
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width-200px">
                                <div class="padding-5-10">
                                    <div class="uk-grid uk-grid-12 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="icon20 icon20--coin-dollar"></span>
                                        </div>
                                        <div>
                                            <div class="fz-14 be-vietnam-pro-medium text-6B6B6B">Lệ phí</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="uk-table-expand padding-10">
                                <div class="padding-5-10">
                                    <div class="text-000 fz-14 be-vietnam-pro-medium">
                                        Tính theo quy định tại Thông tư số 210/2016/TT-BTC ngày 10/11/2016 của Bộ Tài chính
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="275" height="226" viewBox="0 0 275 226" fill="none">
                            <path d="M139.632 173.226C185.242 173.226 222.218 136.249 222.218 90.4761C222.218 44.7032 185.079 7.72656 139.632 7.72656C94.0216 7.72656 57.0449 44.7032 57.0449 90.4761C57.0449 136.249 94.0216 173.226 139.632 173.226Z" fill="#EAEEF9"/>
                            <path d="M216.852 36.2322C220.541 36.2322 223.531 33.2421 223.531 29.5536C223.531 25.8651 220.541 22.875 216.852 22.875C213.164 22.875 210.174 25.8651 210.174 29.5536C210.174 33.2421 213.164 36.2322 216.852 36.2322Z" fill="#E7EBF6"/>
                            <path d="M226.622 10.1689C229.141 10.1689 231.183 8.12684 231.183 5.60787C231.183 3.0889 229.141 1.04688 226.622 1.04688C224.103 1.04688 222.061 3.0889 222.061 5.60787C222.061 8.12684 224.103 10.1689 226.622 10.1689Z" fill="#E7EBF6"/>
                            <path d="M61.4497 36.0673C63.9686 36.0673 66.0107 34.0253 66.0107 31.5063C66.0107 28.9873 63.9686 26.9453 61.4497 26.9453C58.9307 26.9453 56.8887 28.9873 56.8887 31.5063C56.8887 34.0253 58.9307 36.0673 61.4497 36.0673Z" fill="#E7EBF6"/>
                            <path d="M33.6169 124.027C38.295 124.027 42.0873 120.234 42.0873 115.556C42.0873 110.878 38.295 107.086 33.6169 107.086C28.9388 107.086 25.1465 110.878 25.1465 115.556C25.1465 120.234 28.9388 124.027 33.6169 124.027Z" fill="#E7EBF6"/>
                            <path d="M139.599 127.35L136.714 127.311C136.137 127.303 135.567 126.718 135.611 126.005C135.655 125.293 136.104 124.688 136.682 124.695L139.567 124.735C140.144 124.743 140.714 125.328 140.67 126.04C140.59 126.888 140.177 127.358 139.599 127.35Z" fill="#CED7E2"/>
                            <g filter="url(#filter0_d_12067_196813)">
                                <path d="M126.533 51.3169L161.526 123.168C162.696 125.658 161.663 128.552 159.173 129.722L88.5829 163.06C86.0935 164.229 83.199 163.196 82.0295 160.707L38.1657 67.7119C36.9961 65.2226 38.0295 62.328 40.5189 61.1585L91.6072 37.1011L126.533 51.3169Z" fill="url(#paint0_linear_12067_196813)"/>
                            </g>
                            <path d="M91.6152 37.1016L100.972 57.0165C102.33 59.756 105.825 60.9634 108.565 59.6055L126.541 51.3174" fill="#D5DDEA"/>
                            <g filter="url(#filter1_d_12067_196813)">
                                <path d="M188.552 58.4751L189.565 138.388C189.561 141.139 187.392 143.316 184.642 143.313L106.575 143.366C103.825 143.362 101.647 141.193 101.651 138.443L101.631 35.6225C101.634 32.8721 103.803 30.6946 106.554 30.6982L163.023 30.7233L188.552 58.4751Z" fill="url(#paint1_linear_12067_196813)"/>
                            </g>
                            <path d="M163.018 30.7266L162.988 52.7299C163.048 55.7868 165.696 58.3698 168.753 58.3097L188.547 58.4785" fill="#D5DDEA"/>
                            <g filter="url(#filter2_d_12067_196813)">
                                <path d="M237.63 93.9162L204.984 166.952C203.897 169.416 200.86 170.495 198.432 169.273L127.705 136.658C125.242 135.572 124.162 132.535 125.249 130.071L168.325 36.7707C169.411 34.3067 172.448 33.2277 174.876 34.4494L226.234 58.174L237.63 93.9162Z" fill="url(#paint2_linear_12067_196813)"/>
                            </g>
                            <path d="M226.112 58.1372L216.908 78.1476C215.579 80.9817 216.992 84.3967 219.827 85.7258L237.644 93.9152" fill="#D5DDEA"/>
                            <defs>
                                <filter id="filter0_d_12067_196813" x="0.551136" y="18.5344" width="198.591" height="200.706" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <filter id="filter1_d_12067_196813" x="64.4964" y="12.1281" width="162.202" height="186.941" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <filter id="filter2_d_12067_196813" x="87.6918" y="15.3781" width="187.072" height="210.105" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <linearGradient id="paint0_linear_12067_196813" x1="88.6452" y1="34.7413" x2="111.743" y2="160.325" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_12067_196813" x1="161.35" y1="27.3256" x2="128.69" y2="150.769" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                                <linearGradient id="paint2_linear_12067_196813" x1="200.886" y1="38.2468" x2="167.958" y2="162.704" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="text-000 fz-26 be-vietnam-pro-semibold line-height-138">Khám phá Căn cứ pháp lý</div>
                        <div class="item-12px text-999 fz-14 line-height-171">Bạn hãy mua tài liệu ngay để xem chi tiết!</div>
                    </div>
                </div>
                <div>
                    <article class="fz-14 line-height-158 text-444">
                        - Tổ chức, cá nhân chuẩn bị đầy đủ hồ sơ theo quy định. <br>
                        - Tổ chức, cá nhân nộp hồ sơ trực tuyến qua cổng thông tin dịch vụ công, nộp qua đường bưu điện, nộp trực tiếp tại Bộ phận Một cửa của Bộ Xây dựng. <br>
                        - Bộ phận Tiếp nhận và trả kết quả kiểm tra hồ sơ:  <br>
                        + Nếu hồ sơ chưa đầy đủ theo quy định thì hướng dẫn cụ thể một lần, đầy đủ để tổ chức, cá nhân bổ sung, hoàn thiện.  <br>
                        + Nếu hồ sơ đầy đủ thì viết phiếu nhận, hẹn ngày trả cho tổ chức, cá nhân và chuyển hồ sơ cho phòng chuyên môn để xử lý.  <br>
                        - Bộ phận Một cửa của Bộ Xây dựng: <br>
                        + Trong quá trình thẩm định, phòng chuyên môn có trách nhiệm yêu cầu cơ quan quản lý nhà nước có thẩm quyền thẩm định về môi trường, phòng, chống cháy và các nội dung khác theo quy định của pháp luật. Thời hạn có văn bản thông báo kết quả thẩm định của cơ quan quản lý nhà nước có thẩm quyền thẩm định về môi trường, phòng, chống cháy, nổ và nội dung khác theo quy định của pháp luật chuyên ngành nhưng không được vượt quá 30 ngày đối với công trình cấp II, cấp III và không vượt quá 20 ngày đối với các công trình còn lại. Nếu quá thời hạn, các cơ quan, tổ chức liên quan không có văn bản trả lời thì được xem như đã chấp thuận về nội dung thẩm định và chịu trách nhiệm về lĩnh vực quản lý của mình.  <br>
                        + Trong 30 ngày làm việc đối với công trình cấp II, cấp III và 20 ngày đối với các công trình còn lại kể từ ngày nhận đủ hồ sơ hợp lệ, phòng chuyên môn thẩm định hồ sơ và trình Lãnh đạo ký Báo cáo kết quả thẩm định kèm theo hồ sơ có đóng dấu và chuyển kết quả cho Bộ phận Tiếp nhận và Trả kết quả.  <br>
                        - Tổ chức mang phiếu hẹn trả kết quả đến Bộ phận Một cửa của Bộ Xây dựng. <br>
                        - Cán bộ Bộ phận Tiếp nhận và Trả kết quả, tiếp nhận phiếu hẹn và thu phí theo quy định <br>
                    </article>
                </div>
                <div>
                    <article class="fz-14 line-height-158 text-444">
                        - Tổ chức, cá nhân chuẩn bị đầy đủ hồ sơ theo quy định. <br>
                        - Tổ chức, cá nhân nộp hồ sơ trực tuyến qua cổng thông tin dịch vụ công, nộp qua đường bưu điện, nộp trực tiếp tại Bộ phận Một cửa của Bộ Xây dựng. <br>
                        - Bộ phận Tiếp nhận và trả kết quả kiểm tra hồ sơ:  <br>
                        + Nếu hồ sơ chưa đầy đủ theo quy định thì hướng dẫn cụ thể một lần, đầy đủ để tổ chức, cá nhân bổ sung, hoàn thiện.  <br>
                        + Nếu hồ sơ đầy đủ thì viết phiếu nhận, hẹn ngày trả cho tổ chức, cá nhân và chuyển hồ sơ cho phòng chuyên môn để xử lý.  <br>
                        - Bộ phận Một cửa của Bộ Xây dựng: <br>
                        + Trong quá trình thẩm định, phòng chuyên môn có trách nhiệm yêu cầu cơ quan quản lý nhà nước có thẩm quyền thẩm định về môi trường, phòng, chống cháy và các nội dung khác theo quy định của pháp luật. Thời hạn có văn bản thông báo kết quả thẩm định của cơ quan quản lý nhà nước có thẩm quyền thẩm định về môi trường, phòng, chống cháy, nổ và nội dung khác theo quy định của pháp luật chuyên ngành nhưng không được vượt quá 30 ngày đối với công trình cấp II, cấp III và không vượt quá 20 ngày đối với các công trình còn lại. Nếu quá thời hạn, các cơ quan, tổ chức liên quan không có văn bản trả lời thì được xem như đã chấp thuận về nội dung thẩm định và chịu trách nhiệm về lĩnh vực quản lý của mình.  <br>
                        + Trong 30 ngày làm việc đối với công trình cấp II, cấp III và 20 ngày đối với các công trình còn lại kể từ ngày nhận đủ hồ sơ hợp lệ, phòng chuyên môn thẩm định hồ sơ và trình Lãnh đạo ký Báo cáo kết quả thẩm định kèm theo hồ sơ có đóng dấu và chuyển kết quả cho Bộ phận Tiếp nhận và Trả kết quả.  <br>
                        - Tổ chức mang phiếu hẹn trả kết quả đến Bộ phận Một cửa của Bộ Xây dựng. <br>
                        - Cán bộ Bộ phận Tiếp nhận và Trả kết quả, tiếp nhận phiếu hẹn và thu phí theo quy định <br>
                    </article>
                </div>
                <div>
                    <div class="uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="275" height="226" viewBox="0 0 275 226" fill="none">
                            <path d="M139.632 173.226C185.242 173.226 222.218 136.249 222.218 90.4761C222.218 44.7032 185.079 7.72656 139.632 7.72656C94.0216 7.72656 57.0449 44.7032 57.0449 90.4761C57.0449 136.249 94.0216 173.226 139.632 173.226Z" fill="#EAEEF9"/>
                            <path d="M216.852 36.2322C220.541 36.2322 223.531 33.2421 223.531 29.5536C223.531 25.8651 220.541 22.875 216.852 22.875C213.164 22.875 210.174 25.8651 210.174 29.5536C210.174 33.2421 213.164 36.2322 216.852 36.2322Z" fill="#E7EBF6"/>
                            <path d="M226.622 10.1689C229.141 10.1689 231.183 8.12684 231.183 5.60787C231.183 3.0889 229.141 1.04688 226.622 1.04688C224.103 1.04688 222.061 3.0889 222.061 5.60787C222.061 8.12684 224.103 10.1689 226.622 10.1689Z" fill="#E7EBF6"/>
                            <path d="M61.4497 36.0673C63.9686 36.0673 66.0107 34.0253 66.0107 31.5063C66.0107 28.9873 63.9686 26.9453 61.4497 26.9453C58.9307 26.9453 56.8887 28.9873 56.8887 31.5063C56.8887 34.0253 58.9307 36.0673 61.4497 36.0673Z" fill="#E7EBF6"/>
                            <path d="M33.6169 124.027C38.295 124.027 42.0873 120.234 42.0873 115.556C42.0873 110.878 38.295 107.086 33.6169 107.086C28.9388 107.086 25.1465 110.878 25.1465 115.556C25.1465 120.234 28.9388 124.027 33.6169 124.027Z" fill="#E7EBF6"/>
                            <path d="M139.599 127.35L136.714 127.311C136.137 127.303 135.567 126.718 135.611 126.005C135.655 125.293 136.104 124.688 136.682 124.695L139.567 124.735C140.144 124.743 140.714 125.328 140.67 126.04C140.59 126.888 140.177 127.358 139.599 127.35Z" fill="#CED7E2"/>
                            <g filter="url(#filter0_d_12067_196813)">
                                <path d="M126.533 51.3169L161.526 123.168C162.696 125.658 161.663 128.552 159.173 129.722L88.5829 163.06C86.0935 164.229 83.199 163.196 82.0295 160.707L38.1657 67.7119C36.9961 65.2226 38.0295 62.328 40.5189 61.1585L91.6072 37.1011L126.533 51.3169Z" fill="url(#paint0_linear_12067_196813)"/>
                            </g>
                            <path d="M91.6152 37.1016L100.972 57.0165C102.33 59.756 105.825 60.9634 108.565 59.6055L126.541 51.3174" fill="#D5DDEA"/>
                            <g filter="url(#filter1_d_12067_196813)">
                                <path d="M188.552 58.4751L189.565 138.388C189.561 141.139 187.392 143.316 184.642 143.313L106.575 143.366C103.825 143.362 101.647 141.193 101.651 138.443L101.631 35.6225C101.634 32.8721 103.803 30.6946 106.554 30.6982L163.023 30.7233L188.552 58.4751Z" fill="url(#paint1_linear_12067_196813)"/>
                            </g>
                            <path d="M163.018 30.7266L162.988 52.7299C163.048 55.7868 165.696 58.3698 168.753 58.3097L188.547 58.4785" fill="#D5DDEA"/>
                            <g filter="url(#filter2_d_12067_196813)">
                                <path d="M237.63 93.9162L204.984 166.952C203.897 169.416 200.86 170.495 198.432 169.273L127.705 136.658C125.242 135.572 124.162 132.535 125.249 130.071L168.325 36.7707C169.411 34.3067 172.448 33.2277 174.876 34.4494L226.234 58.174L237.63 93.9162Z" fill="url(#paint2_linear_12067_196813)"/>
                            </g>
                            <path d="M226.112 58.1372L216.908 78.1476C215.579 80.9817 216.992 84.3967 219.827 85.7258L237.644 93.9152" fill="#D5DDEA"/>
                            <defs>
                                <filter id="filter0_d_12067_196813" x="0.551136" y="18.5344" width="198.591" height="200.706" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <filter id="filter1_d_12067_196813" x="64.4964" y="12.1281" width="162.202" height="186.941" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <filter id="filter2_d_12067_196813" x="87.6918" y="15.3781" width="187.072" height="210.105" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="18.5672"/>
                                    <feGaussianBlur stdDeviation="18.5672"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12067_196813"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12067_196813" result="shape"/>
                                </filter>
                                <linearGradient id="paint0_linear_12067_196813" x1="88.6452" y1="34.7413" x2="111.743" y2="160.325" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_12067_196813" x1="161.35" y1="27.3256" x2="128.69" y2="150.769" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                                <linearGradient id="paint2_linear_12067_196813" x1="200.886" y1="38.2468" x2="167.958" y2="162.704" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDFEFF"/>
                                    <stop offset="0.9964" stop-color="#ECF0F5"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="text-000 fz-26 be-vietnam-pro-semibold line-height-138">Khám phá Căn cứ pháp lý</div>
                        <div class="item-12px text-999 fz-14 line-height-171">Bạn hãy mua tài liệu ngay để xem chi tiết!</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-auto">
            <div class="sachdamua__card uk-width-medium uk-box-sizing-border" uk-sticky="offset: 72;start: 1;end: !.uk-grid;">
                <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item" style="gap: 12px">
                            <div class="icon24 icon24--book"></div>
                            <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Thông tin bộ văn bản</div>
                        </div>
                    </div>
                    <div class="uk-navbar-right">

                    </div>
                </nav>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="fz-12 be-vietnam-pro-medium text-000 line-height-150">Thủ tục thẩm định dự toán xây dựng công trình đối với các dự án, công trình có yêu cầu thẩm định độc lập tổng mức đầu tư xây dựng công trình</div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="uk-grid uk-flex-middle uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Phát hành bởi:</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-medium text-444241">Nhà xuất bản Kim Đồng</div></div>
                </div>
                <div class="space-h-12"></div>
                <div class="uk-grid uk-flex-middle uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Thể loại:</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-medium text-444241">Thủ tục hành chính</div></div>
                </div>
                <div class="space-h-12"></div>
                <div class="uk-grid uk-flex-middle uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Hiệu lực văn bản:</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-medium text-0BD550">còn</div></div>
                </div>
                <div class="space-h-12"></div>
                <div class="uk-grid uk-flex-middle uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Cấp thực hiện:</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-medium text-444241">Bộ</div></div>
                </div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div style="padding: 0 0px">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Giá trọn bộ:</div></div>
                        <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-0CB0A7">120.000 VNĐ</div></div>
                    </div>
                </div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="uk-text-center fz-12 be-vietnam-pro-regular text-5E5D5A line-height-158">
                    <span class="be-vietnam-pro-semibold">Mua ngay</span> để được xem và tải mẫu biểu!
                </div>
                <div class="space-h-16"></div>
                <div class="uk-text-center">
                    <a href="thongtinchuyenkhoan.php" class="thongtintaikhoan__btnSave uk-button uk-border-pill uk-width">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-100"></div>
<?php require "template-parts/layouts/footer.php"; ?>