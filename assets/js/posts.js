jQuery(function() {
    window.$ = window.jQuery;
    
    var loading = $('#loading');
    var buttonMore = $('#more-posts');
    var paged = 1;
    var root = $('.root-cards');

    function card_render(title, thumb, link, category, date, excerpt) {
        var html = "";
        html = `
        <div class="item-card">
            <div class="sub-item">
                <div class="thumb">
                    <a href="${link}" target="_blank"><img src="${thumb}"/></a>
                </div>
            </div>
            <div class="sub-item">
                <span>${category}</span>
                <h1><a href="${link}" target="_blank">${title}</a></h1>
                <div class="excerpt">${excerpt}</div>
                <p class="date"></p>
            </div>
        </div>
        `;
        return html;
    }

    //posts initial
    $.ajax({
        type: 'GET',
        url: `https://veja.abril.com.br/wp-json/wp/v2/posts?page=1&per_page=10`,
        beforeSend: function(xhr) {
            loading.show();
        },
        success: function(response) {
            loading.hide();
            if(response) {
                response.map((item, i) => {
                    console.log(item);
                    root.append(card_render(item.title.rendered, item.featured_media_url, item.link, item.categories_data[0].name, item.date_gmt, item.excerpt.rendered));
                })
            }
        }
    })

    //loading more
    buttonMore.on('click', function(e) {
        e.preventDefault();
        paged++;
        $.ajax({
            type: 'GET',
            url: `https://veja.abril.com.br/wp-json/wp/v2/posts?page=${paged}&per_page=10`,
            beforeSend: function(xhr) {
                loading.show();
            },
            success: function(response) {
                loading.hide();
                if(response) {
                    response.map((item, i) => {
                        root.append(card_render(item.title.rendered, item.featured_media_url, item.link, item.categories_data[0].name, item.date_gmt, item.excerpt.rendered));
                    })
                }
            }
        })
    })
    

});