console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

document.addEventListener('uikit:init', () => {
    // do something
    console.log("uikit:init")
})

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        // Lazy load image
        const imageElements = xx(".lazy");
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting){
                    entry.target.src = entry.target.dataset.src;
                    observer.unobserve(entry.target);
                }
            });
        });
        imageElements.forEach((image) => {
            // observer.observe(image);
            UIkit.img(image, {
                loading: 'lazy',
            });
        });
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();

    UIkit.util.on('.header__bottom__dropdown', 'show', function () {
        // do something
        // $('.mask_menu').fadeIn(300);
    });

    UIkit.util.on('.header__bottom__dropdown', 'hide', function () {
        // do something
        // $('.mask_menu').stop(true, true).fadeOut(300);
    });
})

$(window).on("load", function (e) {
    $('.header__bottom__boxCat, #box_acc').hover(
        function () {
            $('.mask_menu').fadeIn(300);
        },
        function () {
            $('.mask_menu').stop(true, true).fadeOut(300);
        }
    );
});

const html = '<div class="uk-grid uk-grid-12" uk-grid>\n' +
    '    <div class="uk-width-auto">\n' +
    '        <div class="uk-cover-container uk-border-circle" style="background: #D3FDE1;">\n' +
    '            <span class="uk-position-center icon20 icon20--check"></span>\n' +
    '            <canvas width="32" height="32"></canvas>\n' +
    '        </div>\n' +
    '    </div>\n' +
    '    <div class="uk-width-expand">\n' +
    '        <div class="fz-14 be-vietnam-pro-medium" style="color: #1F2329;">Yêu Cầu Đặt Lại Mật Khẩu Đã Được Gửi!</div>\n' +
    '        <div class="item-8px be-vietnam-pro-regular fz-14" style="color: #4B5563;">Chúng tôi đã gửi một email chứa hướng dẫn đặt lại mật khẩu đến địa chỉ email của bạn. Vui lòng kiểm tra hộp thư đến hoặc thư mục spam.</div>\n' +
    '        <div class="item-16px"><a href="" class="fz-14 be-vietnam-pro-semibold" style="color: #000;text-decoration-line: underline;">Đóng</a></div>\n' +
    '    </div>\n' +
    '</div>'