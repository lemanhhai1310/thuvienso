<div class="border-20 header__bottom__boxCat uk-background-default uk-height-1-1 z-index-992 uk-position-relative">
    <h2 class="header__bottom__boxCat__title fz-16 be-vietnam-pro-semibold line-height-171 uk-margin-remove">Danh mục sách</h2>
    <ul class="header__bottom__boxCat__nav uk-nav uk-navbar-dropdown-nav">
        <?php
        $data = [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M8.5 12H12M2 9.99999H4M2 14H4M9.45352 4.26033L20.6842 9.87225C22.4386 10.7489 22.4386 13.2511 20.6842 14.1278L9.45352 19.7397C7.45607 20.7378 5.30682 18.6853 6.21382 16.6458L7.85018 12.9662C8.12373 12.3511 8.12373 11.6489 7.85018 11.0338L6.21382 7.35425C5.30682 5.31474 7.45607 3.26221 9.45352 4.26033Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
</svg>',
                'text' => 'Phiêu lưu & hành động',
                'submenu' => true,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M10.0128 21.8025L10.161 21.0673H10.161L10.0128 21.8025ZM19.0552 19.0869L18.5261 18.5554L19.0552 19.0869ZM11.75 7.5C11.75 6.25736 10.7426 5.25 9.5 5.25V6.75C9.91421 6.75 10.25 7.08579 10.25 7.5H11.75ZM9.5 5.25C8.25736 5.25 7.25 6.25736 7.25 7.5H8.75C8.75 7.08579 9.08579 6.75 9.5 6.75V5.25ZM7.25 7.5C7.25 8.74264 8.25736 9.75 9.5 9.75V8.25C9.08579 8.25 8.75 7.91421 8.75 7.5H7.25ZM9.5 9.75C10.7426 9.75 11.75 8.74264 11.75 7.5H10.25C10.25 7.91421 9.91421 8.25 9.5 8.25V9.75ZM19.25 10C19.25 8.75736 18.2426 7.75 17 7.75V9.25C17.4142 9.25 17.75 9.58579 17.75 10H19.25ZM17 7.75C15.7574 7.75 14.75 8.75736 14.75 10H16.25C16.25 9.58579 16.5858 9.25 17 9.25V7.75ZM14.75 10C14.75 11.2426 15.7574 12.25 17 12.25V10.75C16.5858 10.75 16.25 10.4142 16.25 10H14.75ZM17 12.25C18.2426 12.25 19.25 11.2426 19.25 10H17.75C17.75 10.4142 17.4142 10.75 17 10.75V12.25ZM10.25 15.5C10.25 14.2574 9.24264 13.25 8 13.25V14.75C8.41421 14.75 8.75 15.0858 8.75 15.5H10.25ZM8 13.25C6.75736 13.25 5.75 14.2574 5.75 15.5H7.25C7.25 15.0858 7.58579 14.75 8 14.75V13.25ZM5.75 15.5C5.75 16.7426 6.75736 17.75 8 17.75V16.25C7.58579 16.25 7.25 15.9142 7.25 15.5H5.75ZM8 17.75C9.24264 17.75 10.25 16.7426 10.25 15.5H8.75C8.75 15.9142 8.41421 16.25 8 16.25V17.75ZM10.161 21.0673C5.9333 20.2149 2.75 16.4784 2.75 12H1.25C1.25 17.2065 4.95055 21.547 9.86453 22.5378L10.161 21.0673ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM12 2.75C17.1086 2.75 21.25 6.89137 21.25 12H22.75C22.75 6.06294 17.9371 1.25 12 1.25V2.75ZM14.2222 14.9722C15.0353 14.9722 15.6944 15.6314 15.6944 16.4444H17.1944C17.1944 14.8029 15.8637 13.4722 14.2222 13.4722V14.9722ZM12.75 16.4444C12.75 15.6314 13.4091 14.9722 14.2222 14.9722V13.4722C12.5807 13.4722 11.25 14.8029 11.25 16.4444H12.75ZM15.6944 16.4444V17.7333H17.1944V16.4444H15.6944ZM21.25 12C21.25 14.562 20.2094 16.8795 18.5261 18.5554L19.5844 19.6184C21.5389 17.6725 22.75 14.977 22.75 12H21.25ZM11.25 16.4444V20H12.75V16.4444H11.25ZM15.6944 17.7333C15.6944 18.7415 16.2266 19.5991 16.9966 20.0183C17.7947 20.4528 18.8116 20.3878 19.5844 19.6184L18.5261 18.5554C18.2467 18.8335 17.9582 18.8339 17.7139 18.7009C17.4416 18.5526 17.1944 18.2097 17.1944 17.7333H15.6944ZM9.86453 22.5378C11.515 22.8705 12.75 21.4669 12.75 20H11.25C11.25 20.7422 10.6761 21.1712 10.161 21.0673L9.86453 22.5378Z" fill="#5E5D5A"/>
</svg>',
                'text' => 'Nghệ thuật - Giải trí',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 9V11.382C12 11.7607 12.214 12.107 12.5528 12.2764L14 13M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
</svg>',
                'text' => 'Truyện ngắn - Tản văn',
                'submenu' => true,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M15.3417 15.3416C10.7279 19.9555 5.49154 22.1996 3.64602 20.3541C1.8005 18.5085 4.04463 13.2722 8.65843 8.65838C13.2722 4.04456 18.5086 1.80041 20.3541 3.64594C22.1996 5.49147 19.9555 10.7278 15.3417 15.3416Z" stroke="#5E5D5A" stroke-width="1.5"/>
  <path d="M15.3416 8.65837C19.9554 13.2722 22.1995 18.5085 20.354 20.3541C18.5085 22.1996 13.2721 19.9554 8.65834 15.3416C4.04454 10.7278 1.80041 5.49146 3.64593 3.64593C5.49145 1.8004 10.7278 4.04455 15.3416 8.65837Z" stroke="#5E5D5A" stroke-width="1.5"/>
  <path d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" stroke="#5E5D5A" stroke-width="1.5"/>
</svg>',
                'text' => 'Tâm lý học',
                'submenu' => true,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
  <path d="M14.439 9.82833V8.78468L15.649 9.32884C16.179 9.56719 16.7865 9.56321 17.3134 9.31796L18.5586 8.73828V9.82833C18.5586 10.9659 17.6364 11.8881 16.4988 11.8881C15.3612 11.8881 14.439 10.9659 14.439 9.82833Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M20.5214 7.41092L17.1 5.89027C16.707 5.71561 16.2584 5.71561 15.8655 5.89027L12.444 7.41092C12.2434 7.50006 12.2434 7.78472 12.444 7.87387L15.8655 9.39451C16.2584 9.56917 16.707 9.56917 17.1 9.39451L20.5214 7.87387C20.722 7.78472 20.722 7.50006 20.5214 7.41092Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M14.4704 13.4526C14.5734 13.4163 14.6791 13.3827 14.7872 13.352C14.9625 13.3021 15.1501 13.3557 15.2786 13.4814L16.1104 14.2952C16.3154 14.4957 16.6501 14.4957 16.8551 14.2952L17.6869 13.4814C17.8154 13.3557 18.003 13.3021 18.1783 13.352C19.6472 13.7699 20.6719 14.7142 20.6719 15.8121C20.6719 16.3716 20.203 16.8253 19.6246 16.8253H15.6627" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <line x1="12.6445" y1="8.39258" x2="12.6445" y2="10.0589" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M4.49874 7.83874V6.20265L6.77067 7.04934C7.22116 7.21723 7.71704 7.21723 8.16753 7.04934L10.4395 6.20265V7.83874C10.4395 9.47922 9.10958 10.8091 7.4691 10.8091C5.82862 10.8091 4.49874 9.47922 4.49874 7.83874Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M13.3889 4.07475L8.37377 1.84582C7.79775 1.58981 7.14023 1.58981 6.56421 1.84582L1.5491 4.07475C1.2551 4.20542 1.2551 4.62267 1.5491 4.75334L6.56421 6.98228C7.14023 7.23829 7.79775 7.23829 8.37377 6.98228L13.3889 4.75334C13.6829 4.62267 13.6829 4.20542 13.3889 4.07475Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.70397 12.9912L6.92324 14.184C7.22366 14.4779 7.71432 14.4779 8.01474 14.184L9.23401 12.9912C9.42236 12.807 9.69733 12.7284 9.95431 12.8015C12.1074 13.4141 13.6094 14.7982 13.6094 16.4074C13.6094 17.2277 12.9221 17.8926 12.0743 17.8926H2.8637C2.01589 17.8926 1.3286 17.2277 1.3286 16.4074C1.3286 14.7982 2.83059 13.4141 4.98366 12.8015C5.24065 12.7284 5.51562 12.807 5.70397 12.9912Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <line x1="2.20117" y1="5.28125" x2="2.20117" y2="8.30507" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round"/>
</svg>',
                'text' => 'Kiến thức bách khoa',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <ellipse cx="12" cy="17.5" rx="7" ry="3.5" stroke="#5E5D5A" stroke-width="1.5" stroke-linejoin="round"/>
  <circle cx="12" cy="7" r="4" stroke="#5E5D5A" stroke-width="1.5" stroke-linejoin="round"/>
</svg>',
                'text' => 'Nhân vật nổi tiếng',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M18.5 16.889L17.9494 17.3983C18.0914 17.5517 18.291 17.639 18.5 17.639C18.709 17.639 18.9086 17.5517 19.0506 17.3983L18.5 16.889ZM18.7678 16.5995L19.3183 17.1088L19.3183 17.1088L18.7678 16.5995ZM18.2322 16.5995L17.6817 17.1088V17.1088L18.2322 16.5995ZM15.5546 19.4941L16.1051 18.9849L15.5546 19.4941ZM17.4289 21.5204L16.8784 22.0297L17.4289 21.5204ZM19.5711 21.5204L20.1216 22.0297L19.5711 21.5204ZM21.4454 19.4941L20.8949 18.9849L21.4454 19.4941ZM12 22V21.25V22ZM22 12H22.75H22ZM21.1935 13.0287C21.148 13.4404 21.4449 13.8111 21.8566 13.8566C22.2683 13.9021 22.6389 13.6052 22.6844 13.1935L21.1935 13.0287ZM13.6116 22.6299C14.0212 22.5683 14.3033 22.1863 14.2417 21.7767C14.18 21.3671 13.798 21.085 13.3884 21.1466L13.6116 22.6299ZM11.1708 14.9146L10.8354 14.2438L11.1708 14.9146ZM14.3167 13.3416L13.9813 12.6708L14.3167 13.3416ZM19.0506 17.3983L19.3183 17.1088L18.2172 16.0902L17.9494 16.3797L19.0506 17.3983ZM17.6817 17.1088L17.9494 17.3983L19.0506 16.3797L18.7828 16.0902L17.6817 17.1088ZM15.004 20.0034L16.8784 22.0297L17.9795 21.0111L16.1051 18.9849L15.004 20.0034ZM20.1216 22.0297L21.996 20.0034L20.8949 18.9849L19.0205 21.0111L20.1216 22.0297ZM20.8949 17.1088C21.3684 17.6207 21.3684 18.473 20.8949 18.9849L21.996 20.0034C23.0013 18.9166 23.0013 17.177 21.996 16.0902L20.8949 17.1088ZM21.996 16.0902C20.9597 14.9699 19.2535 14.9699 18.2172 16.0902L19.3183 17.1088C19.7609 16.6304 20.4523 16.6304 20.8949 17.1088L21.996 16.0902ZM16.1051 17.1088C16.5477 16.6304 17.2391 16.6304 17.6817 17.1088L18.7828 16.0902C17.7465 14.9699 16.0403 14.9699 15.004 16.0902L16.1051 17.1088ZM16.8784 22.0297C17.7668 22.9901 19.2332 22.9901 20.1216 22.0297L19.0205 21.0111C18.7259 21.3296 18.2741 21.3296 17.9795 21.0111L16.8784 22.0297ZM15.004 16.0902C13.9987 17.177 13.9987 18.9166 15.004 20.0034L16.1051 18.9849C15.6316 18.473 15.6316 17.6207 16.1051 17.1088L15.004 16.0902ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM12 2.75C17.1086 2.75 21.25 6.89137 21.25 12H22.75C22.75 6.06294 17.9371 1.25 12 1.25V2.75ZM21.25 12C21.25 12.348 21.2308 12.6912 21.1935 13.0287L22.6844 13.1935C22.7278 12.8014 22.75 12.4031 22.75 12H21.25ZM13.3884 21.1466C12.936 21.2147 12.4723 21.25 12 21.25V22.75C12.5473 22.75 13.0855 22.709 13.6116 22.6299L13.3884 21.1466ZM14.6521 9.98754L11.5062 8.41459L10.8354 9.75623L13.9813 11.3292L14.6521 9.98754ZM8.25 10.4271V13.5729H9.75V10.4271H8.25ZM11.5062 15.5854L14.6521 14.0125L13.9813 12.6708L10.8354 14.2438L11.5062 15.5854ZM8.25 13.5729C8.25 15.2456 10.0102 16.3334 11.5062 15.5854L10.8354 14.2438C10.3367 14.4931 9.75 14.1305 9.75 13.5729H8.25ZM11.5062 8.41459C10.0102 7.66658 8.25 8.75444 8.25 10.4271H9.75C9.75 9.86951 10.3367 9.50689 10.8354 9.75623L11.5062 8.41459ZM13.9813 11.3292C14.5341 11.6056 14.5341 12.3944 13.9813 12.6708L14.6521 14.0125C16.3105 13.1833 16.3105 10.8167 14.6521 9.98754L13.9813 11.3292Z" fill="#5E5D5A"/>
</svg>',
                'text' => 'Câu chuyện cuộc đời',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M13.5005 4.5099V3C13.5005 2.44772 13.0528 2 12.5005 2H11.5005C10.9482 2 10.5005 2.44772 10.5005 3V5.31375M13.5005 4.5099L15.7188 3.91549C16.0123 3.83687 16.3255 3.89589 16.5702 4.07591L18.1176 5.21421C18.4943 5.49136 18.6286 5.99264 18.4409 6.42103L17.6701 8.1805C17.5482 8.45875 17.3064 8.6665 17.0129 8.74512L13.5005 9.68628M13.5005 4.5099L10.5005 5.31375M10.5005 5.31375L5.55791 6.63811C5.02444 6.78105 4.70786 7.32939 4.8508 7.86285L5.62726 10.7606C5.7702 11.2941 6.31854 11.6107 6.852 11.4677L10.5005 10.4901M13.5005 9.68628L10.5005 10.4901M13.5005 9.68628V14M10.5005 10.4901V14M13.5005 14H16.5199C16.8236 14 17.111 14.1381 17.3007 14.3753L18.5007 15.8753C18.7929 16.2405 18.7929 16.7595 18.5007 17.1247L17.3007 18.6247C17.111 18.8619 16.8236 19 16.5199 19H13.5005M13.5005 14H10.5005M10.5005 14H6.00049C5.4482 14 5.00049 14.4477 5.00049 15V18C5.00049 18.5523 5.4482 19 6.00049 19H10.5005M13.5005 19V21C13.5005 21.5523 13.0528 22 12.5005 22H11.5005C10.9482 22 10.5005 21.5523 10.5005 21L10.5005 19M13.5005 19H10.5005" stroke="#5E5D5A" stroke-width="1.5"/>
</svg>',
                'text' => 'Chính trị',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M14.1263 3H16.9516C17.5589 3 18.1373 3.263 18.5408 3.72267L21.4629 7.05149C22.141 7.82402 22.1814 8.9755 21.559 9.79476L13.6854 20.1597C12.8342 21.2801 11.1658 21.2801 10.3146 20.1597L2.44095 9.79476C1.81861 8.9755 1.85896 7.82402 2.53709 7.05149L5.45918 3.72267C5.86269 3.263 6.44106 3 7.04842 3H10.1099M14.1263 3L16.2526 8.38285M14.1263 3H10.1099M16.2526 8.38285H21.5684M16.2526 8.38285L12 20.7634L7.74736 8.38285M16.2526 8.38285H7.74736M10.1099 3L7.74736 8.38285M2.43156 8.38285H7.74736" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>',
                'text' => 'Kinh tế',
                'submenu' => false,
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M2 22L12.0673 11.9327M17.9092 11.653C18.409 11.653 18.8861 11.4291 19.1787 11.0239C20.6325 9.01079 21.6196 6.6383 21.9813 4.0651C22.151 2.85824 21.141 1.849 19.9342 2.0187C13.0461 2.98731 7.59633 8.43705 6.62773 15.3252C6.45802 16.5321 7.46726 17.542 8.67411 17.3723C11.2473 17.0106 13.6198 16.0235 15.6329 14.5697C16.0381 14.2771 16.262 13.8 16.262 13.3002C16.262 12.3905 16.9995 11.653 17.9092 11.653Z" stroke="#5E5D5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>',
                'text' => 'Cẩm nang làm mẹ',
                'submenu' => false,
            ],
        ];
        foreach ($data as $k=>$v): ?>
        <li class="header__bottom__boxCat__nav__li">
            <a href="#" class="header__bottom__boxCat__nav__a <?= $v['submenu'] ? 'submenu' : '' ?>">
                <?= $v['icon'] ?>
                <span class="uk-flex-1"><?= $v['text'] ?></span>
            </a>
            <?php if ($v['submenu']){ ?>
                <!--uk-dropdown="animation: reveal-left; animate-out: true; duration: 700;"-->
                <div class="header__bottom__boxCat__subMenuBox width-1023px uk-position-left" uk-dropdown="animation: uk-animation-slide-top-small; animate-out: true; duration: 700;">
                    <div class="uk-drop-grid uk-child-width-1-3" uk-grid>
                        <div>
                            <h2 class="header__bottom__boxCat__title fz-16 be-vietnam-pro-semibold line-height-171 uk-margin-remove">Chuyên ngành chính</h2>
                            <div class="space-h-24"></div>
                            <ul class="header__bottom__boxCat__nav1 uk-nav uk-dropdown-nav">
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tất cả</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học đại cương</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học nhận thức</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học hành vi</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học phát triển</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học xã hội</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học thần kinh</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="header__bottom__boxCat__title fz-16 be-vietnam-pro-semibold line-height-171 uk-margin-remove">Chuyên ngành chính</h2>
                            <div class="space-h-24"></div>
                            <ul class="header__bottom__boxCat__nav1 uk-nav uk-dropdown-nav">
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tất cả</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học đại cương</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học nhận thức</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học hành vi</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học phát triển</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học xã hội</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học thần kinh</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="header__bottom__boxCat__title fz-16 be-vietnam-pro-semibold line-height-171 uk-margin-remove">Chuyên ngành chính</h2>
                            <div class="space-h-24"></div>
                            <ul class="header__bottom__boxCat__nav1 uk-nav uk-dropdown-nav">
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tất cả</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học đại cương</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học nhận thức</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học hành vi</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học phát triển</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học xã hội</a></li>
                                <li class="header__bottom__boxCat__nav1__li"><a class="header__bottom__boxCat__nav1__a" href="#">Tâm lý học thần kinh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <a href="" class="header__bottom__boxCat__allLinks uk-link-toggle fz-14 be-vietnam-pro-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M11.6667 4.99992H17.5M11.6667 9.16659H17.5M2.5 13.3333H17.5M2.5 17.4999H17.5M4.91202 9.62725L7.85191 8.1573C9.08032 7.5431 9.08032 5.79009 7.85191 5.17588L4.91203 3.70594C3.80386 3.15185 2.5 3.95768 2.5 5.19665V8.13653C2.5 9.3755 3.80385 10.1813 4.91202 9.62725Z" stroke="#966412" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="line-height-195">Tất cả danh mục</span>
    </a>
</div>